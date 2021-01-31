<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FocoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('focos')->truncate();

        DB::table('focos')->insert(['foco'=> 'Azteca']);
        DB::table('focos')->insert(['foco'=> 'B2B']);
        DB::table('focos')->insert(['foco'=> 'Banda Ancha']);
        DB::table('focos')->insert(['foco'=> 'Banda Ancha Pymes']);
        DB::table('focos')->insert(['foco'=> 'Banda Ancha Soho']);
        DB::table('focos')->insert(['foco'=> 'CDS']);
        DB::table('focos')->insert(['foco'=> 'CDS Móvil']);
        DB::table('focos')->insert(['foco'=> 'Coorserpark']);
        DB::table('focos')->insert(['foco'=> 'ETB']);
        DB::table('focos')->insert(['foco'=> 'Inbound']);
        DB::table('focos')->insert(['foco'=> 'Inbound Chat']);
        DB::table('focos')->insert(['foco'=> 'Mentius']);
        DB::table('focos')->insert(['foco'=> 'Movistar Libre']);
        DB::table('focos')->insert(['foco'=> 'Nexo Créditos']);
        DB::table('focos')->insert(['foco'=> 'Phoenix']);
        DB::table('focos')->insert(['foco'=> 'Portabilidad']);
        DB::table('focos')->insert(['foco'=> 'Portabilidad Digital']);
        DB::table('focos')->insert(['foco'=> 'Portabilidad Lab']);
        DB::table('focos')->insert(['foco'=> 'Portabilidad Pymes']);
        DB::table('focos')->insert(['foco'=> 'Portabilidad Soho']);
        DB::table('focos')->insert(['foco'=> 'Premium']);
        DB::table('focos')->insert(['foco'=> 'Prepost']);
        DB::table('focos')->insert(['foco'=> 'QNT']);
        DB::table('focos')->insert(['foco'=> 'Reno Repo']);
        DB::table('focos')->insert(['foco'=> 'Staff']);
        DB::table('focos')->insert(['foco'=> 'Staff Administrativo']);
        DB::table('focos')->insert(['foco'=> 'Staff Calidad']);
        DB::table('focos')->insert(['foco'=> 'Staff Comercial']);
        DB::table('focos')->insert(['foco'=> 'Staff Datos Métricas Y Workforce']);
        DB::table('focos')->insert(['foco'=> 'Staff Desarrollo']);
        DB::table('focos')->insert(['foco'=> 'Staff Financiero']);
        DB::table('focos')->insert(['foco'=> 'Staff Formación']);
        DB::table('focos')->insert(['foco'=> 'Staff Gerencial']);
        DB::table('focos')->insert(['foco'=> 'Staff IT']);
        DB::table('focos')->insert(['foco'=> 'Staff RRHH']);
        DB::table('focos')->insert(['foco'=> 'Staff Validación']);
        DB::table('focos')->insert(['foco'=> 'Totalización']);
        DB::table('focos')->insert(['foco'=> 'Up Grade']);
        DB::table('focos')->insert(['foco'=> 'Up Grade fija']);
        DB::table('focos')->insert(['foco'=> 'Up Grade Lab']);
        DB::table('focos')->insert(['foco'=> 'Up Grade Pymes']);
        DB::table('focos')->insert(['foco'=> 'Vanti']);
        DB::table('focos')->insert(['foco'=> 'Vanti Retención']);
        DB::table('focos')->insert(['foco'=> 'Vanti S A C RPO']);
        DB::table('focos')->insert(['foco'=> 'Vanti S A C SAP']);
        DB::table('focos')->insert(['foco'=> 'Vanti Ventas']);

    }
}
