<?= $this->extend('layoutPrimaStem') ?>
<?= $this->section('contenu') ?>

<title>Nous Contacter - PrimaStem</title>

<body>

    <h1 class="fw-bold headerText">Nous Contacter</h1>
    <p class="headerText">
        Nous souhaitons écouter vos demandes et vos souhaits.
        Remplissez le formulaire ci-dessous et nous vous répondrons au plus tôt possible !
    </p>

    <form method="post" action="" class="row g-3 mx-auto">
        <div class="col-12">
            <label for="inputRaison" class="form-label">Raison de votre demande ?</label>
            <input type="text" class="form-control" name="inputRaison">
        </div>
        <div class="col-md-6">
            <label for="inputIdentification" class="form-label">Nom et Prénom</label>
            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control" name="NOM" placeholder="Votre Nom...">
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="PRENOM" placeholder="Votre Prénom...">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <label for="inputEmail" class="form-label">Adresse Mail</label>
            <input type="email" class="form-control" name="ADRESSEMAIL">
        </div>
        <div class="col-12">
            <label for="inputMessage" class="form-label">Votre Message</label>
            <textarea class="form-control" name="inputMessage" style="height: 150px"></textarea>
        </div>
        <label for="addFiles" class="form-label">Fichiers Joints</label>
        <p class="fs-6">Max : 5 Fichiers et 20MB par fichier</p>
        <input type="file" id="addFile">
        <div class="col-12">
            <input type="submit" class="submitButton" value="Envoyer">
        </div>
    </form>
</body>



<?= $this->endSection() ?>