<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Instructeur;

class InstructeurSeeder extends Seeder
{
    public function run()
    {
        Instructeur::create([
            'voornaam' => 'Li',
            'tussenvoegsel' => '',
            'achternaam' => 'Zhan',
            'mobiel' => '06-28493827',
            'datum_in_dienst' => '2015-04-17',
            'aantal_sterren' => '3',
        ]);

        Instructeur::create([
            'voornaam' => 'Leroy',
            'tussenvoegsel' => '',
            'achternaam' => 'Boerhaven',
            'mobiel' => '06-39398734',
            'datum_in_dienst' => '2018-06-25',
            'aantal_sterren' => '1',
        ]);

        Instructeur::create([
            'voornaam' => 'Yoeri',
            'tussenvoegsel' => '',
            'achternaam' => 'Van Veen',
            'mobiel' => '06-24383291',
            'datum_in_dienst' => '2010-05-12',
            'aantal_sterren' => '3',
        ]);

        Instructeur::create([
            'voornaam' => 'Bert',
            'tussenvoegsel' => 'Van',
            'achternaam' => 'Sali',
            'mobiel' => '06-48293823',
            'datum_in_dienst' => '2023-01-10',
            'aantal_sterren' => '4',
        ]);

        Instructeur::create([
            'voornaam' => 'Mohammed El',
            'tussenvoegsel' => '',
            'achternaam' => 'Yassidi',
            'mobiel' => '06-34291234',
            'datum_in_dienst' => '2010-06-14',
            'aantal_sterren' => '5',
        ]);
    }
}
