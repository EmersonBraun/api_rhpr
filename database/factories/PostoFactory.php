<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Illuminate\Support\Str;

use App\Models\v0\Posto;
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

$factory->define(Posto::class, function (Faker $faker) {
    return [
        'CODIGO' => $faker->randomDigit,
        'descricao' => $faker->randomElement(config('cops.positions'))
    ];
});
