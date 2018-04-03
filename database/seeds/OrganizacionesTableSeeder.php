<?php

use Illuminate\Database\Seeder;

class OrganizacionesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('organizaciones')->delete();
        
        \DB::table('organizaciones')->insert(array (
            0 => 
            array (
                'id' => 1,
                'imagen' => 'imagenes_organizaciones/3-5ac3cbe7b8849.jpg',
                'texto' => '<p><strong>Janick GRASSI et Eric BORDES</strong> DIRECTION GÉNÉRALE</p>',
                'nivel' => '0',
                'created_at' => '2018-04-03 16:45:59',
                'updated_at' => '2018-04-03 16:46:00',
            ),
            1 => 
            array (
                'id' => 2,
                'imagen' => 'imagenes_organizaciones/7-5ac3cbe7e8890.jpg',
                'texto' => '<ul><li><strong>Valérie GARRAS</strong> Responsable Service Comptabilité<strong></strong></li><li><strong>Christelle BRASSAC</strong> Directrice Administrative et Financière </li></ul>',
                'nivel' => '1',
                'created_at' => '2018-04-03 16:45:59',
                'updated_at' => '2018-04-03 16:46:00',
            ),
            2 => 
            array (
                'id' => 3,
                'imagen' => 'imagenes_organizaciones/5-5ac3cbe7db3e9.jpg',
                'texto' => '<strong>Éric CHASSAGNE et Jean-Marie CATTAÏ</strong> BUREAU D\'ÉTUDES',
                'nivel' => '1',
                'created_at' => '2018-04-03 16:45:59',
                'updated_at' => '2018-04-03 16:46:00',
            ),
            3 => 
            array (
                'id' => 4,
                'imagen' => 'imagenes_organizaciones/4-5ac3cbe7dafe5.jpg',
                'texto' => '<p><strong>Damien MARCHAND</strong> Conducteur de Travaux</p>',
                'nivel' => '2',
                'created_at' => '2018-04-03 16:45:59',
                'updated_at' => '2018-04-03 16:46:00',
            ),
            4 => 
            array (
                'id' => 5,
                'imagen' => 'imagenes_organizaciones/1-5ac3cbe7a4995.jpg',
                'texto' => '<p><strong>Jordi PALACIN</strong> Conducteur de Travaux</p>',
                'nivel' => '2',
                'created_at' => '2018-04-03 16:45:59',
                'updated_at' => '2018-04-03 16:46:00',
            ),
            5 => 
            array (
                'id' => 6,
                'imagen' => 'imagenes_organizaciones/2-5ac3cbe7b870b.jpg',
                'texto' => '<p><strong>Pierre LECHAT-METEAU</strong> Conducteur de Travaux</p>',
                'nivel' => '2',
                'created_at' => '2018-04-03 16:45:59',
                'updated_at' => '2018-04-03 16:46:00',
            ),
            6 => 
            array (
                'id' => 7,
                'imagen' => 'imagenes_organizaciones/6-5ac3cbe7e8890.jpg',
                'texto' => '<p><strong>Josselin QUILIBRANO</strong> Conducteur de Travaux</p>',
                'nivel' => '2',
                'created_at' => '2018-04-03 16:45:59',
                'updated_at' => '2018-04-03 16:46:00',
            ),
        ));
        
        
    }
}