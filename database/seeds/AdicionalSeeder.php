<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdicionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('adicional')->truncate();

        DB::table('adicional')->insert(['adicional'=>"Agrupación"]);
        DB::table('adicional')->insert(['adicional'=>"Apartamento"]);
        DB::table('adicional')->insert(['adicional'=>"Bloque"]);
        DB::table('adicional')->insert(['adicional'=>"Bodega"]);
        DB::table('adicional')->insert(['adicional'=>"Casa"]);
        DB::table('adicional')->insert(['adicional'=>"Célula"]);
        DB::table('adicional')->insert(['adicional'=>"Conjunto"]);
        DB::table('adicional')->insert(['adicional'=>"Consultorio"]);
        DB::table('adicional')->insert(['adicional'=>"Depósito"]);
        DB::table('adicional')->insert(['adicional'=>"Edificio"]);
        DB::table('adicional')->insert(['adicional'=>"Este"]);
        DB::table('adicional')->insert(['adicional'=>"Etapa"]);
        DB::table('adicional')->insert(['adicional'=>"Garaje"]);
        DB::table('adicional')->insert(['adicional'=>"Garaje Sótano"]);
        DB::table('adicional')->insert(['adicional'=>"Interior"]);
        DB::table('adicional')->insert(['adicional'=>"Kiosko"]);
        DB::table('adicional')->insert(['adicional'=>"Local"]);
        DB::table('adicional')->insert(['adicional'=>"Lote"]);
        DB::table('adicional')->insert(['adicional'=>"Manzana"]);
        DB::table('adicional')->insert(['adicional'=>"Mezzanine"]);
        DB::table('adicional')->insert(['adicional'=>"Módulo"]);
        DB::table('adicional')->insert(['adicional'=>"Norte"]);
        DB::table('adicional')->insert(['adicional'=>"Occidente"]);
        DB::table('adicional')->insert(['adicional'=>"Oeste"]);
        DB::table('adicional')->insert(['adicional'=>"Oficina"]);
        DB::table('adicional')->insert(['adicional'=>"Penthouse"]);
        DB::table('adicional')->insert(['adicional'=>"Piso"]);
        DB::table('adicional')->insert(['adicional'=>"Puesto"]);
        DB::table('adicional')->insert(['adicional'=>"Salon Comunal"]);
        DB::table('adicional')->insert(['adicional'=>"Sector"]);
        DB::table('adicional')->insert(['adicional'=>"Sede"]);
        DB::table('adicional')->insert(['adicional'=>"Semisótano"]);
        DB::table('adicional')->insert(['adicional'=>"Solar"]);
        DB::table('adicional')->insert(['adicional'=>"Supermanzana"]);
        DB::table('adicional')->insert(['adicional'=>"Sur"]);
        DB::table('adicional')->insert(['adicional'=>"Torre"]);
        DB::table('adicional')->insert(['adicional'=>"Unidad"]);
        DB::table('adicional')->insert(['adicional'=>"Unidad Residencial"]);
        DB::table('adicional')->insert(['adicional'=>"Urbanización"]);
        DB::table('adicional')->insert(['adicional'=>"Vereda"]);


    }
}
