<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RhSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rhs')->truncate();

        DB::table('rhs')->insert(['tipo_rh'=>"O-"]);
        DB::table('rhs')->insert(['tipo_rh'=>"O+"]);
        DB::table('rhs')->insert(['tipo_rh'=>"A-"]);
        DB::table('rhs')->insert(['tipo_rh'=>"A+"]);
        DB::table('rhs')->insert(['tipo_rh'=>"B-"]);
        DB::table('rhs')->insert(['tipo_rh'=>"B+"]);
        DB::table('rhs')->insert(['tipo_rh'=>"AB"]);
        DB::table('rhs')->insert(['tipo_rh'=>"AB+"]);

    }
}
