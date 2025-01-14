<!DOCTYPE html>
<html lang="en">


<!-- HEADER: MENU + HEROE SECTION -->
<header>
    <meta charset="UTF-8">
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/form.css">
    
    <div class="menu">
        <ul>
            <li class="logo">
                <img class="img" src="/image/logo.png" />
            </li>
            <li class="menu-toggle">
                <button id="menuToggle">&#9776;</button>
            </li>
            <li class="menu-item hidden"><a href="<?= url_to('primastem') ?>">Accueil</a></li>
            <li class="menu-item hidden"><a href="">Nos Partenaires</a></li>
            <li class="menu-item hidden"><a href="">Blog</a></li>
            <li class="menu-item hidden"><a href="">Nous Contacter</a></li>
            <li class="menu-item hidden"><a href="<?= url_to('playstem') ?>">PlayStem</a></li>
            
        </ul>
    </div>
    
</header>

<body>
    <?= $this->renderSection('contenu') ?>

    
</body>
<footer>
        <div class="copyrights">

        <p>&copy; <?= date('Y') ?> CodeIgniter Foundation. CodeIgniter is open source project released under the MIT
            open source licence.</p>

        </div>
</footer>