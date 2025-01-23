
"use strict";

/* Toutes les images sont à remplacer par des données d'images en base de données
dès que la version finale des test est approuvée*/

let limiteJetonsRotation = 0;

rotation.addEventListener("click", function() {
   
    while (limiteJetonsRotation < 1) {
        let imgRotation = document.createElement('img');
        imgRotation.setAttribute('src', 'imagesPlayStem/rotation.png');
        jetonRotation.prepend(imgRotation);

        let imgRepeter2 = document.createElement('img');
        imgRepeter2.setAttribute('src', 'imagesPlayStem/repeter2.png');
        jetonRepeter2.prepend(imgRepeter2);

        let imgRepeter3 = document.createElement('img');
        imgRepeter3.setAttribute('src', 'imagesPlayStem/repeter3.png');
        jetonRepeter3.prepend(imgRepeter3);

        let imgRepeter4 = document.createElement('img');
        imgRepeter4.setAttribute('src', 'imagesPlayStem/repeter4.png');
        jetonRepeter4.prepend(imgRepeter4);

        let imgRepeter5 = document.createElement('img');
        imgRepeter5.setAttribute('src', 'imagesPlayStem/repeter5.png');
        jetonRepeter5.prepend(imgRepeter5);

        let imgRepeter6 = document.createElement('img');
        imgRepeter6.setAttribute('src', 'imagesPlayStem/repeter6.png');
        jetonRepeter6.prepend(imgRepeter6);

        let imgRepeterAleatoire = document.createElement('img');
        imgRepeterAleatoire.setAttribute('src', 'imagesPlayStem/repeter-aleatoire.png');
        jetonRepeterAleatoire.prepend(imgRepeterAleatoire);

        let imgRepeter7 = document.createElement('img');
        imgRepeter7.setAttribute('src', 'imagesPlayStem/repeter7.png');
        jetonRepeter7.prepend(imgRepeter7);

        let imgRepeter8 = document.createElement('img');
        imgRepeter8.setAttribute('src', 'imagesPlayStem/repeter8.png');
        jetonRepeter8.prepend(imgRepeter8);

        let imgRepeter9 = document.createElement('img');
        imgRepeter9.setAttribute('src', 'imagesPlayStem/repeter9.png');
        jetonRepeter9.prepend(imgRepeter9);

        let imgRepeter10 = document.createElement('img');
        imgRepeter10.setAttribute('src', 'imagesPlayStem/repeter10.png');
        jetonRepeter10.prepend(imgRepeter10);

        let imgRepeter18 = document.createElement('img');
        imgRepeter18.setAttribute('src', 'imagesPlayStem/repeter18.png');
        jetonRepeter18.prepend(imgRepeter18);

        let imgRepeter36 = document.createElement('img');
        imgRepeter36.setAttribute('src', 'imagesPlayStem/repeter36.png');
        jetonRepeter36.prepend(imgRepeter36);

        let imgRepeter72 = document.createElement('img');
        imgRepeter72.setAttribute('src', 'imagesPlayStem/repeter72.png');
        jetonRepeter72.prepend(imgRepeter72);

        let imgRepeter180 = document.createElement('img');
        imgRepeter180.setAttribute('src', 'imagesPlayStem/repeter180.png');
        jetonRepeter180.prepend(imgRepeter180);

        let imgRepeter360 = document.createElement('img');
        imgRepeter360.setAttribute('src', 'imagesPlayStem/repeter360.png');
        jetonRepeter360.prepend(imgRepeter360);

        limiteJetonsRotation++;
    }
    let jetonsRotation = [];
        jetonsRotation.push("jetonRotation");
        jetonsRotation.push("jetonRepeter2");
        jetonsRotation.push("jetonRepeter3");
        jetonsRotation.push("jetonRepeter4");
        jetonsRotation.push("jetonRepeter5");
        jetonsRotation.push("jetonRepeter6");
        jetonsRotation.push("jetonRepeterAleatoire");
        jetonsRotation.push("jetonRepeter7");
        jetonsRotation.push("jetonRepeter8");
        jetonsRotation.push("jetonRepeter9");
        jetonsRotation.push("jetonRepeter10");
        jetonsRotation.push("jetonRepeter18");
        jetonsRotation.push("jetonRepeter36");
        jetonsRotation.push("jetonRepeter72");
        jetonsRotation.push("jetonRepeter180");
        jetonsRotation.push("jetonRepeter360");
        
        if ((!mouvement.onclick) || (!operations.onclick) || (!fonction.onclick) || (!nombres.onclick)) {

            let change = divRotation.style.display = "none";
            
            let allDivRotation = document.querySelectorAll('.divRotation');
            allDivRotation.forEach( (div) => {                
                let imagesRotation = div.querySelectorAll('img');
                
                imagesRotation.forEach(image => { image.remove()});
            });
            jetonsRotation = [];
            limiteJetonsRotation = 0;

        }
    
})