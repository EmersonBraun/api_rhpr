<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Illuminate\Support\Str;

use App\Models\OpmImpMeta4;
use AuxFactory;
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

$factory->define(OpmImpMeta4::class, function (Faker $faker) {
    return [
        'UNIDADE_META4' => 'W'.$faker->randomNumber(6),
        'DESCRICAO_META4' => $faker->name,
        'ID_PAI' => 'W'.$faker->randomNumber(6),
        'DESCRICAO_PAI' => $faker->name,
        'UNIDADE_PMPR' => $faker->address,
        'CD_LOCAL_TRABALHO' => $faker->,
        'LOCAL_TRABALHO' => $faker->address,
        'DATA_INICIO' => $faker->date('Y-m-d','now'),
        'DATA_FIM' => $faker->date('Y-m-d','now'),
        'LOGRADOURO' => $faker->address,
        'BAIRRO' => $faker->citySuffix,
        'MUNICIPIO' => $faker->city,
        'CEP' => $faker->randomNumber(5).'-'.$faker->randomNumber(3),
        'DDD' => AuxFactory::DDD(),
        'TELEFONE' => $faker->phone, 
    ];
});
