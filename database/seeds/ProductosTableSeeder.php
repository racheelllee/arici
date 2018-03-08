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
        DB::table('productos')->insert([
            'id' => 2,
            'titulo' => 'ceci est un test',
            'slug' => str_slug('ceci est un test', '-'),
            'contenido' => 'Que aegrum corpus quassari etiam levibus solet offensis, ita animus eius angustus et tener, quicquid increpuisset, ad salutis suae dispendium existimans factum aut cogitatum, insontiumcaedibus fecit victoriam luctuosam. Primi igitur omnium statuuntur Epigonus et Eubius ob nominum gentilitatem oppressi. Praediximus enim Montium.',
            'categorias_id' => 5,
            'nombre_cliente' => 'John Doe',
            'nombre_arquitecto' => 'John Wick',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('productos')->insert([
            'id' => 3,
            'titulo' => 'Bonjour de Simon',
            'slug' => str_slug('bonjour-de-simon', '-'),
            'contenido' => 'Que aegrum corpus quassari etiam levibus solet offensis, ita animus eius angustus et tener, quicquid increpuisset, ad salutis suae dispendium existimans factum aut cogitatum, insontiumcaedibus fecit victoriam luctuosam. Primi igitur omnium statuuntur Epigonus et Eubius ob nominum gentilitatem oppressi. Praediximus enim Montium.',
            'categorias_id' => 1,
            'nombre_cliente' => 'Jamel Debbouze',
            'nombre_arquitecto' => 'Jean Rachid',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('productos')->insert([
            'id' => 4,
            'titulo' => 'Institution',
            'slug' => str_slug('institution', '-'),
            'contenido' => 'Que aegrum corpus quassari etiam levibus solet offensis, ita animus eius angustus et tener, quicquid increpuisset, ad salutis suae dispendium existimans factum aut cogitatum, insontiumcaedibus fecit victoriam luctuosam. Primi igitur omnium statuuntur Epigonus et Eubius ob nominum gentilitatem oppressi. Praediximus enim Montium.',
            'categorias_id' => 2,
            'nombre_cliente' => 'Jean Claude Dusse',
            'nombre_arquitecto' => 'Francois Rostand',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('productos')->insert([
            'id' => 5,
            'titulo' => 'Hopital Pelegrin',
            'slug' => str_slug('Hopital Pelegrin', '-'),
            'contenido' => 'Que aegrum corpus quassari etiam levibus solet offensis, ita animus eius angustus et tener, quicquid increpuisset, ad salutis suae dispendium existimans factum aut cogitatum, insontiumcaedibus fecit victoriam luctuosam. Primi igitur omnium statuuntur Epigonus et Eubius ob nominum gentilitatem oppressi. Praediximus enim Montium.',
            'categorias_id' => 1,
            'nombre_cliente' => 'Maire Bordeaux',
            'nombre_arquitecto' => 'Machi Chose',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('productos')->insert([
            'id' => 6,
            'titulo' => 'Usinagaz',
            'slug' => str_slug('Usinagaz', '-'),
            'contenido' => 'Que aegrum corpus quassari etiam levibus solet offensis, ita animus eius angustus et tener, quicquid increpuisset, ad salutis suae dispendium existimans factum aut cogitatum, insontiumcaedibus fecit victoriam luctuosam. Primi igitur omnium statuuntur Epigonus et Eubius ob nominum gentilitatem oppressi. Praediximus enim Montium.',
            'categorias_id' => 4,
            'nombre_cliente' => 'Les pets de légende',
            'nombre_arquitecto' => 'Excalibur',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('productos')->insert([
            'id' => 7,
            'titulo' => 'Creuzet, 47200 Marmande',
            'slug' => str_slug('creuzet', '-'),
            'contenido' => 'Que aegrum corpus quassari etiam levibus solet offensis, ita animus eius angustus et tener, quicquid increpuisset, ad salutis suae dispendium existimans factum aut cogitatum, insontiumcaedibus fecit victoriam luctuosam. Primi igitur omnium statuuntur Epigonus et Eubius ob nominum gentilitatem oppressi. Praediximus enim Montium.',
            'categorias_id' => 8,
            'nombre_cliente' => 'Creuzet',
            'nombre_arquitecto' => 'Jean Miche',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('productos')->insert([
            'id' => 8,
            'titulo' => 'nom de chantier 2',
            'slug' => str_slug('nom-de-chantier 2', '-'),
            'contenido' => 'Que aegrum corpus quassari etiam levibus solet offensis, ita animus eius angustus et tener, quicquid increpuisset, ad salutis suae dispendium existimans factum aut cogitatum, insontiumcaedibus fecit victoriam luctuosam. Primi igitur omnium statuuntur Epigonus et Eubius ob nominum gentilitatem oppressi. Praediximus enim Montium.',
            'categorias_id' => 2,
            'nombre_cliente' => 'Deus Ex Machina',
            'nombre_arquitecto' => 'I Robot',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('productos')->insert([
            'id' => 9,
            'titulo' => "L'oeuf ou la poule",
            'slug' => str_slug("L'oeuf ou la poule", '-'),
            'contenido' => 'Que aegrum corpus quassari etiam levibus solet offensis, ita animus eius angustus et tener, quicquid increpuisset, ad salutis suae dispendium existimans factum aut cogitatum, insontiumcaedibus fecit victoriam luctuosam. Primi igitur omnium statuuntur Epigonus et Eubius ob nominum gentilitatem oppressi. Praediximus enim Montium.',
            'categorias_id' => 7,
            'nombre_cliente' => 'La Poule',
            'nombre_arquitecto' => "L'oeuf",
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('productos')->insert([
            'id' => 10,
            'titulo' => 'nom de chantier 3',
            'slug' => str_slug('nom-de-chantier 3', '-'),
            'contenido' => 'Que aegrum corpus quassari etiam levibus solet offensis, ita animus eius angustus et tener, quicquid increpuisset, ad salutis suae dispendium existimans factum aut cogitatum, insontiumcaedibus fecit victoriam luctuosam. Primi igitur omnium statuuntur Epigonus et Eubius ob nominum gentilitatem oppressi. Praediximus enim Montium.',
            'categorias_id' => 3,
            'nombre_cliente' => 'Alexander Mundet',
            'nombre_arquitecto' => 'Agustin Recinas',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('productos')->insert([
            'id' => 11,
            'titulo' => 'nom de fabrication',
            'slug' => str_slug('nom-de-fabrication', '-'),
            'contenido' => 'Que aegrum corpus quassari etiam levibus solet offensis, ita animus eius angustus et tener, quicquid increpuisset, ad salutis suae dispendium existimans factum aut cogitatum, insontiumcaedibus fecit victoriam luctuosam. Primi igitur omnium statuuntur Epigonus et Eubius ob nominum gentilitatem oppressi. Praediximus enim Montium.',
            'categorias_id' => 7,
            'nombre_cliente' => 'Alexander Mundet',
            'nombre_arquitecto' => 'Agustin Recinas',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('productos')->insert([
            'id' => 12,
            'titulo' => 'nom de chantier-12',
            'slug' => str_slug('nom-de-chantier-12', '-'),
            'contenido' => 'Que aegrum corpus quassari etiam levibus solet offensis, ita animus eius angustus et tener, quicquid increpuisset, ad salutis suae dispendium existimans factum aut cogitatum, insontiumcaedibus fecit victoriam luctuosam. Primi igitur omnium statuuntur Epigonus et Eubius ob nominum gentilitatem oppressi. Praediximus enim Montium.',
            'categorias_id' => 8,
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
        DB::table('imagenes_productos')->insert([
            'id' => 2,
            'imagen' => 'imagenes_productos/1-5a7641033ace7.png',
            'leyenda' => '',
            'productos_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('imagenes_productos')->insert([
            'id' => 3,
            'imagen' => 'imagenes_productos/1-5a7641033ace7.png',
            'leyenda' => '',
            'productos_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('imagenes_productos')->insert([
            'id' => 4,
            'imagen' => 'imagenes_productos/1-5a7641033ace7.png',
            'leyenda' => '',
            'productos_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('imagenes_productos')->insert([
            'id' => 5,
            'imagen' => 'imagenes_productos/1-5a7641033ace7.png',
            'leyenda' => '',
            'productos_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('imagenes_productos')->insert([
            'id' => 6,
            'imagen' => 'imagenes_productos/1-5a7641033ace7.png',
            'leyenda' => '',
            'productos_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('imagenes_productos')->insert([
            'id' => 7,
            'imagen' => 'imagenes_productos/1-5a7641033ace7.png',
            'leyenda' => '',
            'productos_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('imagenes_productos')->insert([
            'id' => 8,
            'imagen' => 'imagenes_productos/1-5a7641033ace7.png',
            'leyenda' => '',
            'productos_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('imagenes_productos')->insert([
            'id' => 9,
            'imagen' => 'imagenes_productos/1-5a7641033ace7.png',
            'leyenda' => '',
            'productos_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('imagenes_productos')->insert([
            'id' => 10,
            'imagen' => 'imagenes_productos/1-5a7641033ace7.png',
            'leyenda' => '',
            'productos_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('imagenes_productos')->insert([
            'id' => 11,
            'imagen' => 'imagenes_productos/1-5a7641033ace7.png',
            'leyenda' => '',
            'productos_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
        DB::table('imagenes_productos')->insert([
            'id' => 12,
            'imagen' => 'imagenes_productos/1-5a7641033ace7.png',
            'leyenda' => '',
            'productos_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);

       
    }
}
