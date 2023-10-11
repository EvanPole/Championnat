@extends('layout.navbar')
@section('content')
    <div class="container mt-5">
        <h1 class="text-center">Liste des joueurs par équipe</h1>
        @forelse ($equipe as $equipes)
            <h2>{{ $equipes->ville }}</h2>
            @php
                $joueursEquipe = $joueur->where('equipe_id', $equipes->id);
            @endphp
            @if ($joueursEquipe->isNotEmpty())
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr class="table-primary">
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Téléphone</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($joueursEquipe as $joueurEquipe)
                            <tr>
                                <td>{{ $joueurEquipe->nom }}</td>
                                <td>{{ $joueurEquipe->prenom }}</td>
                                <td>{{ $joueurEquipe->tel }}</td>
                                <td>{{ $joueurEquipe->email }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="alert alert-secondary" role="alert">
                    Désolé, il n'y a pas de joueurs dans cette équipe !
                </div>
            @endif
        @empty
            <div class="alert alert-secondary" role="alert">
                Aucune équipe disponible.
            </div>
        @endforelse
        <a class="btn btn-success" href="{{ route('equipe.create') }}">Ajouter un joueur</a>
    </div>
@endsection
