<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoContratoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_contratos')->truncate();


        DB::table('tipo_contratos')->insert([     'tipoCon'=> 'Indefidido',]);
        DB::table('tipo_contratos')->insert([     'tipoCon'=> 'Temporal',]);
        DB::table('tipo_contratos')->insert([     'tipoCon'=> 'Aprendizaje',]);
        DB::table('tipo_contratos')->insert([     'tipoCon'=> 'Practicas',]);
        DB::table('tipo_contratos')->insert([     'tipoCon'=> 'Obra labor',]);
        DB::table('tipo_contratos')->insert([     'tipoCon'=> 'Prestacion de servicios',]);




    }
}
