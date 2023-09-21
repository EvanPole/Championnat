<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\Joueur;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $equipe = Equipe::Find($id);
        $player = Joueur::where('equipe_id', $equipe->id)->get();

        return view('equipe.equipe', compact('player','equipe'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $equipe = Equipe::Find($id);

        $validatedData = $request->all();


        $equipe->ville = $validatedData['ville'];
        $equipe->categorie = $validatedData['categorie'];
        $equipe->championnat = $validatedData['championnat'];

        $equipe->save();

        return redirect()->route('championnat.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
