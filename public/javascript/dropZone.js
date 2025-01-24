"use strict";

let listeJetons = [];

//Mouvement
// listeJetons.push("jetonAvancer");
// listeJetons.push("jetonReculer");
// listeJetons.push("jetonAvancerDroite");
// listeJetons.push("jetonAvancerGauche");
// listeJetons.push("jetonMouvementAleatoire");

//Répétition
// listeJetons.push("jetonRotation");
// listeJetons.push("jetonRepeter2");
// listeJetons.push("jetonRepeter3");
// listeJetons.push("jetonRepeter4");
// listeJetons.push("jetonRepeter5");
// listeJetons.push("jetonRepeter6");
// listeJetons.push("jetonRepeterAleatoire");
// listeJetons.push("jetonRepeter7");
// listeJetons.push("jetonRepeter8");
// listeJetons.push("jetonRepeter9");
// listeJetons.push("jetonRepeter10");
// listeJetons.push("jetonRepeter18");
// listeJetons.push("jetonRepeter36");
// listeJetons.push("jetonRepeter72");
// listeJetons.push("jetonRepeter180");
// listeJetons.push("jetonRepeter360");

//Nombres
listeJetons.push("imgJeton1");
listeJetons.push("imgJeton2");
listeJetons.push("imgJeton3");
listeJetons.push("imgJeton4");
listeJetons.push("imgJeton5");
listeJetons.push("imgJeton6");
listeJetons.push("imgJeton7");
listeJetons.push("imgJeton8");
listeJetons.push("imgJeton9");
listeJetons.push("imgJeton10");
listeJetons.push("imgJeton18");
listeJetons.push("imgJeton36");
listeJetons.push("imgJeton40");
listeJetons.push("imgJeton45");
listeJetons.push("imgJeton50");
listeJetons.push("imgJeton60");
listeJetons.push("imgJeton72");
listeJetons.push("imgJeton90");
listeJetons.push("imgJeton100");
listeJetons.push("imgJeton108");
listeJetons.push("imgJeton120");
listeJetons.push("imgJeton135");
listeJetons.push("imgJeton144");
listeJetons.push("imgJeton150");
listeJetons.push("imgJeton180");
listeJetons.push("imgJeton360");

//Opérations
// listeJetons.push("jetonPlus1");
// listeJetons.push("jetonPlus2");
// listeJetons.push("jetonPlus3");
// listeJetons.push("jetonPlus5");
// listeJetons.push("jetonPlus10");
// listeJetons.push("jetonPlus15");
// listeJetons.push("jetonPlus20");
// listeJetons.push("jetonPlus50");
// listeJetons.push("jetonPlus100");
// listeJetons.push("jetonMoins1");
// listeJetons.push("jetonMoins2");
// listeJetons.push("jetonMoins3");
// listeJetons.push("jetonMoins5");
// listeJetons.push("jetonMoins10");
// listeJetons.push("jetonMoins15");
// listeJetons.push("jetonMoins20");
// listeJetons.push("jetonMoins50");
// listeJetons.push("jetonMoins100");
// listeJetons.push("jetonMultipliePar2");
// listeJetons.push("jetonMultipliePar3");
// listeJetons.push("jetonDivisePar2");
// listeJetons.push("jetonDivisePar3");
// listeJetons.push("jetonPuissanceDe2");
// listeJetons.push("jetonPuissanceDe3");
// listeJetons.push("jetonRacineCarreDeNombreX");

//Jetons speciaux
// listeJetons.push("jetonFonction");




div.addEventListener("dragstart", function(event) {
    // The dataTransfer.setData() method sets the data type and the value of the dragged data
    event.dataTransfer.setData("Text", event.target.id);

  });
  
  // While dragging the p element, change the color of the output text
  document.addEventListener("drag", function(event) {
    document.getElementById("demo").style.color = "red";
  });
  
  // Output some text when finished dragging the p element and reset the opacity
  document.addEventListener("dragend", function(event) {
    document.getElementById("demo").innerHTML = "Finished dragging the p element.";
    event.target.style.opacity = "1";
  });
  
  /* Events fired on the drop target */
  
  // When the draggable p element enters the droptarget, change the DIVS's border style
  document.addEventListener("dragenter", function(event) {
    if ( event.target.className == "droptarget" ) {
      event.target.style.border = "3px dotted red";
    }
  });
  
  // By default, data/elements cannot be dropped in other elements. To allow a drop, we must prevent the default handling of the element
  document.addEventListener("dragover", function(event) {
    event.preventDefault();
  });
  
  // When the draggable p element leaves the droptarget, reset the DIVS's border style
  document.addEventListener("dragleave", function(event) {
    if ( event.target.className == "droptarget" ) {
      event.target.style.border = "";
    }
  });
  
  /* On drop - Prevent the browser default handling of the data (default is open as link on drop)
     Reset the color of the output text and DIV's border color
     Get the dragged data with the dataTransfer.getData() method
     The dragged data is the id of the dragged element ("drag1")
     Append the dragged element into the drop element
  */
  document.addEventListener("drop", function(event) {
    event.preventDefault();
    if ( event.target.className == "droptarget" ) {
      document.getElementById("demo").style.color = "";
      event.target.style.border = "";
      var data = event.dataTransfer.getData("Text");
      event.target.appendChild(document.getElementById(data));
    }
  });
  



listeJetons.forEach(div => {


    // Ajouter des gestionnaires d'événements pour la zone de dépôt
    div.addEventListener('dragover', (e) => {
        e.preventDefault(); // Permet de déposer
        dropZone.style.backgroundColor = 'lightblue'; // Indication visuelle
        console.log('L’image est au-dessus de la zone.');
    });

    dropZone.addEventListener('dragleave', () => {
        dropZone.style.backgroundColor = 'lightgray'; // Réinitialisation du style
        console.log('L’image a quitté la zone.');
    });

    dropZone.addEventListener('drop', (e) => {
        e.preventDefault();

        // Récupérer l'id de l'élément glissé
        const draggedElementId = e.dataTransfer.getData('text/plain');
        const draggedElement = document.getElementById(draggedElementId);

        // Ajouter l'image dans la zone de dépôt
        dropZone.appendChild(draggedElement);
    })

})