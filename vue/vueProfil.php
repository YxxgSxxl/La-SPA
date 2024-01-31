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
    <title>La SPA - Profil</title>
</head>

<body>
    <section class="profile-utilisateur">
        <h2>Coucou
            <span style="text-decoration: underline 2px black;">
                <?= $_SESSION['user']; ?>
            </span> ! Voici tes informations de profil !
        </h2>
        <p>
            <?= implode($_SESSION) ?>
        </p>

        <a href="./vue/deconnexion.php"><button>Se déconnecter</button></a>


    </section>

</body>

</html>