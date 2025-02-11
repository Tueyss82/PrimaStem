<?= $this->extend('PlayStem/layoutPlayStem') ?>
<?= $this->section('contenu') ?>

<div class="fixed-sidebar">
    <ul class="list-group">
      <li class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;Facile<br>
      <div class = "leçon"><a href="<?= url_to('leçons') ?>"> Premier Pas</a></div> 
      <br><div class = "leçon"><a href="<?= url_to('leçons') ?>"> Evènements et point d'arrivée </a></div></li>

      <li class="list-group-item">&nbsp;&nbsp;&nbsp;&nbsp;Intermédiaire <br>
      <div class = "leçon"><a href="<?= url_to('leçons') ?>"> Fonction et appel de fonction</a></div></li>
      <li class="list-group-item">Avancé <br><div class = "leçon"><a href="<?= url_to('leçons') ?>">  Aléatoire </a></div>
    <br>  <div class = "leçon"><a href="<?= url_to('leçons') ?>"> Nombres aléatoires</a></div></li>
      
    </ul>
  </div>

  
<!-- 
<div class="grid" id="grid">
    <div class="supportJeton">
        <img src="../imagesPlayStem/supportJeton.png" class="imageSupport">

        <div class="nested">
            <div class="mouvement" id="mouvement"> <button><img src="imagesPlayStem\mouvementCategorie.png"></button></div>
            <div class="rotation" id="rotation"><button> <img src="imagesPlayStem\repetitionCategorie.png"></button></div>
            <div class="nombres" id="nombres"><button><img src="imagesPlayStem\nombresCategorie.png"></button></div>
            <div class="operations" id="operations"><button><img src="imagesPlayStem\operationsCategorie.png"></button></div>
            <div class="speciaux" id="fonction"><button><img src="imagesPlayStem\speciauxCategorie.png"></button></div>
        </div>

        <div class="draggableItems">
            <div class="rangeeJetonsNombres1">
                <div class="" id="jeton1"> </div>
                <div class="" id="jeton2"> </div>
                <div class="" id="jeton3"> </div>
                <div class="" id="jeton4"> </div>
                <div class="" id="jeton5"> </div>
                <div class="" id="jeton6"> </div>
            </div>

            <div class="rangeeJetonsNombres2">

                <div class="" id="jeton7"> </div>
                <div class="" id="jeton8"> </div>
                <div class="" id="jeton9"> </div>
                <div class="" id="jeton10"> </div>
                <div class="" id="jeton15"> </div>
                <div class="" id="jeton20"> </div>
            </div>

            <div class="rangeeJetonsNombres3">

                <div class="" id="jeton36"> </div>
                <div class="" id="jeton40"> </div>
                <div class="" id="jeton45"> </div>
                <div class="" id="jeton50"> </div>
                <div class="" id="jeton60"> </div>
                <div class="" id="jeton72"> </div>
            </div>

            <div class="rangeeJetonsNombres4">

                <div class="" id="jeton90"> </div>
                <div class="" id="jeton100"> </div>
                <div class="" id="jeton108"> </div>
                <div class="" id="jeton120"> </div>
                <div class="" id="jeton135"> </div>
                <div class="" id="jeton144"> </div>

            </div>

            <div class="rangeeJetonsNombres5">

                <div class="" id="jeton150"> </div>
                <div class="" id="jeton180"> </div>
                <div class="" id="jeton360"> </div>

            </div>


            <div class="rangeeJetonsMouvement1">
                <div class="" id="jetonAvancer"> </div>
                <div class="" id="jetonReculer"> </div>
                <div class="" id="jetonAvancerGauche"> </div>
                <div class="" id="jetonAvancerDroite"> </div>
                <div class="" id="jetonMouvementAleatoire"> </div>
            </div>


            <div class="rangeeJetonsRepetition1">
                <div class="" id="jetonRotation"> </div>
                <div class="" id="jetonRepeter2"> </div>
                <div class="" id="jetonRepeter3"> </div>
                <div class="" id="jetonRepeter4"> </div>
                <div class="" id="jetonRepeter5"> </div>
                <div class="" id="jetonRepeter6"> </div>
            </div>

            <div class="rangeeJetonsRepetition2">
                <div class="" id="jetonRepeterAleatoire"> </div>
                <div class="" id="jetonRepeter7"> </div>
                <div class="" id="jetonRepeter8"> </div>
                <div class="" id="jetonRepeter9"> </div>
                <div class="" id="jetonRepeter10"> </div>
                <div class="" id="jetonRepeter18"> </div>
            </div>

            <div class="rangeeJetonsRepetition3">

                <div class="" id="jetonRepeter36"> </div>
                <div class="" id="jetonRepeter72"> </div>
                <div class="" id="jetonRepeter180"> </div>
                <div class="" id="jetonRepeter360"> </div>
            </div>



            <div class="rangeeJetonsOperations1">
                <div class="" id="jetonPlus1"> </div>
                <div class="" id="jetonPlus2"> </div>
                <div class="" id="jetonPlus3"> </div>
                <div class="" id="jetonPlus5"> </div>
                <div class="" id="jetonPlus10"> </div>
                <div class="" id="jetonPlus15"> </div>
            </div>


            <div class="rangeeJetonsOperations2">
                <div class="" id="jetonPlus20"> </div>
                <div class="" id="jetonPlus50"> </div>
                <div class="" id="jetonPlus100"> </div>
                <div class="" id="jetonMoins1"> </div>
                <div class="" id="jetonMoins2"> </div>
                <div class="" id="jetonMoins3"> </div>
            </div>


            <div class="rangeeJetonsOperations3">
                <div class="" id="jetonMoins5"> </div>
                <div class="" id="jetonMoins10"> </div>
                <div class="" id="jetonMoins15"> </div>
                <div class="" id="jetonMoins20"> </div>
                <div class="" id="jetonMoins50"> </div>
                <div class="" id="jetonMoins100"> </div>
            </div>

            <div class="rangeeJetonsOperations4">
                <div class="" id="jetonMultipliePar2"> </div>
                <div class="" id="jetonMultipliePar3"> </div>

                <div class="" id="jetonDivisePar2"> </div>
                <div class="" id="jetonDivisePar3"> </div>

                <div class="" id="jetonPuissanceDe2"> </div>
                <div class="" id="jetonPuissanceDe3"> </div>
            </div>

            <div class="rangeeJetonsOperations5">
                <div class="" id="jetonRacineCarreDeNombreX"> </div>

            </div>

            <div class="rangeeJetonsSpeciaux1">
                <div class="" id="jetonFonction"> </div>
                <div class="" id="jetonPause"> </div>
            </div>
        </div>
    </div>
</div>

<div class="dropZoneT">
    <div class="dropZoneT1"></div>
    <div class="dropZoneT2"></div>
    <div class="dropZoneT3"></div>
</div>

<div class="robotPrimaStem" id="robotPrimaStem"><img src="imagesPlayStem\mini-logo.png"></div>
<div id="grilleBackground" class="imageSupport"> <img src="imagesPlayStem\grilleRobot.png">

</div>

<div id="dropzone" class="telecommande">
    <img src="../imagesPlayStem/telecommande.png"> -->
<!-- <div class="dropZoneT"></div>
    <div class="dropZoneligne1" id="dropZoneligne1">
        <div class="dropZone1" id="dropZone1"></div>
        <div class="dropZone2"></div>
        <div class="dropZone3"></div>
        <div class="dropZone4"></div>
        <div class="dropZone5"></div>
        <div class="dropZone6"></div>
    </div>


    <div class="dropZoneligne2" id="dropZoneligne2">
        <div class="dropZone7"></div>
        <div class="dropZone8"></div>
        <div class="dropZone9"></div>
        <div class="dropZone10"></div>
        <div class="dropZone11"></div>
        <div class="dropZone12"></div>

    </div>



    <div class="dropZoneligne3" id="dropZoneligne3">
        <div class="dropZone13"></div>
        <div class="dropZone14"></div>
        <div class="dropZone15"></div>
        <div class="dropZone16"></div>
        <div class="dropZone17"></div>
    </div>



    <div class="dropZoneligne4" id="dropZoneligne4">
        <div class="dropZone18"></div>
        <div class="dropZone19"></div>
        <div class="dropZone20"></div>
        <div class="dropZone21"></div>
        <div class="dropZone22"></div>
    </div> -->

    </div>


</div>


</div>
<?= $this->endSection() ?>