"use strict";

/* Toutes les images sont à remplacer par des données d'images en base de données
dès que la version finale des test est approuvée*/



fonction.onclick = function () {
    let limiteJetonsSpeciaux = 0;
    while (limiteJetonsSpeciaux < 1) {

        let imgJetonFonction = document.createElement('img');
        imgJetonFonction.setAttribute('src', 'imagesPlayStem/fonction.png');
        jetonFonction.prepend(imgJetonFonction);

        // let imgJetonPause = document.createElement('img');
        // imgJetonPause.setAttribute('src', 'imagesPlayStem/fleche-haut.png');
        // jetonPause.prepend(imgJetonPause);

        limiteJetonsSpeciaux++;
    }

    if (mouvement||rotation||operations||nombres){
        imagesSpeciaux = fonction.querySelectorAll('img');
        imagesSpeciaux.forEach((img) => img.remove());
        limiteJetonsSpeciaux = 0;
    }
}

