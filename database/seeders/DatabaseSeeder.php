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
        $this->call('ChoferesSeeder');
        $this->call('CombisSeeder');
        $this->call('LugaresSeeder');
        $this->call('RutasSeeder');
    }
}
