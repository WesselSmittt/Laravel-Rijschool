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
}
