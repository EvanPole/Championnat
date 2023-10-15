<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\Joueur;
use App\Models\Matche;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Equipe $equipe, Matche $matche)
    {
        $match = Matche::all();
        $equipe = Equipe::all();

        $playerCounts = [];

        foreach ($equipe as $equipes) {
            $playerCount = Joueur::where('equipe_id', $equipes->id)->count();
            $playerCounts[$equipes->id] = $playerCount;
        }

        return view('match.matchliste', compact('equipe', 'match', 'playerCounts'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Matche $match)
    {
        $equipe = Equipe::all();

        return view('match.matchshow', compact('equipe', 'match'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matche $match)
    {
        $match->delete();
        return redirect()->route('match.index');
    }
}
