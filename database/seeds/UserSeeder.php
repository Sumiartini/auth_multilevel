<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
        	'name' => 'Admin',
        	'email' => 'admin@gmail.com',
        	'password' => Hash::Make('admin123'),
        ]);

        $admin->assignRole('admin');
        
        $user = User::create([
        	'name' => 'User',
        	'email' => 'user@gmail.com',
        	'password' => Hash::Make('user1234'),
        ]);

        $user->assignRole('user');
    }
}
