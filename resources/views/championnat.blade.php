@extends('layout.navbar')
@section('content')

    <h1 class="text-center">Matches</h1>
    <div class="table-responsive m-5">
        <table class="table table-striped table-bordered">
            <thead>
                <tr class="bg-primary text-white">
                    <th scope="col">Domicile</th>
                    <th scope="col">Visiteur</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($matche as $matches)
                    <tr>
                        @foreach ($equipe as $equipes)
                            @if ($matches->domicile == $equipes->id)
                                <td>{{ $equipes->ville }}</td>
                            @endif
                        @endforeach
                        @foreach ($equipe as $equipes)
                            @if ($matches->visiteur == $equipes->id)
                                <td>{{ $equipes->ville }}</td>
                            @endif
                        @endforeach
                        <td>{{ $matches->date }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">
                            <div class="alert alert-secondary" role="alert">
                                Ha, Flut il n'y a pas de matches !
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
@endsection
