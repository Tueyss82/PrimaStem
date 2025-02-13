"use strict";

//------------------------------------------------------Jetons de Mouvements(sauf le jeton rotation de la catégorie Rotation)---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

let limiteJetonsMouvements = 0;

mouvement.addEventListener("click", function () {
    
    
    while (limiteJetonsMouvements < 1) {

        // Jeton Direction Haut ^

        let imgAvant = document.createElement('img');
        imgAvant.setAttribute('src', 'imagesPlayStem/fleche-haut.png');
        
        jetonAvancer.appendChild(imgAvant);
        
        
        // Jeton Direction Bas v

        let imgReculer = document.createElement('img');
        imgReculer.setAttribute('src', 'imagesPlayStem/fleche-bas.png');
        
        jetonReculer.prepend(imgReculer);

        
        // Jeton Direction Droite -->

        let imgDroite = document.createElement('img');
        imgDroite.setAttribute('src', 'imagesPlayStem/fleche-droite.png');
        jetonAvancerDroite.prepend(imgDroite);


        // Jeton Direction Gauche <--
        let imgGauche = document.createElement('img');
        imgGauche.setAttribute('src', 'imagesPlayStem/fleche-gauche.png');
        jetonAvancerGauche.prepend(imgGauche);


        // Jeton Direction Aléatoire --> v ^ <--
        let imgAleatoire = document.createElement('img');
        imgAleatoire.setAttribute('src', 'imagesPlayStem/fleche-aleatoire.png');
        jetonMouvementAleatoire.prepend(imgAleatoire);

        limiteJetonsMouvements++;

        
    }
})

//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


//------------------------------------Jetons de Rotation et de Répétition(seul le jeton rotation est le mouvement présent dans cette catégorie)---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


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
    
    
})

//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------



//------------------------------------Jetons Nombres---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------



let limiteJetonsNombres = 0;


nombres.onclick =  function () {

    while(limiteJetonsNombres < 1) {
        let imgJeton1 = document.createElement('img');
        imgJeton1.setAttribute('src', 'imagesPlayStem/nombre1.png');
        imgJeton1.setAttribute('draggable', 'true');

        jeton1.prepend(imgJeton1);

        let imgJeton2 = document.createElement('img');
        imgJeton2.setAttribute('src', 'imagesPlayStem/nombre2.png');
        imgJeton2.setAttribute('draggable', 'true');

        jeton2.prepend(imgJeton2);

        let imgJeton3 = document.createElement('img');
        imgJeton3.setAttribute('src', 'imagesPlayStem/nombre3.png');
        imgJeton3.setAttribute('draggable', 'true');

        jeton3.prepend(imgJeton3);

        let imgJeton4 = document.createElement('img');
        imgJeton4.setAttribute('src', 'imagesPlayStem/nombre4.png');
        imgJeton4.setAttribute('draggable', 'true');

        jeton4.prepend(imgJeton4);

        let imgJeton5 = document.createElement('img');
        imgJeton5.setAttribute('src', 'imagesPlayStem/nombre5.png');
        imgJeton5.setAttribute('draggable', 'true');

        jeton5.prepend(imgJeton5);

        let imgJeton6 = document.createElement('img');
        imgJeton6.setAttribute('src', 'imagesPlayStem/nombre6.png');
        imgJeton6.setAttribute('draggable', 'true');

        jeton6.prepend(imgJeton6);

        let imgJeton7 = document.createElement('img');
        imgJeton7.setAttribute('src', 'imagesPlayStem/nombre7.png');
        imgJeton7.setAttribute('draggable', 'true');

        jeton7.prepend(imgJeton7);

        let imgJeton8 = document.createElement('img');
        imgJeton8.setAttribute('src', 'imagesPlayStem/nombre8.png');
        imgJeton8.setAttribute('draggable', 'true');

        jeton8.prepend(imgJeton8);

        let imgJeton9 = document.createElement('img');
        imgJeton9.setAttribute('src', 'imagesPlayStem/nombre9.png');
        imgJeton9.setAttribute('draggable', 'true');

        jeton9.prepend(imgJeton9);

        let imgJeton10 = document.createElement('img');
        imgJeton10.setAttribute('src', 'imagesPlayStem/nombre10.png');
        imgJeton10.setAttribute('draggable', 'true');

        jeton10.prepend(imgJeton10);

        let imgJeton15 = document.createElement('img');
        imgJeton15.setAttribute('src', 'imagesPlayStem/nombre15.png');
        imgJeton15.setAttribute('draggable', 'true');

        jeton15.prepend(imgJeton15);

        let imgJeton20 = document.createElement('img');
        imgJeton20.setAttribute('src', 'imagesPlayStem/nombre20.png');
        imgJeton20.setAttribute('draggable', 'true');

        jeton20.prepend(imgJeton20);

        let imgJeton36 = document.createElement('img');
        imgJeton36.setAttribute('src', 'imagesPlayStem/nombre36.png');
        imgJeton36.setAttribute('draggable', 'true');

        jeton36.prepend(imgJeton36);

        let imgJeton40 = document.createElement('img');
        imgJeton40.setAttribute('src', 'imagesPlayStem/nombre40.png');
        imgJeton40.setAttribute('draggable', 'true');

        jeton40.prepend(imgJeton40);

        let imgJeton45 = document.createElement('img');
        imgJeton45.setAttribute('src', 'imagesPlayStem/nombre45.png');
        imgJeton45.setAttribute('draggable', 'true');

        jeton45.prepend(imgJeton45);

        let imgJeton50 = document.createElement('img');
        imgJeton50.setAttribute('src', 'imagesPlayStem/nombre50.png');
        imgJeton50.setAttribute('draggable', 'true');

        jeton50.prepend(imgJeton50);

        let imgJeton60 = document.createElement('img');
        imgJeton60.setAttribute('src', 'imagesPlayStem/nombre60.png');
        imgJeton60.setAttribute('draggable', 'true');

        jeton60.prepend(imgJeton60);

        let imgJeton72 = document.createElement('img');
        imgJeton72.setAttribute('src', 'imagesPlayStem/nombre72.png');
        imgJeton72.setAttribute('draggable', 'true');

        jeton72.prepend(imgJeton72);

        let imgJeton90 = document.createElement('img');
        imgJeton90.setAttribute('src', 'imagesPlayStem/nombre90.png');
        imgJeton90.setAttribute('draggable', 'true');

        jeton90.prepend(imgJeton90);

        let imgJeton100 = document.createElement('img');
        imgJeton100.setAttribute('src', 'imagesPlayStem/nombre100.png');
        imgJeton100.setAttribute('draggable', 'true');

        jeton100.prepend(imgJeton100);

        let imgJeton108 = document.createElement('img');
        imgJeton108.setAttribute('src', 'imagesPlayStem/nombre108.png');
        imgJeton108.setAttribute('draggable', 'true');

        jeton108.prepend(imgJeton108);

        let imgJeton120 = document.createElement('img');
        imgJeton120.setAttribute('src', 'imagesPlayStem/nombre120.png');
        imgJeton120.setAttribute('draggable', 'true');

        jeton120.prepend(imgJeton120);

        let imgJeton135 = document.createElement('img');
        imgJeton135.setAttribute('src', 'imagesPlayStem/nombre135.png');
        imgJeton135.setAttribute('draggable', 'true');

        jeton135.prepend(imgJeton135);

        let imgJeton144 = document.createElement('img');
        imgJeton144.setAttribute('src', 'imagesPlayStem/nombre144.png');
        imgJeton144.setAttribute('draggable', 'true');

        jeton144.prepend(imgJeton144);

        let imgJeton150 = document.createElement('img');
        imgJeton150.setAttribute('src', 'imagesPlayStem/nombre150.png');
        imgJeton150.setAttribute('draggable', 'true');

        jeton150.prepend(imgJeton150);

        let imgJeton180 = document.createElement('img');
        imgJeton180.setAttribute('src', 'imagesPlayStem/nombre180.png');
        imgJeton180.setAttribute('draggable', 'true');

        jeton180.prepend(imgJeton180);

        let imgJeton360 = document.createElement('img');
        imgJeton360.setAttribute('src', 'imagesPlayStem/nombre360.png');
        imgJeton360.setAttribute('draggable', 'true');

        jeton360.prepend(imgJeton360);

        limiteJetonsNombres++;

    }
}

//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


//------------------------------------Jetons d'Opérations Arithmétiques---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


let limiteJetonsOperations = 0;

operations.addEventListener("click", function (event)  {
    
    while (limiteJetonsOperations < 1) {
        
        let imgJetonPlus1 = document.createElement('img');
        imgJetonPlus1.setAttribute('src', 'imagesPlayStem/operationPlus1.png');
        jetonPlus1.prepend(imgJetonPlus1);

        let imgJetonPlus2 = document.createElement('img');
        imgJetonPlus2.setAttribute('src', 'imagesPlayStem/operationPlus2.png');
        jetonPlus2.prepend(imgJetonPlus2);

        let imgJetonPlus3 = document.createElement('img');
        imgJetonPlus3.setAttribute('src', 'imagesPlayStem/operationPlus3.png');
        jetonPlus3.prepend(imgJetonPlus3);

        let imgJetonPlus5 = document.createElement('img');
        imgJetonPlus5.setAttribute('src', 'imagesPlayStem/operationPlus5.png');
        jetonPlus5.prepend(imgJetonPlus5);

        let imgJetonPlus10 = document.createElement('img');
        imgJetonPlus10.setAttribute('src', 'imagesPlayStem/operationPlus10.png');
        jetonPlus10.prepend(imgJetonPlus10);

        let imgJetonPlus15 = document.createElement('img');
        imgJetonPlus15.setAttribute('src', 'imagesPlayStem/operationPlus15.png');
        jetonPlus15.prepend(imgJetonPlus15);

        let imgJetonPlus20 = document.createElement('img');
        imgJetonPlus20.setAttribute('src', 'imagesPlayStem/operationPlus20.png');
        jetonPlus20.prepend(imgJetonPlus20);

        let imgJetonPlus50 = document.createElement('img');
        imgJetonPlus50.setAttribute('src', 'imagesPlayStem/operationPlus50.png');
        jetonPlus50.prepend(imgJetonPlus50);

        let imgJetonPlus100 = document.createElement('img');
        imgJetonPlus100.setAttribute('src', 'imagesPlayStem/operationPlus100.png');
        jetonPlus100.prepend(imgJetonPlus100);

        let imgJetonMoins1 = document.createElement('img');
        imgJetonMoins1.setAttribute('src', 'imagesPlayStem/operationMoins1.png');
        jetonMoins1.prepend(imgJetonMoins1);

        let imgJetonMoins2 = document.createElement('img');
        imgJetonMoins2.setAttribute('src', 'imagesPlayStem/operationMoins2.png');
        jetonMoins2.prepend(imgJetonMoins2);

        let imgJetonMoins3 = document.createElement('img');
        imgJetonMoins3.setAttribute('src', 'imagesPlayStem/operationMoins3.png');
        jetonMoins3.prepend(imgJetonMoins3);

        let imgJetonMoins5 = document.createElement('img');
        imgJetonMoins5.setAttribute('src', 'imagesPlayStem/operationMoins5.png');
        jetonMoins5.prepend(imgJetonMoins5);

        let imgJetonMoins10 = document.createElement('img');
        imgJetonMoins10.setAttribute('src', 'imagesPlayStem/operationMoins10.png');
        jetonMoins10.prepend(imgJetonMoins10);

        let imgJetonMoins15 = document.createElement('img');
        imgJetonMoins15.setAttribute('src', 'imagesPlayStem/operationMoins15.png');
        jetonMoins15.prepend(imgJetonMoins15);

        let imgJetonMoins20 = document.createElement('img');
        imgJetonMoins20.setAttribute('src', 'imagesPlayStem/operationMoins20.png');
        jetonMoins20.prepend(imgJetonMoins20);

        let imgJetonMoins50 = document.createElement('img');
        imgJetonMoins50.setAttribute('src', 'imagesPlayStem/operationMoins50.png');
        jetonMoins50.prepend(imgJetonMoins50);

        let imgJetonMoins100 = document.createElement('img');
        imgJetonMoins100.setAttribute('src', 'imagesPlayStem/operationMoins100.png');
        jetonMoins100.prepend(imgJetonMoins100);

        let imgJetonMultipliePar2 = document.createElement('img');
        imgJetonMultipliePar2.setAttribute('src', 'imagesPlayStem/operationMultipliePar2.png');
        jetonMultipliePar2.prepend(imgJetonMultipliePar2);

        let imgJetonMultipliePar3 = document.createElement('img');
        imgJetonMultipliePar3.setAttribute('src', 'imagesPlayStem/operationMultipliePar3.png');
        jetonMultipliePar3.prepend(imgJetonMultipliePar3);

        let imgJetonDivisePar2 = document.createElement('img');
        imgJetonDivisePar2.setAttribute('src', 'imagesPlayStem/operationDivisePar2.png');
        jetonDivisePar2.prepend(imgJetonDivisePar2);

        let imgJetonDivisePar3 = document.createElement('img');
        imgJetonDivisePar3.setAttribute('src', 'imagesPlayStem/operationDivisePar3.png');
        jetonDivisePar3.prepend(imgJetonDivisePar3);

        let imgJetonPuissance2 = document.createElement('img');
        imgJetonPuissance2.setAttribute('src', 'imagesPlayStem/operationPuissanceDe2.png');
        jetonPuissanceDe2.prepend(imgJetonPuissance2);

        let imgJetonPuissance3 = document.createElement('img');
        imgJetonPuissance3.setAttribute('src', 'imagesPlayStem/operationPuissanceDe3.png');
        jetonPuissanceDe3.prepend(imgJetonPuissance3);

        let imgJetonCarreDeNombreX = document.createElement('img');
        imgJetonCarreDeNombreX.setAttribute('src', 'imagesPlayStem/racineCarreDeNombreX.png');
        jetonRacineCarreDeNombreX.prepend(imgJetonCarreDeNombreX);

        limiteJetonsOperations++;

    }

})


// //------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------




// //------------------------------------Jetons Spéciaux---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


