<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ItemSeeder extends Seeder
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
            $item1 = Item::create([
                'name' => 'Item A',
                'category' => 'Lampu',
                'brand' => 'Philips',
                'unit' => 'Unit'
            ]);
            
            $item2 = Item::create([
                'name' => 'Item B',
                'category' => 'Air Conditioner',
                'brand' => 'Philips',
                'unit' => 'Unit'
            ]);
    
            $item3 = Item::create([
                'name' => 'Item C',
                'category' => 'Kulkas',
                'brand' => 'Philips',
                'unit'  => 'Unit'
            ]);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
            Log::error($th->getMessage());
        }
    }
}
