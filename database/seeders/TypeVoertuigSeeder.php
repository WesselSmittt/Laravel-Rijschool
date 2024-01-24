<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeVoertuigSeeder extends Seeder
{
    public function run()
    {
        $typeVoertuigen = [
            ['type_voertuig' => 'Personenauto', 'rijbewijscategorie' => 'B'],
            ['type_voertuig' => 'Vrachtwagen', 'rijbewijscategorie' => 'C'],
            ['type_voertuig' => 'Bus', 'rijbewijscategorie' => 'D'],
            ['type_voertuig' => 'Bromfiets', 'rijbewijscategorie' => 'AM'],
            // Voeg hier andere type voertuigen toe als dat nodig is
        ];

        // Voeg de gegevens toe aan de database
        foreach ($typeVoertuigen as $typeVoertuig) {
            DB::table('type_voertuigs')->insert($typeVoertuig);
        }
    }
}
