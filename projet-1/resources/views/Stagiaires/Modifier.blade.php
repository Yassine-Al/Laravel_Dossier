<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <h1>Modifier le Stagiaire N°: {{$stgfind->id}} </h1>
    <form action="{{route('update', $stgfind->id)}}" method="post">
        {{-- @method('put') --}}
        @csrf
        <label for="">Nom : </label>
        <input type="text" name="Nom" value="{{$stgfind->Nom}}">
        <br>
        <label for="">Prenom : </label>
        <input type="text" name="Prenom" value="{{$stgfind->Prenom}}">
        <br>
        <label for="">Age : </label>
        <input type="number" name="Age" value="{{$stgfind->Age}}">
        <br>
        <input type="submit" value="Modifier" class="btn btn-success">
        <br>
    </form>
</body>
</html>
