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

        DB::table('area')->insert(['id_area'=>1,'Id_dependencia'=>'Gerencia Administrativa y Financiera' ,'Area'=>'Staff Administrativo']);
        DB::table('area')->insert(['id_area'=>2,'Id_dependencia'=>'Gerencia Administrativa y Financiera' ,'Area'=>'Área recursos humanos']);
        DB::table('area')->insert(['id_area'=>3,'Id_dependencia'=>'Gerencia Administrativa y Financiera' ,'Area'=>'Formación']);
        DB::table('area')->insert(['id_area'=>4,'Id_dependencia'=>'Gerencia Administrativa y Financiera' ,'Area'=>'Área  contable/ Financiera']);
        DB::table('area')->insert(['id_area'=>5,'Id_dependencia'=>'Gerencia Administrativa y Financiera' ,'Area'=>'Área administrativa']);
        DB::table('area')->insert(['id_area'=>6,'Id_dependencia'=>'Gerencia Comercial y Operativa'       ,'Area'=>'Direccion de operaciones']);
        DB::table('area')->insert(['id_area'=>7,'Id_dependencia'=>'Operaciones'                          ,'Area'=>'Área de calidad']);
        DB::table('area')->insert(['id_area'=>8,'Id_dependencia'=>'Operaciones'                          ,'Area'=>'Back Office']);
        DB::table('area')->insert(['id_area'=>9,'Id_dependencia'=>'Operaciones'                          ,'Area'=>'Métricas y datos']);
        DB::table('area')->insert(['id_area'=>10,'Id_dependencia'=>'Operaciones'                         ,'Area'=>'Dirección IT']);
        
    }


}
