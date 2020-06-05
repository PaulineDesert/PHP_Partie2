<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>
<body>
    <h1>Exercice 3</h1>
    <p>Créer deux variables age et gender. La variable gender peut prendre comme valeur :</p>
    <ul>Homme</ul>
    <ul>Femme</ul>

    <p>En fonction de l'âge et du genre afficher la phrase correspondante :</p>
    <ul>Vous êtes un homme et vous êtes majeur</ul>
    <ul>Vous êtes un homme et vous êtes mineur</ul>
    <ul>Vous êtes une femme et vous êtes majeure</ul>
    <ul>Vous êtes une femme et vous êtes mineur </ul>

    <p>Gérer tous les cas. </p>
    
    <?php

    $gender = "Homme";
    $age = 7;

    switch ([$gender, $age]) {
        case ["Homme", ($age >= 18)]:
          echo "Vous êtes un homme et vous êtes majeur";
          break;
        case ["Homme", ($age <= 18)]:
          echo "Vous êtes un homme et vous êtes mineur";
          break;
        case ["Femme", ($age >= 18)]:
          echo "Vous êtes une femme et vous êtes majeur";
          break;
        case ["Femme", ($age <= 18)]:
          echo "Vous êtes une femme et vous êtes mineur";
          break;
        default:
          echo "Qui êtes vous ?";
      }

    ?>
</body>
</html>