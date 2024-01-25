<?php

namespace App\Http\Controllers;

use App\Models\Instructeur;
use Illuminate\Http\Request;

class InstructeurController extends Controller
{
    public function index()
    {
        // Haal alle instructeurs op en sorteer ze op aantal_sterren in aflopende volgorde
        $instructeurs = Instructeur::orderByDesc('aantal_sterren')->get();

        // Filter de actieve instructeurs
        $actieveInstructeurs = $instructeurs->where('is_actief', true);

        // Stel het aantal actieve instructeurs in voor de view
        $aantalActieveInstructeurs = $actieveInstructeurs->count();

        // Geef de data door naar de view
        return view('instructeurs.index', [
            'instructeurs' => $instructeurs,
            'aantalActieveInstructeurs' => $aantalActieveInstructeurs,
        ]);
    }

    public function toggleStatus(Request $request, $id)
    {
        $instructeur = Instructeur::findOrFail($id);
        $instructeur->is_actief = !$instructeur->is_actief;
        $instructeur->save();

        $message = $instructeur->is_actief ? 'Instructeur is weer actief.' : 'Instructeur is op niet actief gezet.';
        return redirect()->route('instructeurs.index')->with('message', $message);
    }

    public function gebruikteVoertuigen($id)
    {
        // Logica om instructeurgegevens en gebruikte voertuigen op te halen
        $instructeur = Instructeur::findOrFail($id);
        $gebruikteVoertuigen = $instructeur->gebruikteVoertuigen; // Pas dit aan op basis van je relatie
    
        return view('instructeurs.gebruikte-voertuigen', compact('instructeur', 'gebruikteVoertuigen'));
    }   

    public function create($instructeurId)
{
    // Logica om de create-pagina voor gebruikt voertuig te tonen
    return view('instructeurs.create', compact('instructeurId'));
}



public function show($id)
{
    // Logica om instructeurgegevens op te halen en naar de view te sturen
    $instructeur = Instructeur::findOrFail($id);
    return view('instructeurs.show', compact('instructeur'));
}


}
