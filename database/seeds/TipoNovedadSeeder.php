<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class TipoNovedadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::dropIfExists('tipo_novedads');
        Schema::create('tipo_novedads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TipoNovedad');

        });

        DB::table('tipo_novedads')->insert(['TipoNovedad'=>'Abandono']);
        DB::table('tipo_novedads')->insert(['TipoNovedad'=>'Aislamiento']);
        DB::table('tipo_novedads')->insert(['TipoNovedad'=>'Calamidad']);
        DB::table('tipo_novedads')->insert(['TipoNovedad'=>'Capacitación']);
        DB::table('tipo_novedads')->insert(['TipoNovedad'=>'Cumplimiento De Meta']);
        DB::table('tipo_novedads')->insert(['TipoNovedad'=>'Eps']);
        DB::table('tipo_novedads')->insert(['TipoNovedad'=>'Incapacidad']);
        DB::table('tipo_novedads')->insert(['TipoNovedad'=>'Injustificada']);
        DB::table('tipo_novedads')->insert(['TipoNovedad'=>'Licencia De Luto']);
        DB::table('tipo_novedads')->insert(['TipoNovedad'=>'Licencia De Maternidad']);
        DB::table('tipo_novedads')->insert(['TipoNovedad'=>'Licencia No Remunerada']);
        DB::table('tipo_novedads')->insert(['TipoNovedad'=>'No Reporta']);
        DB::table('tipo_novedads')->insert(['TipoNovedad'=>'Permiso']);
        DB::table('tipo_novedads')->insert(['TipoNovedad'=>'Posible Renuncia']);
        DB::table('tipo_novedads')->insert(['TipoNovedad'=>'Problemas Técnicos']);
        DB::table('tipo_novedads')->insert(['TipoNovedad'=>'Renuncia']);
        DB::table('tipo_novedads')->insert(['TipoNovedad'=>'Retirado']);
        DB::table('tipo_novedads')->insert(['TipoNovedad'=>'Sin Conexión']);
        DB::table('tipo_novedads')->insert(['TipoNovedad'=>'Suspensión']);
        DB::table('tipo_novedads')->insert(['TipoNovedad'=>'Terminación De Contrato']);
        DB::table('tipo_novedads')->insert(['TipoNovedad'=>'Vacaciones']);
  
        
    }

                    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_novedads');
    }
}
