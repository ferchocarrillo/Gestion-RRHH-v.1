<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TViviendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //t_viviendas

        DB::table('t_viviendas')->truncate();

        DB::table('t_viviendas')->insert([     'tvivienda'=> 'Arrendada',]);
        DB::table('t_viviendas')->insert([     'tvivienda'=> 'Propia',]);
        DB::table('t_viviendas')->insert([     'tvivienda'=> 'Familiar',]);


    }
}
