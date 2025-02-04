<?= $this->extend('layoutPrimaStem') ?>
<?= $this->section('contenu') ?>

<title>Nos Partenaires - PrimaStem</title>

<div class="container mt-5">
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 50vh; padding-bottom: 50px;">
        <div class="p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
            <div class="row">
                <!-- Colonne gauche : Carrousel -->
                <div class="col-md-6" style="text-align: center;">
                    <div id="carouselExampleControls" class="carousel slide h-100" data-ride="carousel">
                        <div class="carousel-inner imgCarousel">
                            <!-- Premier partenaire -->
                            <?php if (!empty($firstPartenaire)) : ?>
                                <div class="carousel-item active"
                                    data-partner-name="<?php echo $firstPartenaire[0]['NOMPARTENAIRE']; ?>"
                                    data-partner-avis="<?php echo $firstPartenaire[0]['AVISPARTENAIRE']; ?>">
                                    <img class="imgCarousel" src="<?php echo base_url('files/upload/' . $firstPartenaire[0]['IMGPARTENAIRE']); ?>">
                                </div>
                            <?php else: ?>
                                <div class="carousel-item active">
                                    <h1 class="text-center">Nous n'avons aucun partenaire pour l'instant</h1>
                                </div>
                            <?php endif; ?>

                            <!-- Autres partenaires -->
                            <?php
                            if (!empty($listePartenaires)) {
                                foreach ($listePartenaires as $partenaire) {
                                    echo '<div class="carousel-item"
                               data-partner-name="' . $partenaire['NOMPARTENAIRE'] . '"
                               data-partner-avis="' . $partenaire['AVISPARTENAIRE'] . '">
                              <img class="imgCarousel" src="' . base_url('files/upload/' . $partenaire['IMGPARTENAIRE']) . '">
                            </div>';
                                }
                            }
                            ?>
                        </div>
                        <?php
                        // Afficher les contrôles uniquement s'il y a plusieurs partenaires
                        if (!empty($firstPartenaire) && (!empty($listePartenaires))) {
                            echo '<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Précédent</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Suivant</span>
                      </a>';
                        }
                        ?>
                    </div>
                </div>

                <!-- Colonne droite : Informations du partenaire -->
                <div class="col-md-6">
                    <h1 class="fw-bold">Nos Partenaires <br> nous soutiennent !</h1>

                    <!-- Conteneur pour afficher le nom et l'avis du partenaire actif -->
                    <div id="partnerInfo" class="mt-4">
                        <?php
                        // Affichage initial : on affiche les infos du partenaire du premier slide s'il existe
                        if (!empty($firstPartenaire)) {
                            echo '<h5>' . $firstPartenaire[0]['NOMPARTENAIRE'] . '</h5>';
                            echo '<p>' . $firstPartenaire[0]['AVISPARTENAIRE'] . '</p>';
                        }
                        ?>
                    </div>
                    <button type="button" class="btn btn-primary">En savoir plus</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('#carouselExampleControls').on('slid.bs.carousel', function(e) {
            // Récupérer l'élément actif du carousel
            let activeItem = $(this).find('.carousel-item.active');
            // Récupérer les données associées
            let partnerName = activeItem.data('partner-name');
            let partnerAvis = activeItem.data('partner-avis');
            // Mettre à jour le contenu de #partnerInfo
            if (partnerName && partnerAvis) {
                $('#partnerInfo').html('<h5>' + partnerName + '</h5><p>' + partnerAvis + '</p>');
            } else {
                $('#partnerInfo').html('');
            }
        });
    });
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<?= $this->endSection() ?>