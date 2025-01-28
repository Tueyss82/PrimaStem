"use strict";
let arrayElements = [];
let element = document.querySelectorAll('#description');
let text;
let i = 0;
element.forEach(function (element) {
    text = element.textContent;
    arrayElements.push(text);
});

arrayElements.forEach(function (element) {
    // console.log(i);
    // console.log(element);
    if (arrayElements[i].length > 20) { // Si la taille de l'élément i de la liste arrayElements est strictement supérieur à 20, alors la condition est vraie.
        element = element.substring(0, 20) + ' ...'; // Ajoute '...' à la fin.
        // console.log(element);
    }
    description[i].textContent = element; // Remplace le texte de la description par l'élément généré avant.
    // console.log(description);
    i = i + 1;
});
