"use strict";

/* Toutes les images sont à remplacer par des données d'images en base de données
dès que la version finale des test est approuvée*/


    
    operations.onclick =  function(){
    let limiteJetonsOperations = 0; 
    while(limiteJetonsOperations <1){

    let imgJetonPlus1 = document.createElement('img');
    imgJetonPlus1.setAttribute('src','imagesPlayStem/operationPlus1.png');
    jetonPlus1.prepend(imgJetonPlus1);
        
    let imgJetonPlus2 = document.createElement('img');
    imgJetonPlus2.setAttribute('src','imagesPlayStem/operationPlus2.png');
    jetonPlus2.prepend(imgJetonPlus2);
        
    let imgJetonPlus3 = document.createElement('img');
    imgJetonPlus3.setAttribute('src','imagesPlayStem/operationPlus3.png');
    jetonPlus3.prepend(imgJetonPlus3);
        
    let imgJetonPlus5 = document.createElement('img');
    imgJetonPlus5.setAttribute('src','imagesPlayStem/operationPlus5.png');
    jetonPlus5.prepend(imgJetonPlus5);
        
    let imgJetonPlus10 = document.createElement('img');
    imgJetonPlus10.setAttribute('src','imagesPlayStem/operationPlus10.png');
    jetonPlus10.prepend(imgJetonPlus10);
        
    let imgJetonPlus15 = document.createElement('img');
    imgJetonPlus15.setAttribute('src','imagesPlayStem/operationPlus15.png');
    jetonPlus15.prepend(imgJetonPlus15);
        
    let imgJetonPlus20 = document.createElement('img');
    imgJetonPlus20.setAttribute('src','imagesPlayStem/operationPlus20.png');
    jetonPlus20.prepend(imgJetonPlus20);
        
    let imgJetonPlus50 = document.createElement('img');
    imgJetonPlus50.setAttribute('src','imagesPlayStem/operationPlus50.png');
    jetonPlus50.prepend(imgJetonPlus50);
        
    let imgJetonPlus100 = document.createElement('img');
    imgJetonPlus100.setAttribute('src','imagesPlayStem/operationPlus100.png');
    jetonPlus100.prepend(imgJetonPlus100);
    
    let imgJetonMoins1 = document.createElement('img');
    imgJetonMoins1.setAttribute('src','imagesPlayStem/operationMoins1.png');
    jetonMoins1.prepend(imgJetonMoins1);
    
    let imgJetonMoins2 = document.createElement('img');
    imgJetonMoins2.setAttribute('src','imagesPlayStem/operationMoins2.png');
    jetonMoins2.prepend(imgJetonMoins2);
    
    let imgJetonMoins3 = document.createElement('img');
    imgJetonMoins3.setAttribute('src','imagesPlayStem/operationMoins3.png');
    jetonMoins3.prepend(imgJetonMoins3);
    
    let imgJetonMoins5 = document.createElement('img');
    imgJetonMoins5.setAttribute('src','imagesPlayStem/operationMoins5.png');
    jetonMoins5.prepend(imgJetonMoins5);
    
    let imgJetonMoins10 = document.createElement('img');
    imgJetonMoins10.setAttribute('src','imagesPlayStem/operationMoins10.png');
    jetonMoins10.prepend(imgJetonMoins10);
    
    let imgJetonMoins15 = document.createElement('img');
    imgJetonMoins15.setAttribute('src','imagesPlayStem/operationMoins15.png');
    jetonMoins15.prepend(imgJetonMoins15);
    
    let imgJetonMoins20 = document.createElement('img');
    imgJetonMoins20.setAttribute('src','imagesPlayStem/operationMoins20.png');
    jetonMoins20.prepend(imgJetonMoins20);
    
    let imgJetonMoins50 = document.createElement('img');
    imgJetonMoins50.setAttribute('src','imagesPlayStem/operationMoins50.png');
    jetonMoins50.prepend(imgJetonMoins50);
    
    let imgJetonMoins100 = document.createElement('img');
    imgJetonMoins100.setAttribute('src','imagesPlayStem/operationMoins100.png');
    jetonMoins100.prepend(imgJetonMoins100);

    let imgJetonMultipliePar2 = document.createElement('img');
    imgJetonMultipliePar2.setAttribute('src','imagesPlayStem/operationMultipliePar2.png');
    jetonMultipliePar2.prepend(imgJetonMultipliePar2);

    let imgJetonMultipliePar3 = document.createElement('img');
    imgJetonMultipliePar3.setAttribute('src','imagesPlayStem/operationMultipliePar3.png');
    jetonMultipliePar3.prepend(imgJetonMultipliePar3);

    let imgJetonDivisePar2 = document.createElement('img');
    imgJetonDivisePar2.setAttribute('src','imagesPlayStem/operationDivisePar2.png');
    jetonDivisePar2.prepend(imgJetonDivisePar2);

    let imgJetonDivisePar3 = document.createElement('img');
    imgJetonDivisePar3.setAttribute('src','imagesPlayStem/operationDivisePar3.png');
    jetonDivisePar3.prepend(imgJetonDivisePar3);

    let imgJetonPuissance2 = document.createElement('img');
    imgJetonPuissance2.setAttribute('src','imagesPlayStem/operationPuissanceDe2.png');
    jetonPuissance2.prepend(imgJetonPuissance2);

    let imgJetonPuissance3 = document.createElement('img');
    imgJetonPuissance3.setAttribute('src','imagesPlayStem/operationPuissanceDe3.png');
    jetonPuissance3.prepend(imgJetonPuissance3);

    let imgJetonCarreDeNombreX = document.createElement('img');
    imgJetonCarreDeNombreX.setAttribute('src','imagesPlayStem/racineCarreDeNombreX.png');
    jetonCarreDeNombreX.prepend(imgJetonCarreDeNombreX);

    limiteJetonsOperations++;
    }
    if (mouvement||rotation||fonction||nombres){
        imagesOperations = operations.querySelectorAll('img');
        imagesOperations.forEach((img) => img.remove());
        limiteJetonsOperations = 0;
    }
    }