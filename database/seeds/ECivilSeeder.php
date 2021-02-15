<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ECivilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('e_civils')->truncate();

        DB::table('e_civils')->insert(['e_civil'=> 'Soltero(a)']);
        DB::table('e_civils')->insert(['e_civil'=> 'Casado(a)']);
        DB::table('e_civils')->insert(['e_civil'=> 'Separado(a)']);
        DB::table('e_civils')->insert(['e_civil'=> 'Union libre']);
        DB::table('e_civils')->insert(['e_civil'=> 'Viudo(a)']);   
    }
}
