<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patrocinadores;
use DB;
use Validator;
use Illuminate\Support\Facades\Input;
use Image;
use Storage;
use Illuminate\Support\Facades\Redirect;

class PatrocinadoresController extends Controller
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
		$patrocinadores = Patrocinadores::all();
        return view('patrocinadores.index', ['patrocinadores'=> $patrocinadores]);    	
    }

    /**
     * edit a resource.
     *
     * @return Response
     */
    public function editPatrocinador(Request $request)
    {
        $image = Input::file('image');
        $id = intval($request->id);
        if($id != 0){
            $patrocinador = Patrocinadores::findOrFail($id);
            $patrocinador->titulo = $request->titulo;
            $patrocinador->link = $request->link;
            if($image != null){
                $filename = $request->id.'-'.uniqid().'.'. $image->getClientOriginalExtension();
                $path = public_path('imagenes_patrocinadores/'.$filename);
                $aux = $patrocinador->imagen;
                Image::make($image->getRealPath())->save($path);
                $patrocinador->imagen = 'imagenes_patrocinadores/'.$filename;  
                if(!$patrocinador->update()){
                    return redirect('/dashboard/patrocinadores')->with('alert-error', 'Sponsor pas editer, Il y a un error.');
                }else{
                    unlink(public_path($aux)); 
                    echo "true";
                }
            }else{
                if(!$patrocinador->update()){
                    return redirect('/dashboard/patrocinadores')->with('alert-error', 'Sponsor pas editer, Il y a un error.');
                }else{
                    echo "true";
                }
            }
            die();
        }else{
            $patrocinador = new Patrocinadores();
            $patrocinador->titulo = $request->titulo;
            $patrocinador->link = $request->link;
            $patrocinador->imagen = $image;
            if(!$patrocinador->save()){
                return redirect('/dashboard/patrocinadores')->with('alert-error', 'Sponsor pas editer, Il ya un error.');
            }else{
                $filename = $patrocinador->id.'-'.uniqid().'.'. $image->getClientOriginalExtension();
                $path = public_path('imagenes_patrocinadores/'.$filename);
                Image::make($image->getRealPath())->save($path);
                $patrocinador->imagen = 'imagenes_patrocinadores/'.$filename;
                $patrocinador->update();
                echo "true";
            }
            die();
        }
    }

    /**
     * delete a resource.
     *
     * @return Response
     */
    public function deletePatrocinador($id){
        $patrocinador = Patrocinadores::findOrFail($id);
        if($patrocinador->delete()){
            echo "true";
        }
        die();
    }
}
