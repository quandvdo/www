<?php

use App\Models\Utility\Tag;
use Illuminate\Database\Seeder;
use App\Models\Blog\Blog;
use Faker\Generator as Faker;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        factory(Blog::class, 50)->create()
            ->each(function ($q, $faker) {
                for ($i = 0; $i < rand(1, 3); $i++) {
                    $tag = \App\Models\Utility\Tag::inRandomOrder()->first();
                    $q->tags()->attach($tag);
                }
            });
    }
}
