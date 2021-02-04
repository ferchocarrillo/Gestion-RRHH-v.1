<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CargoEntSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cargoEnt')->truncate();

        
        DB::table('cargoEnt')->insert(['cargo'=>'Analista Contable']);
        DB::table('cargoEnt')->insert(['cargo'=>'Analista de bases']);
        DB::table('cargoEnt')->insert(['cargo'=>'Analista de Calidad']);
        DB::table('cargoEnt')->insert(['cargo'=>'Analista de Contratacion']);
        DB::table('cargoEnt')->insert(['cargo'=>'Analista de nomina']);
        DB::table('cargoEnt')->insert(['cargo'=>'Analista de Reclutamiento y Seleccion']);
        DB::table('cargoEnt')->insert(['cargo'=>'Analista IT']);
        DB::table('cargoEnt')->insert(['cargo'=>'Aprendiz Sena']);
        DB::table('cargoEnt')->insert(['cargo'=>'Asesor Comercial']);
        DB::table('cargoEnt')->insert(['cargo'=>'Asesor de Cartera']);
        DB::table('cargoEnt')->insert(['cargo'=>'Asesor de Servicio al Cliente']);
        DB::table('cargoEnt')->insert(['cargo'=>'Asistente Contable']);
        DB::table('cargoEnt')->insert(['cargo'=>'Auxiliar administrativo']);
        DB::table('cargoEnt')->insert(['cargo'=>'Auxiliar contable']);
        DB::table('cargoEnt')->insert(['cargo'=>'Auxiliar IT']);
        DB::table('cargoEnt')->insert(['cargo'=>'Auxiliar SST']);
        DB::table('cargoEnt')->insert(['cargo'=>'Backoffice']);
        DB::table('cargoEnt')->insert(['cargo'=>'Coord. Administrativo']);
        DB::table('cargoEnt')->insert(['cargo'=>'Coordinador administrativo']);
        DB::table('cargoEnt')->insert(['cargo'=>'Coordinador de Operacion']);
        DB::table('cargoEnt')->insert(['cargo'=>'Coordinador de operaciones']);
        DB::table('cargoEnt')->insert(['cargo'=>'Datamarshall Junior']);
        DB::table('cargoEnt')->insert(['cargo'=>'Datamarshall Senior']);
        DB::table('cargoEnt')->insert(['cargo'=>'Director de operaciones']);
        DB::table('cargoEnt')->insert(['cargo'=>'Director financiero']);
        DB::table('cargoEnt')->insert(['cargo'=>'Director IT']);
        DB::table('cargoEnt')->insert(['cargo'=>'Director RRHH']);
        DB::table('cargoEnt')->insert(['cargo'=>'Formador junior']);
        DB::table('cargoEnt')->insert(['cargo'=>'Formador senior']);
        DB::table('cargoEnt')->insert(['cargo'=>'Gerencia Administrativa']);
        DB::table('cargoEnt')->insert(['cargo'=>'Gerencia Comercial']);
        DB::table('cargoEnt')->insert(['cargo'=>'Gerencia General']);
        DB::table('cargoEnt')->insert(['cargo'=>'Gerente comercial']);
        DB::table('cargoEnt')->insert(['cargo'=>'Gerente financiero']);
        DB::table('cargoEnt')->insert(['cargo'=>'Gerente general']);
        DB::table('cargoEnt')->insert(['cargo'=>'Gestor documental']);
        DB::table('cargoEnt')->insert(['cargo'=>'Jefe de operaciones']);
        DB::table('cargoEnt')->insert(['cargo'=>'Lider Backoffice']);
        DB::table('cargoEnt')->insert(['cargo'=>'Lider datos y metricas']);
        DB::table('cargoEnt')->insert(['cargo'=>'Lider de Calidad']);
        DB::table('cargoEnt')->insert(['cargo'=>'Lider de Formacion']);
        DB::table('cargoEnt')->insert(['cargo'=>'Lider desarrollo']);
        DB::table('cargoEnt')->insert(['cargo'=>'Recepcionista']);
        DB::table('cargoEnt')->insert(['cargo'=>'Recuperador de ventas']);
        DB::table('cargoEnt')->insert(['cargo'=>'Servicios generales']);
        DB::table('cargoEnt')->insert(['cargo'=>'Supervisor']);
        DB::table('cargoEnt')->insert(['cargo'=>'Supervisor']);
        DB::table('cargoEnt')->insert(['cargo'=>'Torre de control']);

    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cargoEnt');
    }

}
