"use strict";

//------------------------------------------------------Génération des jetons à partir des boutons de catégories---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


const character = document.getElementById("character");
let queue = [];

// Fonction pour afficher/masquer les éléments draggables selon le bouton
function toggleDraggables(category) {
  const allDraggables = document.querySelectorAll(".draggable");
  allDraggables.forEach(item => {
    item.style.display = "none"; // Masquer tout d'abord
  });

  // Afficher les éléments en fonction de la catégorie sélectionnée
  const categories = {
    "mouvement": ["jetonAvancer", "jetonReculer", "jetonAvancerGauche", "jetonAvancerDroite", "jetonMouvementAleatoire"],
    "rotation": ["jetonRotation", "jetonRepeter2", "jetonRepeter3", "jetonRepeter4", "jetonRepeter5", "jetonRepeter6", "jetonRepeterAleatoire", "jetonRepeter7", "jetonRepeter8", "jetonRepeter9", "jetonRepeter10", "jetonRepeter18"],
    "nombres": ["jeton1", "jeton2", "jeton3", "jeton4", "jeton5", "jeton6", "jeton7", "jeton8", "jeton9", "jeton10", "jeton15", "jeton20", "jeton36", "jeton40", "jeton45", "jeton50", "jeton60", "jeton72", "jeton90", "jeton100", "jeton108", "jeton120", "jeton135", "jeton144", "jeton150", "jeton180", "jeton360"],
    "operations": ["jetonPlus1", "jetonPlus2", "jetonPlus3", "jetonPlus5", "jetonPlus10", "jetonPlus15", "jetonPlus20", "jetonPlus50", "jetonPlus100", "jetonMoins1", "jetonMoins2", "jetonMoins3", "jetonMoins5", "jetonMoins10", "jetonMoins15", "jetonMoins20", "jetonMoins50", "jetonMoins100"],
    "speciaux": ["jetonFonction", "jetonPause", "jetonMultipliePar2", "jetonMultipliePar3", "jetonDivisePar2", "jetonDivisePar3", "jetonPuissanceDe2", "jetonPuissanceDe3", "jetonRacineCarreDeNombreX"]
  };

  categories[category].forEach(id => {
    document.getElementById(id).style.display = "block"; // Afficher les éléments correspondants
  });
}

// Ajouter des événements aux boutons pour afficher les draggables correspondants
document.getElementById("mouvement").addEventListener("click", () => toggleDraggables("mouvement"));
document.getElementById("rotation").addEventListener("click", () => toggleDraggables("rotation"));
document.getElementById("nombres").addEventListener("click", () => toggleDraggables("nombres"));
document.getElementById("operations").addEventListener("click", () => toggleDraggables("operations"));
document.getElementById("fonction").addEventListener("click", () => toggleDraggables("speciaux"));

//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


//------------------------------Configuration des actions du robot grâce à la télécommande et au programme-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


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

function rotation() {
  let currentRotate = parseInt(window.getComputedStyle(robot).rotate);
  robot.style.rotate = (currentRotate + 90) + "deg";
}

function nombreMoveUp(n) {

  let currentMarginTop = parseInt(window.getComputedStyle(robot).marginTop);
  for (let i = 0; i < n + 1; i++) {
    setTimeout(function () { robot.style.marginTop = (currentMarginTop - 20) + "px"; }, 1500);
  }

}

function nombreMoveDown(n) {

  let currentMarginTop = parseInt(window.getComputedStyle(robot).marginTop);
  for (let i = 0; i < n + 1; i++) {
    setTimeout(function () { robot.style.marginTop = (currentMarginTop + 20) + "px"; }, 1500);
  }

}

function nombreMoveLeft(n) {

  let currentMarginTop = parseInt(window.getComputedStyle(robot).marginTop);
  for (let i = 0; i < n + 1; i++) {
    setTimeout(function () { robot.style.marginLeft = (currentMarginLeft + 20) + "px"; }, 1500);
  }

}

function nombreMoveRight(n) {

  let currentMarginTop = parseInt(window.getComputedStyle(robot).marginTop);
  for (let i = 0; i < n + 1; i++) {
    setTimeout(function () { robot.style.marginLeft = (currentMarginLeft - 20) + "px"; }, 1500);
  }

}

function nombreRotation(n) {

  let currentMarginTop = parseInt(window.getComputedStyle(robot).marginTop);
  for (let i = 0; i < n + 1; i++) {
    setTimeout(function () { robot.style.rotate = (currentRotate + 90) + "deg"; }, 1500);
  }

}


// Handle start button click
document.getElementById("boutonStart").addEventListener("click", () => {

  document.querySelectorAll(".storage1").forEach(slot => {

    if (slot.querySelector("img") !== null) {
      let imgSrc = slot.querySelector("img").src;

      // document.querySelectorAll(".drop-circle").forEach(slot => {
  //   if (slot.querySelector("img") !== null) {
  //     let imgSrc = slot.querySelector("img").src;

  //     // Check which direction to move based on the image source
  //     if (imgSrc.includes("haut")) {
  //       moveUp();
  //     } else if (imgSrc.includes("bas")) {
  //       moveDown();
  //     } else if (imgSrc.includes("droite")) {
  //       moveRight();
  //     } else if (imgSrc.includes("gauche")) {
  //       moveLeft();
  //     } else if (imgSrc.includes("rotation")) {
  //       rotation();
  //     }

  
      // imgSrc.forEach(images => {

      //   // Tous les mouvements : Dans la télécommande, un ou plusieurs jetons de mouvement ou rotation
      //   // sans répétition, nombre, opération ou fonction associée   

      //   let directions = ["haut", "bas", "gauche", "droite", "rotation"];
      //   let nombres = ["1", "2", "3", "4", "5",];


      //   directions.forEach(mouvement => {
      //     nombres.forEach(nombre => {

      //       if (directions.some(direction => images.includes(direction))) {

      //         let findDirection = [directions.find(direction => images.includes(direction))];
      //         let fonctionsMouvement = {
      //           "haut": moveUp(),
      //           "bas": moveDown(),
      //           "droite": moveRight(),
      //           "gauche": moveLeft(),
      //           "rotation": rotation()
      //         }
      //         fonctionsMouvement([findDirection]);

      //       }

      //       else if (directions.some(direction => images.includes(direction)) && directions.some(nombre => images.includes(nombre))) {

      //         let findDirection = [directions.find(direction => images.includes(direction))];
      //         let findNombre = [nombres.find(nombre => images.includes(nombre))];

      //         let fonctionsNombres = {
      //           "haut": nombreMoveUp(findNombre),
      //           "bas": nombreMoveDown(findNombre),
      //           "droite": nombreMoveRight(findNombre),
      //           "gauche": nombreMoveLeft(findNombre),
      //           "rotation": nombreRotation(findNombre)
      //         }

      //         fonctionsNombres([findDirection]);

      //       }
      //     })

      //   })



      //   if (images.includes("haut")) {
      //     moveUp();
      //   }
      //   else if (images.includes("bas")) {
      //     moveDown();
      //   } else if (images.includes("droite")) {
      //     moveRight();
      //   } else if (images.includes("gauche")) {
      //     moveLeft();
      //   } else if (images.includes("rotation")) {
      //     rotation();
      //   }

      //   // Mouvements X Nombres : Appels de fonctions qui  
      //   // permettent un mouvement ou une rotation plusieurs fois  

      //   // Mouvement Haut

      // })


    }
   })

});

resetButton.onclick = function () {
  document.querySelectorAll('.drop-circle').forEach(dropZone => {
    dropZone.innerHTML = "";
  });
  robot.style.marginTop = "0px";
  robot.style.marginLeft = "0px";
};

//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------