<?php
$nomSite = NOMSITE; // Intégration du nom du site dans le HTML title
$menu = MENU; // Intégration des pages du sites dans le header

require "gabarit.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La SPA - à propos</title>
</head>

<body>


    <section class="apropos">
        <h1 style="text-align: center;">Qui sommes nous ?</h1>
        <h2>Notre Mission</h2>
        <p>Chez LaSpa, notre mission est de créer une escapade apaisante pour le corps, l'esprit et l'âme...</p>

        <h2>L'Atmosphère Aérée</h2>
        <p>Notre spa est conçu pour être un havre de paix, un endroit où la tranquillité règne en maître...</p>

        <h2>Nos Services</h2>
        <p>Chez LaSpa, nous offrons une gamme complète de services de spa conçus pour répondre à vos besoins
            individuels...</p>

        <h2>Engagement envers la Qualité</h2>
        <p>Nous nous engageons à maintenir les normes les plus élevées en matière de qualité et de professionnalisme...
        </p>
    </section>



    <?php
    include "gabarit_footer.php";
    ?>
</body>

</html>