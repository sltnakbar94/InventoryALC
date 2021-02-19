<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

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

        $user1->assignRole('admin');

        $user2 = User::create([
            'name' => 'Operator 2',
            'email' => 'operator2@example.com',
            'password' => bcrypt('password')
        ]);

        $user2->assignRole('operator-office');

        $user3 = User::create([
            'name' => 'Operator 3',
            'email' => 'operator3@example.com',
            'password' => bcrypt('password')
        ]);

        $user3->assignRole('operator-gudang');

        $user4 = User::create([
            'name' => 'Superadmin',
            'email' => 'superadmin@example.com',
            'password' => bcrypt('password')
        ]);

        $user4->assignRole('superadmin');
    }
}
