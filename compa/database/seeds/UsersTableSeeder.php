<?php

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (User::count() == 0) {
            $adminRole = Role::where('name', 'admin')->firstOrFail();

            $admin = User::create([
                'name' => 'Quan Do',
                'email' => 'quandvdo@gmail.com',
                'password' => bcrypt('quan90'),
                'remember_token' => Str::random(60),
                'role_id' => $adminRole->id,
            ]);
            $admin->roles()->attach($adminRole);

            $userRole = Role::where('name', 'user')->firstOrFail();

            $user = User::create([
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => bcrypt('quan90'),
                'remember_token' => Str::random(60),
                'role_id' => $userRole->id,
            ]);
            $user->roles()->attach($userRole);
        }
    }
}
