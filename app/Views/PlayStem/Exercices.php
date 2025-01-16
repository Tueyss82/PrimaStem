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

 
<div class = "exercices"><h1>Exercices</h1></div>

<h1>Evènements et point d'arrivée</h1>

<h1>Progression</h1>

<h1>Exercices</h1>

<p>Dessin</p>


<p>Drapeau</p>


<p>Autres types</p>

<h1>Vous avez des suggestions à faire ?</h1>
<h1>N'hésitez pas à nous le partager, votre avis compte pour améliorer notre robot et ses fonctionnalités</h1>

<p>Commentaires</p>
</div>







<?= $this->endSection() ?><