<?= $this->extend('layoutPrimaStem') ?>
<?= $this->section('contenu') ?>

<title>Blog - PrimaStem</title>
<?= var_dump($listeArticles) ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h1 class="headerText" id="divBlog">Autres liens utiles</h1>
            <a class="btn btn-primary" href="<?= url_to('backofficeIndex') ?>">Retourner au backoffice</a>
            <a class="btn btn-primary" href="<?= url_to('ajoutArticle') ?>">Ajouter un article</a>
            <a class="btn btn-primary" href="<?= url_to('modifPartenaireIndex') ?>">Afficher la liste des partenaires</a>

        </div>
        <div class="col-md-6">
            <h1 class="headerText" id="divBlog">Blog - Articles</h1>
            <?php
            foreach ($listeArticles as $article) {
                // var_dump($article);
                echo '<div>
                            <img class="imgArt" src="../upload/' . $article['MINIAARTICLE'] . '">
                        </div>';
                echo '<div class="divBlogTest">
                        <h1 class="headerText">' . $article['TITRE'] . '<h1>
                        <p class="fs-6 descArt">' . $article['DESCRIPTIONARTICLE'] . '</p>
                        <a class="submitButton" href="' . url_to('modifArticle', $article['IDARTICLE']) . '">Modifier</a>
                        <form method="post" class="form" action="' . url_to('supprArticle', $article['IDARTICLE']) . '">
                            <input type="hidden" name="IDARTICLE" value="' . $article['IDARTICLE'] . '">
                            <input type="submit" class="submitButton" value="Supprimer">
                        </form>
                    </div>';
            }

            ?>
        </div>
    </div>
</div>
<?= $this->endSection() ?>