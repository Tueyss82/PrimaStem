"use strict";

let listeJetons = [];

//Mouvement
// listeJetons.push("jetonAvancer");
// listeJetons.push("jetonReculer");
// listeJetons.push("jetonAvancerDroite");
// listeJetons.push("jetonAvancerGauche");
// listeJetons.push("jetonMouvementAleatoire");

//Répétition
// listeJetons.push("jetonRotation");
// listeJetons.push("jetonRepeter2");
// listeJetons.push("jetonRepeter3");
// listeJetons.push("jetonRepeter4");
// listeJetons.push("jetonRepeter5");
// listeJetons.push("jetonRepeter6");
// listeJetons.push("jetonRepeterAleatoire");
// listeJetons.push("jetonRepeter7");
// listeJetons.push("jetonRepeter8");
// listeJetons.push("jetonRepeter9");
// listeJetons.push("jetonRepeter10");
// listeJetons.push("jetonRepeter18");
// listeJetons.push("jetonRepeter36");
// listeJetons.push("jetonRepeter72");
// listeJetons.push("jetonRepeter180");
// listeJetons.push("jetonRepeter360");

//Nombres
listeJetons.push("imgJeton1");
listeJetons.push("imgJeton2");
listeJetons.push("imgJeton3");
listeJetons.push("imgJeton4");
listeJetons.push("imgJeton5");
listeJetons.push("imgJeton6");
listeJetons.push("imgJeton7");
listeJetons.push("imgJeton8");
listeJetons.push("imgJeton9");
listeJetons.push("imgJeton10");
listeJetons.push("imgJeton18");
listeJetons.push("imgJeton36");
listeJetons.push("imgJeton40");
listeJetons.push("imgJeton45");
listeJetons.push("imgJeton50");
listeJetons.push("imgJeton60");
listeJetons.push("imgJeton72");
listeJetons.push("imgJeton90");
listeJetons.push("imgJeton100");
listeJetons.push("imgJeton108");
listeJetons.push("imgJeton120");
listeJetons.push("imgJeton135");
listeJetons.push("imgJeton144");
listeJetons.push("imgJeton150");
listeJetons.push("imgJeton180");
listeJetons.push("imgJeton360");

//Opérations
// listeJetons.push("jetonPlus1");
// listeJetons.push("jetonPlus2");
// listeJetons.push("jetonPlus3");
// listeJetons.push("jetonPlus5");
// listeJetons.push("jetonPlus10");
// listeJetons.push("jetonPlus15");
// listeJetons.push("jetonPlus20");
// listeJetons.push("jetonPlus50");
// listeJetons.push("jetonPlus100");
// listeJetons.push("jetonMoins1");
// listeJetons.push("jetonMoins2");
// listeJetons.push("jetonMoins3");
// listeJetons.push("jetonMoins5");
// listeJetons.push("jetonMoins10");
// listeJetons.push("jetonMoins15");
// listeJetons.push("jetonMoins20");
// listeJetons.push("jetonMoins50");
// listeJetons.push("jetonMoins100");
// listeJetons.push("jetonMultipliePar2");
// listeJetons.push("jetonMultipliePar3");
// listeJetons.push("jetonDivisePar2");
// listeJetons.push("jetonDivisePar3");
// listeJetons.push("jetonPuissanceDe2");
// listeJetons.push("jetonPuissanceDe3");
// listeJetons.push("jetonRacineCarreDeNombreX");

//Jetons speciaux
// listeJetons.push("jetonFonction");


function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
  ev.preventDefault();
  let data = ev.dataTransfer.getData("text");
  ev.target.appendChild(document.getElementById(data));
}
  
// listeJetons.forEach(div => {

  

// })