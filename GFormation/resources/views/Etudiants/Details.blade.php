<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h4>Les informations de l'etudiant : </h4>
    <ul>
        <li>Code E : <b>{{$EtudeDetails[0]->CodeE}}</b> </li>
        <li>Nom Et Prenom : <b>{{$EtudeDetails[0]->Nom}} {{$EtudeDetails[0]->Nom}}</b> </li>
        <li>Date De Naissance : <b>{{$EtudeDetails[0]->dateNaissance}} </b> </li>
        <li>Adresse : <b>{{$EtudeDetails[0]->Adresse}} </b> </li>
    </ul>
    <br>
    <h4>Les Information de sa Classe : </h4>
    <ul>
        <li>Id : <b>{{$EtudeDetails[0]->classe->idC}} </b></li>
    </ul>
</body>
</html>
