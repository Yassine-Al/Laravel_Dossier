<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>La page de Modification {{$commandeFind[0]->numCom}}</h1>
    <form action="{{route('Commande.update', $commandeFind[0]->id)}}" method="post">
        @csrf
        @method('put')
        <label for="">Num Commande : </label>
        <input type="number" name="numCom" value="{{$commandeFind[0]->numCom}}">
        <br>
        <label for="">Date Commande : </label>
        <input type="date" name="dateCom" value="{{$commandeFind[0]->dateCom}}">
        <br>
        <label for="">Client : </label>
        <select name="id_Client">
            @foreach ($client as $cl)
                <option value="{{$cl->id}}" @if ($commandeFind[0]->id_Client == $cl->id) selected @endif>{{$cl->nom}}</option>
            @endforeach
        </select>
        <br>
        <br>
        <input type="submit" value="Modifier">
        <a href="{{route('Commande.index')}}">
            <input type="button" value="Annuler">
        </a>
    </form>
</body>
</html>
