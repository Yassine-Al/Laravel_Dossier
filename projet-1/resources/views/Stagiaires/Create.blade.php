<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Create</title>
</head>
<body>
    <h1>Creation D'un Stagiaire</h1>

    <form action="{{route('store')}}" method="post">
        @csrf
        <label for="">Nom : </label>
        <input type="text" name="Nom" id="">
        <br>
        <label for="">Prenom : </label>
        <input type="text" name="Prenom" id="">
        <br>
        <label for="">Age : </label>
        <input type="number" name="Age" id="">
        <br>
        <input type="submit" value="Ajouter" class="btn btn-success">
        <br>
    </form>
</body>
</html>
