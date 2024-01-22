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
        'is_actief',
        'opmerking',
        'datum_aangemaakt',
        'datum_gewijzigd',
    ];

    // Relatie met VoertuigInstructeur
    public function voertuigen()
    {
        return $this->hasMany(VoertuigInstructeur::class);
    }
}