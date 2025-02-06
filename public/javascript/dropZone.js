"use strict";

// const draggables = document.querySelectorAll(".draggable");
// const dropzone = document.getElementById("dropzone");

// draggables.forEach(img => {
//     img.addEventListener("dragstart", (event) => {
//         event.dataTransfer.setData("text/plain", event.target.src);
        
//     });

// });

// dropzone.addEventListener("dragover", (event) => {
//     event.preventDefault(); // Nécessaire pour permettre le drop
    
// });


// dropzone.addEventListener("drop", (event) => {
//     event.preventDefault();
    
//     const imgSrc = event.dataTransfer.getData("text/plain");
//     if (imgSrc) {
//         const newImg = document.createElement("img");
//         newImg.src = imgSrc;
//         newImg.classList.add("draggable");
//         dropzone.appendChild(newImg);
//         newImg.style.marginLeft = '-63px';
//         document.getElementById(event.target.id).remove();
//     }
// });


    const jetons = document.querySelectorAll("#draggableItems img");
    const dropZones = document.querySelectorAll("#dropzoneT div");

    jetons.forEach(jeton => {
        jeton.addEventListener("dragstart", (event) => {
            event.dataTransfer.setData("data/uri-list", event.target.src);
            
        });
    });

    dropZones.forEach(zone => {
        zone.addEventListener("dragover", (event) => {
            event.preventDefault();
        });

        dropZones.addEventListener("drop", (event) => {
            event.preventDefault();
            const imageUrl = event.dataTransfer.getData("data/uri-list");

            if (imageUrl) {
                const newImg = document.createElement("img");
                newImg.src = imageUrl;
                // newImg.style.maxWidth = "100%";
                // newImg.style.maxHeight = "100%";
                
                // Nettoyer la dropzone avant d'ajouter la nouvelle image
                zone.innerHTML = "";
                zone.appendChild(newImg);
                
            }
        });
    });

