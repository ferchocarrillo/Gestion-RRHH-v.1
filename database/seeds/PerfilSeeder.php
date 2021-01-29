<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\JhonatanPermission\Models\Perfil;

class PerfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perfils')->truncate();

        DB::table('perfils')->insert([
            'perfil'=> 'Atención al cliente'
        ]);
        DB::table('perfils')->insert([
            'perfil'=> 'Ventas telefonía'
        ]);
        DB::table('perfils')->insert([
            'perfil'=> 'Ventas seguros'
        ]);
        DB::table('perfils')->insert([
            'perfil'=> 'Cobranza'
        ]);
        DB::table('perfils')->insert([
            'perfil'=> 'Supervisor'
        ]);
        DB::table('perfils')->insert([
            'perfil'=> 'Administrativo'
        ]);
        DB::table('perfils')->insert([
            'perfil'=> 'Archivo'
        ]);
        DB::table('perfils')->insert([
            'perfil'=> 'Servicios generales​'
        ]);
        DB::table('perfils')->insert([
            'perfil'=> 'Atención presencial​'
        ]);
        DB::table('perfils')->insert([
            'perfil'=> 'Venta presencial'
        ]);
        DB::table('perfils')->insert([
            'perfil'=> 'Ya estuvo en Mentius'
        ]);
        DB::table('perfils')->insert([
            'perfil'=> 'Nacionalidad'
        ]);
        DB::table('perfils')->insert([
            'perfil'=> 'No experiencia'
        ]);
        DB::table('perfils')->insert([
            'perfil'=> 'Contable'
        ]);
        DB::table('perfils')->insert([
            'perfil'=> 'SST'
        ]);
        DB::table('perfils')->insert([
            'perfil'=> 'Backoffice'
        ]);
        DB::table('perfils')->insert([
            'perfil'=> 'Calidad'
        ]);
        DB::table('perfils')->insert([
            'perfil'=> 'Bienestar'
        ]);
        DB::table('perfils')->insert([
            'perfil'=> 'Contratación'
        ]);
        DB::table('perfils')->insert([
            'perfil'=> 'Reclutamiento'
        ]);



    }
}
