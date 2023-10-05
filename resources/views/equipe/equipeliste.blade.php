@extends('layout.navbar')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Equipe</th>
                <th scope="col">Nb. Membre</th>
                <th scope="col">Victoires</th>
                <th scope="col">Nul</th>
                <th scope="col">Défaites</th>
                <th scope="col">Options</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($equipe as $equipes)
                <tr>
                    <th scope="row">{{ $equipes->ville }}</th>
                    <td>{{ $playerCounts[$equipes->id] }}</td>
                    <td>
                        {{ $victoires[$equipes->id] }}
                    </td>
                    <td>{{ $nul[$equipes->id] }}</td>
                    <td>{{ $defaites[$equipes->id] }}</td>
                    <td><a class="btn btn-secondary" href="{{ route('equipe.edit', ['equipe' => $equipes->id]) }}">Edit</a>
                    </td>
                </tr>
            @empty

                <div class="alert alert-secondary" role="alert">
                    Ha, Flut il n'y a pas d'équipe !
                </div>
            @endforelse

        </tbody>
    </table>
@endsection
