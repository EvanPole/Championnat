<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\Joueur;
use App\Models\Matche;
use Illuminate\Http\Request;

class ChampionnatController extends Controller
{

    public function index(Equipe $equipe, Matche $matche)
    {
        $matche = Matche::all();
        $equipe = Equipe::all();

        $playerCounts = [];

        foreach ($equipe as $equipes) {
            $playerCount = Joueur::where('equipe_id', $equipes->id)->count();
            $playerCounts[$equipes->id] = $playerCount;
        }

        return view('championnat', compact('equipe', 'matche', 'playerCounts'));
    }
}
