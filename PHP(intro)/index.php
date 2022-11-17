<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //étape 0
        echo '<p>____________Etape 0______________</p>';
        echo '<p>Hello world</p>';
        
        //étape 1
        echo '<p>____________Etape 1______________</p>';
        for ($i=0; $i<=10; $i++) {
            echo "<p>le nombre vaut $i</p>";
        }
        //étape 2
        echo '<p>____________Etape 2______________</p>';
        for ($i=0; $i<=10; $i++) {
            if ($i != 3)
                echo "<p>le nombre vaut $i</p>";
        }
        //étape 3
        echo '<p>____________Etape 3______________</p>';
        for ($i=0; $i<=10000; $i++) {
            if ($i < 4 or $i > 7)
                echo "<p>le nombre vaut $i</p>";
        }
        //étape 4
        echo '<p>____________Etape 4______________</p>';
        $a = -5;
        $b = 10;
        echo"<p>la valeur absolue de $a est de " . (abs($a)) . "</p>";
        echo"<p>la valeur absolue de $b est de " . (abs($b)) . "</p>";
        ?>
</body>
</html>