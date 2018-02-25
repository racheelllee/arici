<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vader = DB::table('users')->insert([
        				'name'   => 'simon',
        				'email'      => 'simon.trichereau@gmail.com',
        				'password'   => Hash::make('simon123'),
        				'created_at' => new DateTime(),
        				'updated_at' => new DateTime()
        			]);

				DB::table('users')->insert([
						'name'   => 'raquel',
						'email'      => 'mercado.gpe.raquel@gmail.com',
						'password'   => Hash::make('raquel123'),
						'created_at' => new DateTime(),
						'updated_at' => new DateTime()
					]);

				DB::table('users')->insert([
						'name'   => 'michel',
						'email'      => 'michel@gmail.com',
						'password'   => Hash::make('michel123'),
						'created_at' => new DateTime(),
						'updated_at' => new DateTime()
					]);
    }
}
