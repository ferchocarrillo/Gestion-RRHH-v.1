<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrientacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orientacion')->truncate();

        DB::table('orientacion')->insert([
        'orientacion'=> 'ESTE',
        ]);
        DB::table('orientacion')->insert([
            'orientacion'=> 'NORTE',
            ]);
        DB::table('orientacion')->insert([
            'orientacion'=> 'OCCIDENTE',
            ]);
        DB::table('orientacion')->insert([
            'orientacion'=> 'OESTE',
            ]);
        DB::table('orientacion')->insert([
            'orientacion'=> 'SUR',
            ]);

    }
}
