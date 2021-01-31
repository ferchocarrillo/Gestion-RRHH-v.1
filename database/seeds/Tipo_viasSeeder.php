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
        DB::table('tipovia')->truncate();

        DB::table('tipovia')->insert([     'TipoVia'=> 'Autopista',]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Avenida', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Avenida calle', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Avenida carrera', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Calle', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Callejon', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Camino', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Campo', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Carrera', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Carretera', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Centro', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Centro administrativo', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Centro comercial', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Centro urbano', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Comuna', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Corregimiento', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Cruce', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Crucero', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Cubis', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Diagonal', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Distrito militar', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Entrada', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Esquina', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Finca', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'KDX', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Kilometro', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'LLorente', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Mercado', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Parcela',]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Parque', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Pasaje', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Paseo', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Playa', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Plaza', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Polideportivo', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Pozo', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Pozon', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Puente', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Resguardo', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Retiro', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Salida', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Subida', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Tabiles', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Terminal', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Timba', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Transversal', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Troncal', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Via', ]);
        DB::table('tipovia')->insert([     'TipoVia'=> 'Zona', ]);


        }
}
