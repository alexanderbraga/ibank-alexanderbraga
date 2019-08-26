<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        //'user_id' => $faker->numberBetween(1,3),
        'title' => $faker->word,
        'price' => $faker->numberBetween(1,100),
        'quantity' => $faker->numberBetween(1,100),
        'description' => str_random(3),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
