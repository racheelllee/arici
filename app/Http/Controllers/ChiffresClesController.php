<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChiffresCles;
use DB;
use Validator;
use Illuminate\Support\Facades\Input;
use Image;
use Storage;
use Illuminate\Support\Facades\Redirect;

class ChiffresClesController extends Controller
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
		$chiffresC = ChiffresCles::all();
        return view('chiffresCles.index', ['chiffresC' => $chiffresC]);    	
    }

    /**
     * edit a resource.
     *
     * @return Response
     */
    public function editChiffres(Request $request)
    {
    	$id = intval($request->id);
    	if($id != 0){
	    	$chiffreC = ChiffresCles::findOrFail($id);
    		$chiffreC->label = $request->value;
    		$chiffreC->cantidad = $request->hermano;
	    	$chiffreC->update();
	        die();
    	}else{
    		$chiffreC = new ChiffresCles();
    		$chiffreC->label = $request->value;
    		$chiffreC->cantidad = $request->hermano;
	    	$chiffreC->save();
	        die();
    	}
    }

}
