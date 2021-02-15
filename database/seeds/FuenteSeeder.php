<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class FuenteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fuentes')->truncate();

        DB::table('fuentes')->insert(['fuente'=> 'Vincuventas']);
        DB::table('fuentes')->insert(['fuente'=> 'Computrabajo']);
        DB::table('fuentes')->insert(['fuente'=> 'SNE']);
        DB::table('fuentes')->insert(['fuente'=> 'Compensar']);
        DB::table('fuentes')->insert(['fuente'=> 'rt']);
        DB::table('fuentes')->insert(['fuente'=> 'rj']);
        DB::table('fuentes')->insert(['fuente'=> 'rc']);
        DB::table('fuentes')->insert(['fuente'=> 'univ']);
        DB::table('fuentes')->insert(['fuente'=> 'redes']);
        DB::table('fuentes')->insert(['fuente'=> 'hv']);
        DB::table('fuentes')->insert(['fuente'=> 'funda']);
    }
}
