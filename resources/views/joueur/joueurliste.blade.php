@extends('layout.navbar')
@section('content')
    <h2>Liste des joueurs de l'equipe</h2>
    @forelse ($equipe as $equipes)
    <h1>{{ $equipes->ville }}</h1>
        @forelse ($joueur as $joueurs)
            @if ($equipes->id == $joueurs->equipe_id)
                <div>
                    <p>Nom du joueur : {{ $joueurs->nom }} {{ $joueurs->prenom }} [ {{ $joueurs->tel }} ] mail :
                        {{ $joueurs->email }}</p>
                </div>
            @endif
        @empty
            <div class="alert alert-secondary" role="alert">
                Désolé, il n'y a pas de joueurs !
            </div>
        @endforelse


    @empty
        ee
    @endforelse
    <a class="btn btn-success" href="{{ route('equipe.create') }}">Ajouter un joueur</a>
@endsection
