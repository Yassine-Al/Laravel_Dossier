<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Info Eleve N° : {{$elv->id}}</h1>
    <ul>
        <li>Id : {{$elv->id}}</li>
        <li>Nom : {{$elv->pom}}</li>
        <li>Prenom : {{$elv->prenom}}</li>
        <li>Id_Club : {{$elv->Club_id}}</li>
    </ul>
    <h1>Liste d'activites</h1>
    <table border="4">
        <thead>
            <tr>
                <th>Id Activite</th>
                <th>Description</th>
                <th>Date Debut</th>
                <th>Nombre de Jours</th>
            </tr>
        </thead>
        <tbody>
            @php
                $count = 0
            @endphp
            @foreach ($activits as $act)
                <tr>
                    <td>{{$act->id}}</td>
                    <td>{{$act->description}}</td>
                    <td>{{$act->dateDebut}}</td>
                    <td>{{$act->nombreJours}}</td>
                </tr>
                @php
                    $count = $count + $act->nombreJours
                @endphp
            @endforeach
        </tbody>
        <p>Nombre total de jour : {{$elv->getTotalJour()}}</p>
    </table>

</body>
</html>
