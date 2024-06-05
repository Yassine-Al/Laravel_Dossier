<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Liste des Eleves</h1>
    <br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>ID Club</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($eleves as $elv)
                <tr>
                    <td>{{$elv->id}}</td>
                    <td>{{$elv->nom}}</td>
                    <td>{{$elv->prenom}}</td>
                    <td>{{$elv->Club_id}}</td>
                    <td>
                        <a href="#">Modifier</a>
                        <a href="#">Supprimer</a>

                    </td>
                    <td>
                        <a href="{{route('eleves.show' , $elv->id)}}">>></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
