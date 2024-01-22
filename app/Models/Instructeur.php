<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instructeur extends Model
{
    protected $fillable = [
        'voornaam',
        'tussenvoegsel',
        'achternaam',
        'mobiel',
        'datum_in_dienst',
        'aantal_sterren',
        'voertuig',
        'is_actief',
    ];

}