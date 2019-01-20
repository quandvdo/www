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

$factory->define(\App\Models\Activity\Activity::class, function (Faker $faker) {
    $cities = \App\Utilities\City::pluck('city')->toArray();
    $city = $faker->randomElement($cities);
    $category = \App\Models\Activity\Category::pluck('id')->toArray();
    $name = $city .' '. $faker->words(3, true) . ' D' . rand(1, 10) . 'N' . rand(1, 9);
    return [
        'title' => $name,
        'location' => $city,
        'category_id' => $faker->randomElement($category),
        'description' => $faker->text(200),
        'highlight' => $faker->text(200),
        'itinerary' => $faker->text(200),
        'slug' => str_replace(' ', '-', $name),
        'isFeature' => $faker->boolean(40)
    ];
});
