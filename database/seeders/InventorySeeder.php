<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared(file_get_contents(getcwd() . '/database/sql/brandSeeder.sql'));
        DB::unprepared(file_get_contents(getcwd() . '/database/sql/categorySeeder.sql'));
        DB::unprepared(file_get_contents(getcwd() . '/database/sql/itemSeeder.sql'));
        DB::unprepared(file_get_contents(getcwd() . '/database/sql/stackholderSeeder.sql'));
        DB::unprepared(file_get_contents(getcwd() . '/database/sql/unitSeeder.sql'));
    }
}
