<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Instructeur;
use Faker\Factory as Faker;

class InstructeurSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            Instructeur::create([
                'voornaam' => $faker->firstName,
                'tussenvoegsel' => $faker->randomElement(['de', 'van', null]),
                'achternaam' => $faker->lastName,
                'mobiel' => $faker->phoneNumber,
                'datum_in_dienst' => $faker->date,
                'aantal_sterren' => $faker->numberBetween(1, 5),
                'voertuig' => $faker->randomElement(['Auto', 'Motor', 'Vrachtwagen', 'Bromfiets']),
                'is_actief' => $faker->boolean,
            ]);
        }
    }
}
