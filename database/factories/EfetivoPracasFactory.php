<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Illuminate\Support\Str;

use App\Models\EfetivoPracas;
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

$factory->define(EfetivoPracas::class, function (Faker $faker) {
    return [
        'UserRG' => AuxFactory::RG(),
        'nome' => $faker->name,
        'graduacao' => $faker->randomElement(config('cops.positions')),
        'quadro' => $faker->randomElement(config('cops.groups')),
        'subquadro' => $faker->randomElement(config('cops.subgroups')),
        'inclusao_data' => $faker->date('Y-m-d','now'),
        'opm' => $faker->name,
        'referencia' => $faker->randomDigit,
        'cdopm' => $faker->randomNumber(10)
    ];
});