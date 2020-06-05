<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7</title>
</head>
<body>
    <h1>Exercice 7</h1>
    <p>Traduire ce code avec des if et des else : </p>
    <p>echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';</p>
    
    <?php

    $isOk = false;

    if ($isOk == false) {
        echo "C'est pas bon !!!";
    } else {
        echo "C'est ok !!";
    }

    ?>
</body>
</html>