"use strict";

/* Mathis : Remplace l'id en paramètre par le bouton avec l'id BoutonStart,
pour les évènements crée une boucle sur tous les éléments avec l'id drop-circle et
récupère l'id du jeton placé*/

let robot = document.getElementById("robotPrimaStem");


// document.getElementById("haut").addEventListener("click", () => {
  
//   // Récupérer la valeur actuelle de margin-top
//   let currentMarginTop = parseInt(window.getComputedStyle(robot).marginTop);
  
//   // Déplacer vers le haut de 20px
//   robot.style.marginTop = (currentMarginTop - 20) + "px";
// });

// // Bas
// document.getElementById("bas").addEventListener("click", () => {
  
//   // Récupérer la valeur actuelle de margin-top
//   let currentMarginTop = parseInt(window.getComputedStyle(robot).marginTop);
  
//   // Déplacer vers le bas de 20px
//   robot.style.marginTop = (currentMarginTop + 20) + "px";
// });

// // Droite
// document.getElementById("droite").addEventListener("click", () => {
  
//   // Récupérer la valeur actuelle de margin-Left
//   let currentMarginTop = parseInt(window.getComputedStyle(robot).marginLeft);
  
//   // Déplacer vers la droite de 20px
//   robot.style.marginTop = (currentMarginLeft + 20) + "px";
// });

// // Gauche
// document.getElementById("gauche").addEventListener("click", () => {
  
//   // Récupérer la valeur actuelle de margin-top
//   let currentMarginTop = parseInt(window.getComputedStyle(robot).marginLeft);
  
//   // Déplacer vers la gauche de 20px
//   robot.style.marginTop = (currentMarginLeft - 20) + "px";
// });


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

// document.querySelectorAll(".drop-circle").forEach(circle => {
//   circle.addEventListener("dragover", event => {
//       event.preventDefault();
//   });

//   circle.addEventListener("drop", event => {
//       event.preventDefault();
//       let draggedImage = document.querySelector(".dragging");
//       if (draggedImage) {
//           let imageUrl = draggedImage.src;
//           circle.style.backgroundImage = `url(${imageUrl})`;
//       }
//   });
// });

// document.querySelectorAll("#jetons img").forEach(img => {
//   img.addEventListener("dragstart", event => {
//       event.target.classList.add("dragging");
      
//   });
  
//   img.addEventListener("dragend", event => {
//       event.target.classList.remove("dragging");
//   });
// });

// Fonction pour gérer le drag and drop et la duplication des images avec une limite et remplacement
// document.querySelectorAll(".drop-circle").forEach(circle => {
//   circle.addEventListener("dragover", event => {
//       event.preventDefault();
//   });

//   circle.addEventListener("drop", event => {
//       event.preventDefault();
//       let draggedImage = document.querySelector(".dragging");
//       if (draggedImage) {
//           let clonedImage = draggedImage.cloneNode(true);
//           clonedImage.classList.remove("dragging");
//           clonedImage.draggable = false;
          
//           // Vérifier si un enfant existe déjà, le remplacer
//           if (circle.children.length > 0) {
//               circle.innerHTML = "";
//           }
          
//           circle.appendChild(clonedImage);
//       }
//   });
// });

// // Ajouter l'événement de début de drag pour toutes les images
// document.querySelectorAll(".storage img").forEach(img => {
//   img.addEventListener("dragstart", event => {
//       event.target.classList.add("dragging");
//   });
  
//   img.addEventListener("dragend", event => {
//       event.target.classList.remove("dragging");
//   });
// });



