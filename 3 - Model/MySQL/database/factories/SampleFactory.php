<?php
use App\Sample;
use Faker\Generator as Faker;

$factory->define(Sample::class, function (Faker $faker) {
    return [
		'name' => $faker->name        
    ];
});
