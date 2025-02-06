<?= $this->extend('PlayStem/layoutPlayStem') ?>
<?= $this->section('contenu') ?>

<style>
    body {
        display: grid;
        grid-template-rows: auto 1fr;
        grid-template-columns: 1fr 3fr;
        height: 100vh;
        font-family: Arial, sans-serif;
    }

    .sidebar {
        grid-row: 1 / 3;
        padding: 10px;
        background: #ddd;
    }

    .storage {
        position: relative;
        width: 500px;
        /* Agrandissement de l'image */
        height: auto;
        margin-top: 10px;
        padding: 10px;
        border: 2px dashed black;
        display: flex;
        flex-wrap: wrap;
        gap: 5px;
    }

    .storage img {
        width: 100%;
        height: auto;
        display: block;
    }

    .drop-circle {
        position: absolute;
        width: 60px;
        /* Ajusté à la taille de l'image agrandie */
        height: 60px;
        background: white;
        border-radius: 50%;
        border: 3px solid #A09494;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .game-area {
        grid-row: 2;
        background: #f0f0f0;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    .character {
        width: 50px;
        height: 50px;
        background: red;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .draggable {
        padding: 10px;
        margin: 5px;
        cursor: grab;
        display: none; /* Masqué par défaut */
    }

    .start-button {
        margin-top: 10px;
        padding: 10px;
        background: green;
        color: white;
        border: none;
        cursor: pointer;
    }
    
</style>
</head>

<body>
    <div class="sidebar">
        <div class="mouvement" id="mouvement"> 
            <button><img src="imagesPlayStem\mouvementCategorie.png"></button>
        </div>
        <div class="rotation" id="rotation">
            <button><img src="imagesPlayStem\repetitionCategorie.png"></button>
        </div>
        <div class="nombres" id="nombres">
            <button><img src="imagesPlayStem\nombresCategorie.png"></button>
        </div>
        <div class="operations" id="operations">
            <button><img src="imagesPlayStem\operationsCategorie.png"></button>
        </div>
        <div class="speciaux" id="fonction">
            <button><img src="imagesPlayStem\speciauxCategorie.png"></button>
        </div>

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

        <div class="draggable" id="jetonAvancer"> </div>
        <div class="draggable" id="jetonReculer"> </div>
        <div class="draggable" id="jetonAvancerGauche"> </div>
        <div class="draggable" id="jetonAvancerDroite"> </div>
        <div class="draggable" id="jetonMouvementAleatoire"> </div>

        <div class="draggable" id="jetonRotation"> </div>
        <div class="draggable" id="jetonRepeter2"> </div>
        <div class="draggable" id="jetonRepeter3"> </div>
        <div class="draggable" id="jetonRepeter4"> </div>
        <div class="draggable" id="jetonRepeter5"> </div>
        <div class="draggable" id="jetonRepeter6"> </div>

        <div class="draggable" id="jetonRepeterAleatoire"> </div>
        <div class="draggable" id="jetonRepeter7"> </div>
        <div class="draggable" id="jetonRepeter8"> </div>
        <div class="draggable" id="jetonRepeter9"> </div>
        <div class="draggable" id="jetonRepeter10"> </div>
        <div class="draggable" id="jetonRepeter18"> </div>

        <div class="draggable" id="jetonRepeter36"> </div>
        <div class="draggable" id="jetonRepeter72"> </div>
        <div class="draggable" id="jetonRepeter180"> </div>
        <div class="draggable" id="jetonRepeter360"> </div>

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

        <div class="storage" id="storage-box">
            <img src="../imagesPlayStem/telecommande.png">
            <div class="drop-circle" style="top: 20px; left: 34px;"></div>
            <div class="drop-circle" style="top: 20px; left: 113px;"></div>
            <div class="drop-circle" style="top: 20px; left: 190px;"></div>
            <div class="drop-circle" style="top: 20px; left: 266px;"></div>
            <div class="drop-circle" style="top: 20px; left: 337px;"></div>
            <div class="drop-circle" style="top: 20px; left: 407px;"></div>

            <div class="drop-circle" style="top: 86px; left: 34px;"></div>
            <div class="drop-circle" style="top: 86px; left: 113px;"></div>
            <div class="drop-circle" style="top: 86px; left: 190px;"></div>
            <div class="drop-circle" style="top: 86px; left: 266px;"></div>
            <div class="drop-circle" style="top: 86px; left: 337px;"></div>
            <div class="drop-circle" style="top: 86px; left: 407px;"></div>

            <div class="drop-circle" style="top: 180px; left: 65px;"></div>

            <div class="drop-circle" style="top: 180px; left: 65px;"></div>
            <div class="drop-circle" style="top: 180px; left: 145px;"></div>
            <div class="drop-circle" style="top: 180px; left: 220px;"></div>
            <div class="drop-circle" style="top: 180px; left: 300px;"></div>
            <div class="drop-circle" style="top: 180px; left: 367px;"></div>
            <div class="drop-circle" style="top: 180px; left: 65px;"></div>


            <div class="drop-circle" style="top: 250px; left: 65px;"></div>
            <div class="drop-circle" style="top: 250px; left: 145px;"></div>
            <div class="drop-circle" style="top: 250px; left: 220px;"></div>
            <div class="drop-circle" style="top: 250px; left: 300px;"></div>
            <div class="drop-circle" style="top: 250px; left: 367px;"></div>
            <div class="drop-circle" style="top: 250px; left: 65px;"></div>

        </div>

        <button class="start-button" id="start-button">Démarrer</button>
    </div>
    <div class="game-area">
        <div class="character" id="character"></div>
    </div>

    <script>
        const character = document.getElementById("character");
        let queue = [];

        // Fonction pour afficher/masquer les éléments draggables selon le bouton
        function toggleDraggables(category) {
            const allDraggables = document.querySelectorAll(".draggable");
            allDraggables.forEach(item => {
                item.style.display = "none"; // Masquer tout d'abord
            });

            // Afficher les éléments en fonction de la catégorie sélectionnée
            const categories = {
                "mouvement": ["jetonAvancer", "jetonReculer", "jetonAvancerGauche", "jetonAvancerDroite", "jetonMouvementAleatoire"],
                "rotation": ["jetonRotation", "jetonRepeter2", "jetonRepeter3", "jetonRepeter4", "jetonRepeter5", "jetonRepeter6", "jetonRepeterAleatoire", "jetonRepeter7", "jetonRepeter8", "jetonRepeter9", "jetonRepeter10", "jetonRepeter18"],
                "nombres": ["jeton1", "jeton2", "jeton3", "jeton4", "jeton5", "jeton6", "jeton7", "jeton8", "jeton9", "jeton10", "jeton15", "jeton20", "jeton36", "jeton40", "jeton45", "jeton50", "jeton60", "jeton72", "jeton90", "jeton100", "jeton108", "jeton120", "jeton135", "jeton144", "jeton150", "jeton180", "jeton360"],
                "operations": ["jetonPlus1", "jetonPlus2", "jetonPlus3", "jetonPlus5", "jetonPlus10", "jetonPlus15", "jetonPlus20", "jetonPlus50", "jetonPlus100", "jetonMoins1", "jetonMoins2", "jetonMoins3", "jetonMoins5", "jetonMoins10", "jetonMoins15", "jetonMoins20", "jetonMoins50", "jetonMoins100"],
                "speciaux": ["jetonFonction", "jetonPause", "jetonMultipliePar2", "jetonMultipliePar3", "jetonDivisePar2", "jetonDivisePar3", "jetonPuissanceDe2", "jetonPuissanceDe3", "jetonRacineCarreDeNombreX"]
            };

            categories[category].forEach(id => {
                document.getElementById(id).style.display = "block"; // Afficher les éléments correspondants
            });
        }

        // Ajouter des événements aux boutons pour afficher les draggables correspondants
        document.getElementById("mouvement").addEventListener("click", () => toggleDraggables("mouvement"));
        document.getElementById("rotation").addEventListener("click", () => toggleDraggables("rotation"));
        document.getElementById("nombres").addEventListener("click", () => toggleDraggables("nombres"));
        document.getElementById("operations").addEventListener("click", () => toggleDraggables("operations"));
        document.getElementById("fonction").addEventListener("click", () => toggleDraggables("speciaux"));

        document.querySelectorAll(".draggable").forEach(item => {
            item.addEventListener("dragstart", event => {
                event.dataTransfer.setData("text", event.target.dataset.action);
            });
        });

        document.querySelector(".game-area").addEventListener("dragover", event => {
            event.preventDefault();
        });

        document.querySelector(".game-area").addEventListener("drop", event => {
            event.preventDefault();
            let action = event.dataTransfer.getData("text");
            queue.push(action);
        });

        document.querySelectorAll(".drop-circle").forEach(circle => {
            circle.addEventListener("dragover", event => {
                event.preventDefault();
            });

            circle.addEventListener("drop", event => {
                event.preventDefault();
                let action = event.dataTransfer.getData("text");
                addDraggableElement(action, circle);
            });
        });

        function addDraggableElement(action, target) {
            let draggedElement = document.createElement("div");
            draggedElement.className = "draggable";
            draggedElement.draggable = true;
            draggedElement.dataset.action = action;
            draggedElement.textContent = action;
            target.appendChild(draggedElement);

            draggedElement.addEventListener("dragstart", event => {
                event.dataTransfer.setData("text", event.target.dataset.action);
            });
        }
    </script>
</body>






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