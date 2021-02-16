<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SupplierSeeder extends Seeder
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
            $supplier = Supplier::create([
                'name' => 'Supplier A',
                'email' => 'supplier.a@mail.com',
                'address' => 'Jakarta',   
                'contact_number' => '123456789'
            ]);
            $supplier2 = Supplier::create([
                'name' => 'Supplier B',
                'email' => 'supplier.b@mail.com',
                'address' => 'Bandung',   
                'contact_number' => '123456789'
            ]);
            $supplier3 = Supplier::create([
                'name' => 'Supplier C',
                'email' => 'supplier.c@mail.com',
                'address' => 'Sukabumi',   
                'contact_number' => '123456789'
            ]);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
            Log::error($th->getMessage());
        }
    }
}
