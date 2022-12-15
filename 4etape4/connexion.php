<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/animation.css">
    <title>Document</title>
</head>

<body>
    <header>
        <ul class="flex space-evenly">
            <li class="menu"><a href="index.php">Home</a></li>
            <li class="menu"><a href="profil.php">Page profil</a></li>
            <li class="menu"><a href="connexion.php">Connexion</a></li>
            <li class="menu"><a href="inscription.php">Inscription</a></li>
            <li class="imageMenu"><a href="index.php"><ion-icon size="large" name="home-outline"></ion-icon></a></li>
            <li class="imageMenu"><a href="profil.php"><ion-icon size="large" name="person-outline"></ion-icon></a></li>
            <li class="imageMenu"><a href="connexion.php"><ion-icon size="large" name="enter-outline"></ion-icon></ion-icon></a></li>
            <li class="imageMenu"><a href="inscription.php"><ion-icon size="large" name="create-outline"></ion-icon></a></li>
        </ul>
    </header>
    <main>
        <form action="" method="get">
            <div class="flex justify-content-space-around">
                <fieldset class="formLeft">
                    <legend>Vos coordonnées</legend>
                    <div>
                        <label for="nom">Nom :</label> 
                        <input required type="text" name="nom" id="nom" placeholder="Votre nom">
                    </div>
                    <div>
                        <label for="prenom">Prénom :</label>
                        <input maxlength="20" minlength="3" required type="text" name="prenom" id="prenom" placeholder="Votre prénom">
                    </div>
                    <div>
                        <label for="email">Email :</label>
                        <input required type="email" name="email" id="email" placeholder="Votre email">
                    </div>
                    <div>
                        <label for="motDePasse">Mot de passe : </label>
                        <input required type="password" name="motDePasse" id="motDePasse" placeholder="Mot de passe">
                    </div>
                    <button>Inscription</button>
                </fieldset>
                
            </div>
            
            
        </form>
        
        
    </main>
    <footer>
        <div class="flex space-between align-item-center">
            <p><a href="https://www.christinesurges.be/" target="_blank" title="Aller à l'agence">Voir l'agence</a></p>
            <div>
                <img class="imageIcon" src="Images/icon1.jpg" alt="image twitter">
                <img class="imageIcon" src="Images/icon2.jpg" alt="image facebook">
                <img class="imageIcon" src="Images/icon3.jpg" alt="image google">
            </div>
        </div>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    

</body>
</html>