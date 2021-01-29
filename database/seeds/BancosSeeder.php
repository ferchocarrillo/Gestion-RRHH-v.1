<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class BancosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bancos')->truncate();

DB::table('bancos')->insert(['banco'=>"Banco Colpatria"]);
DB::table('bancos')->insert(['banco'=>"Banco de Bogotá"]);
DB::table('bancos')->insert(['banco'=>"Banco Popular"]);
DB::table('bancos')->insert(['banco'=>"Banco CorpBanca"]);
DB::table('bancos')->insert(['banco'=>"Bancolombia"]);
DB::table('bancos')->insert(['banco'=>"Citibank"]);
DB::table('bancos')->insert(['banco'=>"Banco GNB Sudameris"]);
DB::table('bancos')->insert(['banco'=>"BBVA Colombia"]);
DB::table('bancos')->insert(['banco'=>"Banco de Occidente"]);
DB::table('bancos')->insert(['banco'=>"Banco Caja Social S.A."]);
DB::table('bancos')->insert(['banco'=>"Banco Davivienda"]);
DB::table('bancos')->insert(['banco'=>"Banagrario"]);
DB::table('bancos')->insert(['banco'=>"AV Villas"]);
DB::table('bancos')->insert(['banco'=>"Credifinanciera S.A."]);
DB::table('bancos')->insert(['banco'=>"Bancamía S.A."]);
DB::table('bancos')->insert(['banco'=>"Banco W S.A."]);
DB::table('bancos')->insert(['banco'=>"Bancoomeva"]);
DB::table('bancos')->insert(['banco'=>"Finandina"]);
DB::table('bancos')->insert(['banco'=>"Banco Falabella S.A."]);
DB::table('bancos')->insert(['banco'=>"Banco Pichincha S.A."]);
DB::table('bancos')->insert(['banco'=>"Coopcentral"]);
DB::table('bancos')->insert(['banco'=>"Banco Santander"]);
DB::table('bancos')->insert(['banco'=>"Banco Mundo Mujer S.A."]);
DB::table('bancos')->insert(['banco'=>"Mibanco S.A."]);
DB::table('bancos')->insert(['banco'=>"Banco Serfinanza S.A."]);

}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bancos');
    }

}
