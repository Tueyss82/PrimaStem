<?= $this->extend('PlayStem/layoutPlayStem') ?>
<?= $this->section('contenu') ?>


<div class="exercices-TextLayout">
    <p>Exercices</p>
</div>

<div class="consignes"><img src="image\consignes.png"></div>

<div class="image-container ">

    <div class="supportJeton"><img src="image\supportJeton.png"></div>

    <div class="fleche-toutesLesDirections" id="direction"> <img src="image\fleche-haut.png"></div>
    <div class="toutesLesRotations"><img src="image\rotation.png"></div>
    <div class="tousLesNombres"><img src="image\nombre.png"></div>
    <div class="toutesLesOperations"><img src="image\operations.png"></div>
    <div class="fonction"><img src="image\fonction.png"></div>
    <div class="robotPrimaStem"><img src="image\mini-logo.png"></div>
    <div class="grilleRobot"><img src="image\grilleRobot.png"></div>
</div>

<div class="telecommande"><img src="image\telecommande.png"></div>

<!-- <script>
        direction.onclick = function() {
            if (direction.onclick){
                direction.inner.Html = `<div class = "fleche-haut" <img ` 
            }
        }
    </script> -->

<?= $this->endSection() ?>