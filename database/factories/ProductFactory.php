<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(),
        'description' => $faker->paragraph(),
        'price' => $faker->randomFloat(2, 1, 300),
        'sizes' => implode(',', collect(config('sizes'))->shuffle()->slice(0, rand(1, 4))->toArray()),
        'published' => rand(0, 1),
        'discount' => rand(0, 1),
        'reference' => Str::random(16),
        'category_id' => rand(1, 2)
    ];
});
