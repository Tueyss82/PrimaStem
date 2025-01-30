"use strict";

const draggables = document.querySelectorAll(".draggable");
const dropzone = document.getElementById("dropzone");

draggables.forEach(img => {
    img.addEventListener("dragstart", (event) => {
        event.dataTransfer.setData("text/plain", event.target.src);
        
    });

});

dropzone.addEventListener("dragover", (event) => {
    event.preventDefault(); // Nécessaire pour permettre le drop
    
});


dropzone.addEventListener("drop", (event) => {
    event.preventDefault();
    
    const imgSrc = event.dataTransfer.getData("text/plain");
    if (imgSrc) {
        const newImg = document.createElement("img");
        newImg.src = imgSrc;
        newImg.classList.add("draggable");
        dropzone.appendChild(newImg);
        newImg.style.marginLeft = '-63px';
    }
});