<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupervisorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supervisors')->truncate();
        DB::table('supervisors')->insert(['supervisor'=>'Adriana Marcela Caro Montenegro',]);
        DB::table('supervisors')->insert(['supervisor'=>'Andres Eduardo Salcedo Guillen',]);
        DB::table('supervisors')->insert(['supervisor'=>'Brayan Alejandro Aristizabal Bolivar',]);
        DB::table('supervisors')->insert(['supervisor'=>'Edwin Jair Roman Buitrago',]);
        DB::table('supervisors')->insert(['supervisor'=>'Fausto Leandro Bustos Tinoco',]);
        DB::table('supervisors')->insert(['supervisor'=>'Fernando Alexander Carrillo Leon',]);
        DB::table('supervisors')->insert(['supervisor'=>'German Antonio Yepes Castaño',]);
        DB::table('supervisors')->insert(['supervisor'=>'Ginna Paola Alarcon Peña',]);
        DB::table('supervisors')->insert(['supervisor'=>'Holman Alberto Plazas Sanchez',]);
        DB::table('supervisors')->insert(['supervisor'=>'Jackson Javier Castellanos Bohorquez',]);
        DB::table('supervisors')->insert(['supervisor'=>'Jenny Geraldine Suarez Gonzalez',]);
        DB::table('supervisors')->insert(['supervisor'=>'Jenny Patricia Barbosa Alvarado',]);
        DB::table('supervisors')->insert(['supervisor'=>'Jenny Rocio Murillo Meneses',]);
        DB::table('supervisors')->insert(['supervisor'=>'Jesus Antonio Archila Soracipa',]);
        DB::table('supervisors')->insert(['supervisor'=>'Jhemaina Diaan Gómez Méndez',]);
        DB::table('supervisors')->insert(['supervisor'=>'Johanna Paola Castrillon Londoño',]);
        DB::table('supervisors')->insert(['supervisor'=>'Johanny Alexander Rodríguez Veloza',]);
        DB::table('supervisors')->insert(['supervisor'=>'Jose Alexander Espitia Chinchilla',]);
        DB::table('supervisors')->insert(['supervisor'=>'Jose Luis Aponte Blanco',]);
        DB::table('supervisors')->insert(['supervisor'=>'Juan Camilo Parra Restrepo',]);
        DB::table('supervisors')->insert(['supervisor'=>'Leidy Yiseth Monroy Barragan',]);
        DB::table('supervisors')->insert(['supervisor'=>'Lina Maria Devia Escobar',]);
        DB::table('supervisors')->insert(['supervisor'=>'Luis Carlos Cuellar Morales',]);
        DB::table('supervisors')->insert(['supervisor'=>'Luis Fernando Suarez Cano',]);
        DB::table('supervisors')->insert(['supervisor'=>'Magda Andrea Medina Barrios',]);
        DB::table('supervisors')->insert(['supervisor'=>'Martin Ricardo Garcia Solano',]);
        DB::table('supervisors')->insert(['supervisor'=>'Mentius',]);
        DB::table('supervisors')->insert(['supervisor'=>'Miguel Leonardo Tocara Campos',]);
        DB::table('supervisors')->insert(['supervisor'=>'Oscar Raúl Sánchez Salgado',]);
        DB::table('supervisors')->insert(['supervisor'=>'Rafael Augusto Archila Soracipa',]);
        DB::table('supervisors')->insert(['supervisor'=>'Rosa Elvira Leguizamon Carrillo',]);
        DB::table('supervisors')->insert(['supervisor'=>'Rosa Helena Martínez Acero',]);
        DB::table('supervisors')->insert(['supervisor'=>'Tatiana Sofia Caceres Pinzon',]);
        DB::table('supervisors')->insert(['supervisor'=>'Williams Henry Muñoz Ospina',]);
        DB::table('supervisors')->insert(['supervisor'=>'Yesica Cristina Aguilar Galeano',]);
        DB::table('supervisors')->insert(['supervisor'=>'Zully Paola Vargas Vargas',]);


    }
}
