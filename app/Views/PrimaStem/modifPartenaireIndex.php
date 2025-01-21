<?= $this->extend('layoutPrimaStem') ?>
<?= $this->section('contenu') ?>

<title>Blog - PrimaStem</title>
<?= var_dump($listePartenaires) ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h1 class="headerText" id="divBlog">Autres liens utiles</h1>
            <a class="btn btn-primary" href="<?= url_to('backofficeIndex') ?>">Retourner au backoffice</a>
            <a class="btn btn-primary" href="<?= url_to('ajoutArticle') ?>">Ajouter un partenaire</a>
            <a class="btn btn-primary" href="<?= url_to('modifArticleIndex') ?>">Afficher la liste des articles</a>

        </div>
        <div class="col-md-6">
            <h1 class="headerText" id="divBlog">Partenaires</h1>
            <?php
            foreach ($listePartenaires as $partenaire) {
                // var_dump($article);
                echo '<div>
                            <img class="imgArt" src="../upload/partenaires/' . $partenaire['IMGPARTENAIRE'] . '">
                        </div>';
                echo '<div class="divBlogTest">
                        <h1 class="headerText">' . $partenaire['NOMPARTENAIRE'] . '<h1>
                        <p class="fs-6 descArt">' . $partenaire['AVISPARTENAIRE'] . '</p>
                        <a class="submitButton" href="' .  url_to('modifPartenaire', $partenaire['IDPARTENAIRE']) . '">Modifier</a>
                        <form method="post" class="form" action="' . url_to('supprPartenaire', $partenaire['IDPARTENAIRE']) . '">
                            <input type="hidden" name="IDPARTENAIRE" value="' . $partenaire['IDPARTENAIRE'] . '">
                            <input type="submit" class="submitButton" value="Supprimer">
                        </form>
                    </div>';
            }

            ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>