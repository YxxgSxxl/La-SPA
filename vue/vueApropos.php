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
    <h1 style="text-align: center;">Qui sommes nous ?</h1>

    <p></p>


    <?php
    include "gabarit_footer.php";
    ?>
</body>

</html>