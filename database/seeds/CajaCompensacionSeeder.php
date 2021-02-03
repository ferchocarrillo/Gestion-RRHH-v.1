<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CajaCompensacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('caja_compensacions')->truncate();
        DB::table('caja_compensacions')->insert(['entidad'=> 'Compensar']);
        DB::table('caja_compensacions')->insert(['entidad'=> 'Colsubsidio']);
        DB::table('caja_compensacions')->insert(['entidad'=> 'Cafam']);
        DB::table('caja_compensacions')->insert(['entidad'=> 'Comfaboy']);


    }
}
