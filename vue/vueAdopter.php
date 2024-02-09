<?php
$nomSite = NOMSITE; // Intégration du nom du site dans le HTML title
$menu = MENU; // Intégration des pages du sites dans le header


// Affichage des animaux dans la section adopter
$listeImages = "";

foreach ($tableAnimaux as $ligne) {
    $listeImages .= "
    <div class='slide'>
        <div class='slider-text-centre'>
            <img src=" . $ligne['image'] . " alt=''>
            <h2>" . $ligne['nom'] . "</h2>
        <a href=". 'index.php?action=animal' . '&id=' . $ligne['idAnimal'] ."><button class='slide-btn'>Adopter</button></a>
        </div>
    </div>
    ";
}


require "gabarit.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La SPA - Adopter</title>
</head>

<body>
    <section style="height: fit-content; display: flex; flex-direction: column; justify-content: center; align-items: center; margin-bottom: 5rem;">
        <div class="adopter-container">
            <div>
                <h1>Tous les animaux <span class="span-cercle">à adopter</span></h1>

                <p class="paragraphe_un">Adoptez selon vos critères! Offrez un foyer à une boule de poils adorable.
                    Explorez nos actions, impliquez-vous grâce au bénévolat!</p>
            </div>

            <div class="adopter-banner">
                <div class="banner">
                    <p>Soutenez-nous grâce aux dons. Chaque don aide directement un annimal ! Chamallow a retrouvé sa
                        famille grâce à ça !</p>
                </div>
            </div>
        </div>


        <section class="adopter-flex">
            <div class="adopter-hero">
                <div class="adopter-carousel" id="imageCarousel">
                    <?= $listeImages ?>
                </div>
            </div>
        </section>
    </section>

    <?php
    include "gabarit_footer.php";
    ?>
</body>

</html>