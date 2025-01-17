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
<?= $this->endSection() ?>