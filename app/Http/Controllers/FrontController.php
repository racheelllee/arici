<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DatosGenerales;
use App\LinksDatosGenerales;
use App\Paginas;
use App\Categorias;
use App\ChiffresCles;
use App\Productos;
use DB;
use Mail;

class FrontController extends Controller
{
        /**
         * Display the Philosophy page.
         *
         * @return Response
         */
        public function philosophie()
        {
            $datosGenerales = DatosGenerales::with('linksDatosGenerales')->first();
            $pagina = Paginas::with('imagenesPaginas')->findOrFail(1);
            $chiffres = ChiffresCles::all();
            return view('front.philosophie', ['general'=>$datosGenerales, 'pagina'=>$pagina, 'chiffres'=>$chiffres]);        
        }

        /**
         * Display the Prestations page.
         *
         * @return Response
         */
        public function prestations()
        {

            $datosGenerales = DatosGenerales::with('linksDatosGenerales')->first();
            $pagina = Paginas::with('imagenesPaginas')->findOrFail(2);
            return view('front.prestations', ['general'=>$datosGenerales, 'pagina'=>$pagina]);  
        }

        /**
         * Display the Realisations page.
         * @return Response
         */
        public function realisations($category = null)
        {
            $datosGenerales = DatosGenerales::with('linksDatosGenerales')->first();
            if(is_null($category)){
                $realisations = Productos::with('imagenesProductos')->with('categorias')->orderBy('id', 'DESC')->paginate(10);
                $categorias = Categorias::all();
                return view('front.realisations', ['general'=>$datosGenerales, 'categorias'=>$categorias, 'realisations'=>$realisations]);  
            } else {
                $categorias = Categorias::all();
                $realisations = Productos::with('imagenesProductos')->with('categorias')->where('categorias_id', $category)->orderBy('id', 'DESC')->paginate(10);
                return view('front.realisations', ['general'=>$datosGenerales, 'categorias'=>$categorias, 'realisations'=>$realisations]);  
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
            $datosGenerales = DatosGenerales::with('linksDatosGenerales')->first();
            $categorias = Categorias::all();
            $realisation = Productos::with('categorias')->where('slug', $slug)->first();
            $category = $realisation->categorias->id;
            $otherRealisations = Productos::with('imagenesProductos')->with('categorias')->where([
                ['categorias_id', '=', $category],
                ['slug', '!=', $slug]
            ])->paginate(3);
            return view('front.realisation', ['general'=>$datosGenerales, 'categorias'=>$categorias, 'realisation'=> $realisation, 'otherRealisations' => $otherRealisations]);        
        }

        /**
         * Display the Organisation page.
         *
         * @return Response
         */
        public function organisation()
        {
            $datosGenerales = DatosGenerales::with('linksDatosGenerales')->first();
            $pagina = Paginas::with('imagenesPaginas')->findOrFail(3);
            return view('front.organisation', ['general'=>$datosGenerales, 'pagina'=>$pagina]);  
        }

        /**
         * Display the Contact page.
         *
         * @return Response
         */
        public function contact()
        {
            $datosGenerales = DatosGenerales::with('linksDatosGenerales')->first();
            $pagina = Paginas::with('imagenesPaginas')->findOrFail(4);
            return view('front.contact', ['general'=>$datosGenerales, 'pagina'=>$pagina]);  

        }

        /**
         * Send the contact form.
         *
         * @return Response
         */
        public function sendMail(Request $request)
        {
            $canSend = true;
            $error = [];

            if (strlen($request->input('nom')) < 1) {
                $canSend = false;
                array_push($error, 'Vous devez renseigner votre nom');
            }
            if (strlen($request->input('courriel')) < 1) {
                $canSend = false;
                array_push($error, 'Vous devez renseigner votre email');
            } else {
                if (!filter_var($request->input('courriel'), FILTER_VALIDATE_EMAIL)){
                    $canSend = false;
                    array_push($error, 'Vous devez renseigner un email valide');
                }
            }
            if (strlen($request->input('sujet')) < 1) {
                $canSend = false;
                array_push($error, 'Vous devez renseigner le sujet de votre message');
            }
            if (strlen($request->input('message')) < 1) {
                $canSend = false;
                array_push($error, 'Vous devez renseigner un message');
            }

            header('Content-Type: application/json');
            if ($canSend === false) {
                echo json_encode($error);                
            } else {
                $datosGenerales = DatosGenerales::first(['correo_contacto']);
                $para      = $datosGenerales->correo_contacto;
                $titulo    = $request->input('sujet');
                $mensaje   = $request->input('message') . '<br>' .$request->input('nom');
                $cabeceras = "From: ".$request->input('nom')."<".$request->input('courriel')."> \r\n";
                $cabeceras .= "Reply-To: ".$request->input('nom')."<".$request->input('courriel')."> \r\n";
                $cabeceras .= "X-Mailer: PHP/" . phpversion();
                $ok = mail($para, $titulo, $mensaje, $cabeceras);
                
                if ($ok === true) {
                    echo json_encode(true);
                } else {
                    echo json_encode(['Une erreur est survenue, veuillez rééssayer ultérieurement.']);
                }

            }

        }
    }
