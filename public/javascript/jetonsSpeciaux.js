"use strict";

/* Toutes les images sont à remplacer par des données d'images en base de données
dès que la version finale des test est approuvée*/


let limiteJetonsSpeciaux = 0;
fonction.onclick = function () {
    
    while (limiteJetonsSpeciaux < 1) {

        let imgJetonFonction = document.createElement('img');
        imgJetonFonction.setAttribute('src', 'imagesPlayStem/fonction.png');
        jetonFonction.prepend(imgJetonFonction);

        // let imgJetonPause = document.createElement('img');
        // imgJetonPause.setAttribute('src', 'imagesPlayStem/fleche-haut.png');
        // jetonPause.prepend(imgJetonPause);

        limiteJetonsSpeciaux++;


        let jetonsSpeciaux = [];
        jetonsSpeciaux.push("jetonFonction");

        if ((!rotation.onclick) || (!operations.onclick) || (!fonction.onclick) || (!nombres.onclick)) {
            let allDivSpeciaux = document.querySelectorAll('divSpeciaux');
            allDivRotation.forEach( (div) => {                
                let imagesSpeciaux = div.querySelectorAll('img');
                
                imagesSpeciaux.forEach(image => { image.remove()});
            });
            jetonsSpeciaux = [];
            limiteJetonsSpeciaux = 0;
        }
    }

    
}

