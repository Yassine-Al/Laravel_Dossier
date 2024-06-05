<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>La page de Creation</h1>
    <form action="{{route('Commande.store')}}" method="post">
        @csrf
        <label for="">Num Commande : </label>
        <input type="number" name="numCom" id="">
        <br>
        <label for="">Date Commande : </label>
        <input type="date" name="dateCom" id="">
        <br>
        <label for="">Client : </label>
        <select name="id_Client" id="">
            @foreach ($client as $cl)
                <option value="{{$cl->id}}">{{$cl->nom}}</option>
            @endforeach
        </select>
        <br>
        <br>
        <input type="submit" value="Ajouter">
        <a href="{{route('Commande.index')}}">
            <input type="button" value="Annuler">
        </a>
    </form>
</body>
</html>
