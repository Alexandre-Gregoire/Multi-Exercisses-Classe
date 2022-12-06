<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <?php
        function ChercheDiviseur($nb){
            $i = 1;
            $diviseurs = "";
            while($i <= $nb){
                if($nb % $i == 0){
                    $diviseurs = $diviseurs . $i . " ";
                }
                $i ++;
            }
            return $diviseurs;

        }
        function TriangleRectangle($C1,$C2,$C3){
            if(($C1>=$C2)&&($C1>=$C3)){
                $pg = $C1;
                $Cote2 = $C2;
                $Cote3 = $C3;  
            }
            else{
                if(($C2 >= $C1) && ($C2 >= $C3)){
                    $pg = $C2;
                    $Cote2 = $C1;
                    $Cote3 = $C3;
                }
                else{
                    $pg = $C3;
                    $Cote2 = $C1;
                    $Cote3 = $C2;
                }
            }
            if($pg < ($Cote2 + $Cote3)){
                if($pg*$pg == $Cote2*$Cote2 + $Cote3*$Cote3){
                    if($Cote2 == $Cote3){
                        $Message = "Triangle rectangle isocèle";
                    }
                    else{
                        $Message = "Triangle rectangle";
                    }
                }
                else{
                    $Message = "Le triangle n'est pas rectangle";
                }
            }
            else{
                $Message = "ces dimensions ne peuvent etre celle d'un triangle";
            }
            return $Message;
        }
    ?>

    <div class="menu flex justify-content-space-around">
        <a href="index.php">Home</a>
        <a href="fonction.php">fonctions</a>
        <a href="#">contact</a>
    </div>
    <div class="centrale">
        <h1>Affichage avec des fonctions PHP</h1>
        <div class="flex justify-content-space-around">
            <div>
                <h2>Trouver les diviseurs d'un nombre</h2>
                <p>le nombre 725 à <?= ChercheDiviseur(725)?> comme diviseurs</p>
            </div>
            <div>
                <h2>Est-ce un triangle rectangle et lequel</h2>
                <p><?= TriangleRectangle(3,4,5)?></p>
            </div>
        </div>
        
            
            
        <h1>Affichage sans fonctions PHP</h1>
        <div class="flex justify-content-space-around">

        
            <div>
                <h2>Changer un nombre par un autre</h2>
                    <?php $chiffres = array('2','5','4','8','9','6')?>
                    <?php for($i = 0; $i < 6; $i++) : ?>
                        <?php if($chiffres[$i] < 5) : ?>
                            <?php $chiffres[$i] += 2 ?>
                            <p><?= $chiffres[$i]?></p>
                        <?php else : ?>
                            <?php $chiffres[$i] += 3 ?>
                            <p><?= $chiffres[$i]?></p>  
                        <?php endif ?>
                    <?php endfor ?>
            </div>
            
            <div>
                <h2>Remplacer les voyelles et consonnes</h2>
                    <?php $voyelles = array('a','e','i','o','u','y') ?>
                    <?php $phrase = "kayak"; ?>
                    <?php for($i = 0; $i < strlen($phrase); $i++) : ?>
                        <?php $test = 0 ?>
                        <?php for($y = 0; $y < 6; $y++) : ?>
                            <?php if($phrase[$i] == $voyelles[$y]) : ?>
                                <p>1</p>
                                <?php $test = 1 ?>
                            <?php endif ?>
                        
                        <?php endfor ?>
                        <?php if($test == 0) : ?>
                            <p>0</p>
                        <?php endif ?>
                    <?php endfor ?>
            </div>
        </div>
    </div>
<footer class="flex justify-content-space-between">
    <div class="bas">
        <p>Examen 2022-2023</p>
        <p>UAA12 : Création d'un site web dynamique</p>
    </div>
    <div class="bas flex">
        <p>5TTI</p>
    </div>
</footer>
</body>
</html>