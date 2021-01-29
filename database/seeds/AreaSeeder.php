<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\JhonatanPermission\Models\Sede;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('area')->truncate();

        DB::table('area')->insert(['id_area'=>1,'dependencia'=>'Gerencia Administrativa y Financiera' ,'area'=>'Staff Administrativo']);
        DB::table('area')->insert(['id_area'=>2,'dependencia'=>'Gerencia Administrativa y Financiera' ,'area'=>'Área recursos humanos']);
        DB::table('area')->insert(['id_area'=>3,'dependencia'=>'Gerencia Administrativa y Financiera' ,'area'=>'Formación']);
        DB::table('area')->insert(['id_area'=>4,'dependencia'=>'Gerencia Administrativa y Financiera' ,'area'=>'Área  contable/ Financiera']);
        DB::table('area')->insert(['id_area'=>5,'dependencia'=>'Gerencia Administrativa y Financiera' ,'area'=>'Área administrativa']);
        DB::table('area')->insert(['id_area'=>6,'dependencia'=>'Gerencia Comercial y Operativa'       ,'area'=>'Direccion de operaciones']);
        DB::table('area')->insert(['id_area'=>7,'dependencia'=>'Operaciones'                          ,'area'=>'Área de calidad']);
        DB::table('area')->insert(['id_area'=>8,'dependencia'=>'Operaciones'                          ,'area'=>'Back Office']);
        DB::table('area')->insert(['id_area'=>9,'dependencia'=>'Operaciones'                          ,'area'=>'Métricas y datos']);
        DB::table('area')->insert(['id_area'=>10,'dependencia'=>'Operaciones'                         ,'area'=>'Dirección IT']);
        
    }


}
