<?php
$nomSite = NOMSITE; // Intégration du nom du site dans le HTML title
$menu = MENU; // Intégration des pages du sites dans le header

// Récupération de toutes les informations de l'animal choisi sous formes de variables
$image = $tableAnimal['image'];
$type = $tableAnimal['type'];
$race = $tableAnimal['race'];
$nom = $tableAnimal['nom'];
$surnom = $tableAnimal['surnom'];
$age = $tableAnimal['age'];
$sexe = $tableAnimal['sexe'];
$couleur = $tableAnimal['couleur'];
$description = $tableAnimal['description'];
$caractere = $tableAnimal['caractere'];


require "gabarit.php";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <section class="animal-wrapper" style="height: fit-content;">
        <div class="animal-box">
            <div class="animal-imgstyle">
                <img class="animal-image" src="<?= $image ?>" alt="">
            </div>

            <h1 class="animal-titre">
                <?= $nom ?>
                <h2>
                    "<?= $surnom ?>"
                </h2>
            </h1>

            <div class="animal-midsplit">
                <div class="animal-leftinfo">
                    <span style="text-decoration: underline 2px green; font-size: 1.5rem; margin-bottom: 1rem;">Type
                        :</span>
                    <p>
                        <?php
                            echo "C'est un $type"; ?>
                    </p>
                    <span style="text-decoration: underline 2px green; font-size: 1.5rem; margin-bottom: 1rem;">Sexe
                        :</span>
                    <p>
                        <?php
                        if ($sexe == "fille") {
                            echo "C'est une $sexe.";
                        } else {
                            echo "C'est un $sexe.";
                        }
                        ?>
                    </p>
                    <span
                        style="text-decoration: underline 2px green; font-size: 1.5rem; margin-bottom: 1rem;">Description
                        :</span>
                    <p>
                        <?= $description ?>
                    </p>
                </div>


                <div class="animal-rightinfo">
                    <span style="text-decoration: underline 2px green; font-size: 1.5rem; margin-bottom: 1rem;">Race
                        :</span>
                    <p>
                        sa race est
                        <?= $race ?>.
                    </p>
                    <span style="text-decoration: underline 2px green; font-size: 1.5rem; margin-bottom: 1rem;">age
                        :</span>
                    <p>
                        <?php
                        if ($sexe == "fille") {
                            echo "elle a $age ans.";
                        } else {
                            echo "il a $age ans.";
                        }
                        ?>
                    </p>

                    <span
                        style="text-decoration: underline 2px green; font-size: 1.5rem; margin-bottom: 1rem;">Caractère
                        :</span>
                    <p>
                        <?php
                        if ($sexe == "fille") {
                            echo "elle est $caractere.";
                        } else {
                            echo "il est $caractere.";
                        }
                        ?>
                    </p>

                    <span class="span.animal"
                        style="text-decoration: underline 2px green; font-size: 1.5rem; margin-bottom: 1rem;">Couleur(s)
                        :</span>
                    <p>
                        <?php
                        if ($sexe == "fille") {
                            echo "elle est de couleur $couleur.";
                        } else {
                            echo "il est de couleur $couleur.";
                        }
                        ?>
                    </p>
                </div>

            </div>
        </div>

    </section>

    <?php
    include "gabarit_footer.php";
    ?>
</body>

</html>