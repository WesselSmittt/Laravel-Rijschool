<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Voertuig;

class VoertuigSeeder extends Seeder
{
    public function run()
    {
        Voertuig::create([
            'kenteken' => 'AU-67-IO',
            'type' => 'Golf',
            'bouwjaar' => '2017-06-12',
            'brandstof' => 'Diesel',
            'type_voertuig_id' => 1,
        ]);
        
        Voertuig::create([
            'kenteken' => '45-SD-23',
            'type' => 'Renault',
            'bouwjaar' => '2023-01-01',
            'brandstof' => 'Diesel',
            'type_voertuig_id' => 3,
        ]);
    }
}
