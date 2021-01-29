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

        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Autopista',]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Avenida', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Avenida calle', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Avenida carrera', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Calle', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Callejon', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Camino', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Campo', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Carrera', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Carretera', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Centro', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Centro administrativo', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Centro comercial', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Centro urbano', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Comuna', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Corregimiento', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Cruce', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Crucero', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Cubis', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Diagonal', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Distrito militar', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Entrada', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Esquina', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Finca', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'KDX', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Kilometro', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'LLorente', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Mercado', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Parcela',]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Parque', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Pasaje', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Paseo', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Playa', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Plaza', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Polideportivo', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Pozo', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Pozon', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Puente', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Resguardo', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Retiro', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Salida', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Subida', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Tabiles', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Terminal', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Timba', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Transversal', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Troncal', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Via', ]);
        DB::table('tipo_vias')->insert([     'TipoVia'=> 'Zona', ]);


        }
}
