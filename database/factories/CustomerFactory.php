<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(\App\Customer::class, function (Faker $faker) {
    return [
        'cpf' => Str::random(11),
        'name' => $faker->name,
        'surname' => $faker->name,
        'phone' => Str::random(11)
    ];
});
