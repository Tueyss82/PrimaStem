<?= $this->extend('layoutPrimaStem') ?>
<?= $this->section('contenu') ?>

<title>Ajouter un partenaire - PrimaStem</title>

<body>

    <h1 class="fw-bold headerText">Ajout d'un partenaire</h1>

    <form method="post" action="" enctype="multipart/form-data" class="row g-3 mx-auto">
        <div class="col-12">
            <label for="NOMPARTENAIRE" class="form-label">Nom du partenaire</label>
            <input type="text" class="form-control" name="NOMPARTENAIRE">
        </div>
        <div class="col-12">
            <label for="AVISPARTENAIRE" class="form-label">Avis</label>
            <textarea class="form-control" name="AVISPARTENAIRE" style="height: 150px"></textarea>
        </div>
        <label for="IMGPARTENAIRE" class="form-label">Logo de l'entreprise / Photo du représentant</label>
        <input type="file" id="addFile" accept="image/png, image/jpeg, image/jpg" name="IMGPARTENAIRE">
        <div class="col-12">
            <input type="submit" class="submitButton" value="Envoyer">
        </div>
    </form>
</body>



<?= $this->endSection() ?>