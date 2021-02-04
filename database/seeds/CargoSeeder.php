<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\JhonatanPermission\Models\Sede;
use Illuminate\Support\Facades\Schema;

class CargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cargo')->truncate();

        DB::table('cargo')->insert(['cargo'=>'Analista Contable']);
        DB::table('cargo')->insert(['cargo'=>'Analista de bases']);
        DB::table('cargo')->insert(['cargo'=>'Analista de Calidad']);
        DB::table('cargo')->insert(['cargo'=>'Analista de Contratacion']);
        DB::table('cargo')->insert(['cargo'=>'Analista de nomina']);
        DB::table('cargo')->insert(['cargo'=>'Analista de Reclutamiento y Seleccion']);
        DB::table('cargo')->insert(['cargo'=>'Analista IT']);
        DB::table('cargo')->insert(['cargo'=>'Aprendiz Sena']);
        DB::table('cargo')->insert(['cargo'=>'Asesor Comercial']);
        DB::table('cargo')->insert(['cargo'=>'Asesor de Cartera']);
        DB::table('cargo')->insert(['cargo'=>'Asesor de Servicio al Cliente']);
        DB::table('cargo')->insert(['cargo'=>'Asistente Contable']);
        DB::table('cargo')->insert(['cargo'=>'Auxiliar administrativo']);
        DB::table('cargo')->insert(['cargo'=>'Auxiliar contable']);
        DB::table('cargo')->insert(['cargo'=>'Auxiliar IT']);
        DB::table('cargo')->insert(['cargo'=>'Auxiliar SST']);
        DB::table('cargo')->insert(['cargo'=>'Backoffice']);
        DB::table('cargo')->insert(['cargo'=>'Coord. Administrativo']);
        DB::table('cargo')->insert(['cargo'=>'Coordinador administrativo']);
        DB::table('cargo')->insert(['cargo'=>'Coordinador de Operacion']);
        DB::table('cargo')->insert(['cargo'=>'Coordinador de operaciones']);
        DB::table('cargo')->insert(['cargo'=>'Datamarshall Junior']);
        DB::table('cargo')->insert(['cargo'=>'Datamarshall Senior']);
        DB::table('cargo')->insert(['cargo'=>'Director de operaciones']);
        DB::table('cargo')->insert(['cargo'=>'Director financiero']);
        DB::table('cargo')->insert(['cargo'=>'Director IT']);
        DB::table('cargo')->insert(['cargo'=>'Director RRHH']);
        DB::table('cargo')->insert(['cargo'=>'Formador junior']);
        DB::table('cargo')->insert(['cargo'=>'Formador senior']);
        DB::table('cargo')->insert(['cargo'=>'Gerencia Administrativa']);
        DB::table('cargo')->insert(['cargo'=>'Gerencia Comercial']);
        DB::table('cargo')->insert(['cargo'=>'Gerencia General']);
        DB::table('cargo')->insert(['cargo'=>'Gerente comercial']);
        DB::table('cargo')->insert(['cargo'=>'Gerente financiero']);
        DB::table('cargo')->insert(['cargo'=>'Gerente general']);
        DB::table('cargo')->insert(['cargo'=>'Gestor documental']);
        DB::table('cargo')->insert(['cargo'=>'Jefe de operaciones']);
        DB::table('cargo')->insert(['cargo'=>'Lider Backoffice']);
        DB::table('cargo')->insert(['cargo'=>'Lider datos y metricas']);
        DB::table('cargo')->insert(['cargo'=>'Lider de Calidad']);
        DB::table('cargo')->insert(['cargo'=>'Lider de Formacion']);
        DB::table('cargo')->insert(['cargo'=>'Lider desarrollo']);
        DB::table('cargo')->insert(['cargo'=>'Recepcionista']);
        DB::table('cargo')->insert(['cargo'=>'Recuperador de ventas']);
        DB::table('cargo')->insert(['cargo'=>'Servicios generales']);
        DB::table('cargo')->insert(['cargo'=>'Supervisor']);
        DB::table('cargo')->insert(['cargo'=>'Supervisor']);
        DB::table('cargo')->insert(['cargo'=>'Torre de control']);

    }


        /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cargo');
    }
}

