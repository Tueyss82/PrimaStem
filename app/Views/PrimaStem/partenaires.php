<?= $this->extend('layoutPrimaStem') ?>
<?= $this->section('contenu') ?>

<title>Nos Partenaires - PrimaStem</title>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div id="carouselExampleControls" class="carousel slide h-100" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../image/placeholder1.jpg">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="bgTextPartner">
                                <h5>Nom Partenaire</h5>
                                <p>Avis Court du Partenaire</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../image/placeholder2.jpg">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="bgTextPartner">
                                <h5>Nom Partenaire</h5>
                                <p>Avis Court du Partenaire</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../image/placeholder3.jpg">
                        <div class="carousel-caption d-none d-md-block">
                            <div class="bgTextPartner">
                                <h5>Ethane Zimmermann</h5>
                                <p>Avis Court du Partenaire</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Précédent</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Suivant</span>
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <h1 class="fw-bold">Nos Partenaires <br> nous soutiennent ! </h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa.</p>
            <p>Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor.</p>
            <button type="button" class="btn btn-primary">En savoir plus</button>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<?= $this->endSection() ?>