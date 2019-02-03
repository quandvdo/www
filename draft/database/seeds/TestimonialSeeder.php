<?php

use Illuminate\Database\Seeder;
use App\Models\Utility\Testimonial;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Testimonial::class,10)->create();
    }
}
