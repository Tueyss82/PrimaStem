"use strict";

/* Mathis : Remplace l'id en paramètre par le bouton avec l'id BoutonStart,
pour les évènements crée une boucle sur tous les éléments avec l'id drop-circle et
récupère l'id du jeton placé*/

let robot = document.getElementById("robotPrimaStem");

document.querySelectorAll('.draggable').forEach(idDiv => {
  idDiv.addEventListener('dragstart', (e) => {
    e.dataTransfer.setData('text/plain', e.target.id);
    e.dataTransfer.setData('image/png', e.target.src);
  });


});

let newDiv = document.createElement("div");
let newImg = document.createElement("img");

document.querySelectorAll('.drop-circle').forEach(dropZone => {
  dropZone.addEventListener('dragover', (e) => {
    e.preventDefault();
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
      } else {
        // console.log("Ce slot est vide :", slot);
      }
    });


    // Récupérer la valeur actuelle de margin-top
    let currentMarginTop = parseInt(window.getComputedStyle(robot).marginTop);

    // Déplacer vers le haut de 20px
    robot.style.marginTop = (currentMarginTop - 20) + "px";
  });
}



