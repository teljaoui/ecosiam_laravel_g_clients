<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Liste clients</h1>
    <a href="/ajouter">Ajouter</a>
    <table border="1">
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Adresse</th>
            <th>Action</th>
        </tr>
        @foreach ($clients as $client)
            <tr>
                <th>{{$client->nom}}</th>
                <th>{{$client->prenom}}</th>
                <th>{{$client->email}}</th>
                <th>{{$client->adresse}}</th>
                <th>
                    <a href="/delete/{{ $client->id }}">supprimer</a>
                </th>
            </tr>
        @endforeach
    </table>
</body>
</html>