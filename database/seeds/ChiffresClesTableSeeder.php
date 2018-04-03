<?php

use Illuminate\Database\Seeder;

class ChiffresClesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('chiffres_cles')->delete();
        
        \DB::table('chiffres_cles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'label' => 'réalisations',
                'cantidad' => '± <strong>1000</strong>',
                'created_at' => '2018-03-19 19:48:54',
                'updated_at' => '2018-03-19 20:51:26',
            ),
            1 => 
            array (
                'id' => 2,
                'label' => 'salariés',
                'cantidad' => '<p>± <strong>100</strong></p>',
                'created_at' => '2018-03-19 19:48:54',
                'updated_at' => '2018-03-19 20:51:26',
            ),
            2 => 
            array (
                'id' => 3,
                'label' => 'Chiffre d\'affaires 2016',
                'cantidad' => '<strong>23</strong> M€',
                'created_at' => '2018-03-19 19:48:54',
                'updated_at' => '2018-04-02 11:56:40',
            ),
            3 => 
            array (
                'id' => 4,
                'label' => 'bureau d\'étude',
                'cantidad' => '<p><strong>1</strong></p>',
                'created_at' => '2018-03-19 19:48:54',
                'updated_at' => '2018-03-19 20:51:27',
            ),
            4 => 
            array (
                'id' => 5,
                'label' => 'conducteurs de travaux',
                'cantidad' => '<strong>4</strong><br>',
                'created_at' => '2018-03-19 19:48:54',
                'updated_at' => '2018-03-20 20:21:59',
            ),
            5 => 
            array (
                'id' => 6,
                'label' => 'chefs de chantier',
                'cantidad' => '<p><strong>10</strong></p>',
                'created_at' => '2018-03-19 19:48:54',
                'updated_at' => '2018-03-19 20:51:27',
            ),
            6 => 
            array (
                'id' => 7,
                'label' => 'chefs d\'équipe',
                'cantidad' => '<p><strong>4</strong></p>',
                'created_at' => '2018-03-19 19:48:55',
                'updated_at' => '2018-03-19 20:51:27',
            ),
        ));
        
        
    }
}