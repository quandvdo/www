<?php

use App\Models\User;
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
        $this->call(VoyagerDatabaseSeeder::class);
        User::create([
            'role_id' => 1,
            'name' => 'Quan Do',
            'email' => 'quandvdo@gmail.com',
            'avatar' => 'users/default.png',
            'password' => bcrypt('quan90')
        ]);
    }
}
