<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Dependencia;

class DependenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dependencia')->truncate();

        DB::table('dependencia')->insert([
            'dependencia'=> 'Gerencia Administrativa y Financiera'
        ]);
        DB::table('dependencia')->insert([
            'dependencia'=> 'Gerencia Comercial y Operativa'
        ]);
        DB::table('dependencia')->insert([
            'dependencia'=> 'Operaciones '
        ]);
    }
}
