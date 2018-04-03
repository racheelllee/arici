<?php

use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categorias')->delete();
        
        \DB::table('categorias')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'enseignement',
                'created_at' => '2018-03-05 21:34:15',
                'updated_at' => '2018-03-05 21:34:15',
            ),
            1 => 
            array (
                'id' => 2,
                'nombre' => 'industrie',
                'created_at' => '2018-03-05 21:34:15',
                'updated_at' => '2018-03-05 21:34:15',
            ),
            2 => 
            array (
                'id' => 3,
                'nombre' => 'logement',
                'created_at' => '2018-03-05 21:34:15',
                'updated_at' => '2018-03-05 21:34:15',
            ),
            3 => 
            array (
                'id' => 4,
                'nombre' => 'sports et loisirs',
                'created_at' => '2018-03-05 21:34:15',
                'updated_at' => '2018-03-05 21:34:15',
            ),
            4 => 
            array (
                'id' => 5,
                'nombre' => 'tertiaire',
                'created_at' => '2018-03-05 21:34:15',
                'updated_at' => '2018-03-05 21:34:15',
            ),
            5 => 
            array (
                'id' => 6,
                'nombre' => 'santé',
                'created_at' => '2018-03-05 21:34:15',
                'updated_at' => '2018-03-05 21:34:15',
            ),
            6 => 
            array (
                'id' => 7,
                'nombre' => 'commerce',
                'created_at' => '2018-03-05 21:34:16',
                'updated_at' => '2018-03-05 21:34:16',
            ),
            7 => 
            array (
                'id' => 8,
                'nombre' => 'rénovation',
                'created_at' => '2018-03-05 21:34:16',
                'updated_at' => '2018-03-05 21:34:16',
            ),
        ));
        
        
    }
}