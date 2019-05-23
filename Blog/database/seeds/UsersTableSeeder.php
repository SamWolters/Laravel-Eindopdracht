<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create root user
        $admin = new User;
        $admin->name = 'Admin';
        $admin->email = 'admin@laravel.com';
        $admin->password = bcrypt('Welkom123');
        $admin->save();
        $admin->roles()->attach(Role::where('name', 'admin')->first());
    }
}
