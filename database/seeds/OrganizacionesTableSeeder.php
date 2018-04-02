<?php

use Illuminate\Database\Seeder;

class OrganizacionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('organizaciones')->insert([
            'id' => 1,
            'imagen' => 'imagenes_organizaciones/1-5a7640c1af319.jpg',
            'texto' => 'Un texto aqui',
            'nivel' => '0',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }
}
