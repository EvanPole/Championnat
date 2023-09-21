<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Championnat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <h1>Matches</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Domicile</th>
                <th scope="col">Visiteur</th>
                <th scope="col">date</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($matche as $matches)
                <tr>
                    <th scope="row">{{$equipes->ville}}</th>
                    <td>0</td>
                    <td>0</td>
                </tr>
            @empty

                <div class="alert alert-secondary" role="alert">
                    Ha, Flut il n'y a pas de matches !
                </div>
            @endforelse

        </tbody>
    </table>
    <h1>Equipes du championnats</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Equipe</th>
                <th scope="col">Nb. Membre</th>
                <th scope="col">Victoires</th>
                <th scope="col">Nul</th>
                <th scope="col">Victoires</th>
                <th scope="col">Options</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($equipe as $equipes)
                <tr>
                    <th scope="row">{{$equipes->ville}}</th>
                    <td>{{ $playerCounts[$equipes->id] }}</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td><a class="btn btn-secondary" href="{{ route('equipe.edit', ['equipe' => $equipes->id]) }}">Edit</a></td>
                </tr>
            @empty

                <div class="alert alert-secondary" role="alert">
                    Ha, Flut il n'y a pas d'équipe !
                </div>
            @endforelse

        </tbody>
    </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
