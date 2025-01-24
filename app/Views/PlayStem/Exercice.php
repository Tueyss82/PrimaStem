<?= $this->extend('PlayStem/layoutPlayStem') ?>
<?= $this->section('contenu') ?>


<!-- <div class="exercices-TextLayout">
    <p>Exercices</p>
</div> -->

<!-- <div class="consignes"><img src="imagesPlayStem\consignes.png"></div> -->

<!-- <div class="image-container"> -->
<div id="grilleBackground" class="grilleBackground">
<div class="div-position">
    <div class="fleche-toutesLesDirections" id="mouvement"> <button><img src="imagesPlayStem\mouvementCategorie.png"></button></div>
    <div class="toutesLesRotations" id="rotation"><button> <img src="imagesPlayStem\repetitionCategorie.png"></button></div>
    <div class="tousLesNombres" id="nombres"><button><img src="imagesPlayStem\nombresCategorie.png"></button></div>
    <div class="toutesLesOperations" id="operations"><button><img src="imagesPlayStem\operationsCategorie.png"></button></div>
    <div class="fonction" id="fonction"><button><img src="imagesPlayStem\speciauxCategorie.png"></button></div>
</div>

<div class="divMouvement" id="divMouvement">
    <div class="jetonAvancer" id="jetonAvancer"> </div>
    <div class="jetonReculer" id="jetonReculer"> </div>
    <div class="jetonAvancerGauche" id="jetonAvancerGauche"> </div>
    <div class="jetonAvancerDroite" id="jetonAvancerDroite"> </div>
    <div class="jetonMouvementAleatoire" id="jetonMouvementAleatoire"> </div>
</div>


<div class="divRotation" id="divRotation">
    <div class="jetonRotation" id="jetonRotation"> </div>
    <div class="jetonRepeter2" id="jetonRepeter2"> </div>
    <div class="jetonRepeter3" id="jetonRepeter3"> </div>
    <div class="jetonRepeter4" id="jetonRepeter4"> </div>
    <div class="jetonRepeter5" id="jetonRepeter5"> </div>
    <div class="jetonRepeter6" id="jetonRepeter6"> </div>
    <div class="jetonRepeterAleatoire" id="jetonRepeterAleatoire"> </div>
    <div class="jetonRepeter7" id="jetonRepeter7"> </div>
    <div class="jetonRepeter8" id="jetonRepeter8"> </div>
    <div class="jetonRepeter9" id="jetonRepeter9"> </div>
    <div class="jetonRepeter10" id="jetonRepeter10"> </div>
    <div class="jetonRepeter18" id="jetonRepeter18"> </div>
    <div class="jetonRepeter36" id="jetonRepeter36"> </div>
    <div class="jetonRepeter72" id="jetonRepeter72"> </div>
    <div class="jetonRepeter180" id="jetonRepeter180"> </div>
    <div class="jetonRepeter360" id="jetonRepeter360"> </div>
</div>

<div class="divNombres" id="divNombres">
    <div class="jeton1" id="jeton1"> </div>
    <div class="jeton2" id="jeton2"> </div>
    <div class="jeton3" id="jeton3"> </div>
    <div class="jeton4" id="jeton4"> </div>
    <div class="jeton5" id="jeton5"> </div>
    <div class="jeton6" id="jeton6"> </div>
    <div class="jeton7" id="jeton7"> </div>
    <div class="jeton8" id="jeton8"> </div>
    <div class="jeton9" id="jeton9"> </div>
    <div class="jeton10" id="jeton10"> </div>

    <div class="jeton15" id="jeton15"> </div>
    <div class="jeton20" id="jeton20"> </div>
    <div class="jeton36" id="jeton36"> </div>
    <div class="jeton40" id="jeton40"> </div>
    <div class="jeton45" id="jeton45"> </div>
    <div class="jeton50" id="jeton50"> </div>
    <div class="jeton60" id="jeton60"> </div>
    <div class="jeton72" id="jeton72"> </div>
    <div class="jeton90" id="jeton90"> </div>
    <div class="jeton100" id="jeton100"> </div>
    <div class="jeton108" id="jeton108"> </div>
    <div class="jeton120" id="jeton120"> </div>
    <div class="jeton135" id="jeton135"> </div>
    <div class="jeton144" id="jeton144"> </div>
    <div class="jeton150" id="jeton150"> </div>
    <div class="jeton180" id="jeton180"> </div>
    <div class="jeton360" id="jeton360"> </div>
</div>

<div class="divOperations">
    <div class="jetonPlus1" id="jetonPlus1"> </div>
    <div class="jetonPlus2" id="jetonPlus2"> </div>
    <div class="jetonPlus3" id="jetonPlus3"> </div>
    <div class="jetonPlus5" id="jetonPlus5"> </div>
    <div class="jetonPlus10" id="jetonPlus10"> </div>
    <div class="jetonPlus15" id="jetonPlus15"> </div>
    <div class="jetonPlus20" id="jetonPlus20"> </div>
    <div class="jetonPlus50" id="jetonPlus50"> </div>
    <div class="jetonPlus100" id="jetonPlus100"> </div>


    <div class="jetonMoins1" id="jetonMoins1"> </div>
    <div class="jetonMoins2" id="jetonMoins2"> </div>
    <div class="jetonMoins3" id="jetonMoins3"> </div>
    <div class="jetonMoins5" id="jetonMoins5"> </div>
    <div class="jetonMoins10" id="jetonMoins10"> </div>
    <div class="jetonMoins15" id="jetonMoins15"> </div>
    <div class="jetonMoins20" id="jetonMoins20"> </div>
    <div class="jetonMoins50" id="jetonMoins50"> </div>
    <div class="jetonMoins100" id="jetonMoins100"> </div>


    <div class="jetonMultipliePar2" id="jetonMultipliePar2"> </div>
    <div class="jetonMultipliePar3" id="jetonMultipliePar3"> </div>

    <div class="jetonDivisePar2" id="jetonDivisePar2"> </div>
    <div class="jetonDivisePar3" id="jetonDivisePar3"> </div>

    <div class="jetonPuissanceDe2" id="jetonPuissanceDe2"> </div>
    <div class="jetonPuissanceDe3" id="jetonPuissanceDe3"> </div>

    <div class="jetonRacineCarreDeNombreX" id="jetonRacineCarreDeNombreX"> </div>
</div>

<div class="divSpeciaux">
    <div class="jetonFonction" id="jetonFonction"> </div>
    <div class="jetonPause" id="jetonPause"> </div>
</div>


<div class="supportJeton"> <img src="imagesPlayStem\supportJeton.png"></div>


    <div class="robotPrimaStem" id="robotPrimaStem"><img src="imagesPlayStem\mini-logo.png"></div>


<!-- <div class="grilleRobot" id="grilleRobot"><img src="imagesPlayStem\grilleRobot.png"></div> -->



<div id="bodyAll" class="bodyAll">
    <div class="dropZone" id="dropZone">
        <div class="dropZone1"><img src="imagesPlayStem\telecommande-dropZone.png"></div>
        <div class="dropZone2"><img src="imagesPlayStem\telecommande-dropZone.png"></div>
        <div class="dropZone3"><img src="imagesPlayStem\telecommande-dropZone.png"></div>
        <div class="dropZone4"><img src="imagesPlayStem\telecommande-dropZone.png"></div>
        <div class="dropZone5"><img src="imagesPlayStem\telecommande-dropZone.png"></div>
        <div class="dropZone6"><img src="imagesPlayStem\telecommande-dropZone.png"></div>
        <div class="dropZone7"><img src="imagesPlayStem\telecommande-dropZone.png"></div>
        <div class="dropZone8"><img src="imagesPlayStem\telecommande-dropZone.png"></div>
        <div class="dropZone9"><img src="imagesPlayStem\telecommande-dropZone.png"></div>
        <div class="dropZone10"><img src="imagesPlayStem\telecommande-dropZone.png"></div>
        <div class="dropZone11"><img src="imagesPlayStem\telecommande-dropZone.png"></div>
        <div class="dropZone12"><img src="imagesPlayStem\telecommande-dropZone.png"></div>
        <div class="dropZone13"><img src="imagesPlayStem\telecommande-dropZone.png"></div>
        <div class="dropZone14"><img src="imagesPlayStem\telecommande-dropZone.png"></div>
        <div class="dropZone15"><img src="imagesPlayStem\telecommande-dropZone.png"></div>
        <div class="dropZone16"><img src="imagesPlayStem\telecommande-dropZone.png"></div>
        <div class="dropZone17"><img src="imagesPlayStem\telecommande-dropZone.png"></div>
        <div class="dropZone18"><img src="imagesPlayStem\telecommande-dropZone.png"></div>
        <div class="dropZone19"><img src="imagesPlayStem\telecommande-dropZone.png"></div>
        <div class="dropZone20"><img src="imagesPlayStem\telecommande-dropZone.png"></div>
        <div class="dropZone21"><img src="imagesPlayStem\telecommande-dropZone.png"></div>
        <div class="dropZone22"><img src="imagesPlayStem\telecommande-dropZone.png"></div>

    </div>

    <div class="telecommande" id="telecommande"><img id="telecommandeImg" src="imagesPlayStem\telecommande.png"></div>

    </div>

    <?= $this->endSection() ?>