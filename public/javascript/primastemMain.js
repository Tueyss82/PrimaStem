"use strict";
let elements = document.querySelectorAll('#description');
let i = 0;
elements.forEach(function (element) {
    let text = element.textContent;
    // console.log(elements);

    if (elements.length > 1){
        if (text.length > 20) { // Si la taille de l'élément text est strictement supérieur à 20, alors la condition est vraie.
            text = text.substring(0, 20) + ' ...'; // Ajoute '...' à la fin.
            // console.log(text);
        }
        // console.log(description.textContent);
        description[i].textContent = text; // Remplace le texte de la description par l'élément généré avant.
        i = i + 1; 
        // console.log(description);
    }
    else {
        if (text.length > 20) {
            text = text.substring(0, 20) + ' ...';
            console.log(text);
        }
        // console.log(description.textContent);
        description.textContent = text;
        // i = i + 1; 
        // console.log(description);
    }
   
});


