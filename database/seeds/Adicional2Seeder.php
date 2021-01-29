<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Adicional2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('adicional2')->truncate();

        DB::table('adicional2')->insert(['adicional'=>"Casa"]);
        DB::table('adicional2')->insert(['adicional'=>"Local"]);
        DB::table('adicional2')->insert(['adicional'=>"Lote"]);
        DB::table('adicional2')->insert(['adicional'=>"Manzana"]);
        DB::table('adicional2')->insert(['adicional'=>"Mezzanine"]);
        DB::table('adicional2')->insert(['adicional'=>"Oficina"]);
        DB::table('adicional2')->insert(['adicional'=>"Piso"]);
        DB::table('adicional2')->insert(['adicional'=>"Apartamento"]);
        DB::table('adicional2')->insert(['adicional'=>"Etapa"]);
        DB::table('adicional2')->insert(['adicional'=>"Garaje"]);
        DB::table('adicional2')->insert(['adicional'=>"Garaje Sótano"]);
        DB::table('adicional2')->insert(['adicional'=>"Interior"]);
        DB::table('adicional2')->insert(['adicional'=>"Penthouse"]);
        DB::table('adicional2')->insert(['adicional'=>"Puesto"]);
        DB::table('adicional2')->insert(['adicional'=>"Módulo"]);
        DB::table('adicional2')->insert(['adicional'=>"Sede"]);
        DB::table('adicional2')->insert(['adicional'=>"Semisótano"]);
        DB::table('adicional2')->insert(['adicional'=>"Supermanzana"]);
        DB::table('adicional2')->insert(['adicional'=>"Torre"]);
        DB::table('adicional2')->insert(['adicional'=>"Unidad"]);



    }
}
