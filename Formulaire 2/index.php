<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Un super formulaire</h1>
    <form action="" method="get">
        <fieldset>
            <legend>Données personnelles</legend>
            <div>
                <label for="prenom">Votre prénom</label>
                <input required type="text" name="prenom" id="prenom">
            </div>
            <div>
                <label for="nom">Votre nom</label>
                <input required type="text" name="nom" id="nom">
            </div>
            <div>
                <label for="naisance">Votre date de naissance</label>
                <input type="date" name="naissance" id="naissance">
            </div>

        </fieldset>
        <fieldset>
            <legend>Les nouveaux input</legend>
            <div>
                <label for="url">Votre URL</label>
                <input type="url" name="url" id="url">
            </div>
            <div>
                <label for="telephone">Votre numéro de téléphone</label>
                <input type="tel" name="telephone" id="telephone">
            </div>
            <div>
                <label for="appreciation">Votre appréciation (entre 10 et 20)</label>
                <input type="range" name="appreciation" id="appreciation" min="0" max="20">
            </div>
            <div>
                <label for="couleur">Votre couleur préférée</label>
                <input type="color" name="couleur" id="couleur">
            </div>
            <div>
                <label for="recherche">Votre recherche</label>
                <input type="search" name="recherche" id="recherche">
            </div>
            <div>
                <label for="fichier">Choisis un fichier</label>
                <input type="file" name="fichier" id="fichier">
            </div>
        </fieldset>
                
    </form>
    
</body>
</html>