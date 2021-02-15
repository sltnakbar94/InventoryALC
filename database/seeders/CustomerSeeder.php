<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
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
            $customer1 = Customer::create([
                'name' => 'Customer A',
                'email' => 'customer.a@mail.com',
                'contact_number' => '123456789'
            ]);
            $customer2 = Customer::create([
                'name' => 'Customer B',
                'email' => 'customer.b@mail.com',
                'contact_number' => '123456789'
            ]);
            $customer3 = Customer::create([
                'name' => 'Customer C',
                'email' => 'customer.c@mail.com',
                'contact_number' => '123456789'
            ]);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
            Log::error($th->getMessage());
        }
    }
}
