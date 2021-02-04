<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::create([
            'name' => 'Operator 1',
            'email' => 'operator1@example.com',
            'password' => bcrypt('password')
        ]);

        $user2 = User::create([
            'name' => 'Operator 2',
            'email' => 'operator2@example.com',
            'password' => bcrypt('password')
        ]);
    }
}
