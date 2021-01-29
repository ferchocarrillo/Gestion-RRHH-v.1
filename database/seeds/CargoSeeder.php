<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\JhonatanPermission\Models\Sede;

class CargoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cargo')->truncate();

        DB::table('cargo')->insert([
            'cargo'=> 'Analista Contable'
        ]);

        DB::table('cargo')->insert([
            'cargo'=> 'Analista de Calidad'
        ]);

        DB::table('cargo')->insert([
            'cargo'=> 'Analista de Contratacion'
        ]);
        DB::table('cargo')->insert([
            'cargo'=> 'Analista de Reclutamiento y Seleccion'
        ]);
        DB::table('cargo')->insert([
            'cargo'=> 'Analista IT'
        ]);
        DB::table('cargo')->insert([
            'cargo'=> 'Asesor Comercial'
        ]);
        DB::table('cargo')->insert([
            'cargo'=> 'Asesor de Cartera'
        ]);
        DB::table('cargo')->insert([
            'cargo'=> 'Asesor de Servicio al Cliente'
        ]);
        DB::table('cargo')->insert([
            'cargo'=> 'Asistente Contable',
        ]);
        DB::table('cargo')->insert([
            'cargo'=> 'Auxiliar IT'
        ]);
        DB::table('cargo')->insert([
            'cargo'=> 'Coord. Administrativo'
        ]);
        DB::table('cargo')->insert([
            'cargo'=> 'Coordinador de Operacion'
        ]);
        DB::table('cargo')->insert([
            'cargo'=> 'Datamarshall'
        ]);
        DB::table('cargo')->insert([
            'cargo'=> 'Dir. de Operaciones'
        ]);
        DB::table('cargo')->insert([
            'cargo'=> 'Dir. IT'
        ]);
        DB::table('cargo')->insert([
            'cargo'=> 'Dir. RRHH'
        ]);
        DB::table('cargo')->insert([
            'cargo'=> 'Formador'
        ]);
        DB::table('cargo')->insert([
            'cargo'=> 'Gerencia Administrativa'
        ]);
        DB::table('cargo')->insert([
            'cargo'=> 'Gerencia Comercial'
        ]);

        DB::table('cargo')->insert([
            'cargo'=> 'Gerencia General'
        ]);
        DB::table('cargo')->insert([
            'cargo'=> 'Lider de Backoffice'
        ]);
        DB::table('cargo')->insert([
            'cargo'=> 'Lider de Calidad'
        ]);
        DB::table('cargo')->insert([
            'cargo'=> 'Lider de Formacion'
        ]);
        DB::table('cargo')->insert([
            'cargo'=> 'Recepcionista'
        ]);
        DB::table('cargo')->insert([
            'cargo'=> 'Supervisor'
        ]);
    }
}

