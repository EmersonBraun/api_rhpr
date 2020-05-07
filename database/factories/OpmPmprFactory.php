<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Illuminate\Support\Str;

use App\Models\OpmPmpr;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
| Consult database/factories/Faker.md to see the available fakers 
|
*/

$factory->define(OpmPmpr::class, function (Faker $faker) {
    return [
        'META4' => 'W'.$faker->randomNumber(6),
        'NOME_META4' => $faker->name,
        'CODIGO' => $faker->randomNumber(10),
        'DESCRICAO' => $faker->text(5),
        'ABREVIATURA' => $faker->text(3),
        'TIPO' => $faker->randomElement(['OP','ADM']),
        'MUNICIPIO' => $faker->city,
        'CDMUNICIPIO' => $faker->randomNumber(3),
        'TITULO' => $faker->randomElement(['SECAO','OPM','GRUPAMENTO']),
        'CODIGOBASE' => $faker->randomNumber(10),
        'CODIGONOVO' => $faker->randomNumber(10),
        'TELEFONE' => $faker->phone
    ];
});