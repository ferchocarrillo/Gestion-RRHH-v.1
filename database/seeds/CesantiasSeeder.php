<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CesantiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cesantias')->truncate();
        DB::table('cesantias')->insert(['fondo'=> 'Colfondos']);
        DB::table('cesantias')->insert(['fondo'=> 'Colpensiones']);
        DB::table('cesantias')->insert(['fondo'=> 'Compensar']);
        DB::table('cesantias')->insert(['fondo'=> 'Fondo Nacional Del Ahorro']);
        DB::table('cesantias')->insert(['fondo'=> 'Porvenir']);
        DB::table('cesantias')->insert(['fondo'=> 'Protección']);



    }
}
