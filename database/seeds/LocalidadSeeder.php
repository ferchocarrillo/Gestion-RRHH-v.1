<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocalidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('localidad')->truncate();

        DB::table('localidad')->insert(['id'=>'1','id_residencia'=>'1','localidad'=>'Usaquén']);
        DB::table('localidad')->insert(['id'=>'2','id_residencia'=>'1','localidad'=>'Chapinero']);
        DB::table('localidad')->insert(['id'=>'3','id_residencia'=>'1','localidad'=>'Santa Fe']);
        DB::table('localidad')->insert(['id'=>'4','id_residencia'=>'1','localidad'=>'San Cristóbal']);
        DB::table('localidad')->insert(['id'=>'5','id_residencia'=>'1','localidad'=>'Usme']);
        DB::table('localidad')->insert(['id'=>'6','id_residencia'=>'1','localidad'=>'Tunjuelito']);
        DB::table('localidad')->insert(['id'=>'7','id_residencia'=>'1','localidad'=>'Bosa']);
        DB::table('localidad')->insert(['id'=>'8','id_residencia'=>'1','localidad'=>'Kennedy']);
        DB::table('localidad')->insert(['id'=>'9','id_residencia'=>'1','localidad'=>'Fontibón']);
        DB::table('localidad')->insert(['id'=>'10','id_residencia'=>'1','localidad'=>'Engativá']);
        DB::table('localidad')->insert(['id'=>'11','id_residencia'=>'1','localidad'=>'Suba']);
        DB::table('localidad')->insert(['id'=>'12','id_residencia'=>'1','localidad'=>'Barrios Unidos']);
        DB::table('localidad')->insert(['id'=>'13','id_residencia'=>'1','localidad'=>'Teusaquillo']);
        DB::table('localidad')->insert(['id'=>'14','id_residencia'=>'1','localidad'=>'Los Mártires']);
        DB::table('localidad')->insert(['id'=>'15','id_residencia'=>'1','localidad'=>'Antonio Nariño']);
        DB::table('localidad')->insert(['id'=>'16','id_residencia'=>'1','localidad'=>'Puente Aranda']);
        DB::table('localidad')->insert(['id'=>'17','id_residencia'=>'1','localidad'=>'La Candelaria']);
        DB::table('localidad')->insert(['id'=>'18','id_residencia'=>'1','localidad'=>'Rafael Uribe Uribe']);
        DB::table('localidad')->insert(['id'=>'19','id_residencia'=>'1','localidad'=>'Ciudad Bolívar']);
        DB::table('localidad')->insert(['id'=>'20','id_residencia'=>'1','localidad'=>'Sumapaz']);
        DB::table('localidad')->insert(['id'=>'21','id_residencia'=>'2','localidad'=>'Soacha']);
        DB::table('localidad')->insert(['id'=>'22','id_residencia'=>'2','localidad'=>'Facatativá']);
        DB::table('localidad')->insert(['id'=>'23','id_residencia'=>'2','localidad'=>'Chía']);
        DB::table('localidad')->insert(['id'=>'24','id_residencia'=>'2','localidad'=>'Zipaquirá']);
        DB::table('localidad')->insert(['id'=>'25','id_residencia'=>'2','localidad'=>'Mosquera']);
        DB::table('localidad')->insert(['id'=>'26','id_residencia'=>'2','localidad'=>'Madrid']);
        DB::table('localidad')->insert(['id'=>'27','id_residencia'=>'2','localidad'=>'Funza']);
        DB::table('localidad')->insert(['id'=>'28','id_residencia'=>'2','localidad'=>'Cajicá']);
        DB::table('localidad')->insert(['id'=>'29','id_residencia'=>'2','localidad'=>'Sibaté']);
        DB::table('localidad')->insert(['id'=>'30','id_residencia'=>'2','localidad'=>'Tocancipá']);
        DB::table('localidad')->insert(['id'=>'31','id_residencia'=>'2','localidad'=>'Tabio']);
        DB::table('localidad')->insert(['id'=>'32','id_residencia'=>'2','localidad'=>'La Calera']);
        DB::table('localidad')->insert(['id'=>'33','id_residencia'=>'2','localidad'=>'Sopó']);
        DB::table('localidad')->insert(['id'=>'34','id_residencia'=>'2','localidad'=>'Cota']);
        DB::table('localidad')->insert(['id'=>'35','id_residencia'=>'2','localidad'=>'Tenjo']);
        DB::table('localidad')->insert(['id'=>'36','id_residencia'=>'2','localidad'=>'El Rosal']);
        DB::table('localidad')->insert(['id'=>'37','id_residencia'=>'2','localidad'=>'Gachancipá']);
        DB::table('localidad')->insert(['id'=>'38','id_residencia'=>'2','localidad'=>'Bojacá']);

    }
}
