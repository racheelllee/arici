<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productos;
use App\Categorias;
use App\ImagenesProductos;
use DB;
use Validator;
use Illuminate\Support\Facades\Input;
use Image;
use Illuminate\Support\Facades\Redirect;

class ProductosController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

	/**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
		$productos = Productos::orderBy('id', 'DESC')->paginate(10);
        return view('productos.index', ['productos'=> $productos]);    	
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */

    public function create()
    {
    	$allCategorias = Categorias::pluck('nombre', 'id')->all();
    	return view('productos.create', compact('allCategorias'));
    }

     /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */ public function store(Request $request)
     {
        $validation = Validator::make($request->all(), [
            'titulo' => 'required',
            'contenido' => 'required',
            'categoria' => 'required',
            'slug' => 'required',
        ]);

        if($validation->fails()){
            return redirect('/dashboard/productos')
                ->with('alert-error', "Le produit n'a pas était crée, il y a eu un problème.");
        } else{
            $producto = new Productos();
            $producto->titulo = $request->titulo;
            $producto->contenido = $request->contenido;
            $producto->slug = $request->slug;
            $producto->fecha_creacion = (strlen(trim($request->fecha_creacion)) > 0)?date('Y-m-15 12:30:30', strtotime($request->fecha_creacion)):null;
            $producto->nombre_arquitecto = $request->nombre_arquitecto; 
            $producto->nombre_cliente =  $request->nombre_cliente;
            $producto->categorias_id = $request->categoria;
            if($producto->save()){
                //imagenes
                if($request->hasFile('imgInp')){
                    foreach($request->file('imgInp') as  $key =>$f){
                        //nuevo registro
                        $imagenProductos = new ImagenesProductos();
                        $imagenProductos->productos_id = $producto->id;
                        $image = Input::file('imgInp.'.$key);
                        $filename = $producto->id.'-'.uniqid().'.'. $image->getClientOriginalExtension();
                        $path = public_path('imagenes_productos/'.$filename);
                        Image::make($image->getRealPath())->save($path);
                        $imagenProductos->imagen = 'imagenes_productos/'.$filename;
                        if(!$imagenProductos->save()){
                            return redirect('/dashboard/productos')->with('alert-error', "Le produit n'a pas était crée, il y a eu un problème.");
                        }
                    }
                }
                return Redirect::to('/dashboard/productos/')->with('alert-success','Le produit a bien était créé');
            }else{
                return redirect('/dashboard/productos')->with('alert-error', "Le produit n'a pas était crée, il y a eu un problème.");
            }
        }

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $producto = Productos::with('imagenesProductos')->findOrFail($id);
        $allCategorias = Categorias::pluck('nombre', 'id')->all();
        return view('productos.edit', ['producto'=> $producto, 'imgCount' => count($producto->imagenesProductos), 'allCategorias' => $allCategorias]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $validation = Validator::make($request->all(), [
            'titulo' => 'required',
            'contenido' => 'required',
            'categoria' => 'required',
            'slug' => 'required',
        ]);

        if($validation->fails()){
            return redirect('/dashboard/productos/'.$id.'/edit')
                ->with('alert-error', "Il y a eu une erreur lors de l'édition du produit");
        } else{
            $producto = Productos::findOrFail($id);
            $producto->titulo = $request->titulo;
            $producto->slug = $request->slug;
            $producto->fecha_creacion = (strlen(trim($request->fecha_creacion)) > 0) ? date('Y-m-15 12:30:30', strtotime($request->fecha_creacion)) : null;
            $producto->contenido = $request->contenido;
            $producto->nombre_cliente = $request->nombre_cliente;
            $producto->nombre_arquitecto = $request->nombre_arquitecto;
            $producto->categorias_id = $request->categoria;
            if($producto->save()){
                //imagenes y leyendas
                if($request->hasFile('imgInp')){
                    foreach($request->file('imgInp') as  $key =>$f){
                        if((int)$request->cuantasImagenesHay >= $key+1){ 
                        //edita el registro existente
                            $todasImagenesProductos = DB::table('imagenes_productos')->where('productos_id', $id)->get();
                            $idImageP = $todasImagenesProductos[$key]->id;
                            $imagenProductos = ImagenesProductos::find($idImageP);
                            $imagenProductos->leyenda = Input::get('leyenda'.$key);
                            $image = Input::file('imgInp.'.$key);
                            $filename = $producto->id.'-'.uniqid().'.'. $image->getClientOriginalExtension();
                            $path = public_path('imagenes_productos/'.$filename);
                            $aux = $imagenProductos->imagen;
                            Image::make($image->getRealPath())->save($path);
                            $imagenProductos->imagen = 'imagenes_productos/'.$filename;
                            if(!$imagenProductos->update()){
                                return redirect('/dashboard/productos/'.$id.'/edit')->with('alert-error', 'Producto no editado, hubo un error.');
                            }else{
                                unlink(public_path($aux));
                            }
                        }else{
                            //nuevo registro
                            $imagenProductos = new ImagenesProductos();
                            $imagenProductos->leyenda = Input::get('leyenda'.$key);
                            $imagenProductos->productos_id = $producto->id;
                            $image = Input::file('imgInp.'.$key);
                            $filename = $producto->id.'-'.uniqid().'.'. $image->getClientOriginalExtension();
                            $path = public_path('imagenes_productos/'.$filename);
                            Image::make($image->getRealPath())->save($path);
                            $imagenProductos->imagen = 'imagenes_productos/'.$filename;
                            if(!$imagenProductos->save()){
                                return redirect('/dashboard/productos/'.$id.'/edit')->with('alert-error', "Il y a eu une erreur lors de l'édition du produit");
                            }
                        }
                    }
                }

                for($i=1; $i <= (int)$request->cuantasImagenesHay; $i++){
                    $todasImagenesProductos = DB::table('imagenes_productos')->where('productos_id', $id)->get();
                    $idImageP = $todasImagenesProductos[$i-1]->id;
                    $imagenProductos = ImagenesProductos::find($idImageP);
                    $imagenProductos->leyenda = Input::get('leyenda'.($i-1));
                    if(!$imagenProductos->update()){
                        return redirect('/dashboard/productos/'.$id.'/edit')->with('alert-error', "Il y a eu une erreur lors de l'édition du produit");
                    }
                }
            
              
                return Redirect::to('/dashboard/productos/')
                    ->with('alert-success','Le produit a bien été édité');
            }else{
                return redirect('/dashboard/productos/'.$id.'/edit')->with('alert-error', "Il y a eu une erreur lors de l'édition du produit");
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {	
        $imgs = DB::table('imagenes_productos')
                    ->where('productos_id', $id)->get();
        foreach ($imgs as $img) {
            unlink(public_path($img->imagen));
            ImagenesProductos::findOrFail($img->id)->delete();
        }
        $producto = Productos::findOrFail($id);
        echo json_encode($producto->delete());
        die();
    }

    /**
     * checa si ese elemento se encuentra en la bd.
     *
     * @param  int  $id
     * @return Response
     */
    public function checkslug(Request $request)
    {
        $slug = str_slug($request->titulo, '-'); 
        return $this->generateSlug($slug);
    }

    /**
     * genera un slug unico.
     *
     * @param  int  $id
     * @return Response
     */
    public function generateSlug($slug, $i = 1)
    {
        $nSlug = $slug;
        if ($i > 1) {
            $nSlug = $slug . '-' . $i;
        }
        $check = DB::table('productos')
                    ->where('slug', $nSlug)->get();
        if(count($check)>0 || $nSlug == "dashboard"){
            return $this->generateSlug($slug, ++$i);
        }else{
            return $nSlug;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function removeimg($id)
    {
        $img = ImagenesProductos::findOrFail($id);
        if($img->delete()){
            echo "true";
            //Hay que borrar la imagen del disco!!!
            unlink(public_path($img->imagen));
        }
        die();
    }

}
