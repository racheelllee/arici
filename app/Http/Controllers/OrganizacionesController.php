<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organizaciones;
use DB;
use Validator;
use Illuminate\Support\Facades\Input;
use Image;
use Storage;
use Illuminate\Support\Facades\Redirect;

class OrganizacionesController extends Controller
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
        $organizaciones = Organizaciones::all();
        $params = ['organizaciones' => $organizaciones];
        if (isset($_GET['res']) && $_GET['res']==true) {
            $params['message'] = ['Success', 'Les informations ont bien été sauvegardées'];   
        }
        return view('organizaciones.index', $params);
    }

    /**
     * edit a resource.
     *
     * @return Response
     */
    public function editOrganizacion(Request $request)
    {
        $image = Input::file('image');
    	$id = intval($request->id);
    	if($id != 0){
	    	$org = Organizaciones::findOrFail($id);
    		$org->texto = $request->texto;
    		$org->nivel = $request->nivel;
            if($image != null){
                $filename = $request->id.'-'.uniqid().'.'. $image->getClientOriginalExtension();
                $path = public_path('imagenes_organizaciones/'.$filename);
                $aux = $org->imagen;
                Image::make($image->getRealPath())->save($path);
                $org->imagen = 'imagenes_organizaciones/'.$filename;  
                if(!$org->update()){
                    return redirect('/dashboard/organizaciones')->with('alert-error', 'Organization pas editer, Il y a un error.');
                }else{
                    unlink(public_path($aux)); 
                    echo "true";
                }
            }else{
                if(!$org->update()){
                    return redirect('/dashboard/organizaciones')->with('alert-error', 'Organization pas editer, Il y a un error.');
                }
            }
            die();
        }else{
            $org = new Organizaciones();
            $org->texto = $request->texto;
            $org->nivel = $request->nivel;
            $org->imagen = $image;
            if(!$org->save()){
                return redirect('/dashboard/organizaciones')->with('alert-error', 'Organization pas editer, Il ya un error.');
            }else{
                $filename = $org->id.'-'.uniqid().'.'. $image->getClientOriginalExtension();
                $path = public_path('imagenes_organizaciones/'.$filename);
                Image::make($image->getRealPath())->save($path);
                $org->imagen = 'imagenes_organizaciones/'.$filename;
                $org->update();
                echo "true";
            }
	        die();
    	}
    }

    public function deleteOrganizacion($id){
        $org = Organizaciones::findOrFail($id);
        if($org->delete()){
            echo "true";
        }
        die();
    }
}
