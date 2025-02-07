<?= $this->extend('PlayStem/layoutPlayStem') ?>
<?= $this->section('contenu') ?>

<style>
    body {
        display: grid;
        grid-template-rows: auto 1fr;
        grid-template-columns: 1fr 3fr;
        height: 100vh;
        font-family: Arial, sans-serif;
        flex-grow: 1;
    }

    .sidebar {
        grid-row: 1 / 3;
        padding: 10px;
        background: #ddd;
    }

    .storage {
        display: flex;
        width: 500px;
        /* Agrandissement de l'image */
        height: auto;
        margin-top: 10px;
        padding: 10px;
        /* border: 2px dashed black; */
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

        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .draggable {
        padding: 10px;
        margin: 5px;
        cursor: grab;
        display: none;
        /* Masqué par défaut */
    }

    .boutons {
        display: flex
    }
</style>
</head>

<body>

    <div class="sidebar">
        <div class="boutons">
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

        <!-- <div class="supportJeton"> <img src="../imagesPlayStem/supportJeton.png" class="imageSupport"> -->
        <div class="storage" id="storage-box">
            <img src="../imagesPlayStem/telecommande.png">
            <div class="drop-circle" id="circle1" style="margin-top: 10px; left: 43px;"></div>
            <div class="drop-circle" id="circle2" style="margin-top: 10px; left: 124px;"></div>
            <div class="drop-circle" id="circle3" style="margin-top: 10px; left: 201px;"></div>
            <div class="drop-circle" id="circle4" style="margin-top: 10px; left: 280px;"></div>
            <div class="drop-circle" id="circle5" style="margin-top: 10px; left: 350px;"></div>
            <div class="drop-circle" id="circle6" style="margin-top: 10px; left: 421px;"></div>

            <div class="drop-circle" id="circle7" style="margin-top: 76px; left: 43px;"></div>
            <div class="drop-circle" id="circle8" style="margin-top: 76px; left: 124px;"></div>
            <div class="drop-circle" id="circle9" style="margin-top: 76px; left: 201px;"></div>
            <div class="drop-circle" id="circle10" style="margin-top: 76px; left: 280px;"></div>
            <div class="drop-circle" id="circle11" style="margin-top: 76px; left: 350px;"></div>
            <div class="drop-circle" id="circle12" style="margin-top: 76px; left: 421px;"></div>


            <div class="drop-circle" id="circle13" style="margin-top: 170px; left: 77px;"></div>
            <div class="drop-circle" id="circle14" style="margin-top: 170px; left: 155px;"></div>
            <div class="drop-circle" id="circle15" style="margin-top: 170px; left: 233px;"></div>
            <div class="drop-circle" id="circle16" style="margin-top: 170px; left: 310px;"></div>
            <div class="drop-circle" id="circle17" style="margin-top: 170px; left: 380px;"></div>



            <div class="drop-circle" id="circle18" style="margin-top: 240px; left: 77px;"></div>
            <div class="drop-circle" id="circle19" style="margin-top: 240px; left: 155px;"></div>
            <div class="drop-circle" id="circle20" style="margin-top: 240px; left: 233px;"></div>
            <div class="drop-circle" id="circle21" style="margin-top: 240px; left: 310px;"></div>
            <div class="drop-circle" id="circle22" style="margin-top: 240px; left: 380px;"></div>


            <div class="robotPrimaStem" id="robotPrimaStem" style="margin-top: -165px; margin-left: 430px;">
                <button><img src="imagesPlayStem\mini-logo.png"></button>
            </div>
            <div class="boutonRestart" id="boutonRestart" style="margin-top: -170px; margin-left: 3px;">
                <button> <img src="imagesPlayStem\boutonRestart.png"></button>
            </div>

        </div>


    </div>
    <div class="game-area">
        <div class="character" id="character"><img src="imagesPlayStem\mini-logo1.png"> </div>
    </div>

    <script>
        const character = document.getElementById("character");
        let queue = [];
        // const idCircles = document.querySelectorAll("#drop-circle div");
        
        const categories = {
            "mouvement": ["jetonAvancer", "jetonReculer", "jetonAvancerGauche", "jetonAvancerDroite", "jetonMouvementAleatoire"],
            "rotation": ["jetonRotation", "jetonRepeter2", "jetonRepeter3", "jetonRepeter4", "jetonRepeter5", "jetonRepeter6", "jetonRepeterAleatoire", "jetonRepeter7", "jetonRepeter8", "jetonRepeter9", "jetonRepeter10", "jetonRepeter18"],
            "nombres": ["jeton1", "jeton2", "jeton3", "jeton4", "jeton5", "jeton6", "jeton7", "jeton8", "jeton9", "jeton10", "jeton15", "jeton20", "jeton36", "jeton40", "jeton45", "jeton50", "jeton60", "jeton72", "jeton90", "jeton100", "jeton108", "jeton120", "jeton135", "jeton144", "jeton150", "jeton180", "jeton360"],
            "operations": ["jetonPlus1", "jetonPlus2", "jetonPlus3", "jetonPlus5", "jetonPlus10", "jetonPlus15", "jetonPlus20", "jetonPlus50", "jetonPlus100", "jetonMoins1", "jetonMoins2", "jetonMoins3", "jetonMoins5", "jetonMoins10", "jetonMoins15", "jetonMoins20", "jetonMoins50", "jetonMoins100"],
            "speciaux": ["jetonFonction", "jetonPause", "jetonMultipliePar2", "jetonMultipliePar3", "jetonDivisePar2", "jetonDivisePar3", "jetonPuissanceDe2", "jetonPuissanceDe3", "jetonRacineCarreDeNombreX"]
        };

        function toggleDraggables(category) {
            const allDraggables = document.querySelectorAll(".draggable");
            allDraggables.forEach(item => {
                item.style.display = "none";
            });

            categories[category].forEach(id => {
                document.getElementById(id).style.display = "block";
            });
        }

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

        function addDraggableElement(action, targetElement) {
            let draggedElement = document.createElement("div");
            draggedElement.className = "draggable";
            draggedElement.draggable = true;
            let img = document.createElement("img");
            img.setAttribute("src", document.querySelector(".sidebar div").target.id.src);
            draggedElement.appendChild(img);
            targetElement.appendChild(draggedElement);


            draggedElement.addEventListener("dragstart", event => {
                event.dataTransfer.setData("text", event.target.dataset.action);
            });
        }
    </script>
</body>

<?= $this->endSection() ?>