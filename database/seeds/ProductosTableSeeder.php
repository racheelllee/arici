<?php

use Illuminate\Database\Seeder;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'id' => 1,
            'titulo' => 'nom de chantier',
            'slug' => str_slug('nom-de-chantier', '-'),
            'contenido' => 'Que aegrum corpus quassari etiam levibus solet offensis, ita animus eius angustus et tener, quicquid increpuisset, ad salutis suae dispendium existimans factum aut cogitatum, insontiumcaedibus fecit victoriam luctuosam. Primi igitur omnium statuuntur Epigonus et Eubius ob nominum gentilitatem oppressi. Praediximus enim Montium.',
            'categorias_id' => 3,
            'nombre_cliente' => 'Alexander Mundet',
            'nombre_arquitecto' => 'Agustin Recinas',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
        ]);

        DB::table('imagenes_productos')->insert([
            'id' => 1,
            'imagen' => 'imagenes_productos/1-5a7641033ace7.png',
            'leyenda' => '',
            'productos_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
       
    }
}
