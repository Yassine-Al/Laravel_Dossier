<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>La Liste des Commandes</h1>
    <a href="{{route('Commande.create')}}">Nouvelle Commande</a>
    <br>
    <br>
    <table border="3">
        <thead>
            <tr>
                <th>N°Com</th>
                <th>Date Com</th>
                <th>Client</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($commandes as $com)
                <tr>
                    <td>{{$com->numCom}}</td>
                    <td>{{$com->dateCom}}</td>
                    <td>{{$com->nom}}</td>
                    <td>
                        <a href="{{route('Commande.edit', $com->id)}}">
                            <button>Modifier</button>
                        </a>
                        <button>Supprimer</button>
                        &nbsp;
                        <a href="{{route('Commande.show', $com->id)}}">>></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
