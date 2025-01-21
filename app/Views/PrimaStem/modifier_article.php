<?= $this->extend('layoutPrimaStem') ?>
<?= $this->section('contenu') ?>

<title>Modifier un article - PrimaStem</title>

<body>

    <h1 class="fw-bold headerText">Modification d'article</h1>

    <form method="post" action="<?= url_to('updateArticle') ?>" class="row g-3 mx-auto" enctype="multipart/form-data">
        <input id="IDARTICLE" name="IDARTICLE" type="hidden" value="<?= $articleInfo['IDARTICLE'] ?>" />
        <div class="col-12">
            <label for="TITRE" class="form-label">Titre de l'article</label>
            <input type="text" class="form-control" name="TITRE" value="<?= $articleInfo['TITRE'] ?>">
        </div>
        <div class="col-12">
            <label for="DESCRIPTIONARTICLE" class="form-label">Description de l'article</label>
            <textarea class="form-control" name="DESCRIPTIONARTICLE" style="height: 150px"><?= $articleInfo['DESCRIPTIONARTICLE'] ?></textarea>
        </div>
        <label for="MINIAARTICLE" class="form-label">Miniature de l'article</label>
        <input type="file" id="addFile" name="MINIAARTICLE" accept="image/*" value="../public/upload/<?= $articleInfo['MINIAARTICLE'] ?>"/>
        <div class="col-12">
            <input type="submit" class="submitButton" value="Modifier">
        </div>
    </form>
</body>



<?= $this->endSection() ?>