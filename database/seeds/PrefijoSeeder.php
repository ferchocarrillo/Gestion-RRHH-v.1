<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrefijoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('prefijo')->truncate();

       DB::table('prefijo')->insert(['prefijo'=>"A"]);
       DB::table('prefijo')->insert(['prefijo'=>"A BIS"]);
       DB::table('prefijo')->insert(['prefijo'=>"B"]);
       DB::table('prefijo')->insert(['prefijo'=>"B BIS"]);
       DB::table('prefijo')->insert(['prefijo'=>"BIS"]);
       DB::table('prefijo')->insert(['prefijo'=>"C"]);
       DB::table('prefijo')->insert(['prefijo'=>"C BIS"]);
       DB::table('prefijo')->insert(['prefijo'=>"D"]);
       DB::table('prefijo')->insert(['prefijo'=>"D BIS"]);
       DB::table('prefijo')->insert(['prefijo'=>"E"]);
       DB::table('prefijo')->insert(['prefijo'=>"E BIS"]);
       DB::table('prefijo')->insert(['prefijo'=>"ESTE"]);
       DB::table('prefijo')->insert(['prefijo'=>"F"]);
       DB::table('prefijo')->insert(['prefijo'=>"F BIS"]);
       DB::table('prefijo')->insert(['prefijo'=>"G"]);
       DB::table('prefijo')->insert(['prefijo'=>"G BIS"]);
       DB::table('prefijo')->insert(['prefijo'=>"H"]);
       DB::table('prefijo')->insert(['prefijo'=>"H BIS"]);
       DB::table('prefijo')->insert(['prefijo'=>"I"]);
       DB::table('prefijo')->insert(['prefijo'=>"I BIS"]);
       DB::table('prefijo')->insert(['prefijo'=>"J"]);
       DB::table('prefijo')->insert(['prefijo'=>"J BIS"]);
       DB::table('prefijo')->insert(['prefijo'=>"NORTE"]);
       DB::table('prefijo')->insert(['prefijo'=>"OESTE"]);
       DB::table('prefijo')->insert(['prefijo'=>"SUR"]);





   }
}
