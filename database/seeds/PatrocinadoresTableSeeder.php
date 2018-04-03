<?php

use Illuminate\Database\Seeder;

class PatrocinadoresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('patrocinadores')->delete();
        
        \DB::table('patrocinadores')->insert(array (
            0 => 
            array (
                'id' => 1,
                'imagen' => 'imagenes_patrocinadores/3-5ac3ea10af452.gif',
                'titulo' => 'Icade Immobilier',
                'link' => 'http://www.icade-immobilier.com',
                'created_at' => '2018-04-03 20:54:40',
                'updated_at' => '2018-04-03 20:54:40',
            ),
            1 => 
            array (
                'id' => 2,
                'imagen' => 'imagenes_patrocinadores/5-5ac3ed68c88ba.gif',
                'titulo' => 'DomoFrance',
                'link' => 'https://www.domofrance.fr/',
                'created_at' => '2018-04-03 21:08:56',
                'updated_at' => '2018-04-03 21:08:56',
            ),
            2 => 
            array (
                'id' => 3,
                'imagen' => 'imagenes_patrocinadores/6-5ac3ed9366fa3.gif',
                'titulo' => 'Nexity',
                'link' => 'https://www.nexity.fr/',
                'created_at' => '2018-04-03 21:09:39',
                'updated_at' => '2018-04-03 21:09:39',
            ),
            3 => 
            array (
                'id' => 4,
                'imagen' => 'imagenes_patrocinadores/7-5ac3edb4d044a.gif',
                'titulo' => 'Eneria CAT',
                'link' => 'http://www.eneria.fr/',
                'created_at' => '2018-04-03 21:10:12',
                'updated_at' => '2018-04-03 21:10:12',
            ),
            4 => 
            array (
                'id' => 5,
                'imagen' => 'imagenes_patrocinadores/9-5ac3efd61dda9.gif',
                'titulo' => 'Mésolia',
                'link' => 'http://www.mesolia.fr/',
                'created_at' => '2018-04-03 21:19:17',
                'updated_at' => '2018-04-03 21:19:18',
            ),
            5 => 
            array (
                'id' => 6,
                'imagen' => 'imagenes_patrocinadores/10-5ac3eff8cbe6e.gif',
                'titulo' => 'Domus VI',
                'link' => 'https://www.domusvi.com/',
                'created_at' => '2018-04-03 21:19:52',
                'updated_at' => '2018-04-03 21:19:52',
            ),
            6 => 
            array (
                'id' => 7,
                'imagen' => 'imagenes_patrocinadores/11-5ac3f016202b5.gif',
                'titulo' => 'Belin Immobilier',
                'link' => 'https://www.domusvi.com/',
                'created_at' => '2018-04-03 21:20:22',
                'updated_at' => '2018-04-03 21:20:22',
            ),
            7 => 
            array (
                'id' => 8,
                'imagen' => 'imagenes_patrocinadores/12-5ac3f0306abf4.gif',
                'titulo' => 'Ciliopée Habitat',
                'link' => 'https://www.ciliopee.com/',
                'created_at' => '2018-04-03 21:20:48',
                'updated_at' => '2018-04-03 21:20:48',
            ),
            8 => 
            array (
                'id' => 9,
                'imagen' => 'imagenes_patrocinadores/13-5ac3f04ade084.gif',
                'titulo' => 'Groupe Terres du Sud',
                'link' => 'http://www.terres-du-sud.fr/default.aspx',
                'created_at' => '2018-04-03 21:21:14',
                'updated_at' => '2018-04-03 21:21:14',
            ),
            9 => 
            array (
                'id' => 10,
                'imagen' => 'imagenes_patrocinadores/14-5ac3f05e2646d.gif',
                'titulo' => 'Cogedim',
                'link' => 'https://www.cogedim.com/',
                'created_at' => '2018-04-03 21:21:34',
                'updated_at' => '2018-04-03 21:21:34',
            ),
            10 => 
            array (
                'id' => 11,
                'imagen' => 'imagenes_patrocinadores/15-5ac3f07874a63.gif',
                'titulo' => 'Confitures Georgelin',
                'link' => 'https://lucien-georgelin.com/',
                'created_at' => '2018-04-03 21:22:00',
                'updated_at' => '2018-04-03 21:22:00',
            ),
            11 => 
            array (
                'id' => 12,
                'imagen' => 'imagenes_patrocinadores/16-5ac3f0938f932.gif',
                'titulo' => 'Crédit Agricole Immobilier',
                'link' => 'https://www.ca-immobilier.fr/',
                'created_at' => '2018-04-03 21:22:27',
                'updated_at' => '2018-04-03 21:22:27',
            ),
            12 => 
            array (
                'id' => 13,
                'imagen' => 'imagenes_patrocinadores/17-5ac3f0bad3915.gif',
                'titulo' => 'Boncolac',
                'link' => 'https://www.boncolac.fr/index.htm',
                'created_at' => '2018-04-03 21:23:06',
                'updated_at' => '2018-04-03 21:23:06',
            ),
        ));
        
        
    }
}