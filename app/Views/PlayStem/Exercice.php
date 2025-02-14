<?= $this->extend('PlayStem/layoutPlayStem') ?>
<?= $this->section('contenu') ?>

<body>

<!-- Français

div sidebar => Ensemble qui comprend :

- le support pour les jetons
- les boutons de toutes les catégories de jetons
- les emplacements pour les jetons dans la télécommande du robot
- le bouton Start qui démarre le programme
- le bouton Restart/Reset qui annule le programme

mais ne comprends pas :

- le robot 

Pour réorganiser les éléments comme vous voulez, utilisez si possible les div qui encapsule 
les différents éléments en blocs parents ayant un ou plusieurs enfants 
pour le faire, utilisez ou modifier les div déjà exitants qui permettent déjà cela,
comme :

- class = "supportBoutons" - pour les boutons de catégories et le support de Jetons 

- class = "jetons(Catégorie)|nombre" - pour les jetons des différentes catégories

- class = "storage" - pour l'ensemble de la télécommande 
                    (sans prendre en compte les boutons Start et Restart)
                    
- class = "storage|nombre" - pour les paires d'emplacements 
                    (Premier = emplacement haut - Deuxième = emplacement bas)

Tout autre div qui n'encapsule qu'un élément n'est pas pris en compte ici
-->



<!-- English

div sidebar => Set that includes:

- the support for tokens
- buttons for all token categories
- slots for tokens in the robot remote control
- the Start button that launches the program
- the Restart/Reset button that cancels the program

but does not include:

- the robot

To rearrange the elements as you like, if possible, use divs that encapsulate different elements into parent blocks with one or more children.  
To do this, use or modify the existing divs that already allow this, such as:

- class = "supportButtons" - for category buttons and Token support

- class = "tokens(Category)|number" - for tokens of different categories

- class = "storage" - for the entire remote control  
                    (excluding the Start and Restart buttons)

- class = "storage|number" - for pairs of slots  
                    (First = top slot - Second = bottom slot)

Any other div that encapsulates only one element is not considered here.
-->


    <div class="sidebar">

        <div class="supportBoutons">
            <div class="supportJeton" style="margin-left: 20px; margin-top: 10px;"> <img src="../imagesPlayStem/supportJeton.png" class="imageSupport">

                <div class="mouvement" id="mouvement" style="margin-left: 9px; margin-top: -450px;">
                    <button style="border-color: #f0f0f0;"><img src="imagesPlayStem\mouvementCategorie.png"></button>
                </div>
                <div class="rotation" id="rotation" style="margin-left: 97px; margin-top: -65px;">
                    <button style="border-color: #f0f0f0;"><img src="imagesPlayStem\repetitionCategorie.png"></button>
                </div>
                <div class="nombres" id="nombres" style="margin-left: 187px; margin-top: -65px;">
                    <button style="border-color: #f0f0f0;"><img src="imagesPlayStem\nombresCategorie.png"></button>
                </div>
                <div class="operations" id="operations" style="margin-left: 277px; margin-top: -65px;">
                    <button style="border-color: #f0f0f0;"><img src="imagesPlayStem\operationsCategorie.png"></button>
                </div>
                <div class="speciaux" id="fonction" style="margin-left: 367px; margin-top: -65px;">
                    <button style="border-color: #f0f0f0;"><img src="imagesPlayStem\speciauxCategorie.png"></button>
                </div>
            </div>

            <div class="jetonsMouvement">

                <div class="draggable" id="jetonAvancer" style="margin-top: 45px; margin-left: 40px"></div>
                <div class="draggable" id="jetonReculer" style="margin-top: -91px; margin-left: 120px"> </div>
                <div class="draggable" id="jetonAvancerGauche" style="margin-top: -91px; margin-left: 200px"> </div>
                <div class="draggable" id="jetonAvancerDroite" style="margin-top: -91px; margin-left: 280px"> </div>
                <div class="draggable" id="jetonMouvementAleatoire" style="margin-top: -91px; margin-left: 360px"> </div>

            </div>
            <div id="jetonsRotation1">

                <div class="draggable" id="jetonRotation" style="margin-top: 45px; margin-left: 40px"></div>
                <div class="draggable" id="jetonRepeter2" style="margin-top: -85px; margin-left: 120px"> </div>
                <div class="draggable" id="jetonRepeter3" style="margin-top: -79px; margin-left: 200px"> </div>
                <div class="draggable" id="jetonRepeter4" style="margin-top: -79px; margin-left: 280px"> </div>
                <div class="draggable" id="jetonRepeter5" style="margin-top: -79px; margin-left: 360px"> </div>

            </div>

            <div id="jetonsRotation2">
                <div class="draggable" id="jetonRepeter6" style="margin-top: 0px; margin-left: 40px"> </div>
                <div class="draggable" id="jetonRepeterAleatoire" style="margin-top: -85px; margin-left: 120px"> </div>
                <div class="draggable" id="jetonRepeter7" style="margin-top: -79px; margin-left: 200px"> </div>
                <div class="draggable" id="jetonRepeter8" style="margin-top: -79px; margin-left: 280px"> </div>
                <div class="draggable" id="jetonRepeter9" style="margin-top: -79px; margin-left: 360px"> </div>
                
            </div>

            <div class="draggable" id="jetonRepeter10"> </div>
            <div class="draggable" id="jetonRepeter18"> </div>

            <div class="draggable" id="jetonRepeter36"> </div>
            <div class="draggable" id="jetonRepeter72"> </div>
            <div class="draggable" id="jetonRepeter180"> </div>
            <div class="draggable" id="jetonRepeter360"> </div>


            <div class="draggable" id="jeton1"> </div>
            <div class="draggable" id="jeton2"> </div>
            <div class="draggable" id="jeton3"> </div>
            <div class="draggable" id="jeton4"> </div>
            <div class="draggable" id="jeton5"> </div>
            <div class="draggable" id="jeton6"> </div>

            <div class="draggable" id="jeton7"> </div>
            <div class="draggable" id="jeton8"> </div>
            <div class="draggable" id="jeton9"> </div>
            <div class="draggable" id="jeton10"> </div>
            <div class="draggable" id="jeton15"> </div>
            <div class="draggable" id="jeton20"> </div>

            <div class="draggable" id="jeton36"> </div>
            <div class="draggable" id="jeton40"> </div>
            <div class="draggable" id="jeton45"> </div>
            <div class="draggable" id="jeton50"> </div>
            <div class="draggable" id="jeton60"> </div>
            <div class="draggable" id="jeton72"> </div>

            <div class="draggable" id="jeton90"> </div>
            <div class="draggable" id="jeton100"> </div>
            <div class="draggable" id="jeton108"> </div>
            <div class="draggable" id="jeton120"> </div>
            <div class="draggable" id="jeton135"> </div>
            <div class="draggable" id="jeton144"> </div>

            <div class="draggable" id="jeton150"> </div>
            <div class="draggable" id="jeton180"> </div>
            <div class="draggable" id="jeton360"> </div>

            <div class="draggable" id="jetonPlus1"> </div>
            <div class="draggable" id="jetonPlus2"> </div>
            <div class="draggable" id="jetonPlus3"> </div>
            <div class="draggable" id="jetonPlus5"> </div>
            <div class="draggable" id="jetonPlus10"> </div>
            <div class="draggable" id="jetonPlus15"> </div>

            <div class="draggable" id="jetonPlus20"> </div>
            <div class="draggable" id="jetonPlus50"> </div>
            <div class="draggable" id="jetonPlus100"> </div>
            <div class="draggable" id="jetonMoins1"> </div>
            <div class="draggable" id="jetonMoins2"> </div>
            <div class="draggable" id="jetonMoins3"> </div>

            <div class="draggable" id="jetonMoins5"> </div>
            <div class="draggable" id="jetonMoins10"> </div>
            <div class="draggable" id="jetonMoins15"> </div>
            <div class="draggable" id="jetonMoins20"> </div>
            <div class="draggable" id="jetonMoins50"> </div>
            <div class="draggable" id="jetonMoins100"> </div>

            <div class="draggable" id="jetonMultipliePar2"> </div>
            <div class="draggable" id="jetonMultipliePar3"> </div>

            <div class="draggable" id="jetonDivisePar2"> </div>
            <div class="draggable" id="jetonDivisePar3"> </div>

            <div class="draggable" id="jetonPuissanceDe2"> </div>
            <div class="draggable" id="jetonPuissanceDe3"> </div>

            <div class="draggable" id="jetonRacineCarreDeNombreX"> </div>

            <div class="draggable" id="jetonFonction"> </div>
            <div class="draggable" id="jetonPause"> </div>

        </div>
        <div class="storage" id="storage-box">
            <img src="../imagesPlayStem/telecommande.png">

            <div id="storage1" class="storage1" style="margin-top: -386px;">

                <div class="drop-circle" style="margin-top: 9px; left: 44px;"></div>
                <div class="drop-circle" style="margin-top: 77px; left: 44px;"></div>
            </div>

            <div id="storage2" class="storage2" style="margin-top: -386px;">
                <div class="drop-circle" style="margin-top: 9px; left: 124px;"></div>
                <div class="drop-circle" style="margin-top: 77px; left: 124px;"></div>
            </div>

            <div id="storage3" class="storage3" style="margin-top: -386px;">
                <div class="drop-circle" style="margin-top: 9px; left: 201px;"></div>
                <div class="drop-circle" style="margin-top: 77px; left: 201px;"></div>
            </div>

            <div id="storage4" class="storage4" style="margin-top: -386px;">

                <div class="drop-circle" style="margin-top: 9px; left: 280px;"></div>
                <div class="drop-circle" style="margin-top: 77px; left: 280px;"></div>
            </div>

            <div id="storage5" class="storage5" style="margin-top: -386px;">
                <div class="drop-circle" style="margin-top: 9px; left: 351px;"></div>
                <div class="drop-circle" style="margin-top: 77px; left: 351px;"></div>
            </div>

            <div id="storage6" class="storage6" style="margin-top: -386px;">
                <div class="drop-circle" style="margin-top: 8px; left: 421px;"></div>
                <div class="drop-circle" style="margin-top: 78px; left: 422px;"></div>
            </div>

            <div id="storage7" class="storage7" style="margin-top: -386px;">
                <div class="drop-circle" style="margin-top: 170px; left: 77px;"></div>
                <div class="drop-circle" style="margin-top: 240px; left: 77px;"></div>
            </div>

            <div id="storage8" class="storage8" style="margin-top: -386px;">
                <div class="drop-circle" style="margin-top: 170px; left: 156px;"></div>
                <div class="drop-circle" style="margin-top: 241px; left: 156px;"></div>
            </div>

            <div id="storage9" class="storage9" style="margin-top: -386px;">
                <div class="drop-circle" style="margin-top: 170px; left: 233px;"></div>
                <div class="drop-circle" style="margin-top: 240px; left: 233px;"></div>
            </div>

            <div id="storage10" class="storage10" style="margin-top: -386px;">
                <div class="drop-circle" style="margin-top: 170px; left: 311px;"></div>
                <div class="drop-circle" style="margin-top: 240px; left: 311px;"></div>
            </div>

            <div id="storage11" class="storage11" style="margin-top: -386px;">
                <div class="drop-circle" style="margin-top: 170px; left: 381px;"></div>
                <div class="drop-circle" style="margin-top: 240px; left: 381px;"></div>
            </div>

            <div class="boutonStart" id="boutonStart" style="margin-top: -165px; margin-left: 430px;">
                <button id="startButton"> <img src="imagesPlayStem\mini-logo.png"> </button>
            </div>
            <div class="boutonRestart" id="boutonRestart" style="margin-top: -170px; margin-left: 3px;">
                <button id="resetButton"> <img src="imagesPlayStem\boutonRestart.png"></button>
            </div>

        </div>


    </div>
    <div class="game-area">
        <div class="robotPrimaStem" id="robotPrimaStem"><img src="imagesPlayStem\mini-logo1.png"> </div>
    </div>

</body>

<?= $this->endSection() ?>