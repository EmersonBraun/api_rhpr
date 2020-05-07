<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Illuminate\Support\Str;

use App\Models\Reserva;
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

$factory->define(Reserva::class, function (Faker $faker) {
    return [
        'UserRG' => AuxFactory::RG(),
        'nome' => $faker->name,
        'posto' => $faker->randomElement(config('cops.positions')),
        'quadro' => $faker->randomElement(config('cops.groups')),
        'subquadro' => $faker->randomElement(config('cops.subgroups')),
        'data' => $faker->date('Y-m-d','now'),
    ];
});
