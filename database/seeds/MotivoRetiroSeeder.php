<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class MotivoRetiroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::dropIfExists('motivo_retiros');
        Schema::create('motivo_retiros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('motivo');

        });

        DB::table('motivo_retiros')->truncate();
        DB::table('motivo_retiros')->insert(['motivo'=> 'Renuncia Voluntaria']);
        DB::table('motivo_retiros')->insert(['motivo'=> 'Abandono De Cargo']);        
        DB::table('motivo_retiros')->insert(['motivo'=> 'Terminacion De Contrato Justa Causa']);
        DB::table('motivo_retiros')->insert(['motivo'=> 'Malas Practicas']);
        DB::table('motivo_retiros')->insert(['motivo'=> 'Procesos Disciplinarios']);
        DB::table('motivo_retiros')->insert(['motivo'=> 'Finalizacion Etapa Productiva Sena']);
      DB::table('motivo_retiros')->insert(['motivo'=> 'Periodo De Prueba']);
      DB::table('motivo_retiros')->insert(['motivo'=> 'Sin Justa Causa']);
      DB::table('motivo_retiros')->insert(['motivo'=> 'Periodo De Prueba Y Abandono De Cargo']);




    }

                /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('motivo_retiros');
    }
}
