<?php

namespace App\Http\Controllers;
use App\Models\Voertuig;
use Illuminate\Http\Request;

class VoertuigController extends Controller
{
    public function index()
    {
         $voertuigen = Voertuig::all();
         return view('instructeurs.gebruiktevoertuigen', compact('voertuigen'));
    }

    public function create()
    {
        return view('instructeurs.create');
    }
}
