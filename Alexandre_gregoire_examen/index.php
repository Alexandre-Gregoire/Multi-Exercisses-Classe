<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <div class="menu flex justify-content-space-around">
        <a href="index.php">Home</a>
        <a href="fonction.php">fonctions</a>
        <a href="#">contact</a>
    </div>
    
    <div class="centrale flex ">
        <div class="image">
            <p class="galerie" >Galerie image</p>
            <img src="image/pc.jpg" alt="">
            <img src="image/pc.jpg" alt="">
            <img src="image/pc.jpg" alt="">
            <img src="image/pc.jpg" alt="">
            <img src="image/pc.jpg" alt="">
            <img src="image/pc.jpg" alt="">
            <img src="image/usb.jpg" alt="">
            <img src="image/usb.jpg" alt="">
            <img src="image/usb.jpg" alt="">
            <img src="image/usb.jpg" alt="">
            <img src="image/office.jpg" alt="">
            <img src="image/office.jpg" alt="">
            <img src="image/office.jpg" alt="">
            <img src="image/office.jpg" alt="">
            <img src="image/office.jpg" alt="">
            <img src="image/office.jpg" alt="">
            <img src="image/packet.png" alt="">
            <img src="image/packet.png" alt="">
            <img src="image/packet.png" alt="">
            <img src="image/packet.png" alt="">
            <img src="image/packet.png" alt="">
            <img src="image/packet.png" alt="">

        </div>
        <form action="" class="flex-grow">
            <div class="justify-content-space-around flex">
                <fieldset class="gauche">
                    <legend>Vos informations</legend>
                    <div>
                        
                        <div>
                            <label for="nom">Votre nom</label>
                            <input required type="text" name="nom" id="nom" placeholder="Nom">
                        </div>
                        <div>
                            <label for="prenom">Votre pr??nom</label>
                            <input required type="text" name="prenom" id="prenom" placeholder="Pr??nom">
                        </div>
                        <div>
                            <label for="mail">Votre mail</label>
                            <input required type="email" name="mail" id="mail" placeholder="Email">
                        </div>
                        <div>
                            <label for="telephone">Votre num??ro de t??l??phone</label>
                            <input required type="tel" name="telephone" id="telephone" placeholder="Num??ro de t??l??phone">
                        </div>
                    </div>
                    
                </fieldset>
                <fieldset class="droite">
                    <legend>Votre commande</legend>
                    <div class="droite">
                        <label for="possibilite">Choisissez parmis les possibilit??s</label>
                        <select name="possibilite" id="possibilite">
                            <optgroup label="Hardware">
                                <option value="ecran">Ecran</option>
                                <option value="souris">Souris</option>
                                <option value="clavier">Clavier</option>
                                <option value="ram">RAM</option>
                                <option value="disque">Disque dur</option>
                            </optgroup>
                            <optgroup label="Software">
                                <option value="office">Office 365</option>
                                <option value="packet">Packet Tracer</option>
                                <option value="Google">Google workspace</option>
                            </optgroup>
                        </select>
                    </div>
                    <div>
                        <label for="quantite">La quantite souhait??e</label>
                        <input value="1" max="10" min="1" required type="number" name="quantite" id="quantite">
                    </div>
                    <div>
                        <label for="date">Date de commande souhait??e</label>
                        <input type="date" name="date" id="date">
                    </div>
                    <label for="">Facture choisie</label>
                    <div>
                        
                        <input type="checkbox" id="parmail" name="parmail" value="parmail" checked>
                        <label class="deco-none" for="parmail">Par mail</label>
                    </div>
                    <div>
                        <input type="checkbox" id="parpapier" name="parpapier" value="parpapier">
                        <label class="deco-none" for="parpapier">Par papier</label>
                    </div>
                    <div>
                        <label for="remarque">Remarques suppl??mentaires</label>
                        <textarea name="remarque" id="remarque" cols="20" rows="3" placeholder="Votre message"></textarea>
                    </div>
                    
                    
                </fieldset>
            </div>
            
            <button class="">Envoyer</button>


        </form>
        <div class="image">
            <p class="galerie">Galerie image</p>
            <img src="image/pc.jpg" alt="">
            <img src="image/pc.jpg" alt="">
            <img src="image/pc.jpg" alt="">
            <img src="image/pc.jpg" alt="">
            <img src="image/pc.jpg" alt="">
            <img src="image/pc.jpg" alt="">
            <img src="image/usb.jpg" alt="">
            <img src="image/usb.jpg" alt="">
            <img src="image/usb.jpg" alt="">
            <img src="image/usb.jpg" alt="">
            <img src="image/office.jpg" alt="">
            <img src="image/office.jpg" alt="">
            <img src="image/office.jpg" alt="">
            <img src="image/office.jpg" alt="">
            <img src="image/office.jpg" alt="">
            <img src="image/office.jpg" alt="">
            <img src="image/packet.png" alt="">
            <img src="image/packet.png" alt="">
            <img src="image/packet.png" alt="">
            <img src="image/packet.png" alt="">
            <img src="image/packet.png" alt="">
            <img src="image/packet.png" alt="">

        </div>
        
    </div>
<footer class="flex justify-content-space-between">
    <div class="bas">
        <p>Examen 2022-2023</p>
        <p>UAA12 : Cr??ation d'un site web dynamique</p>
    </div>
    <div class="bas">
        <p>5TTI</p>
    </div>
</footer>
</body>
</html>