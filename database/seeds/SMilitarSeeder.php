<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SMilitarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('s_militars')->truncate();
        DB::table('s_militars')->insert(['sMilitar'=>'Si',]);
        DB::table('s_militars')->insert(['sMilitar'=>'No',]);
    }
}
