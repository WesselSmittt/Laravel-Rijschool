<?php

namespace App\Http\Controllers;

use App\Models\Instructeur;
use Illuminate\Http\Request;

class InstructeurController extends Controller
{
    public function index()
    {
        $instructeurs = Instructeur::orderByDesc('aantal_sterren')->get();
        return view('instructeurs.index', compact('instructeurs'));
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
