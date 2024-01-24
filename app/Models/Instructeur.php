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

    // Definieer relaties met andere modellen indien nodig
    public function voertuigen()
    {
        return $this->hasMany(VoertuigInstructeur::class, 'instructeur_id');
    }
}
