"use strict";

/* Toutes les images sont à remplacer par des données d'images en base de données
dès que la version finale des test est approuvée*/


    
    mouvement.onclick =  function(){
    let limiteJetonsMouvement = 0; 
    while(limiteJetonsMouvement <1){
    let imgAvant = document.createElement('img');
    imgAvant.setAttribute('src','imagesPlayStem/fleche-haut.png');
    jetonAvancer.prepend(imgAvant);

    let imgReculer = document.createElement('img');
    imgReculer.setAttribute('src','imagesPlayStem/fleche-bas.png');
    jetonReculer.prepend(imgReculer);

    let imgDroite = document.createElement('img');
    imgDroite.setAttribute('src','imagesPlayStem/fleche-droite.png');
    jetonAvancerDroite.prepend(imgDroite);

    let imgGauche = document.createElement('img');
    imgGauche.setAttribute('src','imagesPlayStem/fleche-gauche.png');
    jetonAvancerGauche.prepend(imgGauche);

    let imgAleatoire = document.createElement('img');
    imgAleatoire.setAttribute('src','imagesPlayStem/fleche-aleatoire.png');
    jetonMouvementAleatoire.prepend(imgAleatoire);

    limiteJetonsMouvement++;
    }
    if (rotation||operations||fonction||nombres){
        imagesMouvements = mouvement.querySelectorAll('img');
        imagesMouvements.forEach((img) => img.remove());
        limiteJetonsMouvement = 0;
    }
    }