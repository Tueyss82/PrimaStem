"use strict";

/* Toutes les images sont à remplacer par des données d'images en base de données
dès que la version finale des test est approuvée*/


let limitejetonsNombres = 0;
nombres.onclick = function () {

    while (limiteJetonsNombres < 1) {
        let imgJeton1 = document.createElement('img');
        imgJeton1.setAttribute('src', 'imagesPlayStem/nombre1.png');
        jeton1.prepend(imgJeton1);

        let imgJeton2 = document.createElement('img');
        imgJeton2.setAttribute('src', 'imagesPlayStem/nombre2.png');
        jeton2.prepend(imgJeton2);

        let imgJeton3 = document.createElement('img');
        imgJeton3.setAttribute('src', 'imagesPlayStem/nombre3.png');
        jeton3.prepend(imgJeton3);

        let imgJeton4 = document.createElement('img');
        imgJeton4.setAttribute('src', 'imagesPlayStem/nombre4.png');
        jeton4.prepend(imgJeton4);

        let imgJeton5 = document.createElement('img');
        imgJeton5.setAttribute('src', 'imagesPlayStem/nombre5.png');
        jeton5.prepend(imgJeton5);

        let imgJeton6 = document.createElement('img');
        imgJeton6.setAttribute('src', 'imagesPlayStem/nombre6.png');
        jeton6.prepend(imgJeton6);

        let imgJeton7 = document.createElement('img');
        imgJeton7.setAttribute('src', 'imagesPlayStem/nombre7.png');
        jeton7.prepend(imgJeton7);

        let imgJeton8 = document.createElement('img');
        imgJeton8.setAttribute('src', 'imagesPlayStem/nombre8.png');
        jeton8.prepend(imgJeton8);

        let imgJeton9 = document.createElement('img');
        imgJeton9.setAttribute('src', 'imagesPlayStem/nombre9.png');
        jeton9.prepend(imgJeton9);

        let imgJeton10 = document.createElement('img');
        imgJeton10.setAttribute('src', 'imagesPlayStem/nombre10.png');
        jeton10.prepend(imgJeton10);

        let imgJeton15 = document.createElement('img');
        imgJeton15.setAttribute('src', 'imagesPlayStem/nombre15.png');
        jeton15.prepend(imgJeton15);

        let imgJeton20 = document.createElement('img');
        imgJeton20.setAttribute('src', 'imagesPlayStem/nombre20.png');
        jeton20.prepend(imgJeton20);

        let imgJeton36 = document.createElement('img');
        imgJeton36.setAttribute('src', 'imagesPlayStem/nombre36.png');
        jeton36.prepend(imgJeton36);

        let imgJeton40 = document.createElement('img');
        imgJeton40.setAttribute('src', 'imagesPlayStem/nombre40.png');
        jeton40.prepend(imgJeton40);

        let imgJeton45 = document.createElement('img');
        imgJeton45.setAttribute('src', 'imagesPlayStem/nombre45.png');
        jeton45.prepend(imgJeton45);

        let imgJeton50 = document.createElement('img');
        imgJeton50.setAttribute('src', 'imagesPlayStem/nombre50.png');
        jeton50.prepend(imgJeton50);

        let imgJeton60 = document.createElement('img');
        imgJeton60.setAttribute('src', 'imagesPlayStem/nombre60.png');
        jeton60.prepend(imgJeton60);

        let imgJeton72 = document.createElement('img');
        imgJeton72.setAttribute('src', 'imagesPlayStem/nombre72.png');
        jeton72.prepend(imgJeton72);

        let imgJeton90 = document.createElement('img');
        imgJeton90.setAttribute('src', 'imagesPlayStem/nombre90.png');
        jeton90.prepend(imgJeton90);

        let imgJeton100 = document.createElement('img');
        imgJeton100.setAttribute('src', 'imagesPlayStem/nombre100.png');
        jeton100.prepend(imgJeton100);

        let imgJeton108 = document.createElement('img');
        imgJeton108.setAttribute('src', 'imagesPlayStem/nombre108.png');
        jeton108.prepend(imgJeton108);

        let imgJeton120 = document.createElement('img');
        imgJeton120.setAttribute('src', 'imagesPlayStem/nombre120.png');
        jeton120.prepend(imgJeton120);

        let imgJeton135 = document.createElement('img');
        imgJeton135.setAttribute('src', 'imagesPlayStem/nombre135.png');
        jeton135.prepend(imgJeton135);

        let imgJeton144 = document.createElement('img');
        imgJeton144.setAttribute('src', 'imagesPlayStem/nombre144.png');
        jeton144.prepend(imgJeton144);

        let imgJeton150 = document.createElement('img');
        imgJeton150.setAttribute('src', 'imagesPlayStem/nombre150.png');
        jeton150.prepend(imgJeton150);

        let imgJeton180 = document.createElement('img');
        imgJeton180.setAttribute('src', 'imagesPlayStem/nombre180.png');
        jeton180.prepend(imgJeton180);

        let imgJeton360 = document.createElement('img');
        imgJeton360.setAttribute('src', 'imagesPlayStem/nombre360.png');
        jeton360.prepend(imgJeton360);

        limiteJetonsRotations++;
    }
    if (mouvement||rotation||operations||fonction){
        imagesNombres = nombres.querySelectorAll('img');
        imagesNombres.forEach((img) => img.remove());
        limiteJetonsRotations = 0;
    }
}