"use strict";


let limiteJetonsMouvements = 0;

mouvement.addEventListener("click", function () {
    
    
    while (limiteJetonsMouvements < 1) {
        let imgAvant = document.createElement('img');
        imgAvant.setAttribute('src', 'imagesPlayStem/fleche-haut.png');
        jetonAvancer.prepend(imgAvant);

        let imgReculer = document.createElement('img');
        imgReculer.setAttribute('src', 'imagesPlayStem/fleche-bas.png');
        jetonReculer.prepend(imgReculer);

        let imgDroite = document.createElement('img');
        imgDroite.setAttribute('src', 'imagesPlayStem/fleche-droite.png');
        jetonAvancerDroite.prepend(imgDroite);

        let imgGauche = document.createElement('img');
        imgGauche.setAttribute('src', 'imagesPlayStem/fleche-gauche.png');
        jetonAvancerGauche.prepend(imgGauche);

        let imgAleatoire = document.createElement('img');
        imgAleatoire.setAttribute('src', 'imagesPlayStem/fleche-aleatoire.png');
        jetonMouvementAleatoire.prepend(imgAleatoire);

        limiteJetonsMouvements++;

        
    }
    // let jetonsMouvements = [];
    //     jetonsMouvements.push("jetonAvancer");
    //     jetonsMouvements.push("jetonReculer");
    //     jetonsMouvements.push("jetonAvancerDroite");
    //     jetonsMouvements.push("jetonAvancerGauche");
    //     jetonsMouvements.push("jetonMouvementAleatoire");

    //     if ((rotation.onclick) || (operations.onclick) || (fonction.onclick) || (nombres.onclick)) {
    //         let allDivMouvement = document.querySelectorAll('divMouvement');
    //         allDivMouvement.forEach( (div) => {                
    //             let imagesMouvement = div.querySelectorAll('img');
                
    //             imagesMouvement.forEach(image => { image.remove()});

    //         });
    //         jetonsMouvements = [];
    //         limiteJetonsMouvements = 0;
    //     }


    // if (mouvement){
    //     limiteJetonsMouvements = 1;
    // }

})