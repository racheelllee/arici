<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DatosGenerales;
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
            return view('datosGenerales.edit', ['datosG'=> $datosG]);
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
                if($request->hasFile('imgInp')){

                $files = glob(public_path('imagenes_datos_generales/*')); // get all file names
                foreach($files as $file){ // iterate files
                 if(is_file($file))
                   unlink($file); // delete file
                }

                    $image = Input::file('imgInp');
                    $filename = $id.'-'.uniqid().'.'. $image->getClientOriginalExtension();
                    $path = public_path('imagenes_datos_generales/'.$filename);
                    Image::make($image->getRealPath())->save($path);
                    $datosG->imagen_logo = 'imagenes_datos_generales/'.$filename;
                }
                if($datosG->save()){
                    return Redirect::to('/dashboard/datos_generales/')
                        ->with('alert-success','Datos Editados');
                }else{
                    return redirect('/dashboard/datos_generales/'.$id.'/edit')->with('alert-error', 'Datos no editados, hubo un error.');
                }
            }
        }
}
