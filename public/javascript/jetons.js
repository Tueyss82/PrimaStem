"use strict";

//--------------------------------Génération des jetons à partir des boutons de catégories---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//--------------------------------Generation of tokens from category buttons----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

/*
 * Fonction de génération de jetons selon une catégorie
 * catégories > (mouvement - rotation - nombres - operations - speciaux)
 * paramètre {string} categorie - Nom de la catégorie donnée en paramètre
 * 
 * */


/**
 * Token generation function according to a category.
 * @description categories > (movement - rotation - numbers - operations - specials)
 * @param {string} category - Name of the category given as a parameter
 * 
 * */


function toggleDraggables(category) {
  const allDraggables = document.querySelectorAll(".draggable");

  // Stocke dans une variable tous les div possédant l'id draggable

  // Store in a variable all divs with draggable id

  allDraggables.forEach(item => {
    item.style.display = "none";

    // Masque d'abord tous les jetons avant qu'ils soient rajoutés

    // First hide all tokens before they are added
  });

  /* Les catégories qui contiennent tous les noms d'id des jetons
  Pour rajouter ou supprimer un jeton, il suffit de manipuler cette liste et ajouter ou supprimer 
  le jeton défini dans le fichier dropZone.js et dans la vue Exercice.html.*/

  /* Categories that contain all token id names
  To add or delete a token, simply manipulate this list and add or delete 
  the token defined in the dropZone.js file and in the Exercise.html view*/

  const categories = {
    "mouvement": ["jetonAvancer", "jetonReculer", "jetonAvancerGauche", "jetonAvancerDroite", "jetonMouvementAleatoire"],
    "rotation": ["jetonRotation", "jetonRepeter2", "jetonRepeter3", "jetonRepeter4", "jetonRepeter5", "jetonRepeter6", "jetonRepeterAleatoire", "jetonRepeter7", "jetonRepeter8", "jetonRepeter9", "jetonRepeter10", "jetonRepeter18"],
    "nombres": ["jeton1", "jeton2", "jeton3", "jeton4", "jeton5", "jeton6", "jeton7", "jeton8", "jeton9", "jeton10", "jeton15", "jeton20", "jeton36", "jeton40", "jeton45", "jeton50", "jeton60", "jeton72", "jeton90", "jeton100", "jeton108", "jeton120", "jeton135", "jeton144", "jeton150", "jeton180", "jeton360"],
    "operations": ["jetonPlus1", "jetonPlus2", "jetonPlus3", "jetonPlus5", "jetonPlus10", "jetonPlus15", "jetonPlus20", "jetonPlus50", "jetonPlus100", "jetonMoins1", "jetonMoins2", "jetonMoins3", "jetonMoins5", "jetonMoins10", "jetonMoins15", "jetonMoins20", "jetonMoins50", "jetonMoins100"],
    "speciaux": ["jetonFonction", "jetonPause", "jetonMultipliePar2", "jetonMultipliePar3", "jetonDivisePar2", "jetonDivisePar3", "jetonPuissanceDe2", "jetonPuissanceDe3", "jetonRacineCarreDeNombreX"]
  };

  categories[category].forEach(id => {
    document.getElementById(id).style.display = "block"; 
    
    // Affiche les jetons à partir de la catégorie renseigné à l'intérieur de cette fonction
    //toggleDraggables()

    // Display tokens from the category specified inside this function
    //toggleDraggables()
  });
}

document.getElementById("mouvement").addEventListener("click", () => toggleDraggables("mouvement"));
document.getElementById("rotation").addEventListener("click", () => toggleDraggables("rotation"));
document.getElementById("nombres").addEventListener("click", () => toggleDraggables("nombres"));
document.getElementById("operations").addEventListener("click", () => toggleDraggables("operations"));
document.getElementById("fonction").addEventListener("click", () => toggleDraggables("speciaux"));

/* La fonction est appelée à chaque fois qu'une des catégories se fait cliquer dessus 
  (avec un évènement click), si des catégories sont rajoutés en plus, il faut l'implémenter dans la
  liste categories, y mettre le nom de l'id d'un ou de plusieurs jetons ainsi qu'implémenter le jeton
  depuis le fichier dropZone.js et la vue Exercice.html.
  */   


/* The function is called each time one of the categories is clicked on 
  (with a click event), if additional categories are added, it must be implemented in the
  list categories, put the name of the id of one or more tokens as well as implement the token
  from the dropZone.js and Exercise.html files.
  */

//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-------------------------Création des Jetons------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//-------------------------Creations of Tokens ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


// Structure de création d'un jeton créé      Français 

/* 

let example = document.createElement('img');
example.setAttribute('src', 'yourImageDirectory/example.png')
idCoin.appendChild(example) 

*/    

// Résultat : Le jeton est rajouté à l'intérieur d'un div ayant un id idCoin par exemple, 
// s'il est nommée ainsi dans la vue Exercice.html.
// Pour rajouter des jetons en plus, il faut suivre cette structure et créer 
// un div avec le même id qui sera utilisé ensuite pour y insérer le jeton



// Structure for creating a created token     Anglais

/* 

let example = document.createElement('img');
example.setAttribute('src', 'yourImageDirectory/example.png')
idCoin.appendChild(example) 

*/    

// Result: The token is added inside a div with an id idCoin for example, 
// if it is named like this in the Exercise.html view.
// To add additional tokens, you must follow this structure and create 
// a div with the same id which will then be used to insert the token


//----Jetons de Mouvements(tous les mouvements sont présent sauf le jeton rotation de la catégorie Rotation)---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//----Movement Tokens (all movements are present except the rotation token from the Rotation category)----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


// Jeton Flèche Haut

// Up Arrow Token
let imgAvant = document.createElement('img');
imgAvant.setAttribute('src', 'imagesPlayStem/fleche-haut.png');

jetonAvancer.appendChild(imgAvant);


// Jeton Flèche Bas

// Down Arrow Token
let imgReculer = document.createElement('img');
imgReculer.setAttribute('src', 'imagesPlayStem/fleche-bas.png');

jetonReculer.prepend(imgReculer);


// Jeton Flèche Droite -->

// Right Arrow Token -->
let imgDroite = document.createElement('img');
imgDroite.setAttribute('src', 'imagesPlayStem/fleche-droite.png');
jetonAvancerDroite.prepend(imgDroite);


// Jeton Flèche Gauche  <--

// Left Arrow Token <--
let imgGauche = document.createElement('img');
imgGauche.setAttribute('src', 'imagesPlayStem/fleche-gauche.png');
jetonAvancerGauche.prepend(imgGauche);


// Jeton Flèche Aléatoire

// Random Arrow Token
let imgAleatoire = document.createElement('img');
imgAleatoire.setAttribute('src', 'imagesPlayStem/fleche-aleatoire.png');
jetonMouvementAleatoire.prepend(imgAleatoire);


//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


//--Jetons de Rotation et de Répétition (le seul mouvement présent dans cette catégorie est la rotation avec le jeton de rotation )---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//--Rotation and Repetition Tokens (the only movement present in this category is rotation with the rotation token)-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


// Jeton Flèche Rotation

// Rotation Arrow Token
let imgRotation = document.createElement('img');
imgRotation.setAttribute('src', 'imagesPlayStem/rotation.png');
jetonRotation.prepend(imgRotation);



//Jetons de répétitions (boucles)

//Repetition tokens (loops)
//----------------------------------------------------------------------------------------
let imgRepeter2 = document.createElement('img');
imgRepeter2.setAttribute('src', 'imagesPlayStem/repeter2.png');         
jetonRepeter2.prepend(imgRepeter2);

let imgRepeter3 = document.createElement('img');
imgRepeter3.setAttribute('src', 'imagesPlayStem/repeter3.png');
jetonRepeter3.prepend(imgRepeter3);

let imgRepeter4 = document.createElement('img');
imgRepeter4.setAttribute('src', 'imagesPlayStem/repeter4.png');
jetonRepeter4.prepend(imgRepeter4);

let imgRepeter5 = document.createElement('img');
imgRepeter5.setAttribute('src', 'imagesPlayStem/repeter5.png');
jetonRepeter5.prepend(imgRepeter5);

let imgRepeter6 = document.createElement('img');
imgRepeter6.setAttribute('src', 'imagesPlayStem/repeter6.png');
jetonRepeter6.prepend(imgRepeter6);

let imgRepeterAleatoire = document.createElement('img');
imgRepeterAleatoire.setAttribute('src', 'imagesPlayStem/repeter-aleatoire.png');
jetonRepeterAleatoire.prepend(imgRepeterAleatoire);

let imgRepeter7 = document.createElement('img');
imgRepeter7.setAttribute('src', 'imagesPlayStem/repeter7.png');
jetonRepeter7.prepend(imgRepeter7);

let imgRepeter8 = document.createElement('img');
imgRepeter8.setAttribute('src', 'imagesPlayStem/repeter8.png');
jetonRepeter8.prepend(imgRepeter8);

let imgRepeter9 = document.createElement('img');
imgRepeter9.setAttribute('src', 'imagesPlayStem/repeter9.png');
jetonRepeter9.prepend(imgRepeter9);

let imgRepeter10 = document.createElement('img');
imgRepeter10.setAttribute('src', 'imagesPlayStem/repeter10.png');
jetonRepeter10.prepend(imgRepeter10);

let imgRepeter18 = document.createElement('img');
imgRepeter18.setAttribute('src', 'imagesPlayStem/repeter18.png');
jetonRepeter18.prepend(imgRepeter18);

let imgRepeter36 = document.createElement('img');
imgRepeter36.setAttribute('src', 'imagesPlayStem/repeter36.png');
jetonRepeter36.prepend(imgRepeter36);

let imgRepeter72 = document.createElement('img');
imgRepeter72.setAttribute('src', 'imagesPlayStem/repeter72.png');
jetonRepeter72.prepend(imgRepeter72);

let imgRepeter180 = document.createElement('img');
imgRepeter180.setAttribute('src', 'imagesPlayStem/repeter180.png');
jetonRepeter180.prepend(imgRepeter180);

let imgRepeter360 = document.createElement('img');
imgRepeter360.setAttribute('src', 'imagesPlayStem/repeter360.png');
jetonRepeter360.prepend(imgRepeter360);
//---------------------------------------------------------------------------------------




//------------------------------------Jetons Nombres---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//------------------------------------Number Token---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

let imgJeton1 = document.createElement('img');
imgJeton1.setAttribute('src', 'imagesPlayStem/nombre1.png');
imgJeton1.setAttribute('draggable', 'true');

jeton1.prepend(imgJeton1);

let imgJeton2 = document.createElement('img');
imgJeton2.setAttribute('src', 'imagesPlayStem/nombre2.png');
imgJeton2.setAttribute('draggable', 'true');

jeton2.prepend(imgJeton2);

let imgJeton3 = document.createElement('img');
imgJeton3.setAttribute('src', 'imagesPlayStem/nombre3.png');
imgJeton3.setAttribute('draggable', 'true');

jeton3.prepend(imgJeton3);

let imgJeton4 = document.createElement('img');
imgJeton4.setAttribute('src', 'imagesPlayStem/nombre4.png');
imgJeton4.setAttribute('draggable', 'true');

jeton4.prepend(imgJeton4);

let imgJeton5 = document.createElement('img');
imgJeton5.setAttribute('src', 'imagesPlayStem/nombre5.png');
imgJeton5.setAttribute('draggable', 'true');

jeton5.prepend(imgJeton5);

let imgJeton6 = document.createElement('img');
imgJeton6.setAttribute('src', 'imagesPlayStem/nombre6.png');
imgJeton6.setAttribute('draggable', 'true');

jeton6.prepend(imgJeton6);

let imgJeton7 = document.createElement('img');
imgJeton7.setAttribute('src', 'imagesPlayStem/nombre7.png');
imgJeton7.setAttribute('draggable', 'true');

jeton7.prepend(imgJeton7);

let imgJeton8 = document.createElement('img');
imgJeton8.setAttribute('src', 'imagesPlayStem/nombre8.png');
imgJeton8.setAttribute('draggable', 'true');

jeton8.prepend(imgJeton8);

let imgJeton9 = document.createElement('img');
imgJeton9.setAttribute('src', 'imagesPlayStem/nombre9.png');
imgJeton9.setAttribute('draggable', 'true');

jeton9.prepend(imgJeton9);

let imgJeton10 = document.createElement('img');
imgJeton10.setAttribute('src', 'imagesPlayStem/nombre10.png');
imgJeton10.setAttribute('draggable', 'true');

jeton10.prepend(imgJeton10);

let imgJeton15 = document.createElement('img');
imgJeton15.setAttribute('src', 'imagesPlayStem/nombre15.png');
imgJeton15.setAttribute('draggable', 'true');

jeton15.prepend(imgJeton15);

let imgJeton20 = document.createElement('img');
imgJeton20.setAttribute('src', 'imagesPlayStem/nombre20.png');
imgJeton20.setAttribute('draggable', 'true');

jeton20.prepend(imgJeton20);

let imgJeton36 = document.createElement('img');
imgJeton36.setAttribute('src', 'imagesPlayStem/nombre36.png');
imgJeton36.setAttribute('draggable', 'true');

jeton36.prepend(imgJeton36);

let imgJeton40 = document.createElement('img');
imgJeton40.setAttribute('src', 'imagesPlayStem/nombre40.png');
imgJeton40.setAttribute('draggable', 'true');

jeton40.prepend(imgJeton40);

let imgJeton45 = document.createElement('img');
imgJeton45.setAttribute('src', 'imagesPlayStem/nombre45.png');
imgJeton45.setAttribute('draggable', 'true');

jeton45.prepend(imgJeton45);

let imgJeton50 = document.createElement('img');
imgJeton50.setAttribute('src', 'imagesPlayStem/nombre50.png');
imgJeton50.setAttribute('draggable', 'true');

jeton50.prepend(imgJeton50);

let imgJeton60 = document.createElement('img');
imgJeton60.setAttribute('src', 'imagesPlayStem/nombre60.png');
imgJeton60.setAttribute('draggable', 'true');

jeton60.prepend(imgJeton60);

let imgJeton72 = document.createElement('img');
imgJeton72.setAttribute('src', 'imagesPlayStem/nombre72.png');
imgJeton72.setAttribute('draggable', 'true');

jeton72.prepend(imgJeton72);

let imgJeton90 = document.createElement('img');
imgJeton90.setAttribute('src', 'imagesPlayStem/nombre90.png');
imgJeton90.setAttribute('draggable', 'true');

jeton90.prepend(imgJeton90);

let imgJeton100 = document.createElement('img');
imgJeton100.setAttribute('src', 'imagesPlayStem/nombre100.png');
imgJeton100.setAttribute('draggable', 'true');

jeton100.prepend(imgJeton100);

let imgJeton108 = document.createElement('img');
imgJeton108.setAttribute('src', 'imagesPlayStem/nombre108.png');
imgJeton108.setAttribute('draggable', 'true');

jeton108.prepend(imgJeton108);

let imgJeton120 = document.createElement('img');
imgJeton120.setAttribute('src', 'imagesPlayStem/nombre120.png');
imgJeton120.setAttribute('draggable', 'true');

jeton120.prepend(imgJeton120);

let imgJeton135 = document.createElement('img');
imgJeton135.setAttribute('src', 'imagesPlayStem/nombre135.png');
imgJeton135.setAttribute('draggable', 'true');

jeton135.prepend(imgJeton135);

let imgJeton144 = document.createElement('img');
imgJeton144.setAttribute('src', 'imagesPlayStem/nombre144.png');
imgJeton144.setAttribute('draggable', 'true');

jeton144.prepend(imgJeton144);

let imgJeton150 = document.createElement('img');
imgJeton150.setAttribute('src', 'imagesPlayStem/nombre150.png');
imgJeton150.setAttribute('draggable', 'true');

jeton150.prepend(imgJeton150);

let imgJeton180 = document.createElement('img');
imgJeton180.setAttribute('src', 'imagesPlayStem/nombre180.png');
imgJeton180.setAttribute('draggable', 'true');

jeton180.prepend(imgJeton180);

let imgJeton360 = document.createElement('img');
imgJeton360.setAttribute('src', 'imagesPlayStem/nombre360.png');
imgJeton360.setAttribute('draggable', 'true');

jeton360.prepend(imgJeton360);


//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


//------------------------------------Jetons d'Opérations Arithmétiques---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//--------------------------------------Arithmetic Operations Tokens---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


let imgJetonPlus1 = document.createElement('img');
imgJetonPlus1.setAttribute('src', 'imagesPlayStem/operationPlus1.png');
jetonPlus1.prepend(imgJetonPlus1);

let imgJetonPlus2 = document.createElement('img');
imgJetonPlus2.setAttribute('src', 'imagesPlayStem/operationPlus2.png');
jetonPlus2.prepend(imgJetonPlus2);

let imgJetonPlus3 = document.createElement('img');
imgJetonPlus3.setAttribute('src', 'imagesPlayStem/operationPlus3.png');
jetonPlus3.prepend(imgJetonPlus3);

let imgJetonPlus5 = document.createElement('img');
imgJetonPlus5.setAttribute('src', 'imagesPlayStem/operationPlus5.png');
jetonPlus5.prepend(imgJetonPlus5);

let imgJetonPlus10 = document.createElement('img');
imgJetonPlus10.setAttribute('src', 'imagesPlayStem/operationPlus10.png');
jetonPlus10.prepend(imgJetonPlus10);

let imgJetonPlus15 = document.createElement('img');
imgJetonPlus15.setAttribute('src', 'imagesPlayStem/operationPlus15.png');
jetonPlus15.prepend(imgJetonPlus15);

let imgJetonPlus20 = document.createElement('img');
imgJetonPlus20.setAttribute('src', 'imagesPlayStem/operationPlus20.png');
jetonPlus20.prepend(imgJetonPlus20);

let imgJetonPlus50 = document.createElement('img');
imgJetonPlus50.setAttribute('src', 'imagesPlayStem/operationPlus50.png');
jetonPlus50.prepend(imgJetonPlus50);

let imgJetonPlus100 = document.createElement('img');
imgJetonPlus100.setAttribute('src', 'imagesPlayStem/operationPlus100.png');
jetonPlus100.prepend(imgJetonPlus100);

let imgJetonMoins1 = document.createElement('img');
imgJetonMoins1.setAttribute('src', 'imagesPlayStem/operationMoins1.png');
jetonMoins1.prepend(imgJetonMoins1);

let imgJetonMoins2 = document.createElement('img');
imgJetonMoins2.setAttribute('src', 'imagesPlayStem/operationMoins2.png');
jetonMoins2.prepend(imgJetonMoins2);

let imgJetonMoins3 = document.createElement('img');
imgJetonMoins3.setAttribute('src', 'imagesPlayStem/operationMoins3.png');
jetonMoins3.prepend(imgJetonMoins3);

let imgJetonMoins5 = document.createElement('img');
imgJetonMoins5.setAttribute('src', 'imagesPlayStem/operationMoins5.png');
jetonMoins5.prepend(imgJetonMoins5);

let imgJetonMoins10 = document.createElement('img');
imgJetonMoins10.setAttribute('src', 'imagesPlayStem/operationMoins10.png');
jetonMoins10.prepend(imgJetonMoins10);

let imgJetonMoins15 = document.createElement('img');
imgJetonMoins15.setAttribute('src', 'imagesPlayStem/operationMoins15.png');
jetonMoins15.prepend(imgJetonMoins15);

let imgJetonMoins20 = document.createElement('img');
imgJetonMoins20.setAttribute('src', 'imagesPlayStem/operationMoins20.png');
jetonMoins20.prepend(imgJetonMoins20);

let imgJetonMoins50 = document.createElement('img');
imgJetonMoins50.setAttribute('src', 'imagesPlayStem/operationMoins50.png');
jetonMoins50.prepend(imgJetonMoins50);

let imgJetonMoins100 = document.createElement('img');
imgJetonMoins100.setAttribute('src', 'imagesPlayStem/operationMoins100.png');
jetonMoins100.prepend(imgJetonMoins100);

let imgJetonMultipliePar2 = document.createElement('img');
imgJetonMultipliePar2.setAttribute('src', 'imagesPlayStem/operationMultipliePar2.png');
jetonMultipliePar2.prepend(imgJetonMultipliePar2);

let imgJetonMultipliePar3 = document.createElement('img');
imgJetonMultipliePar3.setAttribute('src', 'imagesPlayStem/operationMultipliePar3.png');
jetonMultipliePar3.prepend(imgJetonMultipliePar3);

let imgJetonDivisePar2 = document.createElement('img');
imgJetonDivisePar2.setAttribute('src', 'imagesPlayStem/operationDivisePar2.png');
jetonDivisePar2.prepend(imgJetonDivisePar2);

let imgJetonDivisePar3 = document.createElement('img');
imgJetonDivisePar3.setAttribute('src', 'imagesPlayStem/operationDivisePar3.png');
jetonDivisePar3.prepend(imgJetonDivisePar3);

let imgJetonPuissance2 = document.createElement('img');
imgJetonPuissance2.setAttribute('src', 'imagesPlayStem/operationPuissanceDe2.png');
jetonPuissanceDe2.prepend(imgJetonPuissance2);

let imgJetonPuissance3 = document.createElement('img');
imgJetonPuissance3.setAttribute('src', 'imagesPlayStem/operationPuissanceDe3.png');
jetonPuissanceDe3.prepend(imgJetonPuissance3);

let imgJetonCarreDeNombreX = document.createElement('img');
imgJetonCarreDeNombreX.setAttribute('src', 'imagesPlayStem/racineCarreDeNombreX.png');
jetonRacineCarreDeNombreX.prepend(imgJetonCarreDeNombreX);


//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------



//------------------------------------Jetons Spéciaux---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//------------------------------------Special Tokens---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


let imgJetonFonction = document.createElement('img');
imgJetonFonction.setAttribute('src', 'imagesPlayStem/fonction.png');
jetonFonction.prepend(imgJetonFonction);



//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
