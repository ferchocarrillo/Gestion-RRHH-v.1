<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResidenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('residencia')->truncate();

        DB::table('residencia')->insert([
        'residencia'=> 'Bogotá',
        ]);

        DB::table('residencia')->insert([
            'residencia'=> 'Aledaños',
            ]);
    }
}
