<?= $this->extend('layoutPrimaStem') ?>
<?= $this->section('contenu') ?>

<title>Blog - PrimaStem</title>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h1 class="headerText" id="divBlog">Blog - Articles</h1>
            <?php
            foreach ($listeArticles as $article) {
                // var_dump($article);

                echo '<div>
                            <img class="imgArt" src="'.base_url('files/upload/' . $article['MINIAARTICLE'] ).'">
                        </div>';
                echo '<div class="divBlogTest">
                        <h1 class="headerText">'. $article['TITRE'] .'<h1>
                        <p class="fs-6 descArt" id="description">'. $article['DESCRIPTIONARTICLE'] .'</p>
                        <a href="'. url_to('article', $article['IDARTICLE']) .'"><input type="button" class="submitButton" value="Lire Plus"></a>
                    </div>';
            }

            ?>
        </div> 
        <div class="col-md-6">
            <h1 class="headerText" id="divPostInsta">Notre Instagram !</h1>
            <h1>** WORK IN PROGRESS **</h1>
        </div>
    </div>
</div>
<script src="javascript/primastemMain.js"></script>
<?= $this->endSection() ?>