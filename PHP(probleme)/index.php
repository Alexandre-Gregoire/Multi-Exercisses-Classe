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
    function calculArgent($argentACalculer) {
        $argentDepart = $argentACalculer; 
        $nbBillet = 0;
        $valeurBillets = array(500,200,100,50,20,10);
        $i = 0;
        for($i=0; $i <= 5; $i++){

            $nbBillet = $nbBillet + floor($argentDepart / $valeurBillets[$i] ); 
            $argentDepart = $argentDepart - $argentDepart% $valeurBillets[$i] ;
            
            
        }
        return $nbBillet;
    }
?>

    <p>le nombre de billets est de</p> <?= calculArgent(750) ?>
</body>
</html>