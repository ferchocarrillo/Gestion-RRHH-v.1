<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoDoc2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_doc2s')->truncate();


        DB::table('tipo_doc2s')->insert([     'tipo_doc2'=> 'CC',]);
        DB::table('tipo_doc2s')->insert([     'tipo_doc2'=> 'CE',]);
        DB::table('tipo_doc2s')->insert([     'tipo_doc2'=> 'PEP',]);

    }
}
