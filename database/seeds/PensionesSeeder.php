<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PensionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pensiones')->truncate();

        DB::table('pensiones')->insert(['fondo'=> 'Colfondos']);
        DB::table('pensiones')->insert(['fondo'=> 'Colpensiones']);
        DB::table('pensiones')->insert(['fondo'=> 'Compensar']);
        DB::table('pensiones')->insert(['fondo'=> 'Oldmutual']);
        DB::table('pensiones')->insert(['fondo'=> 'Porvenir']);
        DB::table('pensiones')->insert(['fondo'=> 'Protección']);

    }
}
