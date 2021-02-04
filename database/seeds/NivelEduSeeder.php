<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class NivelEduSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Schema::create('nivel_edus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nivelEdu');

        });

        DB::table('nivel_edus')->truncate();

        DB::table('nivel_edus')->insert(['nivelEdu'=> 'Bachiller']);
        DB::table('nivel_edus')->insert(['nivelEdu'=> 'Bachiller - Técnico']);
        DB::table('nivel_edus')->insert(['nivelEdu'=> 'Técnico']);
        DB::table('nivel_edus')->insert(['nivelEdu'=> 'Técnico Profesional']);
        DB::table('nivel_edus')->insert(['nivelEdu'=> 'Técnico Laboral']);
        DB::table('nivel_edus')->insert(['nivelEdu'=> 'Tecnólogo']);
        DB::table('nivel_edus')->insert(['nivelEdu'=> 'Universitario']);
        DB::table('nivel_edus')->insert(['nivelEdu'=> 'Pregrado']);
        DB::table('nivel_edus')->insert(['nivelEdu'=> 'Profesional']);
        DB::table('nivel_edus')->insert(['nivelEdu'=> 'Postgrado']);
        DB::table('nivel_edus')->insert(['nivelEdu'=> 'Especialización']);
        DB::table('nivel_edus')->insert(['nivelEdu'=> 'Licenciado']);
    }

            /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nivel_edus');
    }
}
