<?php

use Illuminate\Database\Seeder;

class LinksDatosGeneralesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('links_datos_generales')->delete();
        
        \DB::table('links_datos_generales')->insert(array (
            0 => 
            array (
                'id' => 1,
                'url' => 'http://www.ffbatiment.fr/',
                'image' => 'links_datos_generales/imgfooter1.png',
                'datos_generales_id' => 1,
                'created_at' => '2018-03-18 19:47:20',
                'updated_at' => '2018-03-18 19:47:20',
            ),
            1 => 
            array (
                'id' => 2,
                'url' => 'https://www.qualibat.com/',
                'image' => 'links_datos_generales/imgfooter2.png',
                'datos_generales_id' => 1,
                'created_at' => '2018-03-18 19:47:20',
                'updated_at' => '2018-03-18 19:47:20',
            ),
            2 => 
            array (
                'id' => 3,
                'url' => '#',
                'image' => 'links_datos_generales/imgfooter3.png',
                'datos_generales_id' => 1,
                'created_at' => '2018-03-18 19:47:20',
                'updated_at' => '2018-03-18 19:47:20',
            ),
            3 => 
            array (
                'id' => 4,
                'url' => 'https://www.oppbtp.com/',
                'image' => 'links_datos_generales/imgfooter4.png',
                'datos_generales_id' => 1,
                'created_at' => '2018-03-18 19:47:20',
                'updated_at' => '2018-03-18 19:47:20',
            ),
        ));
        
        
    }
}