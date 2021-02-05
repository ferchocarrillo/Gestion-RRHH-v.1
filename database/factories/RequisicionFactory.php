<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\requisicion;
use Faker\Generator as Faker;

$factory->define(requisicion::class, function (Faker $faker) {
    return [
        'cargo' => $faker->cargo,
        'cantidad' => $faker->cantidad,
        'sede' => $faker->sede,
        'dependencias' => $faker->dependencias,
        'area' => $faker->area,
        'motivos' => $faker->motivos,
        'reemplaza' => $faker->reemplaza,
        'cual' => $faker->cual,
        'reemplaza' => $faker->reemplaza,
         'tiempo' => $faker->tiempo,  
          'dias' => $faker->dias,          
         'jornada' => $faker->jornada,           
         'finicio' => $faker->finicio,  
         'solicita' => $faker->solicita,  
         'revisado' => $faker->revisado,  
         'observaciones' => $faker->observaciones,  
    ];
});
