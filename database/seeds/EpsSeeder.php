<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EpsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eps')->truncate();

        DB::table('eps')->insert(['entidad'=> 'Aliansalud Eps (Antes Colmedica)']);
        DB::table('eps')->insert(['entidad'=> 'Atme salud ']);
        DB::table('eps')->insert(['entidad'=> 'Cafesalud']);
        DB::table('eps')->insert(['entidad'=> 'Cajacopi Atlantico']);
        DB::table('eps')->insert(['entidad'=> 'Capital Salud']);
        DB::table('eps')->insert(['entidad'=> 'Comfachoco']);
        DB::table('eps')->insert(['entidad'=> 'Comfacundi']);
        DB::table('eps')->insert(['entidad'=> 'Comparta']);
        DB::table('eps')->insert(['entidad'=> 'Compensar']);
        DB::table('eps')->insert(['entidad'=> 'Convida']);
        DB::table('eps')->insert(['entidad'=> 'Coomeva']);
        DB::table('eps')->insert(['entidad'=> 'Coosalud']);
        DB::table('eps')->insert(['entidad'=> 'Cruz Blanca']);
        DB::table('eps')->insert(['entidad'=> 'Eps Ecoopsos S.A.S']);
        DB::table('eps')->insert(['entidad'=> 'EPS Sanitas']);
        DB::table('eps')->insert(['entidad'=> 'Eps Sura (Antes Susalud)']);
        DB::table('eps')->insert(['entidad'=> 'Famisanar']);
        DB::table('eps')->insert(['entidad'=> 'Medimas']);
        DB::table('eps')->insert(['entidad'=> 'Mutual Ser']);
        DB::table('eps')->insert(['entidad'=> 'Nueva E.P.S.']);
        DB::table('eps')->insert(['entidad'=> 'S.O.S. Servicio Occidental De Salud S.A.']);
        DB::table('eps')->insert(['entidad'=> 'Salud Total']);
        DB::table('eps')->insert(['entidad'=> 'Salud Vida ']);
        DB::table('eps')->insert(['entidad'=> 'Sanidad Militar']);


    }
}
