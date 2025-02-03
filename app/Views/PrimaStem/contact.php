<?= $this->extend('layoutPrimaStem') ?>
<?= $this->section('contenu') ?>

<title>Nous Contacter - PrimaStem</title>

<body>

    <h1 class="fw-bold headerText">Nous Contacter</h1>
    <p class="headerText">
        Nous souhaitons écouter vos demandes et vos souhaits.
        Remplissez le formulaire ci-dessous et nous vous répondrons au plus tôt possible !
    </p>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 50vh;">
        <div class="p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
            <form method="post" action="" class="row g-3 mx-auto">
                <div class="col-12">
                    <label for="inputRaison" class="form-label">Raison de votre demande ?</label>
                    <select class="form-control" aria-label="Default select example">
                        <option selected>Choisissez une raison...</option>
                        <option value="1">Demande de Partenariat</option>
                        <option value="2">Aide avec le robot</option>
                        <option value="3">Suggestions</option>
                        <option value="4">Pour plus tard...</option>
                        <option value="5">Pour plus tard...</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputIdentification" class="form-label">Nom et Prénom</label>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="inputName" name="NOM" placeholder="Votre Nom..." required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="inputPrenom" name="PRENOM" placeholder="Votre Prénom..." required>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="inputEmail" class="form-label">Adresse Mail</label>
                    <input type="email" class="form-control" id="inputMail" name="ADRESSEMAIL" required>
                </div>
                <div class="col-12">
                    <label for="inputMessage" class="form-label">Votre Message</label>
                    <textarea class="form-control" name="inputMessage" style="height: 150px"></textarea>
                </div>
                <div class="col-12">
                    <input type="submit" class="submitButton" id="submitContactButton" value="Envoyer">
                </div>
            </form>
        </div>
    </div>
</body>

<script src="javascript/primastemContact.js"></script>

<?= $this->endSection() ?>