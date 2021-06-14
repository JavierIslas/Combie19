<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use app\Http\Controllers\ChoferController;

class ChoferesSeeder extends Seeder
{
    public function rand_date() {
        /* Gets 2 dates as string, earlier and later date.
           Returns date in between them.
        */
        $min_epoch = strtotime("1955-10-01 00:00:00");
        $max_epoch = strtotime("2003-10-01 00:00:00");

        $rand_epoch = rand($min_epoch, $max_epoch);

        return date('Y-m-d H:i:s', $rand_epoch);
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fecha = ChoferesSeeder::rand_date();
        $pass = Hash::make('chofer01');
        DB::table('choferes')->insert([
            'last_name' => 'Alvarez',
            'name' => 'Roberto Cristian',
            'email' => 'chofer1@gmail.com',
            'password' => $pass,
            'phone' => '1805-7044',
            'birthday' => $fecha,
            'extra' => Str::random(20),
        ]);
        DB::table('users')->insert([
            'name' => 'Alvarez, Roberto Cristian',
            'email' => 'chofer1@gmail.com',
            'password' => $pass,
            'phone' => '1805-7044',
            'birthday' => $fecha,
            'gold' => 2,
        ]);

        $fecha = ChoferesSeeder::rand_date();
        $pass = Hash::make('chofer02');
        DB::table('choferes')->insert([
            'last_name' => 'Annaratone',
            'name' => 'Oscar Mario',
            'email' => 'chofer2@gmail.com',
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
            'extra' => Str::random(20),
        ]);
        DB::table('users')->insert([
            'name' => 'Annaratone, Oscar Mario',
            'email' => 'chofer2@gmail.com',
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
        ]);

        $fecha = ChoferesSeeder::rand_date();
        $mail = Str::random(10).'@gmail.com';
        $pass = Hash::make('password');
        DB::table('choferes')->insert([
            'last_name' => 'Arrieta',
            'name' => 'Jose Rodolfo',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
            'extra' => Str::random(20),
        ]);
        DB::table('users')->insert([
            'name' => 'Arrieta, Jose Rodolfo',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
        ]);

        $fecha = ChoferesSeeder::rand_date();
        $mail = Str::random(10).'@gmail.com';
        $pass = Hash::make('password');
        DB::table('choferes')->insert([
            'last_name' => 'Barosi',
            'name' => 'Monica Beatriz',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
            'extra' => Str::random(20),
        ]);
        DB::table('users')->insert([
            'name' => 'Barosi, Monica Beatriz',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
        ]);

        $fecha = ChoferesSeeder::rand_date();
        $mail = Str::random(10).'@gmail.com';
        $pass = Hash::make('password');
        DB::table('choferes')->insert([
            'last_name' => 'Belajevic',
            'name' => ' Osvaldo Julian',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
            'extra' => Str::random(20),
        ]);
        DB::table('users')->insert([
            'name' => 'Belajevic, Jose Rodolfo',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
        ]);

        $fecha = ChoferesSeeder::rand_date();
        $mail = Str::random(10).'@gmail.com';
        $pass = Hash::make('password');
        DB::table('choferes')->insert([
            'last_name' => 'Cali',
            'name' => 'Gerardo',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
            'extra' => Str::random(20),
        ]);
        DB::table('users')->insert([
            'name' => 'Cali, Gerardo',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
        ]);

        $fecha = ChoferesSeeder::rand_date();
        $mail = Str::random(10).'@gmail.com';
        $pass = Hash::make('password');
        DB::table('choferes')->insert([
            'last_name' => 'Cardozo',
            'name' => 'Analia Susana',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
            'extra' => Str::random(20),
        ]);
        DB::table('users')->insert([
            'name' => 'Cardozo, Analia Susana',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
        ]);

        $fecha = ChoferesSeeder::rand_date();
        $mail = Str::random(10).'@gmail.com';
        $pass = Hash::make('password');
        DB::table('choferes')->insert([
            'last_name' => 'Carranante',
            'name' => 'Ricardo Alfredo',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
            'extra' => Str::random(20),
        ]);
        DB::table('users')->insert([
            'name' => 'Carranante, Ricardo Alfredo',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
        ]);

        $fecha = ChoferesSeeder::rand_date();
        $mail = Str::random(10).'@gmail.com';
        $pass = Hash::make('password');
        DB::table('choferes')->insert([
            'last_name' => 'Casazza',
            'name' => 'Angela Raquel',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
            'extra' => Str::random(20),
        ]);
        DB::table('users')->insert([
            'name' => 'Casazza, Angela Raquel',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
        ]);

        $fecha = ChoferesSeeder::rand_date();
        $mail = Str::random(10).'@gmail.com';
        $pass = Hash::make('password');
        DB::table('choferes')->insert([
            'last_name' => 'Castiglione',
            'name' => 'Eduardo Luis',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
            'extra' => Str::random(20),
        ]);
        DB::table('users')->insert([
            'name' => 'Castiglione, Eduardo Luis',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
        ]);

        $fecha = ChoferesSeeder::rand_date();
        $mail = Str::random(10).'@gmail.com';
        $pass = Hash::make('password');
        DB::table('choferes')->insert([
            'last_name' => 'Cavaco',
            'name' => 'Adrian Alberto',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
            'extra' => Str::random(20),
        ]);
        DB::table('users')->insert([
            'name' => 'Cavaco, Adrian Alberto',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
        ]);

        $fecha = ChoferesSeeder::rand_date();
        $mail = Str::random(10).'@gmail.com';
        $pass = Hash::make('password');
        DB::table('choferes')->insert([
            'last_name' => 'Ciruzzi',
            'name' => 'Maria Jose',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
            'extra' => Str::random(20),
        ]);
        DB::table('users')->insert([
            'name' => 'Ciruzzi, Maria Jose',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
        ]);

        $fecha = ChoferesSeeder::rand_date();
        $mail = Str::random(10).'@gmail.com';
        $pass = Hash::make('password');
        DB::table('choferes')->insert([
            'last_name' => 'Colombera',
            'name' => 'Alberto Edgardo',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
            'extra' => Str::random(20),
        ]);
        DB::table('users')->insert([
            'name' => 'Colombera, Alberto Edgardo',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
        ]);

        $fecha = ChoferesSeeder::rand_date();
        $mail = Str::random(10).'@gmail.com';
        $pass = Hash::make('password');
        DB::table('choferes')->insert([
            'last_name' => 'Commisso',
            'name' => 'Alba',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
            'extra' => Str::random(20),
        ]);
        DB::table('users')->insert([
            'name' => 'Commisso, Alba',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
        ]);

        $fecha = ChoferesSeeder::rand_date();
        $mail = Str::random(10).'@gmail.com';
        $pass = Hash::make('password');
        DB::table('choferes')->insert([
            'last_name' => 'Cuneo',
            'name' => 'Viviana Alicia',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
            'extra' => Str::random(20),
        ]);
        DB::table('users')->insert([
            'name' => 'Cuneo, Viviana Alicia',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
        ]);

        $fecha = ChoferesSeeder::rand_date();
        $mail = Str::random(10).'@gmail.com';
        $pass = Hash::make('password');
        DB::table('choferes')->insert([
            'last_name' => 'Delfino',
            'name' => 'Juan Carlos',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
            'extra' => Str::random(20),
        ]);
        DB::table('users')->insert([
            'name' => 'Delfino, Juan Carlos',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
        ]);

        $fecha = ChoferesSeeder::rand_date();
        $mail = Str::random(10).'@gmail.com';
        $pass = Hash::make('password');
        DB::table('choferes')->insert([
            'last_name' => 'Di Croce',
            'name' => 'Dario Marcelo',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
            'extra' => Str::random(20),
        ]);
        DB::table('users')->insert([
            'name' => 'Di Croce, Dario Marcelo',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
        ]);

        $fecha = ChoferesSeeder::rand_date();
        $mail = Str::random(10).'@gmail.com';
        $pass = Hash::make('password');
        DB::table('choferes')->insert([
            'last_name' => 'Drisdale',
            'name' => 'Daniel Alejandro',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
            'extra' => Str::random(20),
        ]);
        DB::table('users')->insert([
            'name' => 'Drisdale, Daniel Alejandro',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
        ]);

        $fecha = ChoferesSeeder::rand_date();
        $mail = Str::random(10).'@gmail.com';
        $pass = Hash::make('password');
        DB::table('choferes')->insert([
            'last_name' => 'Gallardo',
            'name' => 'Carlos Eduardo',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
            'extra' => Str::random(20),
        ]);
        DB::table('users')->insert([
            'name' => 'Gallardo, Carlos Eduardo',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
        ]);

        $fecha = ChoferesSeeder::rand_date();
        $mail = Str::random(10).'@gmail.com';
        $pass = Hash::make('password');
        DB::table('choferes')->insert([
            'last_name' => 'Gallardo',
            'name' => 'Christian Ricardo',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
            'extra' => Str::random(20),
        ]);
        DB::table('users')->insert([
            'name' => 'Gallardo, Christian Ricardo',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
        ]);

        $fecha = ChoferesSeeder::rand_date();
        $mail = Str::random(10).'@gmail.com';
        $pass = Hash::make('password');
        DB::table('choferes')->insert([
            'last_name' => 'Gonzalez',
            'name' => 'Belisle Betina Mabel',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
            'extra' => Str::random(20),
        ]);
        DB::table('users')->insert([
            'name' => 'Gonzalez, Belisle Betina Mabel',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
        ]);

        $fecha = ChoferesSeeder::rand_date();
        $mail = Str::random(10).'@gmail.com';
        $pass = Hash::make('password');
        DB::table('choferes')->insert([
            'last_name' => 'Hermida',
            'name' => 'Mariangeles',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
            'extra' => Str::random(20),
        ]);
        DB::table('users')->insert([
            'name' => 'Hermida, Mariangeles',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
        ]);

        $fecha = ChoferesSeeder::rand_date();
        $mail = Str::random(10).'@gmail.com';
        $pass = Hash::make('password');
        DB::table('choferes')->insert([
            'last_name' => 'Iele',
            'name' => 'Jorge',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
            'extra' => Str::random(20),
        ]);
        DB::table('users')->insert([
            'name' => 'Iele, Jorge',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
        ]);

        $fecha = ChoferesSeeder::rand_date();
        $mail = Str::random(10).'@gmail.com';
        $pass = Hash::make('password');
        DB::table('choferes')->insert([
            'last_name' => 'Inglesini',
            'name' => 'Daniel',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
            'extra' => Str::random(20),
        ]);
        DB::table('users')->insert([
            'name' => 'Inglesini, Daniel',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
        ]);

        $fecha = ChoferesSeeder::rand_date();
        $mail = Str::random(10).'@gmail.com';
        $pass = Hash::make('password');
        DB::table('choferes')->insert([
            'last_name' => 'Mansilla',
            'name' => 'Carlos Eduardo Fabian',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
            'extra' => Str::random(20),
        ]);
        DB::table('users')->insert([
            'name' => 'Mansilla, Carlos Eduardo Fabian',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
        ]);

        $fecha = ChoferesSeeder::rand_date();
        $mail = Str::random(10).'@gmail.com';
        $pass = Hash::make('password');
        DB::table('choferes')->insert([
            'last_name' => 'Muras',
            'name' => 'Gabriel Edgardo',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
            'extra' => Str::random(20),
        ]);
        DB::table('users')->insert([
            'name' => 'Muras, Gabriel Edgardo',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
        ]);

        $fecha = ChoferesSeeder::rand_date();
        $mail = Str::random(10).'@gmail.com';
        $pass = Hash::make('password');
        DB::table('choferes')->insert([
            'last_name' => 'Orellana',
            'name' => 'Mario Ricardo',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
            'extra' => Str::random(20),
        ]);
        DB::table('users')->insert([
            'name' => 'Orellana, Mario Ricardo',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
        ]);

        $fecha = ChoferesSeeder::rand_date();
        $mail = Str::random(10).'@gmail.com';
        $pass = Hash::make('password');
        DB::table('choferes')->insert([
            'last_name' => 'Pezzoni',
            'name' => 'Carbo Jose Osvaldo',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
            'extra' => Str::random(20),
        ]);
        DB::table('users')->insert([
            'name' => 'Pezzoni, Carbo Jose Osvaldo',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
        ]);

        $fecha = ChoferesSeeder::rand_date();
        $mail = Str::random(10).'@gmail.com';
        $pass = Hash::make('password');
        DB::table('choferes')->insert([
            'last_name' => 'Reich',
            'name' => 'Carlos Alberto',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
            'extra' => Str::random(20),
        ]);
        DB::table('users')->insert([
            'name' => 'Reich, Carlos Alberto',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
        ]);

        $fecha = ChoferesSeeder::rand_date();
        $mail = Str::random(10).'@gmail.com';
        $pass = Hash::make('password');
        DB::table('choferes')->insert([
            'last_name' => 'Saubiette',
            'name' => 'Andrea Karina',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
            'extra' => Str::random(20),
        ]);
        DB::table('users')->insert([
            'name' => 'Saubiette, Andrea Karina',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
        ]);

        $fecha = ChoferesSeeder::rand_date();
        $mail = Str::random(10).'@gmail.com';
        $pass = Hash::make('password');
        DB::table('choferes')->insert([
            'last_name' => 'Serrano',
            'name' => 'Monica Cecilia',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
            'extra' => Str::random(20),
        ]);
        DB::table('users')->insert([
            'name' => 'Serrano, Monica Cecilia',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
        ]);

        $fecha = ChoferesSeeder::rand_date();
        $mail = Str::random(10).'@gmail.com';
        $pass = Hash::make('password');
        DB::table('choferes')->insert([
            'last_name' => 'Tapiero',
            'name' => 'Jose Daniel',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
            'extra' => Str::random(20),
        ]);
        DB::table('users')->insert([
            'name' => 'Tapiero, Jose Daniel',
            'email' => $mail,
            'password' => $pass,
            'phone' => '453-1905',
            'birthday' => $fecha,
        ]);
    }
}
