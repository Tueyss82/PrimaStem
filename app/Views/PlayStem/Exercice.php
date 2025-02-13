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
        grid-auto-flow: row;
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
        padding: 10px;
        /* border: 2px dashed black; */
        flex-wrap: wrap;
        gap: 5px;
        padding-top: 300px;
        margin-bottom: 200px;
        
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

    .robotPrimaStem {
        width: 50px;
        height: 50px;

        top: 50%;
        left: 50%;
        padding-left: 200px;
        transform: translate(-50%, -50%);
        rotate: 0deg;
    }

    .draggable {
        padding: 10px;
        margin: 5px;
        display: none;
        box-sizing: border-box;
        /* Masqué par défaut */
    }

    .supportBoutons {}
</style>
</head>

<body>


    <div class="sidebar">

        <div class="supportBoutons">
            <div class="supportJeton" style="margin-left: 20px; margin-top: 10px;"> <img src="../imagesPlayStem/supportJeton.png" class="imageSupport">

                <div class="mouvement" id="mouvement" style="margin-left: 9px; margin-top: -450px;">
                    <button><img src="imagesPlayStem\mouvementCategorie.png"></button>
                </div>
                <div class="rotation" id="rotation" style="margin-left: 97px; margin-top: -65px;">
                    <button><img src="imagesPlayStem\repetitionCategorie.png"></button>
                </div>
                <div class="nombres" id="nombres" style="margin-left: 187px; margin-top: -65px;">
                    <button><img src="imagesPlayStem\nombresCategorie.png"></button>
                </div>
                <div class="operations" id="operations" style="margin-left: 277px; margin-top: -65px;">
                    <button><img src="imagesPlayStem\operationsCategorie.png"></button>
                </div>
                <div class="speciaux" id="fonction" style="margin-left: 367px; margin-top: -65px;">
                    <button><img src="imagesPlayStem\speciauxCategorie.png"></button>
                </div>
            </div>

            <div class="jetons">
                <div class="draggable" id="jetonAvancer"> <button id="boutonAvancer"></button></div>
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
        </div>
        <div class="storage" id="storage-box">
            <img src="../imagesPlayStem/telecommande.png">

            <div id="storage1" class="storage1" style="margin-top: -386px;">

                <div class="drop-circle" style="margin-top: 9px; left: 44px;"></div>
                <div class="drop-circle" style="margin-top: 77px; left: 44px;"></div>
            </div>

            <div id="storage2"  class="storage2" style="margin-top: -386px;">
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
    </script>
</body>

<?= $this->endSection() ?>