"use strict";

/* Toutes les images sont à remplacer par des données d'images en base de données
dès que la version finale des test est approuvée*/



    mouvement.addEventListener("click", function(){

    document.getElementById(jetonAvancer).innerHTML = '<img src="imagesPlayStem\fleche-haut.png>"';
    document.getElementById(jetonReculer).innerHTML = '<img src="imagesPlayStem\fleche-bas.png>"';
    document.getElementById(jetonAvancerGauche).innerHTML = '<img src="imagesPlayStem\fleche-gauche.png>"';
    document.getElementById(jetonAvancerDroite).innerHTML = '<img src="imagesPlayStem\fleche-droite.png>"';
    document.getElementById(jetonMouvementAleatoire).innerHTML = '<img src="imagesPlayStem\fleche-aleatoire.png>"';
    });
    
// rotation.onclick = function (){

//     document.getElementById(jetonRotation).innerHTML = '<img src="imagesPlayStem\rotation.png>"';
//     document.getElementById(jetonRepeter2).innerHTML = '<img src="imagesPlayStem\fleche-bas.png>"';
//     document.getElementById(jetonRepeter3).innerHTML = '<img src="imagesPlayStem\fleche-gauche.png>"';
//     document.getElementById(jetonRepeter4).innerHTML = '<img src="imagesPlayStem\fleche-droite.png>"';
//     document.getElementById(jetonRepeter5).innerHTML = '<img src="imagesPlayStem\fleche-aleatoire.png>"';
//     document.getElementById(jetonRepeter6).innerHTML = '<img src="imagesPlayStem\fleche-bas.png>"';
//     document.getElementById(jetonRepeterAleatoire).innerHTML = '<img src="imagesPlayStem\fleche-bas.png>"';
//     document.getElementById(jetonRepeter7).innerHTML = '<img src="imagesPlayStem\fleche-bas.png>"';
//     document.getElementById(jetonRepeter8).innerHTML = '<img src="imagesPlayStem\fleche-bas.png>"';
//     document.getElementById(jetonRepeter9).innerHTML = '<img src="imagesPlayStem\fleche-bas.png>"';
//     document.getElementById(jetonRepeter10).innerHTML = '<img src="imagesPlayStem\fleche-bas.png>"';
//     document.getElementById(jetonRepeter18).innerHTML = '<img src="imagesPlayStem\fleche-bas.png>"';
//     document.getElementById(jetonRepeter36).innerHTML = '<img src="imagesPlayStem\fleche-bas.png>"';
//     document.getElementById(jetonRepeter72).innerHTML = '<img src="imagesPlayStem\fleche-bas.png>"';
//     document.getElementById(jetonRepeter180).innerHTML = '<img src="imagesPlayStem\fleche-bas.png>"';
//     document.getElementById(jetonRepeter360).innerHTML = '<img src="imagesPlayStem\fleche-bas.png>"';

// };

// nombres.onclick = function (){

    
//     document.getElementById(jeton2).innerHTML = '<img src="imagesPlayStem\fleche-bas.png>"';
//     document.getElementById(jeton3).innerHTML = '<img src="imagesPlayStem\fleche-bas.png>"';
//     document.getElementById(jeton4).innerHTML = '<img src="imagesPlayStem\fleche-bas.png>"';
//     document.getElementById(jeton5).innerHTML = '<img src="imagesPlayStem\fleche-bas.png>"';
//     document.getElementById(jeton6).innerHTML = '<img src="imagesPlayStem\fleche-bas.png>"';
//     document.getElementById(jeton7).innerHTML = '<img src="imagesPlayStem\fleche-bas.png>"';
//     document.getElementById(jeton8).innerHTML = '<img src="imagesPlayStem\fleche-bas.png>"';
//     document.getElementById(jeton9).innerHTML = '<img src="imagesPlayStem\fleche-bas.png>"';
//     document.getElementById(jeton10).innerHTML = '<img src="imagesPlayStem\fleche-bas.png>"';
//     document.getElementById(jeton15).innerHTML = '<img src="imagesPlayStem\fleche-bas.png>"';
//     document.getElementById(jeton20).innerHTML = '<img src="imagesPlayStem\fleche-bas.png>"';
//     document.getElementById(jeton36).innerHTML = '<img src="imagesPlayStem\fleche-bas.png>"';
//     document.getElementById(jeton40).innerHTML = '<img src="imagesPlayStem\fleche-bas.png>"';
//     document.getElementById(jeton45).innerHTML = '<img src="imagesPlayStem\fleche-bas.png>"';
//     document.getElementById(jeton50).innerHTML = '<img src="imagesPlayStem\fleche-bas.png>"';
//     document.getElementById(jeton60).innerHTML = '<img src="imagesPlayStem\fleche-bas.png>"';
//     document.getElementById(jeton72).innerHTML = '<img src="imagesPlayStem\fleche-bas.png>"';
//     document.getElementById(jeton90).innerHTML = '<img src="imagesPlayStem\fleche-bas.png>"';
//     document.getElementById(jeton100).innerHTML = '<img src="imagesPlayStem\fleche-bas.png>"';
//     document.getElementById(jeton108).innerHTML = '<img src="imagesPlayStem\fleche-bas.png>"';
//     document.getElementById(jeton120).innerHTML = '<img src="imagesPlayStem\fleche-bas.png>"';
//     document.getElementById(jeton135).innerHTML = '<img src="imagesPlayStem\fleche-bas.png>"';
//     document.getElementById(jeton144).innerHTML = '<img src="imagesPlayStem\fleche-bas.png>"';
//     document.getElementById(jeton150).innerHTML = '<img src="imagesPlayStem\fleche-bas.png>"';
//     document.getElementById(jeton180).innerHTML = '<img src="imagesPlayStem\fleche-bas.png>"';
//     document.getElementById(jeton360).innerHTML = '<img src="imagesPlayStem\fleche-bas.png>"';

// };

// operations.onclick = function (){

//     document.getElementById(jetonPlus1).innerHTML = '<img src="imagesPlayStem\fleche-haut.png>"';
//     document.getElementById(jetonPlus2).innerHTML = '<img src="imagesPlayStem\fleche-haut.png>"';
//     document.getElementById(jetonPlus3).innerHTML = '<img src="imagesPlayStem\fleche-haut.png>"';
//     document.getElementById(jetonPlus5).innerHTML = '<img src="imagesPlayStem\fleche-haut.png>"';
//     document.getElementById(jetonPlus10).innerHTML = '<img src="imagesPlayStem\fleche-haut.png>"';
//     document.getElementById(jetonPlus15).innerHTML = '<img src="imagesPlayStem\fleche-haut.png>"';
//     document.getElementById(jetonPlus20).innerHTML = '<img src="imagesPlayStem\fleche-haut.png>"';
//     document.getElementById(jetonPlus50).innerHTML = '<img src="imagesPlayStem\fleche-haut.png>"';
//     document.getElementById(jetonPlus100).innerHTML = '<img src="imagesPlayStem\fleche-haut.png>"';

//     document.getElementById(jetonMoins1).innerHTML = '<img src="imagesPlayStem\fleche-haut.png>"';
//     document.getElementById(jetonMoins2).innerHTML = '<img src="imagesPlayStem\fleche-haut.png>"';
//     document.getElementById(jetonMoins3).innerHTML = '<img src="imagesPlayStem\fleche-haut.png>"';
//     document.getElementById(jetonMoins5).innerHTML = '<img src="imagesPlayStem\fleche-haut.png>"';
//     document.getElementById(jetonMoins10).innerHTML = '<img src="imagesPlayStem\fleche-haut.png>"';
//     document.getElementById(jetonMoins15).innerHTML = '<img src="imagesPlayStem\fleche-haut.png>"';
//     document.getElementById(jetonMoins20).innerHTML = '<img src="imagesPlayStem\fleche-haut.png>"';
//     document.getElementById(jetonMoins50).innerHTML = '<img src="imagesPlayStem\fleche-haut.png>"';
//     document.getElementById(jetonMoins100).innerHTML = '<img src="imagesPlayStem\fleche-haut.png>"';

//     document.getElementById(jetonMultipliePar2).innerHTML = '<img src="imagesPlayStem\fleche-haut.png>"';
//     document.getElementById(jetonMultipliePar3).innerHTML = '<img src="imagesPlayStem\fleche-haut.png>"';

//     document.getElementById(jetonDivisePar2).innerHTML = '<img src="imagesPlayStem\fleche-haut.png>"';
//     document.getElementById(jetonDivisePar3).innerHTML = '<img src="imagesPlayStem\fleche-haut.png>"';
    
//     document.getElementById(jetonPuissanceDe2).innerHTML = '<img src="imagesPlayStem\fleche-haut.png>"';
//     document.getElementById(jetonPuissanceDe3).innerHTML = '<img src="imagesPlayStem\fleche-haut.png>"';

//     document.getElementById(jetonRacineCarreDeNombreX).innerHTML = '<img src="imagesPlayStem\fleche-haut.png>"';

//     document.getElementById(jetonPause).innerHTML = '<img src="imagesPlayStem\fleche-haut.png>"';


// };