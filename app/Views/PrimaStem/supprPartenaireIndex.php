<?= $this->extend('layoutPrimaStem') ?>
<?= $this->section('contenu') ?>

<?php

use \CodeIgniter\View\Table;

$table = new table();

?>

<title>Partenaires - PrimaStem</title>
<div class="container mt-5">
    <h1 class="headerText" id="divBlog">Autres liens utiles</h1>
    <div class="headerText">
        <a class="btn btn-primary" href="<?= url_to('backofficeIndex') ?>">Retourner au backoffice</a>
        <a class="btn btn-primary" href="<?= url_to('ajoutPartenaire') ?>">Ajouter un partenaire</a>
        <a class="btn btn-primary" href="<?= url_to('modifArticleIndex') ?>">Afficher la liste des articles</a>
    </div>
    <section class="sectionTable">
        <h1 class="headerText" id="divBlog">Partenaires</h1>

        <?php
        $table->setHeading('Nom du Partenaire', 'Avis du Partenaire', 'Image', 'Supprimer');

        foreach ($listePartenaires as $partenaire) {
            // var_dump($partenaire);
            $table->addRow(
                $partenaire['NOMPARTENAIRE'],
                $partenaire['AVISPARTENAIRE'],
                '<img class="imgModif" src="'.base_url('files/upload/' . $partenaire['IMGPARTENAIRE'] ). '">',
                '<form method="post" class="form" action="' . url_to('supprPartenaire', $partenaire['IDPARTENAIRE']) . '">
                    <input type="hidden" name="IDPARTENAIRE" value="' . $partenaire['IDPARTENAIRE'] . '">
                    <input type="submit" class="submitButton" value="Supprimer">
                </form>',
            );
        }
        echo $table->generate();

        ?>
    </section>

</div>
<?= $this->endSection() ?>
