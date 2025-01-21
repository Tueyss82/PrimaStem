<?= $this->extend('layoutPrimaStem') ?>
<?= $this->section('contenu') ?>

<title>Backoffice - PrimaStem</title>

<div class="container-xxl">
    <h1 class="fw-bold headerText">Bienvenue !</h1>
    <div class="row">
        <div class="col-md-6 text-center">
            <h1 class="fw-bold headerText">Blog</h1>
            <a class="btn btn-primary" href="<?= url_to('ajoutArticle') ?>">Ajouter un article</a>
            <a class="btn btn-primary" href="<?= url_to('modifArticleIndex') ?>">Modifier un article</a>
            <a class="btn btn-danger" href="<?= url_to('supprArticle') ?>">Supprimer un article</a>
        </div>
        <div class="col-md-6 text-center">
            <h1 class="fw-bold headerText">Partenaires</h1>
            <a class="btn btn-primary" href="<?= url_to('ajoutPartenaire') ?>">Ajouter un partenaire</a>
            <a class="btn btn-primary" href="<?= url_to('modifPartenaireIndex') ?>">Modifier un partenaire</a>
            <a class="btn btn-danger" href="<?= url_to('supprPartenaire') ?>">Supprimer un partenaire</a>
        </div>
    </div>
</div>

<?= $this->endSection() ?>