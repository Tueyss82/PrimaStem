"use strict";


//-------------Configuration des actions du robot grâce à la télécommande-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-------------Configuration of robot actions using the remote control-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

let robot = document.getElementById("robotPrimaStem"); // Id du robot 

//---Drag and Drop dans la télécommande---------------------------------------------------------------

//---Drag and Drop in the remote control---------------------------------------------------------------

/* 
Boucle sur tous les id draggable (l'id présent sur tous les div de tous les jetons) et  
récupération du contenu de la source de la balise img d'un jeton sélectionné
(div: recherche de l'id draggable => img : recherche de la source => src)
*/

/* 
Loop through all draggable IDs (the ID present on all divs of all tokens) and  
retrieve the content of the image source from a selected token  
(div: search for the draggable ID => img: search for the source => src)
*/

document.querySelectorAll('.draggable').forEach(draggable => {
  draggable.addEventListener('dragstart', (e) => {
    e.dataTransfer.setData('image/png', e.target.src);
  });
});

/* 
Récupération du contenu de l'attribut source d'un jeton
et recréation du jeton dans l'emplacement où l'image est drop
C'est pris en compte pour tous les emplacements, d'où la boucle sur
l'id de tous les emplacements (id = drop-circle)
*/

/* 
Retrieve the content of a token's source attribute  
and recreate the token in the slot where the image is dropped.  
This applies to all slots, hence the loop over  
the ID of all slots (id = drop-circle).
*/

document.querySelectorAll('.drop-circle').forEach(dropZone => {
  dropZone.addEventListener('dragover', (e) => {
    e.preventDefault();
  });

  dropZone.addEventListener('drop', (e) => {
    e.preventDefault();
    let imgSrc = e.dataTransfer.getData('image/png');

    let newImg = document.createElement("img");
    newImg.setAttribute("src", imgSrc);

    dropZone.innerHTML = ""; 
    
    // Vide tous les emplacements avant d'ajouter un nouveau jeton
    // Clear all slots before adding a new token

    dropZone.appendChild(newImg);
  });
});


/*
 * Fonction de mouvement vers le haut
 * Enlève 20 px sur la propriété css margin-top du robot 
*/

/** 
 * Move up function
 * @description Decreases the robot's CSS margin-top property by 20px
 */

function moveUp() {
  let currentMarginTop = parseInt(window.getComputedStyle(robot).marginTop);
  robot.style.marginTop = (currentMarginTop - 20) + "px";

}


/*
 * Fonction de mouvement vers le bas
 * Rajoute 20 px sur la propriété css margin-top du robot 
*/

/** 
 * Move down function
 * @description Increase the robot's CSS margin-top property by 20px
 */

function moveDown() {
  let currentMarginTop = parseInt(window.getComputedStyle(robot).marginTop);
  robot.style.marginTop = (currentMarginTop + 20) + "px";
}


/*
 * Fonction de mouvement vers la gauche
 * Enlève 20 px sur la propriété css margin-left du robot 
*/

/** 
 * Move left function
 * @description Decreases the robot's CSS margin-left property by 20px
 */

function moveLeft() {
  let currentMarginLeft = parseInt(window.getComputedStyle(robot).marginLeft);
  robot.style.marginLeft = (currentMarginLeft - 20) + "px";
}


/*
 * Fonction de mouvement vers la droite
 * Rajoute 20 px sur la propriété css margin-left du robot 
*/

/** 
 * Move right function
 * @description Increase the robot's CSS margin-left property by 20px
 */

function moveRight() {
  let currentMarginLeft = parseInt(window.getComputedStyle(robot).marginLeft);
  robot.style.marginLeft = (currentMarginLeft + 20) + "px";
}


/*
 * Fonction de mouvement de rotation (+90 degrés à chaque appel)
 * Rajoute 90 degrés sur la propriété css rotate du robot 
*/

/** 
 * Rotation function
 * @description Add 90 degrees to the robot's CSS rotate property
 */

function rotation() {
  let currentRotate = parseInt(window.getComputedStyle(robot).rotate);
  robot.style.rotate = (currentRotate + 90) + "deg";
}


/*
 * Fonction de mouvement vers le haut * la valeur en paramètre
 * Enlève 20 px * le nombre en paramètre sur la propriété css margin-top du robot
 * paramètre {nombre} n  
*/

/**
 * Move up function multiplied by the parameter value
 * @description Decreases the robot's CSS margin-top property by 20px * the given parameter
 * @param {number} n  
 */

function nombreMoveUp(n) {

  let currentMarginTop = parseInt(window.getComputedStyle(robot).marginTop);
  for (let i = 0; i < n + 1; i++) {
    setTimeout(function () { robot.style.marginTop = (currentMarginTop - 20) + "px"; }, 1500);
  }

}


/*
 * Fonction de mouvement vers le bas * la valeur en paramètre
 * Rajoute 20 px * le nombre en paramètre sur la propriété css margin-top du robot
 * paramètre {nombre} n  
*/


/**
 * Move down function multiplied by the parameter value
 * @description Increase the robot's CSS margin-top property by 20px * the given parameter
 * @param {number} n  
 */

function nombreMoveDown(n) {

  let currentMarginTop = parseInt(window.getComputedStyle(robot).marginTop);
  for (let i = 0; i < n + 1; i++) {
    setTimeout(function () { robot.style.marginTop = (currentMarginTop + 20) + "px"; }, 1500);
  }

}


/*
 * Fonction de mouvement vers la gauche * la valeur en paramètre
 * Rajoute 20 px * le nombre en paramètre sur la propriété css margin-left du robot
 * paramètre {nombre} n
*/

/**
 * Move left function multiplied by the parameter value
 * @description Increase the robot's CSS margin-left property by 20px * the given parameter
 * @param {number} n  
 */

function nombreMoveLeft(n) {

  let currentMarginTop = parseInt(window.getComputedStyle(robot).marginTop);
  for (let i = 0; i < n + 1; i++) {
    setTimeout(function () { robot.style.marginLeft = (currentMarginLeft + 20) + "px"; }, 1500);
  }

}


/*
 * Fonction de mouvement vers la droite * la valeur en paramètre
 * Enlève 20 px * le nombre en paramètre sur la propriété css margin-left du robot
 * paramètre {nombre} n  
*/

/**
 * Move right function multiplied by the parameter value
 * @description Decreases the robot's CSS margin-left property by 20px * the given parameter
 * @param {number} n  
 */

function nombreMoveRight(n) {

  let currentMarginTop = parseInt(window.getComputedStyle(robot).marginTop);
  for (let i = 0; i < n + 1; i++) {
    setTimeout(function () { robot.style.marginLeft = (currentMarginLeft - 20) + "px"; }, 1500);
  }

}


/*
 * Fonction de rotation * la valeur en paramètre
 * Rajoute 90 degrés * le nombre en paramètre sur la propriété css rotate du robot
 * paramètre {nombre} n  
*/

/**
 * Rotation function multiplied by the parameter value
 * @description Adds 90 degrees * the given parameter to the robot's CSS rotate property
 * @param {number} n  
 */


function nombreRotation(n) {

  let currentMarginTop = parseInt(window.getComputedStyle(robot).marginTop);
  for (let i = 0; i < n + 1; i++) {
    setTimeout(function () { robot.style.rotate = (currentRotate + 90) + "deg"; }, 1500);
  }

}

//V1 Programme télécommande     Français 

/* En démarrant le programme avec le boutonStart (évènement click),
 pour chaque emplacement, si un jeton de mouvement est y placé, un test 
 pour voir si la source de la balise img du jeton contient un mot correspond 
 à l'un des 5 mouvements présents dans la catégorie mouvement et rotation s'effectue
 S'il est vrai, la fonction associée au mouvement est appelée
*/

/*Problèmes rencontrés : 
 - Le programme est incapable de savoir quel mouvement effectuer en premier 
 et dans quel ordre
 - Impossible d'être assez précis pour cibler un jeton de mouvement 
 et lui associer un autre jeton comme un jeton nombre pour ensuite coder la combinaison des deux  

 Dû à des problèmes de temps, la V2 n'a pas pu être complété pour corriger ces problèmes
 N'hésitez pas à l'utiliser, la solution trouvée a été de séparer les emplacements en paires de deux,
 encapsulé dans un div

 Le cas utilisé dans la V2 pourrait vous permettre de trouver la solution 

 Solutions : 
 - Encapsulation dans des div ayant deux emplacements enfants 
 - Boucle répliquant la V1 en prenant en compte comme boucle principales ces nouveaux div
   au lieu de tous les div ayant comme id drop-circle

 nouveaux div => storage|nombre

*/


// V1 Remote Control Program - English

/* When starting the program with the startButton (click event),  
   for each slot, if a movement token is placed there, a test  
   checks whether the image tag source of the token contains a word  
   matching one of the 5 movements in the movement and rotation category.  
   If true, the function associated with the movement is called.
*/

/* Issues encountered:  
 - The program is unable to determine which movement to execute first  
   and in what order.  
 - It is impossible to precisely target a movement token  
   and associate it with another token, such as a number token,  
   to encode their combination.  

 Due to time constraints, V2 could not be completed to fix these issues.  
 Feel free to use it; the solution found was to separate the slots into pairs of two,  
 encapsulated in a div.  

 The case used in V2 might help you find the solution.  

 Solutions:  
 - Encapsulation in divs containing two child slots  
 - A loop replicating V1, but using these new divs as the main loop  
   instead of all divs with id drop-circle.  

 new divs => storage|number  
*/

document.getElementById("boutonStart").addEventListener("click", () => {

  document.querySelectorAll(".drop-circle").forEach(slot => {
    if (slot.querySelector("img") !== null) {
      let imgSrc = slot.querySelector("img").src;

      if (imgSrc.includes("haut")) {
        moveUp();
      } else if (imgSrc.includes("bas")) {
        moveDown();
      } else if (imgSrc.includes("droite")) {
        moveRight();
      } else if (imgSrc.includes("gauche")) {
        moveLeft();
      } else if (imgSrc.includes("rotation")) {
        rotation();
      }

      //V2 

      // imgSrc.forEach(images => {


      //   let directions = ["haut", "bas", "gauche", "droite", "rotation"];
      //   let nombres = ["1", "2", "3", "4", "5",];

      // // Tous les mouvements : Dans la télécommande, un ou plusieurs jetons de mouvement sont placés
      //   // sans répétition, nombre, opération ou fonction associée

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

    }
  })

});

// Bouton Restart 

// Boucle sur tous les emplacements, les jetons placés à l'intérieur sont supprimés 
// et l'emplacement du robot est réinitialisé  

resetButton.onclick = function () {
  document.querySelectorAll('.drop-circle').forEach(dropZone => {
    dropZone.innerHTML = "";
  });
  robot.style.marginTop = "0px";
  robot.style.marginLeft = "0px";
};

//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------