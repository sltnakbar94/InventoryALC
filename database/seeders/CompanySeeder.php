<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $iti = Company::create([
            'code' => 'ITI',
            'name' => 'PT. Inovasi Teknologi Informasi',
            'active' => 1
        ]);
    }
}
