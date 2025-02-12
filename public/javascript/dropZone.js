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

// Function to move the robot up
function moveUp() {
  let currentMarginTop = parseInt(window.getComputedStyle(robot).marginTop);
  robot.style.marginTop = (currentMarginTop - 20) + "px";
}

// Function to move the robot down
function moveDown() {
  let currentMarginTop = parseInt(window.getComputedStyle(robot).marginTop);
  robot.style.marginTop = (currentMarginTop + 20) + "px";
}

// Function to move the robot right
function moveRight() {
  let currentMarginLeft = parseInt(window.getComputedStyle(robot).marginLeft);
  robot.style.marginLeft = (currentMarginLeft + 20) + "px";
}

// Function to move the robot left
function moveLeft() {
  let currentMarginLeft = parseInt(window.getComputedStyle(robot).marginLeft);
  robot.style.marginLeft = (currentMarginLeft - 20) + "px";
}

// Handle start button click
document.getElementById("boutonStart").addEventListener("click", () => {
  document.querySelectorAll(".drop-circle").forEach(slot => {
    if (slot.querySelector("img") !== null) {
      let imgSrc = slot.querySelector("img").src;

      // Check which direction to move based on the image source
      if (imgSrc.includes("haut")) {
        moveUp();
      } else if (imgSrc.includes("bas")) {
        moveDown();
      } else if (imgSrc.includes("droite")) {
        moveRight();
      } else if (imgSrc.includes("gauche")) {
        moveLeft();
      }
    } else {
      // console.log("Ce slot est vide :", slot);
    }
  });
});

resetButton.onclick = function() {
  document.querySelectorAll('.drop-circle').forEach(dropZone => {
    dropZone.innerHTML = "";
  });
  robot.style.marginTop = "0px";
  robot.style.marginLeft = "0px";
};