<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>
<body>
    <h1>Exercice 2</h1>
    <p>Créer une variable isEasy de type booléan et l'initialiser avec une valeur.</p>
    <p>Afficher C'est facile !! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!.</p>
    <p>Bonus : L'écrire de deux manières différentes.</p>
    
    <?php

    $isEasy = false;

    echo ($isEasy ? "C'est facile !!" : "C'est difficile !!!");

    echo "</br>";

    if ($isEasy) {
        echo "C'est facile !!";
    } else {
        echo "C'est difficile !!!";
    }

    ?>
</body>
</html>