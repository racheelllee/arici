<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,    
            CategoriasTableSeeder::class,   
            ChiffresClesTableSeeder::class, 
            DatosGeneralesTableSeeder::class,   
            ImagenesPaginasTableSeeder::class,  
            ImagenesProductosTableSeeder::class,    
            LinksDatosGeneralesTableSeeder::class,  
            OrganizacionesTableSeeder::class,   
            PaginasTableSeeder::class,  
            PatrocinadoresTableSeeder::class,   
            ProductosTableSeeder::class    
        ]);
    }
}
