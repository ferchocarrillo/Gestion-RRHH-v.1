<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CampanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

     
        DB::table('campanas')->truncate();

        DB::table('campanas')->insert(['campana'=>"ETB"]);
        DB::table('campanas')->insert(['campana'=>"Movistar"]);
        DB::table('campanas')->insert(['campana'=>"QNT"]);
        DB::table('campanas')->insert(['campana'=>"Staff Mentius"]);
        DB::table('campanas')->insert(['campana'=>"Vanti"]);
        DB::table('campanas')->insert(['campana'=>"Vanti S A C"]);


    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campanas');
    }

}