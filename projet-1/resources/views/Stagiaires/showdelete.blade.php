<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>showdelete</title>
</head>
<body>
    <h1>showdelete</h1>
    
    <a href="{{route('delete',$id)}}">
        <button class="btn btn-danger">Supprimer</button>
    </a>
    <a href="{{route('index')}}">
        <button class="btn btn-primary">Annuler</button>
    </a>
</body>
</html>
