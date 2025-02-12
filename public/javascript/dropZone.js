"use strict";

/* Mathis : Remplace l'id en paramètre par le bouton avec l'id BoutonStart,
pour les évènements crée une boucle sur tous les éléments avec l'id drop-circle et
récupère l'id du jeton placé*/

let robot = document.getElementById("robotPrimaStem");

// Récupère tous les div avec l'id draggable et le convertis en tableau 
// L'évènement dragstart se produit au début du drag d'une image, tout le long les données
// comme l'id et la source de l'image sont stockés grâce à la méthode setData (localement)
// pour être ensuite réutilisés avec la méthode getData  
document.querySelectorAll('.draggable').forEach(idDiv => {
  idDiv.addEventListener('dragstart', (e) => {
    e.dataTransfer.setData('text/plain', e.target.id); // text/plain : données liés à l'id 
    e.dataTransfer.setData('image/png', e.target.src); // image/png : données liés à la source
  });


});

let newDiv = document.createElement("div");
let newImg = document.createElement("img");

// L'évènement dragover agit sur les emplacements avec l'id drop-circle
// en 
document.querySelectorAll('.drop-circle').forEach(dropZone => {
  dropZone.addEventListener('dragover', (e) => {
    e.preventDefault(); // Empêche l'action par défaut de l'event en paramètre, dans ce cas pour les emplacements
  });

  dropZone.addEventListener('drop', (e) => {
    e.preventDefault();
    let imgId = e.dataTransfer.getData('text/plain');
    let imgSrc = e.dataTransfer.getData('image/png');

    // if (!dropzone.classList.contains("drop-circle")) {
    //   dropzone = dropzone.closest(".drop-circle");  
    // }
    newImg.setAttribute("src", imgSrc);
    newDiv.setAttribute("id", imgId);


    let dropzone = e.target;


    dropZone.innerHTML = "";
    dropZone.appendChild(newImg);



    //   if (!dropZone.hasChildNodes()) {
    //     dropZone.appendChild(divId);
    // }

  });
});



// Bas
document.getElementById("boutonStart").addEventListener("click", () => {

  // Récupérer la valeur actuelle de margin-top
  let currentMarginTop = parseInt(window.getComputedStyle(robot).marginTop);

  // Déplacer vers le bas de 20px
  robot.style.marginTop = (currentMarginTop + 20) + "px";
});

// Droite
document.getElementById("boutonStart").addEventListener("click", () => {

  // Récupérer la valeur actuelle de margin-Left
  let currentMarginTop = parseInt(window.getComputedStyle(robot).marginLeft);

  // Déplacer vers la droite de 20px
  robot.style.marginTop = (currentMarginLeft + 20) + "px";
});

// Gauche
document.getElementById("boutonStart").addEventListener("click", () => {

  // Récupérer la valeur actuelle de margin-top
  let currentMarginTop = parseInt(window.getComputedStyle(robot).marginLeft);

  // Déplacer vers la gauche de 20px
  robot.style.marginTop = (currentMarginLeft - 20) + "px";
});

startButton.onclick = function () {

  document.getElementById("boutonStart").addEventListener("click", () => {
    document.querySelectorAll(".drop-circle").forEach(slot => {
      if (slot.querySelector("img") !== null) {
        // console.log("Ce slot contient un jeton :", slot);
      } 
      if(slot.querySelector("img").src == getElementById("jetonAvancer").querySelector("img").src) {

      }
      
      else {
        // console.log("Ce slot est vide :", slot);
      }
    });


    // Récupérer la valeur actuelle de margin-top
    let currentMarginTop = parseInt(window.getComputedStyle(robot).marginTop);

    // Déplacer vers le haut de 20px
    robot.style.marginTop = (currentMarginTop - 20) + "px";
  });
}



