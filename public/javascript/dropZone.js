"use strict";


// Sélectionne l'image et le conteneur
let imgTelecommande = document.getElementById('telecommandeImg');

// Récupère le chemin de l'image (src)
let imageUrlTelecommande = imgTelecommande.src;

// Applique l'image comme arrière-plan
bodyAll.style.backgroundImage = `url('${imageUrlTelecommande}')`;
bodyAll.style.backgroundRepeat =  'no-repeat';
bodyAll.style.backgroundPosition =  '12% 0%';

// Cache l'image originale
imgTelecommande.style.display = 'none';


// let imgGrille = document.getElementById('grilleRobot');

// // Récupère le chemin de l'image (src)
// let imageUrlGrille = imgGrille.src;

// Applique l'image comme arrière-plan
// grilleBackground.style.backgroundImage = `url('${imageUrlGrille}')`;
// grilleBackground.style.backgroundRepeat =  'no-repeat';
// grilleBackground.style.backgroundPosition =  '75% 0%';
// // Cache l'image originale
// imgGrille.style.display = 'none';

