<?php

use Illuminate\Database\Seeder;

class ChiffresClesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chiffres_cles')->insert([
            'id' => 1,
            'label' => 'réalisations',
            'cantidad' => '± 1000',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('chiffres_cles')->insert([
            'id' => 2,
            'label' => 'salariés',
            'cantidad' => '± 100',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('chiffres_cles')->insert([
            'id' => 3,
            'label' => "Chiffre d'affaire 2016",
            'cantidad' => '24 M€',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('chiffres_cles')->insert([
            'id' => 4,
            'label' => "bureau d'étude",
            'cantidad' => '1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('chiffres_cles')->insert([
            'id' => 5,
            'label' => 'conducteurs de travaux',
            'cantidad' => '5',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('chiffres_cles')->insert([
            'id' => 6,
            'label' => 'chefs de chantier',
            'cantidad' => '10',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('chiffres_cles')->insert([
            'id' => 7,
            'label' => "chefs d'équipe",
            'cantidad' => '4',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }
}
