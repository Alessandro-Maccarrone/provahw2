<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ospedale;
use Faker\Generator as Faker;

$factory->define(Ospedale::class, function (Faker $faker) {
    return [
       'nome' => $faker->name,
    ];
});
