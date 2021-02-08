<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoDocSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_docs')->truncate();


        DB::table('tipo_docs')->insert([     'tipo_doc'=> 'CC',]);
        DB::table('tipo_docs')->insert([     'tipo_doc'=> 'CE',]);
        DB::table('tipo_docs')->insert([     'tipo_doc'=> 'PEP',]);
        DB::table('tipo_docs')->insert([     'tipo_doc'=> 'RC',]);
        DB::table('tipo_docs')->insert([     'tipo_doc'=> 'TI',]);
        DB::table('tipo_docs')->insert([     'tipo_doc'=> 'MS',]);
        DB::table('tipo_docs')->insert([     'tipo_doc'=> 'AS',]);
        DB::table('tipo_docs')->insert([     'tipo_doc'=> 'PAS',]);




    }
}
