<?php

use Illuminate\Database\Seeder;
use App\Models\Activity\Activity;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $activity = factory(Activity::class, 60)->create()
            ->each(function ($a) {
                $price = rand(rand(0,10),rand(15,1000)*10)/10;
                $a->price()->create([
                    'name' => 'Default Pricing',
                    'price' => $price,
                    'start_date' => Carbon\Carbon::now()->format('Y-m-d')
                ]);
                $a->addons()->saveMany(factory(\App\Models\Activity\Addon::class, rand(3, 5))->make());
            });
    }
}
