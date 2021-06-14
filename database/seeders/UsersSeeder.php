<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use app\Http\Controllers\UserController;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function rand_date() {
        /* Gets 2 dates as string, earlier and later date.
           Returns date in between them.
        */
        $min_epoch = strtotime("1955-10-01 00:00:00");
        $max_epoch = strtotime("2003-10-01 00:00:00");

        $rand_epoch = rand($min_epoch, $max_epoch);

        return date('Y-m-d H:i:s', $rand_epoch);
    }

    public function run()
    {
        $fecha = UsersSeeder::rand_date();
        $pass = Hash::make('administrador');
        DB::table('users')->insert([
            'name' => 'Admin, Istrador',
            'email' => 'admin@gmail.com',
            'password' => $pass,
            'phone' => '1805-7044',
            'birthday' => $fecha,
            'gold' => '3',
        ]);

        $fecha = UsersSeeder::rand_date();
        $pass = Hash::make('visitante');
        DB::table('users')->insert([
            'name' => 'Visi, Tante',
            'email' => 'vis@gmail.com',
            'password' => $pass,
            'phone' => '1805-7044',
            'birthday' => $fecha,
            'gold' => '0',
        ]);

        $fecha = UsersSeeder::rand_date();
        $pass = Hash::make('cliente1');
        DB::table('users')->insert([
            'name' => 'Comprador, Cliente',
            'email' => 'cliente@gmail.com',
            'password' => $pass,
            'phone' => '1805-7044',
            'birthday' => $fecha,
            'gold' => '1',
            'compro' => '1',
        ]);
    }
}
