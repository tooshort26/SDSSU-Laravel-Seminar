<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Patient;
use Faker\Generator as Faker;

$factory->define(Patient::class, function (Faker $faker) {
    return [
		'firstname'  => $faker->firstName,
		'middlename' => $faker->lastName,
		'lastname'   => $faker->lastName,
    ];
});
