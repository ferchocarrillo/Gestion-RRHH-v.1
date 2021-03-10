<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


class CausasRetiroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('causas_retiros')->truncate();

        DB::table('causas_retiros')->insert(['causalesR'=>'Abandono']);
        DB::table('causas_retiros')->insert(['causalesR'=>'Renuncia']);
        DB::table('causas_retiros')->insert(['causalesR'=>'Retirado']);
        DB::table('causas_retiros')->insert(['causalesR'=>'Terminación De Contrato']);








    }
}
