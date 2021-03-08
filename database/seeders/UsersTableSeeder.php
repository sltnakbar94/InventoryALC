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
            'name' => 'admin',
            'email' => 'admin@anomali.co.id',
            'password' => bcrypt('password')
        ]);

        $user1->assignRole('admin');

        $user2 = User::create([
            'name' => 'sales',
            'email' => 'sales@anomali.co.id',
            'password' => bcrypt('password')
        ]);

        $user2->assignRole('sales');

        $user3 = User::create([
            'name' => 'operator gudang',
            'email' => 'opgudang@anomali.co.id',
            'password' => bcrypt('password')
        ]);

        $user3->assignRole('operator-gudang');

        $user4 = User::create([
            'name' => 'Superadmin',
            'email' => 'superadmin@anomali.co.id',
            'password' => bcrypt('password')
        ]);

        $user4->assignRole('superadmin');

        $user5 = User::create([
            'name' => 'Purchasing',
            'email' => 'purchasing@anomali.co.id',
            'password' => bcrypt('password')
        ]);

        $user5->assignRole('purchasing');
    }
}
