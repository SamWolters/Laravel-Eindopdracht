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
        $admin->name = 'Sam Wolters';
        $admin->email = 's.wolters9@icloud.com';
        $admin->password = bcrypt('admin');
        $admin->save();
        $admin->roles()->attach(Role::where('name', 'admin')->first());
    }
}
