<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(\App\Models\Activity\Addon::class, function (Faker $faker) {
    $dir = 'public/images/uploads';
    $width = 640;
    $height = 480;
    return [
        'name' => $faker->words(3,true),
        'title' => $faker->words(3,true),
        'description' =>$faker->words(7,true),
        'price' => $faker->randomFloat(2,10,200),
        'type' => $faker->numberBetween(1,2),
        'img' => $faker->image($dir, $width, $height)
    ];
});
