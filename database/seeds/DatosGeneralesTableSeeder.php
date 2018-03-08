<?php

use Illuminate\Database\Seeder;

class DatosGeneralesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('datos_generales')->insert([
            'id' => 1,
            'imagen_logo' => 'imagenes_datos_generales/arici-logo.png',
            'nombre_sitio' => 'Arici',
            'telefono' => '+33 5 53 64 02 75',
            'correo_contacto' => 'contact@arici.fr',
            'direccion' => '9 alles de conviviales Merignac 33700',
            'horarios' => 'Ouvert du lundi au vendredi de 8h à 12h et de 14h à 18h',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);

        DB::table('links_datos_generales')->insert([
            'id' => 1,
            'image' => 'imagenes/imgfooter1.png',
            'url' => 'http://www.ffbatiment.fr/',
            'datos_generales_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);

        DB::table('links_datos_generales')->insert([
            'id' => 2,
            'image' => 'imagenes/imgfooter2.png',
            'url' => 'https://www.qualibat.com/',
            'datos_generales_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);

        DB::table('links_datos_generales')->insert([
            'id' => 3,
            'image' => 'imagenes/imgfooter3.png',
            'url' => '#',
            'datos_generales_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);

        DB::table('links_datos_generales')->insert([
            'id' => 4,
            'image' => 'imagenes/imgfooter4.png',
            'url' => 'https://www.oppbtp.com/',
            'datos_generales_id' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }
}