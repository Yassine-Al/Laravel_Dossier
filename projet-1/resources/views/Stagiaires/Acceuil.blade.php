<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Acceuil</title>
</head>
<body>
    <h1>Gestion des Stagiaires</h1>
    <button class="btn btn-success">Lister Tous</button>
    <a href="{{route('create')}}">
        <button class="btn btn-primary">Ajouter</button>
    </a>
    <button class="btn btn-danger">Supprimer Tous</button>
    <form action="" method="post">
        <label for="">Entrez le Nom :</label>
        <input type="text" name="" id="">
        <input type="submit" value="Rechercher" class="btn btn-success">
    </form>
    <br>
    <h4>Liste des Stagiaires</h4>
    @if (session()->has('success'))
        {{session()->get('success')}}
    @endif
    @if (session()->has('updated'))
        {{session()->get('updated')}}
    @endif
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Age</th>
                <th>Operation</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($stgs as $stg)
                <tr>
                    <td>{{$stg->id}}</td>
                    <td>{{$stg->Nom}}</td>
                    <td>{{$stg->Prenom}}</td>
                    <td>{{$stg->Age}}</td>
                    <td>
                        <a href="{{route('show', $stg->id)}}">
                            <button class="btn btn-outline-warning">Modifier</button>
                        </a>
                        {{-- <a href="{{route('delete', $stg->id)}}">
                            <button class="btn btn-outline-danger"
                            onclick="return confirm('Voulez vous vraiment supprimer ?')">Supprimer</button>
                        </a> --}}
                        <a href="{{route('showdelete',$stg->id)}}">
                            <button class="btn btn-outline-danger">Supprimer</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
