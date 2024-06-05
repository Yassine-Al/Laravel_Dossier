<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Liste des Etudiants :</h1>
    <table border="3">
        <thead>
            <th>Code</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Adresse</th>
            <th>Date Naissance</th>
            <th>Id Classe</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach ($Etudiants as $Etudiant)
                <tr>
                    <td>{{$Etudiant->CodeE}}</td>
                    <td>{{$Etudiant->Nom}}</td>
                    <td>{{$Etudiant->Prenom}}</td>
                    <td>{{$Etudiant->Adresse}}</td>
                    <td>{{$Etudiant->dateNaissance}}</td>
                    <td>{{$Etudiant->idClasse}}</td>
                    <td>
                        <a href="{{route('Details', $Etudiant->CodeE)}}">
                            <button>Details</button> |
                        </a>
                        <button>Modifier</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
