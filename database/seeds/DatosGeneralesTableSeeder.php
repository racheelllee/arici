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
            'imagen_logo' => 'imagenes/arici-logo.png',
            'nombre_sitio' => 'Arici',
            'telefono' => '+33 5 53 64 02 75',
            'correo_contacto' => 'contact@arici.fr',
            'direccion' => '9 alles de conviviales Merignac 33700',
            'horarios' => 'Ouvert du lundi au vendredi de 8h à 12h et de 14h à 18h',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);
    }
}