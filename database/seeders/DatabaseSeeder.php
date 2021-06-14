<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
            UsersSeeder::class,
            ChoferesSeeder::class,
            CombisSeeder::class,
            LugaresSeeder::class,
            RutasSeeder::class,
            //ViajesSeeder::class,
            //PasajesSeeder::class,
            //ComentariosSeeder::class???,
        ]);
    }
}
