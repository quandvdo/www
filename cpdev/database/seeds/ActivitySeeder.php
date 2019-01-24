<?php

use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $activity = factory(\App\Models\Activity\Activity::class, 50)->create()
            ->each(function ($a) {
                $price = rand(rand(0,10),rand(15,20)*10)/10;
                $a->price()->create([
                    'name' => 'Default Pricing',
                    'price' => $price
                ]);
                $a->addon()->saveMany(factory(\App\Models\Activity\Addon::class, rand(2, 5))->make());
            });
    }
}
