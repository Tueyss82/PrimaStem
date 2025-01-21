<?= $this->extend('layoutPrimaStem') ?>
<?= $this->section('contenu') ?>

<title>Modification du partenaire - PrimaStem</title>

<body>

    <h1 class="fw-bold headerText">Modification du partenaire</h1>

    <form method="post" action="<?= url_to('updatePartenaire') ?>" enctype="multipart/form-data" class="row g-3 mx-auto">
        <input id="IDARTICLE" name="IDARTICLE" type="hidden" value="<?= $partenaireData['IDPARTENAIRE'] ?>" />
        <div class="col-12">
            <label for="NOMPARTENAIRE" class="form-label">Nom du partenaire</label>
            <input type="text" class="form-control" name="NOMPARTENAIRE" value="<?= $partenaireData['NOMPARTENAIRE'] ?>">
        </div>
        <div class="col-12">
            <label for="AVISPARTENAIRE" class="form-label">Avis</label>
            <textarea class="form-control" name="AVISPARTENAIRE" style="height: 150px"><?= $partenaireData['AVISPARTENAIRE'] ?></textarea>
        </div>
        <label for="IMGPARTENAIRE" class="form-label">Logo de l'entreprise / Photo du représentant</label>
        <input type="file" id="addFile" accept="image/png, image/jpeg, image/jpg" name="IMGPARTENAIRE">
        <div class="col-12">
            <input type="submit" class="submitButton" value="Envoyer">
        </div>
    </form>
</body>



<?= $this->endSection() ?>