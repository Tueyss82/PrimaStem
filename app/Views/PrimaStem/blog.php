<?= $this->extend('layoutPrimaStem') ?>
<?= $this->section('contenu') ?>

<title>Blog - PrimaStem</title>
<?= var_dump($listeArticles) ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h1 class="headerText" id="divBlog">Blog - Articles</h1>
            <?php
            foreach ($listeArticles as $article) {
                // var_dump($article);
                echo '<div>
                            <img class="imgIndex" src="../image/main.jpeg">
                        </div>';
                echo '<div>
                        <h1 class="headerText">'. $article['TITRE'] .'<h1>
                        <p class="fs-6">'. $article['DESCRIPTIONARTICLE'] .'</p>
                        <input type="submit" class="submitButton" value="Lire Plus">
                    </div>';
            }

            ?>
        </div>
        <div class="col-md-6">
            <h1 class="headerText" id="divPostInsta">Notre Instagram !</h1>
            <h1>** API DE MERDE ALLEZ VOUS FAIRE ENCULER FACEBOOK **</h1>
        </div>
    </div>
</div>

<?= $this->endSection() ?>