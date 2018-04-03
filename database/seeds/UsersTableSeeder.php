<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'simon',
                'email' => 'simon.trichereau@gmail.com',
                'password' => '$2y$10$Mx9caLJWtfB31yjy1L2xleOfX.7Y04U/McyMgbfWt70oSXJRBpj.S',
                'remember_token' => 'es6443SPCIib6GdyzcCyi5REfvmFq8emOYv9pZ6X3bG97foBwfZPF1BALSd5',
                'created_at' => '2018-02-22 22:30:52',
                'updated_at' => '2018-02-28 12:15:02',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'raquel',
                'email' => 'mercado.gpe.raquel@gmail.com',
                'password' => '$2y$10$fTiZUZkxSPTrI4vJUGUDGuxOqrmjhXoh0PB3ZtgRZ8HNfAH70F5c6',
                'remember_token' => NULL,
                'created_at' => '2018-02-22 22:30:52',
                'updated_at' => '2018-02-22 22:30:52',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'michel',
                'email' => 'saint-marc@smcreations.com',
                'password' => '$2y$10$FHqDa20QYHEs0eHhFM4bCOgXuNE4EnUV28WXX4KVtR9FVmLuMc/lK',
                'remember_token' => 'b7l4oRhXVVTwWUOoPfKyCOwkwBKnGtEluzyCxmvdLfg656Q5Q5EjYhS7YHku',
                'created_at' => '2018-02-22 22:30:52',
                'updated_at' => '2018-03-06 19:25:21',
            ),
        ));
        
        
    }
}