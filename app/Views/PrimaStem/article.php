<?= $this->extend('layoutPrimaStem') ?>
<?= $this->section('contenu') ?>

<div class="container text-center" style="padding-top: 2rem">
  <div class="row">
    <div class="col-md-2">
      <a class="btn btn-primary" href="<?= url_to('blog') ?>">Retourner à la liste des articles</a>
    </div>
    <div class="col-md-4">
      <h1><?= $data['TITRE'] ?></h1>
      <p><?= $data['DESCRIPTIONARTICLE'] ?></p>
    </div>
    <div class="col-md-6">
      <img class="imgArticle" src="<?= base_url('files/upload/' . $data['MINIAARTICLE']) ?>" alt="">
    </div>
  </div>
</div>

<?= $this->endSection() ?>