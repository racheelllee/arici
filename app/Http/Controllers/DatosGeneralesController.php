<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DatosGenerales;
use App\LinksDatosGenerales;
use DB;
use Validator;
use Illuminate\Support\Facades\Input;
use Image;
use Storage;
use Illuminate\Support\Facades\Redirect;

class DatosGeneralesController extends Controller
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
		$datosG = DatosGenerales::all();
        return view('datosGenerales.index', ['datosG'=> $datosG]);    	
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $datosG = DatosGenerales::with('linksDatosGenerales')->findOrFail($id);
        return view('datosGenerales.edit', ['datosG'=> $datosG, 'imgCount' => count($datosG->linksDatosGenerales)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
     //   dd($request);
        $validation = Validator::make($request->all(), [
            'nombre_sitio' => 'required|max:255',
            'telefono' => 'required',
            'correo_contacto' => 'required|email',
            "direccion" => "required",
            "horarios" => "required"
        ]);

        if($validation->fails()){
            return redirect('/dashboard/datos_generales/'.$id.'/edit')
                ->with('alert-error', 'Datos no editados, hubo un error.');
        } else{
            $datosG = DatosGenerales::findOrFail($id);
            $datosG->nombre_sitio = $request->nombre_sitio;
            $datosG->telefono = $request->telefono;
            $datosG->correo_contacto = $request->correo_contacto;
            $datosG->direccion = $request->direccion;
            $datosG->horarios = $request->horarios;
            //imagen
            if($request->hasFile('imgInpLogo')){
                //elimina todo lo que haya
                $files = glob(public_path('imagenes_datos_generales/*')); // get all file names
                foreach($files as $file){ // iterate files
                 if(is_file($file))
                   unlink($file); // delete file
                }

                $image = Input::file('imgInpLogo');
                $filename = $id.'-'.uniqid().'.'. $image->getClientOriginalExtension();
                $path = public_path('imagenes_datos_generales/'.$filename);
                Image::make($image->getRealPath())->save($path);
                $datosG->imagen_logo = 'imagenes_datos_generales/'.$filename;
            }
            if($datosG->save()){

                if($request->hasFile('imgInp')){
                    foreach($request->file('imgInp') as  $key =>$f){
                        if((int)$request->cuantasImagenesHay >= $key+1){ 
                        //edita el registro existente
                            $todasImagenesLinks = DB::table('links_datos_generales')->where('datos_generales_id', $id)->get();
                            
                            $idImageLink = $todasImagenesLinks[$key]->id;
                            $links_datos_generales = LinksDatosGenerales::find($idImageLink);
                            $links_datos_generales->url = Input::get('url'.$key);
                            $image = Input::file('imgInp.'.$key);
                            $filename = $datosG->id.'-'.uniqid().'.'. $image->getClientOriginalExtension();
                            $path = public_path('links_datos_generales/'.$filename);
                            $aux = $links_datos_generales->image;
                            //elimina la imagen anterior del proyecto
                            Image::make($image->getRealPath())->save($path);
                            $links_datos_generales->image = 'links_datos_generales/'.$filename;
                            if(!$links_datos_generales->update()){
                                return redirect('/dashboard/datos_generales/'.$id.'/edit')->with('alert-error', "Il y a eu une erreur lors de l'édition des informations générales.");
                            }else{
                                unlink(public_path($aux));
                            }
                        }else{
                            //nuevo registro
                            $links_datos_generales = new LinksDatosGenerales();
                            $links_datos_generales->url = Input::get('url'.$key);
                            $links_datos_generales->datos_generales_id = $datosG->id;
                            $image = Input::file('imgInp.'.$key);
                            $filename = $datosG->id.'-'.uniqid().'.'. $image->getClientOriginalExtension();
                            $path = public_path('links_datos_generales/'.$filename);
                            Image::make($image->getRealPath())->save($path);
                            $links_datos_generales->image = 'links_datos_generales/'.$filename;
                            if(!$links_datos_generales->save()){
                                return redirect('/dashboard/datos_generales/'.$id.'/edit')->with('alert-error', "Il y a eu une erreur lors de l'édition des informations générales");
                            }
                        }
                    }
                }

                for($i=1; $i <= (int)$request->cuantasImagenesHay; $i++){
                $todasImagenesLinks = DB::table('links_datos_generales')->where('datos_generales_id', $id)->get();
                $idImageLink = $todasImagenesLinks[$i-1]->id;
                $links_datos_generales = LinksDatosGenerales::find($idImageLink);
                $links_datos_generales->url = Input::get('url'.($i-1));
                if(!$links_datos_generales->update()){
                    return redirect('/dashboard/datos_generales/'.$id.'/edit')->with('alert-error', "Il y a eu une erreur lors de l'édition des informations générales");
                }
            }
                return Redirect::to('/dashboard/datos_generales/')
                    ->with('alert-success','informations générales Editées');
            }else{
                return redirect('/dashboard/datos_generales/'.$id.'/edit')->with('alert-error', "Il y a eu une erreur lors de l'édition des informations générales");
            }
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
        $img = LinksDatosGenerales::findOrFail($id);
        if($img->delete()){
            echo "true";
            //Hay que borrar la imagen del disco!!!
            unlink(public_path($img->image));
        }
        die();
    }
}
