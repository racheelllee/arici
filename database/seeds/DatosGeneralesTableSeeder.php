<?php

use Illuminate\Database\Seeder;

class DatosGeneralesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('datos_generales')->delete();
        
        \DB::table('datos_generales')->insert(array (
            0 => 
            array (
                'id' => 1,
                'imagen_logo' => 'imagenes_datos_generales/arici-logo.png',
                'nombre_sitio' => 'Arici',
                'telefono' => '+33 5 53 64 02 75',
                'correo_contacto' => 'contact@arici.com',
                'direccion' => 'Entreprise Générale du Bâtiment',
                'horarios' => 'Ouvert du lundi au vendredi de 8h à 12h et de 14h à 18h',
                'created_at' => '2018-03-05 21:34:17',
                'updated_at' => '2018-04-02 11:55:14',
            ),
        ));
        
        
    }
}