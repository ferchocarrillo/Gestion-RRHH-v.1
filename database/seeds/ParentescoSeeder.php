<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParentescoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parentescos')->truncate();

        DB::table('parentescos')->insert(['parentesco'=> 'Abuelo(a)']);
        DB::table('parentescos')->insert(['parentesco'=> 'Amigo(a)']);
        DB::table('parentescos')->insert(['parentesco'=> 'Compañero(a)']);
        DB::table('parentescos')->insert(['parentesco'=> 'Conyugue']);
        DB::table('parentescos')->insert(['parentesco'=> 'Cuñado(a)']);
        DB::table('parentescos')->insert(['parentesco'=> 'Esposo(a)']);
        DB::table('parentescos')->insert(['parentesco'=> 'Expareja']);
        DB::table('parentescos')->insert(['parentesco'=> 'Hermano(a)']);
        DB::table('parentescos')->insert(['parentesco'=> 'Hijo(a)']);
        DB::table('parentescos')->insert(['parentesco'=> 'Madre']);
        DB::table('parentescos')->insert(['parentesco'=> 'Novio(a)']);
        DB::table('parentescos')->insert(['parentesco'=> 'Padre']);
        DB::table('parentescos')->insert(['parentesco'=> 'Pareja']);
        DB::table('parentescos')->insert(['parentesco'=> 'Primo(a)']);
        DB::table('parentescos')->insert(['parentesco'=> 'Suegro(a)']);
        DB::table('parentescos')->insert(['parentesco'=> 'Tio(a)']);
        DB::table('parentescos')->insert(['parentesco'=> 'Ninguno']);



    }
}
