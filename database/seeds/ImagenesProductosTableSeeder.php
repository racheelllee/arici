<?php

use Illuminate\Database\Seeder;

class ImagenesProductosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('imagenes_productos')->delete();
        
        \DB::table('imagenes_productos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'imagen' => 'imagenes_productos/11-5aa957fd31c8c.jpg',
                'leyenda' => '',
                'productos_id' => 11,
                'created_at' => '2018-03-14 17:12:29',
                'updated_at' => '2018-03-14 17:12:29',
            ),
            1 => 
            array (
                'id' => 2,
                'imagen' => 'imagenes_productos/12-5aaa3e21f1f41.jpg',
                'leyenda' => '',
                'productos_id' => 12,
                'created_at' => '2018-03-14 17:16:22',
                'updated_at' => '2018-03-15 09:34:26',
            ),
            2 => 
            array (
                'id' => 3,
                'imagen' => 'imagenes_productos/13-5aa95c1048d5e.jpg',
                'leyenda' => '',
                'productos_id' => 13,
                'created_at' => '2018-03-14 17:29:52',
                'updated_at' => '2018-03-14 17:29:52',
            ),
            3 => 
            array (
                'id' => 4,
                'imagen' => 'imagenes_productos/14-5aa960ee89773.jpg',
                'leyenda' => '',
                'productos_id' => 14,
                'created_at' => '2018-03-14 17:50:38',
                'updated_at' => '2018-03-14 17:50:38',
            ),
            4 => 
            array (
                'id' => 5,
                'imagen' => 'imagenes_productos/16-5aaa4e821a45d.jpg',
                'leyenda' => '© Éric Bouloumié',
                'productos_id' => 16,
                'created_at' => '2018-03-15 10:44:18',
                'updated_at' => '2018-03-23 09:09:15',
            ),
            5 => 
            array (
                'id' => 6,
                'imagen' => 'imagenes_productos/17-5aaa508445fab.jpg',
                'leyenda' => '',
                'productos_id' => 17,
                'created_at' => '2018-03-15 10:52:52',
                'updated_at' => '2018-03-15 10:52:52',
            ),
            6 => 
            array (
                'id' => 7,
                'imagen' => 'imagenes_productos/13-5aaa74febd6aa.jpg',
                'leyenda' => '',
                'productos_id' => 13,
                'created_at' => '2018-03-15 13:28:30',
                'updated_at' => '2018-03-15 13:28:30',
            ),
            7 => 
            array (
                'id' => 8,
                'imagen' => 'imagenes_productos/16-5aaa76e76859f.jpg',
                'leyenda' => '© Éric Bouloumié',
                'productos_id' => 16,
                'created_at' => '2018-03-15 13:36:39',
                'updated_at' => '2018-03-23 09:09:15',
            ),
            8 => 
            array (
                'id' => 9,
                'imagen' => 'imagenes_productos/18-5aaa7ca956899.jpg',
                'leyenda' => '',
                'productos_id' => 18,
                'created_at' => '2018-03-15 14:01:13',
                'updated_at' => '2018-03-15 14:01:13',
            ),
            9 => 
            array (
                'id' => 10,
                'imagen' => 'imagenes_productos/18-5aab8a24648c6.jpg',
                'leyenda' => '',
                'productos_id' => 18,
                'created_at' => '2018-03-16 09:11:00',
                'updated_at' => '2018-03-16 09:11:00',
            ),
            10 => 
            array (
                'id' => 11,
                'imagen' => 'imagenes_productos/19-5aab8dc32250b.jpg',
                'leyenda' => '',
                'productos_id' => 19,
                'created_at' => '2018-03-16 09:26:27',
                'updated_at' => '2018-03-16 09:26:27',
            ),
            11 => 
            array (
                'id' => 12,
                'imagen' => 'imagenes_productos/19-5aab8dc34a9ec.jpg',
                'leyenda' => '',
                'productos_id' => 19,
                'created_at' => '2018-03-16 09:26:27',
                'updated_at' => '2018-03-16 09:26:27',
            ),
            12 => 
            array (
                'id' => 13,
                'imagen' => 'imagenes_productos/12-5aab8e63a9003.jpg',
                'leyenda' => '',
                'productos_id' => 12,
                'created_at' => '2018-03-16 09:29:07',
                'updated_at' => '2018-03-16 09:29:07',
            ),
            13 => 
            array (
                'id' => 14,
                'imagen' => 'imagenes_productos/21-5aaba1799e7a8.jpg',
                'leyenda' => '',
                'productos_id' => 21,
                'created_at' => '2018-03-16 10:50:33',
                'updated_at' => '2018-03-16 10:50:33',
            ),
            14 => 
            array (
                'id' => 15,
                'imagen' => 'imagenes_productos/22-5ab2a9713c965.jpg',
                'leyenda' => '© Denis Lacharme',
                'productos_id' => 22,
                'created_at' => '2018-03-16 10:55:59',
                'updated_at' => '2018-03-23 16:53:55',
            ),
            15 => 
            array (
                'id' => 16,
                'imagen' => 'imagenes_productos/22-5ab2a9715ab80.jpg',
                'leyenda' => '© Denis Lacharme',
                'productos_id' => 22,
                'created_at' => '2018-03-16 10:55:59',
                'updated_at' => '2018-03-23 16:53:55',
            ),
            16 => 
            array (
                'id' => 17,
                'imagen' => 'imagenes_productos/23-5aaba8a1ac87e.jpg',
                'leyenda' => '',
                'productos_id' => 23,
                'created_at' => '2018-03-16 11:21:05',
                'updated_at' => '2018-03-16 11:21:05',
            ),
            17 => 
            array (
                'id' => 18,
                'imagen' => 'imagenes_productos/24-5aabac40a2f03.jpg',
                'leyenda' => '',
                'productos_id' => 24,
                'created_at' => '2018-03-16 11:36:32',
                'updated_at' => '2018-03-16 11:36:32',
            ),
            18 => 
            array (
                'id' => 19,
                'imagen' => 'imagenes_productos/25-5aabe5864e85c.jpg',
                'leyenda' => '',
                'productos_id' => 25,
                'created_at' => '2018-03-16 15:40:54',
                'updated_at' => '2018-03-16 15:40:54',
            ),
            19 => 
            array (
                'id' => 20,
                'imagen' => 'imagenes_productos/25-5aabe58680f54.jpg',
                'leyenda' => '',
                'productos_id' => 25,
                'created_at' => '2018-03-16 15:40:54',
                'updated_at' => '2018-03-16 15:40:54',
            ),
            20 => 
            array (
                'id' => 21,
                'imagen' => 'imagenes_productos/26-5aabee8e6bce1.jpg',
                'leyenda' => '',
                'productos_id' => 26,
                'created_at' => '2018-03-16 15:54:12',
                'updated_at' => '2018-03-16 16:19:26',
            ),
            21 => 
            array (
                'id' => 22,
                'imagen' => 'imagenes_productos/27-5aabeecf660d2.jpg',
                'leyenda' => '',
                'productos_id' => 27,
                'created_at' => '2018-03-16 16:20:31',
                'updated_at' => '2018-03-16 16:20:31',
            ),
            22 => 
            array (
                'id' => 23,
                'imagen' => 'imagenes_productos/27-5aabeecf807d7.jpg',
                'leyenda' => '',
                'productos_id' => 27,
                'created_at' => '2018-03-16 16:20:31',
                'updated_at' => '2018-03-16 16:20:31',
            ),
            23 => 
            array (
                'id' => 24,
                'imagen' => 'imagenes_productos/27-5aabeecf91fc2.jpg',
                'leyenda' => '',
                'productos_id' => 27,
                'created_at' => '2018-03-16 16:20:31',
                'updated_at' => '2018-03-16 16:20:31',
            ),
            24 => 
            array (
                'id' => 25,
                'imagen' => 'imagenes_productos/28-5aabf6d3de593.jpg',
                'leyenda' => '',
                'productos_id' => 28,
                'created_at' => '2018-03-16 16:54:44',
                'updated_at' => '2018-03-16 16:54:44',
            ),
            25 => 
            array (
                'id' => 26,
                'imagen' => 'imagenes_productos/28-5aabf6d40f614.jpg',
                'leyenda' => '',
                'productos_id' => 28,
                'created_at' => '2018-03-16 16:54:44',
                'updated_at' => '2018-03-16 16:54:44',
            ),
            26 => 
            array (
                'id' => 27,
                'imagen' => 'imagenes_productos/28-5aabfcc3a9de7.jpg',
                'leyenda' => '',
                'productos_id' => 28,
                'created_at' => '2018-03-16 16:54:44',
                'updated_at' => '2018-03-16 17:20:03',
            ),
            27 => 
            array (
                'id' => 28,
                'imagen' => 'imagenes_productos/28-5aabf6d42e214.jpg',
                'leyenda' => '',
                'productos_id' => 28,
                'created_at' => '2018-03-16 16:54:44',
                'updated_at' => '2018-03-16 16:54:44',
            ),
            28 => 
            array (
                'id' => 29,
                'imagen' => 'imagenes_productos/28-5aabf6d43f048.jpg',
                'leyenda' => '',
                'productos_id' => 28,
                'created_at' => '2018-03-16 16:54:44',
                'updated_at' => '2018-03-16 16:54:44',
            ),
            29 => 
            array (
                'id' => 30,
                'imagen' => 'imagenes_productos/29-5aabfdb909ef6.jpg',
                'leyenda' => '',
                'productos_id' => 29,
                'created_at' => '2018-03-16 17:24:09',
                'updated_at' => '2018-03-16 17:24:09',
            ),
            30 => 
            array (
                'id' => 31,
                'imagen' => 'imagenes_productos/30-5aac018e0db90.jpg',
                'leyenda' => '',
                'productos_id' => 30,
                'created_at' => '2018-03-16 17:40:30',
                'updated_at' => '2018-03-16 17:40:30',
            ),
            31 => 
            array (
                'id' => 32,
                'imagen' => 'imagenes_productos/30-5aac018e1c75d.jpg',
                'leyenda' => '',
                'productos_id' => 30,
                'created_at' => '2018-03-16 17:40:30',
                'updated_at' => '2018-03-16 17:40:30',
            ),
            32 => 
            array (
                'id' => 33,
                'imagen' => 'imagenes_productos/31-5ab5102eefec5.jpg',
                'leyenda' => NULL,
                'productos_id' => 31,
                'created_at' => '2018-03-16 17:52:39',
                'updated_at' => '2018-03-23 14:33:19',
            ),
            33 => 
            array (
                'id' => 34,
                'imagen' => 'imagenes_productos/32-5aac078977793.jpg',
                'leyenda' => '',
                'productos_id' => 32,
                'created_at' => '2018-03-16 18:06:01',
                'updated_at' => '2018-03-16 18:06:01',
            ),
            34 => 
            array (
                'id' => 35,
                'imagen' => 'imagenes_productos/33-5aaf83e1be3c9.jpg',
                'leyenda' => '',
                'productos_id' => 33,
                'created_at' => '2018-03-19 09:33:21',
                'updated_at' => '2018-03-19 09:33:21',
            ),
            35 => 
            array (
                'id' => 36,
                'imagen' => 'imagenes_productos/34-5aaf849719f75.jpg',
                'leyenda' => '',
                'productos_id' => 34,
                'created_at' => '2018-03-19 09:36:23',
                'updated_at' => '2018-03-19 09:36:23',
            ),
            36 => 
            array (
                'id' => 37,
                'imagen' => 'imagenes_productos/35-5aafe402d2d45.jpg',
                'leyenda' => '',
                'productos_id' => 35,
                'created_at' => '2018-03-19 09:38:51',
                'updated_at' => '2018-03-19 16:23:30',
            ),
            37 => 
            array (
                'id' => 38,
                'imagen' => 'imagenes_productos/36-5aaf85eb1474c.jpg',
                'leyenda' => '',
                'productos_id' => 36,
                'created_at' => '2018-03-19 09:42:03',
                'updated_at' => '2018-03-19 09:42:03',
            ),
            38 => 
            array (
                'id' => 39,
                'imagen' => 'imagenes_productos/37-5aaf86811190f.jpg',
                'leyenda' => '',
                'productos_id' => 37,
                'created_at' => '2018-03-19 09:44:33',
                'updated_at' => '2018-03-19 09:44:33',
            ),
            39 => 
            array (
                'id' => 40,
                'imagen' => 'imagenes_productos/38-5aaf87632a2b4.jpg',
                'leyenda' => '© Philippe Caumes',
                'productos_id' => 38,
                'created_at' => '2018-03-19 09:48:19',
                'updated_at' => '2018-03-23 15:42:33',
            ),
            40 => 
            array (
                'id' => 41,
                'imagen' => 'imagenes_productos/38-5aaf8763549bf.jpg',
                'leyenda' => '© Philippe Caumes',
                'productos_id' => 38,
                'created_at' => '2018-03-19 09:48:19',
                'updated_at' => '2018-03-23 15:42:33',
            ),
            41 => 
            array (
                'id' => 42,
                'imagen' => 'imagenes_productos/38-5aaf8763637b9.jpg',
                'leyenda' => '© Philippe Caumes',
                'productos_id' => 38,
                'created_at' => '2018-03-19 09:48:19',
                'updated_at' => '2018-03-23 15:42:33',
            ),
            42 => 
            array (
                'id' => 43,
                'imagen' => 'imagenes_productos/39-5aafb3cab5f69.jpg',
                'leyenda' => NULL,
                'productos_id' => 39,
                'created_at' => '2018-03-19 12:57:46',
                'updated_at' => '2018-03-26 21:37:43',
            ),
            43 => 
            array (
                'id' => 44,
                'imagen' => 'imagenes_productos/39-5ab968275aec0.jpg',
                'leyenda' => NULL,
                'productos_id' => 39,
                'created_at' => '2018-03-19 12:57:46',
                'updated_at' => '2018-03-26 21:37:43',
            ),
            44 => 
            array (
                'id' => 45,
                'imagen' => 'imagenes_productos/39-5aafb3cae3a9f.jpg',
                'leyenda' => NULL,
                'productos_id' => 39,
                'created_at' => '2018-03-19 12:57:46',
                'updated_at' => '2018-03-26 21:37:43',
            ),
            45 => 
            array (
                'id' => 46,
                'imagen' => 'imagenes_productos/40-5aafb771010ca.jpg',
                'leyenda' => '',
                'productos_id' => 40,
                'created_at' => '2018-03-19 13:13:21',
                'updated_at' => '2018-03-19 13:13:21',
            ),
            46 => 
            array (
                'id' => 47,
                'imagen' => 'imagenes_productos/40-5aafb77124074.jpg',
                'leyenda' => '',
                'productos_id' => 40,
                'created_at' => '2018-03-19 13:13:21',
                'updated_at' => '2018-03-19 13:13:21',
            ),
            47 => 
            array (
                'id' => 48,
                'imagen' => 'imagenes_productos/41-5aafb83e159f7.jpg',
                'leyenda' => '',
                'productos_id' => 41,
                'created_at' => '2018-03-19 13:16:46',
                'updated_at' => '2018-03-19 13:16:46',
            ),
            48 => 
            array (
                'id' => 49,
                'imagen' => 'imagenes_productos/42-5aafb9fdc570d.jpg',
                'leyenda' => NULL,
                'productos_id' => 42,
                'created_at' => '2018-03-19 13:24:13',
                'updated_at' => '2018-03-23 10:11:06',
            ),
            49 => 
            array (
                'id' => 50,
                'imagen' => 'imagenes_productos/36-5aafbc3db04a2.jpg',
                'leyenda' => '',
                'productos_id' => 36,
                'created_at' => '2018-03-19 13:33:49',
                'updated_at' => '2018-03-19 13:33:49',
            ),
            50 => 
            array (
                'id' => 51,
                'imagen' => 'imagenes_productos/35-5aafe2a8eef7b.jpg',
                'leyenda' => '',
                'productos_id' => 35,
                'created_at' => '2018-03-19 16:17:45',
                'updated_at' => '2018-03-19 16:17:45',
            ),
            51 => 
            array (
                'id' => 52,
                'imagen' => 'imagenes_productos/43-5ab2732c195b4.jpg',
                'leyenda' => '',
                'productos_id' => 43,
                'created_at' => '2018-03-21 14:58:52',
                'updated_at' => '2018-03-21 14:58:52',
            ),
            52 => 
            array (
                'id' => 53,
                'imagen' => 'imagenes_productos/44-5ab2740ec9bad.jpg',
                'leyenda' => '',
                'productos_id' => 44,
                'created_at' => '2018-03-21 15:02:38',
                'updated_at' => '2018-03-21 15:02:38',
            ),
            53 => 
            array (
                'id' => 54,
                'imagen' => 'imagenes_productos/44-5ab2740eeab44.jpg',
                'leyenda' => '',
                'productos_id' => 44,
                'created_at' => '2018-03-21 15:02:39',
                'updated_at' => '2018-03-21 15:02:39',
            ),
            54 => 
            array (
                'id' => 55,
                'imagen' => 'imagenes_productos/44-5ab2740f0ef15.jpg',
                'leyenda' => '',
                'productos_id' => 44,
                'created_at' => '2018-03-21 15:02:39',
                'updated_at' => '2018-03-21 15:02:39',
            ),
            55 => 
            array (
                'id' => 56,
                'imagen' => 'imagenes_productos/45-5ab274e561f21.jpg',
                'leyenda' => '',
                'productos_id' => 45,
                'created_at' => '2018-03-21 15:06:13',
                'updated_at' => '2018-03-21 15:06:13',
            ),
            56 => 
            array (
                'id' => 57,
                'imagen' => 'imagenes_productos/45-5ab274e57829b.jpg',
                'leyenda' => '',
                'productos_id' => 45,
                'created_at' => '2018-03-21 15:06:13',
                'updated_at' => '2018-03-21 15:06:13',
            ),
            57 => 
            array (
                'id' => 58,
                'imagen' => 'imagenes_productos/45-5ab274e586a68.jpg',
                'leyenda' => '',
                'productos_id' => 45,
                'created_at' => '2018-03-21 15:06:13',
                'updated_at' => '2018-03-21 15:06:13',
            ),
            58 => 
            array (
                'id' => 59,
                'imagen' => 'imagenes_productos/46-5ab275f25d9cc.jpg',
                'leyenda' => '',
                'productos_id' => 46,
                'created_at' => '2018-03-21 15:10:42',
                'updated_at' => '2018-03-21 15:10:42',
            ),
            59 => 
            array (
                'id' => 60,
                'imagen' => 'imagenes_productos/21-5ab27b11d851d.jpg',
                'leyenda' => '',
                'productos_id' => 21,
                'created_at' => '2018-03-21 15:32:33',
                'updated_at' => '2018-03-21 15:32:33',
            ),
            60 => 
            array (
                'id' => 61,
                'imagen' => 'imagenes_productos/47-5ab27cdb3a8fb.jpg',
                'leyenda' => NULL,
                'productos_id' => 47,
                'created_at' => '2018-03-21 15:40:11',
                'updated_at' => '2018-03-22 17:32:44',
            ),
            61 => 
            array (
                'id' => 62,
                'imagen' => 'imagenes_productos/48-5ab27df2201e1.jpg',
                'leyenda' => '',
                'productos_id' => 48,
                'created_at' => '2018-03-21 15:44:50',
                'updated_at' => '2018-03-21 15:44:50',
            ),
            62 => 
            array (
                'id' => 63,
                'imagen' => 'imagenes_productos/49-5ab284bfd28d6.jpg',
                'leyenda' => NULL,
                'productos_id' => 49,
                'created_at' => '2018-03-21 16:13:51',
                'updated_at' => '2018-03-21 23:20:46',
            ),
            63 => 
            array (
                'id' => 64,
                'imagen' => 'imagenes_productos/49-5ab284bfe87a0.jpg',
                'leyenda' => NULL,
                'productos_id' => 49,
                'created_at' => '2018-03-21 16:13:52',
                'updated_at' => '2018-03-21 23:20:46',
            ),
            64 => 
            array (
                'id' => 65,
                'imagen' => 'imagenes_productos/49-5ab284c0041cb.jpg',
                'leyenda' => NULL,
                'productos_id' => 49,
                'created_at' => '2018-03-21 16:13:52',
                'updated_at' => '2018-03-21 23:20:46',
            ),
            65 => 
            array (
                'id' => 66,
                'imagen' => 'imagenes_productos/50-5ab28750b3257.jpg',
                'leyenda' => '',
                'productos_id' => 50,
                'created_at' => '2018-03-21 16:24:48',
                'updated_at' => '2018-03-21 16:24:48',
            ),
            66 => 
            array (
                'id' => 67,
                'imagen' => 'imagenes_productos/50-5ab28750c8e1e.jpg',
                'leyenda' => '',
                'productos_id' => 50,
                'created_at' => '2018-03-21 16:24:48',
                'updated_at' => '2018-03-21 16:24:48',
            ),
            67 => 
            array (
                'id' => 68,
                'imagen' => 'imagenes_productos/51-5ab29a96808d3.jpg',
                'leyenda' => NULL,
                'productos_id' => 51,
                'created_at' => '2018-03-21 17:08:59',
                'updated_at' => '2018-03-23 09:04:09',
            ),
            68 => 
            array (
                'id' => 69,
                'imagen' => 'imagenes_productos/51-5ab29a969ba6d.jpg',
                'leyenda' => '©gironde-tourisme.fr',
                'productos_id' => 51,
                'created_at' => '2018-03-21 17:47:02',
                'updated_at' => '2018-03-23 09:04:10',
            ),
            69 => 
            array (
                'id' => 70,
                'imagen' => 'imagenes_productos/16-5ab2a02dde88f.jpg',
                'leyenda' => '© Éric Bouloumié',
                'productos_id' => 16,
                'created_at' => '2018-03-21 18:10:53',
                'updated_at' => '2018-03-23 09:09:15',
            ),
            70 => 
            array (
                'id' => 71,
                'imagen' => 'imagenes_productos/16-5ab2a02def3d2.jpg',
                'leyenda' => '© Éric Bouloumié',
                'productos_id' => 16,
                'created_at' => '2018-03-21 18:10:54',
                'updated_at' => '2018-03-23 09:09:15',
            ),
            71 => 
            array (
                'id' => 72,
                'imagen' => 'imagenes_productos/41-5ab2a27e7475b.jpg',
                'leyenda' => '',
                'productos_id' => 41,
                'created_at' => '2018-03-21 18:20:46',
                'updated_at' => '2018-03-21 18:20:46',
            ),
            72 => 
            array (
                'id' => 73,
                'imagen' => 'imagenes_productos/41-5ab2a27e89be5.jpg',
                'leyenda' => '',
                'productos_id' => 41,
                'created_at' => '2018-03-21 18:20:46',
                'updated_at' => '2018-03-21 18:20:46',
            ),
            73 => 
            array (
                'id' => 74,
                'imagen' => 'imagenes_productos/13-5ab2a4603654d.jpg',
                'leyenda' => '',
                'productos_id' => 13,
                'created_at' => '2018-03-21 18:28:48',
                'updated_at' => '2018-03-21 18:28:48',
            ),
            74 => 
            array (
                'id' => 75,
                'imagen' => 'imagenes_productos/22-5ab2a97168892.jpg',
                'leyenda' => '© Denis Lacharme',
                'productos_id' => 22,
                'created_at' => '2018-03-21 18:50:25',
                'updated_at' => '2018-03-23 16:53:55',
            ),
            75 => 
            array (
                'id' => 76,
                'imagen' => 'imagenes_productos/22-5ab2a97178a18.jpg',
                'leyenda' => '© Denis Lacharme',
                'productos_id' => 22,
                'created_at' => '2018-03-21 18:50:25',
                'updated_at' => '2018-03-23 16:53:55',
            ),
            76 => 
            array (
                'id' => 77,
                'imagen' => 'imagenes_productos/47-5ab3e9e3a7d9e.jpg',
                'leyenda' => NULL,
                'productos_id' => 47,
                'created_at' => '2018-03-22 17:32:44',
                'updated_at' => '2018-03-22 17:37:39',
            ),
            77 => 
            array (
                'id' => 78,
                'imagen' => 'imagenes_productos/47-5ab3e9e3c916e.jpg',
                'leyenda' => NULL,
                'productos_id' => 47,
                'created_at' => '2018-03-22 17:37:39',
                'updated_at' => '2018-03-22 17:37:39',
            ),
            78 => 
            array (
                'id' => 79,
                'imagen' => 'imagenes_productos/42-5ab4d2b954835.jpg',
                'leyenda' => NULL,
                'productos_id' => 42,
                'created_at' => '2018-03-23 10:11:05',
                'updated_at' => '2018-03-23 10:11:05',
            ),
            79 => 
            array (
                'id' => 80,
                'imagen' => 'imagenes_productos/42-5ab4d2b9b89ec.jpg',
                'leyenda' => NULL,
                'productos_id' => 42,
                'created_at' => '2018-03-23 10:11:05',
                'updated_at' => '2018-03-23 10:11:05',
            ),
            80 => 
            array (
                'id' => 81,
                'imagen' => 'imagenes_productos/52-5ab4d88aeb53a.jpg',
                'leyenda' => NULL,
                'productos_id' => 52,
                'created_at' => '2018-03-23 10:35:55',
                'updated_at' => '2018-03-23 10:35:55',
            ),
            81 => 
            array (
                'id' => 82,
                'imagen' => 'imagenes_productos/52-5ab4d88b1608b.jpg',
                'leyenda' => NULL,
                'productos_id' => 52,
                'created_at' => '2018-03-23 10:35:55',
                'updated_at' => '2018-03-23 10:35:55',
            ),
            82 => 
            array (
                'id' => 83,
                'imagen' => 'imagenes_productos/52-5ab4d88b26640.jpg',
                'leyenda' => NULL,
                'productos_id' => 52,
                'created_at' => '2018-03-23 10:35:55',
                'updated_at' => '2018-03-23 10:35:55',
            ),
            83 => 
            array (
                'id' => 84,
                'imagen' => 'imagenes_productos/53-5ab4d9e7e753d.jpg',
                'leyenda' => NULL,
                'productos_id' => 53,
                'created_at' => '2018-03-23 10:41:44',
                'updated_at' => '2018-03-23 10:41:44',
            ),
            84 => 
            array (
                'id' => 85,
                'imagen' => 'imagenes_productos/53-5ab4d9e81e847.jpg',
                'leyenda' => NULL,
                'productos_id' => 53,
                'created_at' => '2018-03-23 10:41:44',
                'updated_at' => '2018-03-23 10:41:44',
            ),
            85 => 
            array (
                'id' => 86,
                'imagen' => 'imagenes_productos/31-5ab5102f237dd.jpg',
                'leyenda' => NULL,
                'productos_id' => 31,
                'created_at' => '2018-03-23 14:33:19',
                'updated_at' => '2018-03-23 14:33:19',
            ),
            86 => 
            array (
                'id' => 87,
                'imagen' => 'imagenes_productos/31-5ab5102f32f56.jpg',
                'leyenda' => NULL,
                'productos_id' => 31,
                'created_at' => '2018-03-23 14:33:19',
                'updated_at' => '2018-03-23 14:33:19',
            ),
            87 => 
            array (
                'id' => 88,
                'imagen' => 'imagenes_productos/31-5ab5102f40198.jpg',
                'leyenda' => NULL,
                'productos_id' => 31,
                'created_at' => '2018-03-23 14:33:19',
                'updated_at' => '2018-03-23 14:33:19',
            ),
            88 => 
            array (
                'id' => 89,
                'imagen' => 'imagenes_productos/31-5ab5102f4cb65.jpg',
                'leyenda' => NULL,
                'productos_id' => 31,
                'created_at' => '2018-03-23 14:33:19',
                'updated_at' => '2018-03-23 14:33:19',
            ),
            89 => 
            array (
                'id' => 90,
                'imagen' => 'imagenes_productos/54-5ab924c7eaabc.jpg',
                'leyenda' => NULL,
                'productos_id' => 54,
                'created_at' => '2018-03-26 16:50:16',
                'updated_at' => '2018-03-26 16:50:16',
            ),
            90 => 
            array (
                'id' => 91,
                'imagen' => 'imagenes_productos/54-5ab924c82c7d0.jpg',
                'leyenda' => NULL,
                'productos_id' => 54,
                'created_at' => '2018-03-26 16:50:16',
                'updated_at' => '2018-03-26 16:50:16',
            ),
            91 => 
            array (
                'id' => 92,
                'imagen' => 'imagenes_productos/54-5ab924c884cab.jpg',
                'leyenda' => NULL,
                'productos_id' => 54,
                'created_at' => '2018-03-26 16:50:16',
                'updated_at' => '2018-03-26 16:50:16',
            ),
            92 => 
            array (
                'id' => 93,
                'imagen' => 'imagenes_productos/55-5ab927e9dea41.jpg',
                'leyenda' => NULL,
                'productos_id' => 55,
                'created_at' => '2018-03-26 17:03:37',
                'updated_at' => '2018-03-26 17:03:37',
            ),
            93 => 
            array (
                'id' => 94,
                'imagen' => 'imagenes_productos/55-5ab927e9ee456.jpg',
                'leyenda' => NULL,
                'productos_id' => 55,
                'created_at' => '2018-03-26 17:03:38',
                'updated_at' => '2018-03-26 17:03:38',
            ),
        ));
        
        
    }
}