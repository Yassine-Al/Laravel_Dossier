<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> L'index </h1>
    <a href="{{route('create')}}">Create</a>

    <br>
    <p>Count : {{$count}} </p>
    <br>
    <table border="2">
        <tr>
            <th>Id</th>
            <th>Matricule</th>
            <th>Nom</th>
            <th>Note</th>
            <th colspan="2">Action </th>
        </tr>
        <tbody>
            @foreach ($etudiants as $etud)
                <tr>
                    <td>{{$etud->id}}</td>
                    <td>{{$etud->matricule}}</td>
                    <td>{{$etud->nom}}</td>
                    <td>{{$etud->note}}</td>
                    <td colspan="2">
                        <a href="">Edit</a> | |
                        <a href="">Delete</a>
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>
</body>
</html>
