<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <h1> Hello World </h1>
  <p> Page d'Edit </p>
  <form action="{{ route('update', $etudiant->id) }}" method="post">
    @csrf
    @method('PUT')
    <label for="">Matricule : </label>
    <input type="number" name="matricule" id="">
    <br>
    <label for="">Nom : </label>
    <input type="text" name="nom" id="">
    <br>
    <label for="">Note : </label>
    <input type="number" name="note" id="">
    <br>
    <input type="submit" value="Envoyer">
</form>
</body>
</html>
