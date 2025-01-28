<?= $this->extend('layoutPrimaStem') ?>
<?= $this->section('contenu') ?>

<?php
var_dump($data);
?>

<div class="container text-center">
  <div class="row">
    <div class="col">
      <h1><?= $data['TITRE'] ?></h1>
      <p><?= $data['DESCRIPTIONARTICLE'] ?></p>
    </div>
    <div class="col">
      <img class="imgArticle" src="<?= base_url('files/upload/' . $data['MINIAARTICLE'] ) ?>" alt="">
    </div>
  </div>
</div>

<?= $this->endSection() ?>