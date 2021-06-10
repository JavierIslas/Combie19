<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RutasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rutas')->insert([
            'origen' => 1,
            'destino' => 64,
            'combie_id' => 27,
            'duracion' => "06:59:00",
            'distancia' => 2122,
        ]);

        DB::table('rutas')->insert([
            'origen' => 2,
            'destino' => 63,
            'combie_id' => 28,
            'duracion' => "01:32:00",
            'distancia' => 1327,
        ]);

        DB::table('rutas')->insert([
            'origen' => 3,
            'destino' => 62,
            'combie_id' => 24,
            'duracion' => "13:45:00",
            'distancia' => 1053,
        ]);
        
        DB::table('rutas')->insert([
            'origen' => 4,
            'destino' => 61,
            'combie_id' => 5,
            'duracion' => "12:00:00",
            'distancia' => 825,
        ]);

        DB::table('rutas')->insert([
            'origen' => 5,
            'destino' => 60,
            'combie_id' => 3,
            'duracion' => "14:24:00",
            'distancia' => 1386,
        ]);

        DB::table('rutas')->insert([
            'origen' => 6,
            'destino' => 59,
            'combie_id' => 2,
            'duracion' => "21:36:00",
            'distancia' => 1089,
        ]);
        
        DB::table('rutas')->insert([
            'origen' => 7,
            'destino' => 58,
            'combie_id' =>6,
            'duracion' => "03:03:00",
            'distancia' =>1664,
        ]);

        DB::table('rutas')->insert([
            'origen' => 8,
            'destino' => 57,
            'combie_id' => 25,
            'duracion' => "10:02:00",
            'distancia' => 1696,
        ]);

        DB::table('rutas')->insert([
            'origen' => 9,
            'destino' => 56,
            'combie_id' => 1,
            'duracion' => "17:14:00",
            'distancia' => 1839,
        ]);
        
        DB::table('rutas')->insert([
            'origen' => 10,
            'destino' => 55,
            'combie_id' => 30,
            'duracion' => "2:37:00",
            'distancia' => 892,
        ]);

        DB::table('rutas')->insert([
            'origen' => 11,
            'destino' => 54,
            'combie_id' => 29,
            'duracion' => "22:41:00",
            'distancia' => 434,
        ]);

        DB::table('rutas')->insert([
            'origen' => 12,
            'destino' => 53,
            'combie_id' => 19,
            'duracion' => "20:17:00",
            'distancia' => 1303,
        ]);
        
        DB::table('rutas')->insert([
            'origen' => 13,
            'destino' => 52,
            'combie_id' => 20,
            'duracion' => "16:22:00",
            'distancia' => 1615,
        ]);

        DB::table('rutas')->insert([
            'origen' => 14,
            'destino' => 51,
            'combie_id' => 8,
            'duracion' => "06:59:00",
            'distancia' => 692,
        ]);
/* El que lo quiera completar, lo completa
        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);
        
        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);

        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);

        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);
        
        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);

        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);

        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);
        
        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);

        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);

        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);
        
        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);

        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);

        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);
        
        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);

        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);

        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);
        
        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);

        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);

        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);
        
        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);

        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);

        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);
        
        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);

        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);

        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);
        
        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);

        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);

        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);
        
        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);

        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);

        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);
        
        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);

        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);

        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);
        
        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);

        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);

        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);
        
        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);

        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);

        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);
        
        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);

        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);

        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);
        
        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);

        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);

        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);
        
        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);

        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);

        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);
        
        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]);

        DB::table('rutas')->insert([
            'origen' =>,
            'destino' =>,
            'combie_id' =>,
            'duracion' => Str::strtotime("13:00:00"),
            'distancia' =>,
        ]); */        
    }
}
