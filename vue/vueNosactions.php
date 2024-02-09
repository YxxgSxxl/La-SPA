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
    <title>La SPA - Nos Actions</title>
</head>

<body>
    <section class="nosactions">
        <h1 style="text-align: center; color: #003366;">Qui sommes nous ?</h1>
        <div class="na">
            <h2>Adoptions en Promotion</h2>
            <p>Découvrez nos animaux prêts à être adoptés avec des frais d'adoption réduits ce mois-ci. Une opportunité
                parfaite pour trouver un nouveau membre à ajouter à votre famille.</p>
        </div>

        <div class="na">
            <h2>Événements d'Adoption à Venir</h2>
            <p>Joignez-vous à nos journées portes ouvertes pour rencontrer vos futurs compagnons. Ces événements
                incluent
                des séances d'information sur le soin des animaux, des rencontres avec des animaux à adopter, et plus
                encore.</p>

        </div>

        <div class="na">
            <h2>Nouveaux Arrivants</h2>
            <p>Faites la connaissance de nos derniers sauvetages, prêts à trouver un foyer aimant. Chaque animal a sa
                propre
                histoire, et nous sommes impatients de vous aider à trouver votre match parfait.</p>

        </div>

        <div class="na">
            <h2>Programmes de Parrainage</h2>
            <p>Participez à nos programmes de parrainage pour soutenir nos animaux qui ne sont pas encore prêts à
                l'adoption. Votre soutien couvre les frais de nourriture, de soins vétérinaires, et d'hébergement.</p>
        </div>

    </section>



    <?php
    include "gabarit_footer.php";
    ?>
</body>

</html>