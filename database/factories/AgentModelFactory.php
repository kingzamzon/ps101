<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Agent;
use Faker\Generator as Faker;

$factory->define(Agent::class, function (Faker $faker) {
    return [
        'first_name' => $faker->name,
        'last_name' => $faker->name
    ];
});
