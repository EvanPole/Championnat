<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des joueurs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <a class="btn btn-success" href="{{ route('championnat.index') }}">retour</a>
    <h1>Modification des informationq de l'equipe</h1>

    <form action="{{ route('equipe.update', ['equipe' => $equipe->id]) }}" method="post">
        @csrf
        @method('put')
        <input type="text" name="ville" id="" value="{{ $equipe->ville }}" placeholder="Ville de l'equipe">
        <input type="text" name="categorie" id="" value="{{ $equipe->categorie }}" placeholder="Categorie de l'equipe">
        <input type="text" name="championnat" id="" value="{{ $equipe->championnat }}" placeholder="championnat de l'equipe">
        <input class="btn btn-success" type="submit" value="save">
    </form>

    <h2>Liste des joueurs de l'equipe</h2>
    @forelse ($player as $players)
        <div>
            <p>Nom du joueur : {{ $players->nom }} {{ $players->prenom }} [ {{ $players->tel }} ] mail :
                {{ $players->email }}</p>
        </div>
    @empty
        <div class="alert alert-secondary" role="alert">
            Désolé, il n'y a pas de joueurs !
        </div>
    @endforelse
</body>

</html>
