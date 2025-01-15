<!DOCTYPE html>
<html lang="en">


<!-- HEADER: MENU + HEROE SECTION -->
<header>
    <meta charset="UTF-8">
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand"><img src="image/logo.png"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= url_to('primastem') ?>">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= url_to('partenaires') ?>">Nos Partenaires</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= url_to('blog') ?>">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= url_to('contact') ?>">Nous Contacter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= url_to('playstem') ?>">PlayStem</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

</header>

<body>
    <?= $this->renderSection('contenu') ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
<footer>
    <div class="footer">

        <p class="footerText">&copy; <?= date('Y') ?> PrimaSTEM & co.</p>

    </div>
</footer>