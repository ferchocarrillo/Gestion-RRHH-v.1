<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Tipo_viasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_vias')->truncate();

        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Autopista',]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Avenida', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Avenida calle', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Avenida carrera', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Calle', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Callejon', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Camino', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Campo', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Carrera', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Carretera', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Centro', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Centro administrativo', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Centro comercial', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Centro urbano', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Comuna', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Corregimiento', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Cruce', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Crucero', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Cubis', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Diagonal', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Distrito militar', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Entrada', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Esquina', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Finca', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'KDX', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Kilometro', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'LLorente', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Mercado', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Parcela',]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Parque', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Pasaje', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Paseo', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Playa', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Plaza', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Polideportivo', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Pozo', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Pozon', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Puente', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Resguardo', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Retiro', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Salida', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Subida', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Tabiles', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Terminal', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Timba', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Transversal', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Troncal', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Via', ]);
        DB::table('tipo_vias')->insert([     'tipo_vias'=> 'Zona', ]);


        }
}
