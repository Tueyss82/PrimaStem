<?= $this->extend('layoutPrimaStem') ?>
<?= $this->section('contenu') ?>

<title>Ajouter un article - PrimaStem</title>

<body>

    <h1 class="fw-bold headerText">Ajout d'article</h1>

    <form method="post" action="" enctype="multipart/form-data" class="row g-3 mx-auto">
        <div class="col-12">
            <label for="TITRE" class="form-label">Titre de l'article</label>
            <input type="text" class="form-control" name="TITRE">
        </div>
        <div class="col-12">
            <label for="DESCRIPTIONARTICLE" class="form-label">Description de l'article</label>
            <textarea class="form-control" name="DESCRIPTIONARTICLE" style="height: 150px"></textarea>
        </div>
        <label for="MINIAARTICLE" class="form-label">Miniature de l'article</label>
        <input type="file" id="addFile" accept="image/png, image/jpeg, image/jpg" name="MINIAARTICLE">
        <div class="col-12">
            <input type="submit" class="submitButton" value="Envoyer">
        </div>
    </form>
</body>



<?= $this->endSection() ?>