<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paginas;
use App\ImagenesPaginas;
use DB;
use Validator;
use Illuminate\Support\Facades\Input;
use Image;
use Storage;
use Illuminate\Support\Facades\Redirect;

class PaginasController extends Controller
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
		$paginas = Paginas::all();
        return view('paginas.index', ['paginas'=> $paginas]);    	
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */

    public function create()
    {
    	return view('paginas.create');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */ public function store(Request $request)
     {
        request()->validate([
            'titulo' => 'required',
            'contenido' => 'required',
            'slug' => 'required',
        ]);

        $pagina = new Paginas();
        $pagina->titulo = $request->titulo;
        $pagina->contenido = $request->contenido;
        $pagina->slug = $request->slug ;
        $pagina->save();
        return redirect('/dashboard/paginas');

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
        $pagina = Paginas::with('imagenesPaginas')->findOrFail($id);
        return view('paginas.edit', ['pagina'=> $pagina, 'imgCount' => count($pagina->imagenesPaginas)]);
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
            'titulo' => 'required|max:255',
            'slug' => 'required',
            'contenido' => 'required'
        ]);
        if($validation->fails()){
            return redirect('/dashboard/paginas/'.$id.'/edit')
                ->with('alert-error', 'Il y a eu une erreur, réessayer ultérieurement.');
        } else{
            $pagina = Paginas::findOrFail($id);
            $pagina->titulo = $request->titulo;
            $pagina->slug = $request->slug;
            $pagina->contenido = $request->contenido;
            if($pagina->save()){
                //imagenes y leyendas
                if($request->hasFile('imgInp')){
                    foreach($request->file('imgInp') as  $key =>$f){
                        if((int)$request->cuantasImagenesHay >= $key+1){ 
                        //edita el registro existente
                            $todasImagenesPaginas = DB::table('imagenes_paginas')->where('paginas_id', $id)->get();
                            
                            $idImageP = $todasImagenesPaginas[$key]->id;
                            $imagenPaginas = ImagenesPaginas::find($idImageP);
                            $imagenPaginas->leyenda = Input::get('leyenda'.$key);
                            $image = Input::file('imgInp.'.$key);
                            $filename = $pagina->id.'-'.uniqid().'.'. $image->getClientOriginalExtension();
                            $path = public_path('imagenes_paginas/'.$filename);
                            $aux = $imagenPaginas->imagen;
                            Image::make($image->getRealPath())->save($path);
                            $imagenPaginas->imagen = 'imagenes_paginas/'.$filename;
                            if(!$imagenPaginas->update()){
                                return redirect('/dashboard/paginas/'.$id.'/edit')->with('alert-error', 'Il y a eu une erreur, réessayer ultérieurement.');
                            }else{
                                unlink(public_path($aux));
                            }
                        }else{
                            //nuevo registro
                            $imagenPaginas = new ImagenesPaginas();
                            $imagenPaginas->leyenda = Input::get('leyenda'.$key);
                            $imagenPaginas->paginas_id = $pagina->id;
                            $image = Input::file('imgInp.'.$key);
                            $filename = $pagina->id.'-'.uniqid().'.'. $image->getClientOriginalExtension();
                            $path = public_path('imagenes_paginas/'.$filename);
                            Image::make($image->getRealPath())->save($path);
                            $imagenPaginas->imagen = 'imagenes_paginas/'.$filename;
                            if(!$imagenPaginas->save()){
                                return redirect('/dashboard/paginas/'.$id.'/edit')->with('alert-error', 'Il y a eu une erreur, réessayer ultérieurement.');
                            }
                        }
                    }
                }

                for($i=1; $i <= (int)$request->cuantasImagenesHay; $i++){
                    $todasImagenesPaginas = DB::table('imagenes_paginas')->where('paginas_id', $id)->get();
                    $idImageP = $todasImagenesPaginas[$i-1]->id;
                    $imagenPaginas = ImagenesPaginas::find($idImageP);
                    $imagenPaginas->leyenda = Input::get('leyenda'.($i-1));
                    if(!$imagenPaginas->update()){
                        return redirect('/dashboard/paginas/'.$id.'/edit')->with('alert-error', 'Il y a eu une erreur, réessayer ultérieurement.');
                    }
                }
            
              
                return Redirect::to('/dashboard/paginas/')
                    ->with('alert-success','La page a été edité correctement.');
            }else{
                return redirect('/dashboard/paginas/'.$id.'/edit')->with('alert-error', 'Il y a eu une erreur, réessayer ultérieurement.');
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

        echo json_encode(array("test"=>true));
        die();
        dd('que pasaaaa');
        // $pagina = Paginas::findOrFail($id);
        // $pagina->delete();
        return redirect::to('paginas');
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
        $check = DB::table('paginas')
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
        $img = ImagenesPaginas::findOrFail($id);
        if($img->delete()){
            echo "true";
            unlink(public_path($img->imagen));
        }
        //Hay que borrar la imagen del disco!!!
        die();
    }

       
}