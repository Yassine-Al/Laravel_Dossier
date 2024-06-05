<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Commande N°: {{$commande[0]->numCom}}</h1>
    <ul>
        <li>Numero : {{$commande[0]->numCom}} </li>
        <li>Date : {{$commande[0]->dateCom}} </li>
        <li>Client : {{$commande[0]->nom}} </li>
    </ul>
    <br>
    <table border="3">
        <thead>
            <tr>
                <th>Numero</th>
                <th>Designation</th>
                <th>Prix Unitaire</th>
                <th>Quantite</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php $count = 0 ?>
            @foreach ($details as $dt)
                <tr>
                    <td>{{$dt->numero}}</td>
                    <td>{{$dt->designation}}</td>
                    <td>{{$dt->prix}}</td>
                    <td>{{$dt->quantite}}</td>
                    <td><?= $total =  $dt->quantite * $dt->prix ?></td>
                </tr>
                @php
                    $count = $count + $total
                @endphp
            @endforeach
        </tbody>
    </table>
    <h5> Montant de la Commande est : {{$count}} </h5>

</body>
</html>
