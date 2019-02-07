<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(SetupSeederTable::class);
         $this->call(TestimonialSeeder::class);
         $this->call(BlogSeeder::class);
         $this->call(ActivitySeeder::class);
         $this->call(CommentSeeder::class);
    }
}
