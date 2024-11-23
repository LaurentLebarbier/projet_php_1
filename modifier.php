<?php

// ouverture d'une connexion à la bdd agenda
$objetPdo = new PDO("mysql:host=localhost;dbname=projet_1", 'laurent', 'h9xt2ya1');

// préparation de la requête d'insertion SQL
$pdoStat = $objetPdo->prepare('UPDATE cours SET prenom=:prenom, mail=:mail, age=:age, sexe=:sexe WHERE id=:num LIMIT 1');

//laison du paramètre nommé
$pdoStat->bindValue(':num', $_POST['numContact'], PDO::PARAM_INT);
$pdoStat->bindValue(':prenom', $_POST['prenom'], PDO::PARAM_STR);
$pdoStat->bindValue(':mail', $_POST['mail'], PDO::PARAM_STR);
$pdoStat->bindValue(':age', $_POST['age'], PDO::PARAM_STR);
$pdoStat->bindValue(':sexe', $_POST['sexe'], PDO::PARAM_STR);

//exécution de la requète
$executeIsOk = $pdoStat->execute();

if ($executeIsOk) {
    $message = 'Le contact a été mise a jour';
} else {
    $message = 'Echec de la mise à jour du contact';
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <h1>Résultat de la modification</h1>
    <p><?= $message ?></p>
    <div id="center_button">
        <button onclick="location.href='index.php'">Retour Index</button>
        <button onclick="location.href='lister.php'">Liste des Contact inscrit en BDD</button>
    </div>
</body>

</html>