<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>
<body>
    <h1>Exercice 1</h1>
    <p>Créer une variable age et l'initialiser avec une valeur.</p>
    <p>Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur. Dans le cas contraire, afficher Vous êtes mineur.</p>
    
    <?php

    $age = 15;

    if ($age >= 18) {
        echo "Vous êtes majeur";
    } else {
        echo "Vous êtes mineur";
    }

    ?>
</body>
</html>