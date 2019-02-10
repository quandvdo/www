<?php

use App\Models\Utility\Category;
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

$factory->define(App\Models\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
        'role' => 1
    ];
});

$factory->define(App\Models\Activity\Activity::class, function (Faker $faker) {
    $cities = \App\Models\Utility\City::pluck('id')->toArray();
    $city = $faker->randomElement($cities);
    $category = \App\Models\Utility\Category::pluck('id')->toArray();
    $city_name = \App\Models\Utility\City::find($city);
    $name = $city_name->city . ' ' . $faker->words(3, true) . ' D' . rand(1, 10) . 'N' . rand(1, 9);
    return [
        'title' => $name,
        'location_id' => $city,
        'category_id' => $faker->randomElement($category),
        'description' => $faker->text(200),
        'highlight' => $faker->text(200),
        'itinerary' => $faker->text(200),
        'duration' => $faker->numberBetween(1, 20),
        'age' => $faker->numberBetween(12, 65),
        'slug' => str_replace(' ', '-', $name),
        'isFeature' => $faker->boolean(40),
        'isPackage' => $faker->boolean(50),
        'user_id' => rand(1, 2)
    ];
});


$factory->define(\App\Models\Activity\Addon::class, function (Faker $faker) {
    $dir = 'public/images/uploads';
    $width = 640;
    $height = 480;
    return [
        'name' => $faker->words(3, true),
        'title' => $faker->words(3, true),
        'description' => $faker->words(7, true),
        'price' => $faker->randomFloat(2, 10, 200),
        'type' => $faker->numberBetween(1, 2),
        'img' => $faker->image($dir, $width, $height)
    ];
});

$factory->define(\App\Models\Activity\Price::class, function (Faker $faker) {
    return [
        'name' => 'Default Pricing',
        'price' => $faker->randomFloat(2, 10, 200)
    ];
});

$factory->define(\App\Models\Utility\Testimonial::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'subheading' => $faker->jobTitle,
        'link' => $faker->domainName,
        'msg' => $faker->text(200),
    ];
});

$factory->define(\App\Models\Utility\Category::class, function (Faker $faker) {
    $type = ['Blog', 'Inquiry'];
    return [
        'type' => $faker->randomElement($type),
        'name' => $faker->words(rand(1, 3), true),
        'description' => $faker->text(rand(200, 600)),
    ];
});

$factory->define(\App\Models\Blog\Blog::class, function (Faker $faker) {
    $category = Category::where('Type', '=', 'Blog')->pluck('id')->toArray();
    $name = $faker->words(rand(3, 6), true);
    return [
        'isPublished' => $faker->boolean(50),
        'isPromotion' => $faker->boolean(50),
        'title' => $name,
        'subtitle' => $faker->words(rand(3, 9), true),
        'slug' => \App\Models\Utility\Helper::slug($name),
        'content' => '<p>' . $faker->text(rand(200, 600)) . '</p>' . '<p>' . $faker->text(rand(200, 600)) . '</p>' . '<p>' . $faker->text(rand(200, 600)) . '</p>' . '<p>' . $faker->text(rand(200, 600)) . '</p>',
        'user_id' => rand(1, 2),
        'category_id' => $faker->randomElement($category)

    ];
});

$factory->define(\App\Models\Utility\Comment::class, function (Faker $faker) {
    $blog = \App\Models\Blog\Blog::pluck('id')->toArray();
    $user = \App\Models\User::pluck('id')->toArray();
    return [
        'user_id' => $faker->randomElement($user),
        'body' => $faker->text(rand(100, 300)),
        'commentable_id' => $faker->randomElement($blog),
        'commentable_type' => 'App\Models\Blog\Blog',
        'created_at' => $faker->dateTime('now')
    ];
});

$factory->define(\App\Models\Utility\Tag::class, function (Faker $faker) {
    return [
        'name' => $faker->word . ' ' .$faker->word
    ];
});

$factory->define(\App\Models\Booking\Agent::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'phone' => $faker->e164PhoneNumber,
        'address' => $faker->address,
        'email' => $faker->freeEmail,
        'cost' => $faker->randomFloat(2,0.01,1)
    ];
});

