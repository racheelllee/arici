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
            $datosG = DatosGenerales::findOrFail($id);
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
                'titulo' => 'required|max:255',
                'slug' => 'required',
                'contenido' => 'required'
            ]);
            if($validation->fails()){
                return redirect('/dashboard/paginas/'.$id.'/edit')
                    ->with('alert-error', 'Pagina no editada, hubo un error.');
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
                                Image::make($image->getRealPath())->save($path);
                                $imagenPaginas->imagen = 'imagenes_paginas/'.$filename;
                                if(!$imagenPaginas->update()){
                                    return redirect('/dashboard/paginas/'.$id.'/edit')->with('alert-error', 'Pagina no editada, hubo un error.');
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
                                    return redirect('/dashboard/paginas/'.$id.'/edit')->with('alert-error', 'Pagina no editada, hubo un error.');
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
                            return redirect('/dashboard/paginas/'.$id.'/edit')->with('alert-error', 'Pagina no editada, hubo un error.');
                        }
                    }
                
                  
                    return Redirect::to('/dashboard/paginas/')
                        ->with('alert-success','Fichero Editado');
                }else{
                    return redirect('/dashboard/paginas/'.$id.'/edit')->with('alert-error', 'Pagina no editada, hubo un error.');
                }
            }
        }
}
