<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Preferiti;
use Faker\Generator as Faker;

$factory->define(Preferiti::class, function (Faker $faker) {
    return [
       'nome' => $faker->name,
    ];
});
