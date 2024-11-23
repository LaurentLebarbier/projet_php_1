<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours 1 PHP / MySql</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <h1>Formulaire HTML</h1>
    <div class="center">Ajouter un contact</div>
    <form action="insertion.php" method="post">
        <div>
            <label for="prenom">Prénom : </label>
            <input type="text" id="prenom" name="prenom" required>
        </div>
        <div>
            <label for="mail">Email : </label>
            <input type="email" id="mail" name="mail" required>
        </div>
        <div>
            <label for="age">Age : </label>
            <input type="age" id="age" name="age" required>
        </div>
        <div>
            <label for="femme">Femme</label>
            <input type="radio" id="femme" name="sexe" value="femme" required>
            <label for="homme">Homme</label>
            <input type="radio" id="homme" name="sexe" value="homme" required>
        </div>
        <div id="submit">
            <input type="submit" value="Envoyer">
        </div>
    </form>

</body>

</html>