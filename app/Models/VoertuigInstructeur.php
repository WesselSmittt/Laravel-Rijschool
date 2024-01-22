<?php

// In TypeVoertuig.php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeVoertuig extends Model
{
    protected $fillable = [
        'type_voertuig',
        'rijbewijscategorie',
    ];

    // Relatie met Voertuig
    public function voertuigen()
    {
        return $this->hasMany(Voertuig::class);
    }
}
