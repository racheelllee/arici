<?php

use Illuminate\Database\Seeder;

class ImagenesPaginasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('imagenes_paginas')->delete();
        
        \DB::table('imagenes_paginas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'imagen' => 'imagenes_paginas/1-5aa7e5e96df26.jpg',
                'leyenda' => NULL,
                'paginas_id' => 1,
                'created_at' => '2018-02-23 07:34:33',
                'updated_at' => '2018-03-23 09:12:01',
            ),
            1 => 
            array (
                'id' => 2,
                'imagen' => 'imagenes_paginas/1-5a8fc409e1190.jpg',
                'leyenda' => NULL,
                'paginas_id' => 1,
                'created_at' => '2018-02-23 07:34:34',
                'updated_at' => '2018-03-23 09:12:01',
            ),
            2 => 
            array (
                'id' => 3,
                'imagen' => 'imagenes_paginas/1-5a9fba2d9b7bb.jpg',
                'leyenda' => NULL,
                'paginas_id' => 1,
                'created_at' => '2018-02-23 07:34:34',
                'updated_at' => '2018-03-23 09:12:01',
            ),
            3 => 
            array (
                'id' => 4,
                'imagen' => 'imagenes_paginas/1-5a9fb84811554.jpg',
                'leyenda' => NULL,
                'paginas_id' => 1,
                'created_at' => '2018-02-23 07:34:34',
                'updated_at' => '2018-03-21 23:20:16',
            ),
            4 => 
            array (
                'id' => 5,
                'imagen' => 'imagenes_paginas/1-5a9fb6ddd2cba.jpg',
                'leyenda' => NULL,
                'paginas_id' => 1,
                'created_at' => '2018-02-23 07:34:34',
                'updated_at' => '2018-03-21 23:20:16',
            ),
            5 => 
            array (
                'id' => 6,
                'imagen' => 'imagenes_paginas/1-5a8fc40a4964b.jpg',
                'leyenda' => NULL,
                'paginas_id' => 1,
                'created_at' => '2018-02-23 07:34:34',
                'updated_at' => '2018-03-23 09:12:01',
            ),
            6 => 
            array (
                'id' => 7,
                'imagen' => 'imagenes_paginas/1-5a8fc40a623af.jpg',
                'leyenda' => NULL,
                'paginas_id' => 1,
                'created_at' => '2018-02-23 07:34:34',
                'updated_at' => '2018-03-23 09:12:01',
            ),
            7 => 
            array (
                'id' => 8,
                'imagen' => 'imagenes_paginas/2-5a9fae4311f51.jpg',
                'leyenda' => '',
                'paginas_id' => 2,
                'created_at' => '2018-02-23 07:59:04',
                'updated_at' => '2018-03-07 09:28:18',
            ),
            8 => 
            array (
                'id' => 9,
                'imagen' => 'imagenes_paginas/2-5a9fae4355968.jpg',
                'leyenda' => '',
                'paginas_id' => 2,
                'created_at' => '2018-02-23 07:59:04',
                'updated_at' => '2018-03-07 10:18:47',
            ),
            9 => 
            array (
                'id' => 10,
                'imagen' => 'imagenes_paginas/2-5a9fae43733b6.jpg',
                'leyenda' => '',
                'paginas_id' => 2,
                'created_at' => '2018-02-23 07:59:04',
                'updated_at' => '2018-03-07 10:18:47',
            ),
            10 => 
            array (
                'id' => 11,
                'imagen' => 'imagenes_paginas/2-5a9fae438fa7e.jpg',
                'leyenda' => '',
                'paginas_id' => 2,
                'created_at' => '2018-02-23 07:59:05',
                'updated_at' => '2018-03-07 10:18:47',
            ),
            11 => 
            array (
                'id' => 12,
                'imagen' => 'imagenes_paginas/2-5a9fae43aaec0.jpg',
                'leyenda' => '',
                'paginas_id' => 2,
                'created_at' => '2018-02-23 07:59:05',
                'updated_at' => '2018-03-07 10:20:16',
            ),
            12 => 
            array (
                'id' => 13,
                'imagen' => 'imagenes_paginas/2-5a9fbdf37eb6a.jpg',
                'leyenda' => '',
                'paginas_id' => 2,
                'created_at' => '2018-02-23 07:59:05',
                'updated_at' => '2018-03-07 10:24:51',
            ),
            13 => 
            array (
                'id' => 14,
                'imagen' => 'imagenes_paginas/2-5a9fae43dda97.jpg',
                'leyenda' => '',
                'paginas_id' => 2,
                'created_at' => '2018-02-23 07:59:05',
                'updated_at' => '2018-03-07 10:20:16',
            ),
            14 => 
            array (
                'id' => 15,
                'imagen' => 'imagenes_paginas/3-5aa01075d644a.jpg',
                'leyenda' => '',
                'paginas_id' => 3,
                'created_at' => '2018-02-23 08:01:49',
                'updated_at' => '2018-03-07 16:22:51',
            ),
            15 => 
            array (
                'id' => 16,
                'imagen' => 'imagenes_paginas/3-5aa0107609c2e.jpg',
                'leyenda' => '',
                'paginas_id' => 3,
                'created_at' => '2018-02-23 08:01:49',
                'updated_at' => '2018-03-07 16:16:54',
            ),
            16 => 
            array (
                'id' => 17,
                'imagen' => 'imagenes_paginas/3-5aa010761fd87.jpg',
                'leyenda' => '',
                'paginas_id' => 3,
                'created_at' => '2018-02-23 08:01:49',
                'updated_at' => '2018-03-07 16:16:54',
            ),
            17 => 
            array (
                'id' => 18,
                'imagen' => 'imagenes_paginas/3-5aa010763b006.jpg',
                'leyenda' => '',
                'paginas_id' => 3,
                'created_at' => '2018-02-23 08:01:49',
                'updated_at' => '2018-03-07 16:16:54',
            ),
            18 => 
            array (
                'id' => 19,
                'imagen' => 'imagenes_paginas/3-5aa010764f298.jpg',
                'leyenda' => '',
                'paginas_id' => 3,
                'created_at' => '2018-02-23 08:01:49',
                'updated_at' => '2018-03-07 16:16:54',
            ),
            19 => 
            array (
                'id' => 20,
                'imagen' => 'imagenes_paginas/3-5aa0107669a8d.jpg',
                'leyenda' => '',
                'paginas_id' => 3,
                'created_at' => '2018-02-23 08:01:50',
                'updated_at' => '2018-03-07 16:16:54',
            ),
            20 => 
            array (
                'id' => 21,
                'imagen' => 'imagenes_paginas/3-5aa010768472a.jpg',
                'leyenda' => '',
                'paginas_id' => 3,
                'created_at' => '2018-02-23 08:01:50',
                'updated_at' => '2018-03-07 16:16:54',
            ),
            21 => 
            array (
                'id' => 22,
                'imagen' => 'imagenes_paginas/3-5a8fca6e74b07.jpg',
                'leyenda' => '',
                'paginas_id' => 3,
                'created_at' => '2018-02-23 08:01:50',
                'updated_at' => '2018-02-23 08:01:50',
            ),
            22 => 
            array (
                'id' => 23,
                'imagen' => 'imagenes_paginas/2-5aa8ed0c0febb.jpg',
                'leyenda' => '',
                'paginas_id' => 2,
                'created_at' => '2018-03-14 09:36:12',
                'updated_at' => '2018-03-14 09:36:12',
            ),
            23 => 
            array (
                'id' => 24,
                'imagen' => 'imagenes_paginas/2-5aa8ed0c48d73.jpg',
                'leyenda' => '',
                'paginas_id' => 2,
                'created_at' => '2018-03-14 09:36:12',
                'updated_at' => '2018-03-14 09:36:12',
            ),
        ));
        
        
    }
}