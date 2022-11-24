<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- partie traitement -->
<?php

function factorielle($nombreDepart) {
    $resultatFact = 1;
    for ($i = 1; $i <= $nombreDepart;$i++) {
        $resultatFact = $resultatFact * $i ;
    }
    return $resultatFact;
}
function occurenceTexte($texte, $caractere) {
    $counter = 0;
    for ($i=0; $i < strlen($texte); $i++) {
        if ($texte[$i] == $caractere) {
            $counter++;
        }
    }
    return $counter;
}
?>

    <!-- partie affichage -->
    <p>la factorille de 7 vaut <?= factorielle(7) ?></p>
    <p>Nombre de fois "e" dans " je m'appele alexandre": <?= occurenceTexte("je m'appele alexandre", "e") ?></p>



</body>
</html>