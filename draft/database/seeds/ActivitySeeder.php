<?php

use Illuminate\Database\Seeder;
use App\Models\Activity\Activity;
use Illuminate\Support\Facades\DB;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();

        $activity = factory(Activity::class, 100)->create()
            ->each(function ($a) {
                $a->price()->create([
                    'name' => 'Default Pricing',
                    'price' => rand(rand(0, 10), rand(15, 1000) * 10) / 10,
                    'start_date' => Carbon\Carbon::now()->format('Y-m-d')
                ]);
                $a->addons()->saveMany(factory(\App\Models\Activity\Addon::class, rand(1, 2))->make());
            });
        DB::commit();
    }
}
