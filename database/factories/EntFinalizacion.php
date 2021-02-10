<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\EntFinalizacion;
use Faker\Generator as Faker;
use Hamcrest\Type\IsInteger;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

$factory->define(EntFinalizacion::class, function (Faker $faker) {
    return [
        'id_filtro'=>$faker->id_filtro,
        'cedula' => $faker->cedula,
        'nombre' => $faker->nombre,
        'resultado' => $faker->resultado,
        'resultadoGer' => $faker->resultadoGer,
        'obsGerencia' => $faker->obsGerencia,
        'resultadoJefe' => $faker->resultadoJefe,
        'fechaCont' => $faker->fechaCont,
        'obsFinales' => $faker->obsFinales,
        
    ];
});