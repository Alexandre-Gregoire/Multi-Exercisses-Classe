<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <!-- étape 0 -->
        <p>____________Etape 0______________</p>
        <p>Hello world</p>
        
        <!--étape 1 -->
        
        <p>____________Etape 1______________</p>
        <?php for ($i=0; $i<=10; $i++) : ?>
            <p>le nombre vaut <?= $i ?> </p>
        <?php endfor ?>
        
        <!--étape 2 -->
        <p>____________Etape 2______________</p>

        <?php for ($i=0; $i<=10; $i++) : ?>
            <?php if ($i != 3) : ?>
                <p>le nombre vaut $i</p>
            <?php endif ?>
        <?php endfor ?>
        <!--étape 3 -->
        <p>____________Etape 3______________</p>
        <?php for ($i=0; $i<=10; $i++) : ?>
            <?php if ($i < 4 or $i > 7) : ?>
                <p>le nombre vaut $i</p>
            <?php endif ?>
        <?php endfor ?>
        <!--étape 4 -->
        <p>____________Etape 4______________</p>
        <?php $a = -5; ?>
        <?php $b = 10; ?>
        <p>la valeur absolue de <?=$a ?>est de <?= (abs($a))?> </p>
        <p>la valeur absolue de <?=$b ?>est de <?= (abs($b))?> </p>
        
</body>
</html>