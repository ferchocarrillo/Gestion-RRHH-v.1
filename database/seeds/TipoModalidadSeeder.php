<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoModalidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_modalidads')->truncate();

        DB::table('tipo_modalidads')->insert([     'tipoModalidad'=> 'Presencial',]);
        DB::table('tipo_modalidads')->insert([     'tipoModalidad'=> 'Suplementario',]);
        DB::table('tipo_modalidads')->insert([     'tipoModalidad'=> 'Autonomo',]);


    }
}
