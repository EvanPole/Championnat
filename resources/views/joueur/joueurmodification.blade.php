@extends('layout.navbar')
@section('content')
    {{-- <a class="btn btn-success" href="{{ route('championnat.index') }}">retour</a> --}}
    <h1>Modification des informationq de l'joueur</h1>

    <form action="{{ route('joueur.update', ['joueur' => $joueur->id]) }}" method="POST">
        @csrf
        @method('put')
        <input type="text" name="ville" id="" value="{{ $joueur->ville }}" placeholder="Ville de l'joueur">
        <input type="text" name="categorie" id="" value="{{ $joueur->categorie }}"
            placeholder="Categorie de l'joueur">
        <input type="text" name="championnat" id="" value="{{ $joueur->championnat }}"
            placeholder="championnat de l'joueur">
        <input class="btn btn-success" type="submit" value="save">
        <option value="">
            <select name="" id=""></select>
        </option>
    </form>
@endsection
