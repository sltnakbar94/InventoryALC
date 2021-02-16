<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Operator Gudang
        $OWarehouse = Role::create([
            'name' => 'operator-gudang',
        ]);

        // Operator Office
        $OOffice = Role::create([
            'name' => 'operator-office',
        ]);
    }
}