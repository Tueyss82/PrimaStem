<?= $this->extend('PlayStem/layoutPlayStem') ?>
<?= $this->section('contenu') ?>


<!-- <div class="exercices-TextLayout">
    <p>Exercices</p>
</div> -->

<!-- <div class="consignes"><img src="imagesPlayStem\consignes.png"></div> -->

<div class="image-container">

    <div class="supportJeton"><img src="imagesPlayStem\supportJeton.png"></div>

    <div class="fleche-toutesLesDirections" id="mouvement"> <img src="imagesPlayStem\fleche-haut.png"></div>
    <div class="toutesLesRotations" id="rotation"><img src="imagesPlayStem\rotation.png"></div>
    <div class="tousLesNombres" id="nombres"><img src="imagesPlayStem\nombre.png"></div>
    <div class="toutesLesOperations" id="operations"><img src="imagesPlayStem\operations.png"></div>
    <div class="fonction" id="fonction"><img src="imagesPlayStem\fonction.png"></div>
    <div class="robotPrimaStem"><img src="imagesPlayStem\mini-logo.png"></div>
    <div class="grilleRobot"><img src="imagesPlayStem\grilleRobot.png"></div>
    

    <div class="jetonAvancer" id = "jetonAvancer"> </div>
    <div class="jetonReculer" id = "jetonReculer"> </div>
    <div class="jetonAvancerGauche" id = "jetonAvancerGauche"> </div>
    <div class="jetonAvancerDroite" id = "jetonAvancerDroite"> </div>
    <div class="jetonMouvementAleatoire" id = "jetonMouvementAleatoire"> </div>


    <div class="jetonRotation" id = "jetonRotation"> </div>
    <div class="jetonRepeter2" id = "jetonRepeter2"> </div>
    <div class="jetonRepeter3" id = "jetonRepeter3"> </div>
    <div class="jetonRepeter4" id = "jetonRepeter4"> </div>
    <div class="jetonRepeter5" id = "jetonRepeter5"> </div>
    <div class="jetonRepeter6" id = "jetonRepeter6"> </div>
    <div class="jetonRepeterAleatoire" id = "jetonRepeterAleatoire"> </div>
    <div class="jetonRepeter7" id = "jetonRepeter7"> </div>
    <div class="jetonRepeter8" id = "jetonRepeter8"> </div>
    <div class="jetonRepeter9" id = "jetonRepeter9"> </div>
    <div class="jetonRepeter10" id = "jetonRepete10"> </div>
    <div class="jetonRepeter18" id = "jetonRepeter18"> </div>
    <div class="jetonRepeter36" id = "jetonRepeter36"> </div>
    <div class="jetonRepeter72" id = "jetonRepeter72"> </div>
    <div class="jetonRepeter180" id = "jetonRepeter180"> </div>
    <div class="jetonRepeter360" id = "jetonRepeter360"> </div>

    
    <div class="jeton1" id = "jeton1"> </div>
    <div class="jeton2" id = "jeton2"> </div>
    <div class="jeton3" id = "jeton3"> </div>
    <div class="jeton4" id = "jeton4"> </div>
    <div class="jeton5" id = "jeton5"> </div>
    <div class="jeton6" id = "jeton6"> </div>
    <div class="jeton7" id = "jeton7"> </div>
    <div class="jeton8" id = "jeton8"> </div>
    <div class="jeton9" id = "jeton9"> </div>
    <div class="jeton10" id = "jeton10"> </div>

    <div class="jeton15" id = "jeton15"> </div>
    <div class="jeton20" id = "jeton20"> </div>
    <div class="jeton36" id = "jeton36"> </div>
    <div class="jeton40" id = "jeton40"> </div>
    <div class="jeton45" id = "jeton45"> </div>
    <div class="jeton50" id = "jeton50"> </div>
    <div class="jeton60" id = "jeton60"> </div>
    <div class="jeton72" id = "jeton72"> </div>
    <div class="jeton90" id = "jeton90"> </div>
    <div class="jeton100" id = "jeton100"> </div>
    <div class="jeton108" id = "jeton108"> </div>
    <div class="jeton120" id = "jeton120"> </div>
    <div class="jeton135" id = "jeton135"> </div>
    <div class="jeton144" id = "jeton144"> </div>
    <div class="jeton150" id = "jeton150"> </div>
    <div class="jeton180" id = "jeton180"> </div>
    <div class="jeton360" id = "jeton360"> </div>


    <div class="jetonPlus1" id = "jetonPlus1"> </div>
    <div class="jetonPlus2" id = "jetonPlus2"> </div>
    <div class="jetonPlus3" id = "jetonPlus3"> </div>
    <div class="jetonPlus5" id = "jetonPlus5"> </div>
    <div class="jetonPlus10" id = "jetonPlus10"> </div>
    <div class="jetonPlus15" id = "jetonPlus15"> </div>
    <div class="jetonPlus20" id = "jetonPlus20"> </div>
    <div class="jetonPlus50" id = "jetonPlus50"> </div>
    <div class="jetonPlus100" id = "jetonPlus100"> </div>


    <div class="jetonMoins1" id = "jetonMoins1"> </div>
    <div class="jetonMoins2" id = "jetonMoins2"> </div>
    <div class="jetonMoins3" id = "jetonMoins3"> </div>
    <div class="jetonMoins5" id = "jetonMoins5"> </div>
    <div class="jetonMoins10" id = "jetonMoins10"> </div>
    <div class="jetonMoins15" id = "jetonMoins15"> </div>
    <div class="jetonMoins20" id = "jetonMoins20"> </div>
    <div class="jetonMoins50" id = "jetonMoins50"> </div>
    <div class="jetonMoins100" id = "jetonMoins100"> </div>


    <div class="jetonMultipliePar2" id = "jetonMultipliePar2"> </div>
    <div class="jetonMultipliePar3" id = "jetonMultipliePar3"> </div>

    <div class="jetonDivisePar2" id = "jetonDivisePar2"> </div>
    <div class="jetonDivisePar3" id = "jetonDivisePar3"> </div>

    <div class="jetonPuissanceDe2" id = "jetonPuissanceDe2"> </div>
    <div class="jetonPuissanceDe3" id = "jetonPuissanceDe3"> </div>

    <div class="jetonRacineCarreDeNombreX" id = "jetonRacineCarreDeNombreX"> </div>
    
    <div class="jetonFonction" id = "jetonFonction"> </div>
    <div class="jetonPause" id = "jetonPause"> </div>

</div>

<div class="telecommande"><img src="imagesPlayStem\telecommande.png"></div>


<?= $this->endSection() ?>