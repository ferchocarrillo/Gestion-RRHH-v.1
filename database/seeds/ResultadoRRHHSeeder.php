<?php

use Illuminate\Database\Seeder;

class ResultadoRRHHSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('resultado_r_r_h_h_s')->truncate();

        DB::table('resultado_r_r_h_h_s')->insert(['resultado'=>'Cargo requiere segunda entrevista',]);      
        DB::table('resultado_r_r_h_h_s')->insert(['resultado'=>'Enviado a capacitacion',]);
        DB::table('resultado_r_r_h_h_s')->insert(['resultado'=>'Enviado a contratación',]);
        DB::table('resultado_r_r_h_h_s')->insert(['resultado'=>'No aplica para el cargo',]);      
        DB::table('resultado_r_r_h_h_s')->insert(['resultado'=>'No contratado',]);
        DB::table('resultado_r_r_h_h_s')->insert(['resultado'=>'Postulado desistio de la oferta',]);
        DB::table('resultado_r_r_h_h_s')->insert(['resultado'=>'Otro',]);

    }
}
