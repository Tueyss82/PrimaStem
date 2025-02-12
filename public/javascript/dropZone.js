"use strict";

let robot = document.getElementById("robotPrimaStem");

// Récupérer tous les div avec la classe draggable
document.querySelectorAll('.draggable').forEach(draggable => {
  draggable.addEventListener('dragstart', (e) => {
    e.dataTransfer.setData('text/plain', e.target.id);
    e.dataTransfer.setData('image/png', e.target.src);
  });
});

// Gestion du drop
document.querySelectorAll('.drop-circle').forEach(dropZone => {
  dropZone.addEventListener('dragover', (e) => {
    e.preventDefault();
  });

  dropZone.addEventListener('drop', (e) => {
    e.preventDefault();
    let imgId = e.dataTransfer.getData('text/plain');
    let imgSrc = e.dataTransfer.getData('image/png');

    let newImg = document.createElement("img");
    newImg.setAttribute("src", imgSrc);
    newImg.setAttribute("id", imgId);

    dropZone.innerHTML = ""; // Vider avant d'ajouter une nouvelle image
    dropZone.appendChild(newImg);
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
  let currentMarginLeft = parseInt(window.getComputedStyle(robot).marginLeft);

  // Déplacer vers la droite de 20px
  robot.style.marginLeft = (currentMarginLeft + 20) + "px";
});

// Gauche
document.getElementById("boutonStart").addEventListener("click", () => {

  // Récupérer la valeur actuelle de margin-top
  let currentMarginLeft = parseInt(window.getComputedStyle(robot).marginLeft);

  // Déplacer vers la gauche de 20px
  robot.style.marginLeft = (currentMarginLeft - 20) + "px";
});

startButton.onclick = function () {

  document.getElementById("boutonStart").addEventListener("click", () => {
    document.querySelectorAll(".drop-circle").forEach(slot => {
      if (slot.querySelector("img") !== null) {
        console.log("Ce slot contient un jeton :", slot);

        console.log(slot.querySelector("img").src);
      }
      if (slot.querySelector("img").src == document.getElementById("jetonAvancer").querySelector("img").src) {
        // Récupérer la valeur actuelle de margin-top
        let currentMarginTop = parseInt(window.getComputedStyle(robot).marginTop);

        // Déplacer vers le haut de 20px
        robot.style.marginTop = (currentMarginTop - 20) + "px";
      }

      else {
        // console.log("Ce slot est vide :", slot);
      }
    });



  });
}
