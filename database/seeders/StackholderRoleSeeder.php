<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StackholderRole;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class StackholderRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            DB::beginTransaction();
            $supplier = StackholderRole::create([
                'name' => 'Supplier',
            ]);
            $customer = StackholderRole::create([
                'name' => 'Customer',
            ]);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
            Log::error($th->getMessage());
        }
    }
}
