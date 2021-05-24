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
        $alc = Company::create([
            'code' => 'ALC',
            'name' => 'PT. Anomali Lintas Cakrawala',
            'active' => 1
        ]);

        $ack = Company::create([
            'code' => 'ACK',
            'name' => 'PT. Anugrah Cipta Kreatif',
            'active' => 1
        ]);

        $adhi = Company::create([
            'code' => 'ADHI',
            'name' => 'PT. Adhi Lima Cipta',
            'active' => 1
        ]);

        $ala = Company::create([
            'code' => 'ALA',
            'name' => 'PT. Anomali Lumbung Artha',
            'active' => 1
        ]);

        $alt = Company::create([
            'code' => 'ALT',
            'name' => 'PT. Anomali Lintas Teknologi',
            'active' => 1
        ]);

        $alt = Company::create([
            'code' => 'AT2',
            'name' => 'PT. Anomali Trans Teknologi',
            'active' => 1
        ]);

        $fmk = Company::create([
            'code' => 'FMK',
            'name' => 'PT. Famindo Meta Komunika',
            'active' => 1
        ]);

        $tmc = Company::create([
            'code' => 'TMC',
            'name' => 'PT. Toga Manta Chikara',
            'active' => 1
        ]);

        $tmc = Company::create([
            'code' => 'AML',
            'name' => 'PT. Aneka Maju Lestari',
            'active' => 1
        ]);
    }
}
