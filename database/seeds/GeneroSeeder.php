<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('generos')->truncate();

        DB::table('generos')->insert(['genero'=> 'Masculino']);
        DB::table('generos')->insert(['genero'=> 'femenino']);
        DB::table('generos')->insert(['genero'=> 'Otro']);
    }
}
