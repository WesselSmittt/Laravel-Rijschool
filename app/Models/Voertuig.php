<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voertuig extends Model
{
    protected $fillable = [
        'kenteken',
        'type',
        'bouwjaar',
        'brandstof',
        'type_voertuig_id',
        'is_actief',
        'opmerking',
        'datum_aangemaakt',
        'datum_gewijzigd',
    ];

    // Relatie met TypeVoertuig
    public function type()
    {
        return $this->belongsTo(TypeVoertuig::class, 'type_voertuig_id');
    }

    // Relatie met VoertuigInstructeur
    public function instructeurs()
    {
        return $this->hasMany(VoertuigInstructeur::class);
    }
}
