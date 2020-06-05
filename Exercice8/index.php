<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 8</title>
</head>
<body>
    <h1>Exercice 8</h1>
    <p>Traduire ce code avec des if et des else : </p>
    <p>echo ($isOk) ? 'c'est ok !!' : 'c'est pas bon !!!';</p>
    
    <?php

    $isOk = true;

    if ($isOk) {
        echo "C'est ok !!";
    } else {
        echo "C'est pas bon !!!";
    }

    ?>
</body>
</html>