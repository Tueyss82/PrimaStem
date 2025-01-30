<?= $this->extend('layoutPrimaStem') ?>
<?= $this->section('contenu') ?>

<?php

use \CodeIgniter\View\Table;

$table = new table();

?>

<title>Blog - PrimaStem</title>
<div class="container mt-5">
    <h1 class="headerText" id="divBlog">Autres liens utiles</h1>
    <div class="headerText">
        <a class="btn btn-primary" href="<?= url_to('backofficeIndex') ?>">Retourner au backoffice</a>
        <a class="btn btn-primary" href="<?= url_to('ajoutArticle') ?>">Ajouter un article</a>
        <a class="btn btn-primary" href="<?= url_to('modifPartenaireIndex') ?>">Afficher la liste des partenaires</a>
    </div>

    <section class="sectionTable">
        <h1 class="headerText" id="divBlog">Blog - Articles</h1>
        <form method="get">
            <label for="searchTitleArticle">Rechercher un titre</label>
            <input type="text" class="form-control" name="searchTitleArticle">
        </form>
        <?php
        $table->setHeading('Titre de l\'article', 'Description de l\'article', 'Image', 'Modifier');
        foreach ($listeArticles as $article) {
            // var_dump($article);
            $table->addRow(
                $article['TITRE'],
                $article['DESCRIPTIONARTICLE'],
                '<img class="imgModif" src="' . base_url('files/upload/' . $article['MINIAARTICLE']) . '">',
                '<form method="post" class="form" action="' . url_to('supprArticle', $article['IDARTICLE']) . '">
            <input type="hidden" name="IDARTICLE" value="' . $article['IDARTICLE'] . '">
                            <input type="submit" class="submitButton" value="Supprimer">
                            </form>',
            );
        }
        echo $table->generate();

        ?>
    </section>
</div>
<script src="../javascript/primastemMain.js"></script>

<?= $this->endSection() ?>