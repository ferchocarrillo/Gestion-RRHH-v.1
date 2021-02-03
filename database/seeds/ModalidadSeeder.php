<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModalidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modalidads')->truncate();

        DB::table('modalidads')->insert(['modalidad'=> 'Sede']);
        DB::table('modalidads')->insert(['modalidad'=> 'Home Office']);
    }
}
