<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>ajouter un client</h1>
    <form action="/store" method="post">
        @csrf
        <label for="">Nom</label>
        <input type="text" name="nom">
         <label for="">Prénom</label>
        <input type="text" name="prenom">
         <label for="">Email</label>
        <input type="email" name="email">
         <label for="">Adresse</label>
        <input type="text" name="adresse">
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>