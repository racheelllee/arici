<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paginas;
use App\Categorias;
use App\Productos;
use DB;

class FrontController extends Controller
{
    	/**
         * Display the home page.
         *
         * @return Response
         */
        public function welcome()
        {
            return view('front.welcome');        
        }

        /**
         * Display the Philosophy page.
         *
         * @return Response
         */
        public function philosophie()
        {
            $pagina = Paginas::with('imagenesPaginas')->findOrFail(1);
            return view('front.philosophie', ['pagina'=>$pagina]);        
        }

        /**
         * Display the Prestations page.
         *
         * @return Response
         */
        public function prestations()
        {

            $pagina = Paginas::with('imagenesPaginas')->findOrFail(2);
            return view('front.prestations', ['pagina'=>$pagina]);  
        }

        /**
         * Display the Realisations page.
         *
         * @return Response
         */
        public function realisations($category = null)
        {
            if(is_null($category)){
                $realisations = Productos::with('imagenesProductos')->get();
                $categorias = Categorias::all();
                return view('front.realisations', ['categorias'=>$categorias, 'realisations'=>$realisations]);  
            } else {
                echo $category;
                die();
            }
        }

        /**
         * Display one realisation.
         *
         * @param $slug
         * @return Response
         */
        public function realisation($slug)
        {
            $categorias = Categorias::all();
            $realisation = Productos::with('categorias')->where('slug', $slug)->first();
            return view('front.realisation', ['categorias'=>$categorias, 'realisation'=> $realisation]);        
        }

        /**
         * Display the Organisation page.
         *
         * @return Response
         */
        public function organisation()
        {
            $pagina = Paginas::with('imagenesPaginas')->findOrFail(3);
            return view('front.organisation', ['pagina'=>$pagina]);  
        }

        /**
         * Display the Contact page.
         *
         * @return Response
         */
        public function contact()
        {
            $pagina = Paginas::with('imagenesPaginas')->findOrFail(4);
            return view('front.contact', ['pagina'=>$pagina]);  

        }

        /**
         * Send the contact form.
         *
         * @return Response
         */
        public function sendMail()
        {
            dd('Hola');
        }
    }
