<?php

use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'id' => 1,
            'nombre' => 'enseignement',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
        ]);
		 DB::table('categorias')->insert([
            'id' => 2,
            'nombre' => 'industrie',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
        ]);
		 DB::table('categorias')->insert([
            'id' => 3,
            'nombre' => 'logement',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
        ]);
		 DB::table('categorias')->insert([
            'id' => 4,
            'nombre' => 'sports et loisirs',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
        ]);
		 DB::table('categorias')->insert([
            'id' => 5,
            'nombre' => 'tertiaire',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
        ]);
		 DB::table('categorias')->insert([
            'id' => 6,
            'nombre' => 'commerce',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
        ]);
		 DB::table('categorias')->insert([
            'id' => 7,
            'nombre' => 'rénovation',
			'created_at' => new DateTime(),
			'updated_at' => new DateTime()
        ]);
    }
}


