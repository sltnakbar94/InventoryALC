<?php

namespace Database\Seeders;

use App\Models\Warehouse;
use Illuminate\Database\Seeder;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bks = Warehouse::create([
            'code' => 'BKS',
            'name' => 'Gudang Bekasi',
            'address' => 'Jl. Caringin RT.003/RW.001, Mustikasari, Kec. Mustika Jaya, Kota Bekasi, Jawa Barat',
            'active' => 1
        ]);
    }
}
