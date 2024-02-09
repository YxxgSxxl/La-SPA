<?php
$nomSite = NOMSITE; // Intégration du nom du site dans le HTML title
$menu = MENU; // Intégration des pages du sites dans le header


// Affichage des animaux dans le carousel
$listeImages = "";

foreach ($tableAnimaux as $ligne) {
    $listeImages .= "
    <div class='slide " . $ligne['type'] . " '>
        <div class=' slider-text-centre' >
            <img style='border-radius: 45px;' src=" . $ligne['image'] . " alt=''>
            <h2>" . $ligne['nom'] . "</h2>
        <a href=" . 'index.php?action=animal' . '&id=' . $ligne['idAnimal'] . "><button class='slide-btn'>Adopter</button></a>
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
    <title>La SPA - Accueil</title>
</head>

<body>
    <section style="height: fit-content;">
        <div class="p1-container">
            <div class="p1-gauche">
                <h1>Offrez <span class="span-cercle">un cocon</span> à une adorable boule de poils.</h1>

                <p class="paragraphe-1">Adoptez selon vos critères! Offrez un foyer à une boule de poils adorable.
                    Explorez nos actions,
                    impliquez-vous grâce au bénévolat!</p>

                <a href="index.php?action=adopter" class="p1-button"><button>Trouver un compagnion <svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h13M12 5l7 7-7 7" />
                        </svg></button></a>
            </div>

            <div class="p1-droite">
                <img src="./img/p1-chien.png" alt="Chien joyeux assis en première page">
            </div>

            <div class="p1-banner">
                <div class="banner">
                    <p>Soutenez-nous grâce aux dons. Chaque don aide directement un annimal ! Chamallow a retrouvé sa
                        famille grâce à ça !</p>
                </div>
            </div>
        </div>
    </section>

    <section style="height: fit-content;">
        <div class="p2-container">
            <div class="p2-gauche">
                <a href="index.php?action=adopter">
                    <div class="img-gauche1">
                        <p>Trouver votre compagnon</p>
                        <img src="./img/p2-gauche1.png" alt="Trouver votre compagnion dame qui est sereine">
                    </div>
                </a>
            </div>

            <div class="p2-droite">
                <a href="https://soutenir.la-spa.fr/b/mon-don">
                    <div class="img-droite1">
                        <p>Nous soutenir</p>
                        <img src="./img/p2-droite1.png" alt="Boite de donation">
                    </div>
                </a>
                <a href="index.php?action=nosactions">
                    <div class="img-droite2">
                        <p>Apprendre à nous connaitre</p>
                        <img src="./img/p2-droite2.png" alt="6 mains entre-croisées">
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section style="height: fit-content;">
        <div class="p3-container">
            <h2 class="p3-title" style="font-size: 2.5rem;">Adopter selon <span class="span-underline">votre
                    critères</span></h2>
            <div class="filtre-complet">
                <div class="slider-hero">
                    <h3 style="margin-bottom: 2rem; text-decoration: underline 1px">Filtres</h3>
                    <form class="filtreoption">
                        <select class="select" name="select">
                            <option value="tout" onclick="filtre('tout')">Tout</option>
                            <option value="chien" onclick="filtre('chien')">Chien</option>
                            <option value="chat" onclick="filtre('chat')">Chat</option>
                            <option value="autre" onclick="filtre('autre')">Autre</option>
                        </select>
                    </form>
                </div>
                <div class="slider-center">
                    <div class="carousel" id="imageCarousel">
                        <?= $listeImages ?>
                    </div>
                </div>
            </div>

        </div>
        <div class="carousel-buttons">
            <div>
                <button class="carousel-button prev" onclick="prevSlide()">←</button>

                <button class="carousel-button next" onclick="nextSlide()">→</button>
            </div>

            <div class="carousel-indicators" id="indicatorContainer">
                <!-- Indicators dynamically added here -->
            </div>
        </div>
        </div>
    </section>

    <section style="height: fit-content;">
        <h2 id="titreChiffres"><span id="spaContour">La SPA :</span> Soins, Adoptions et Engagements </h2>

        <div class="chiffres-wrapper">
            <div class="p4-chiffres">
                <div class="p4-boxChiffres">
                    <div class="p4-borderChiffres"> 47 952 </div>
                    <p> Animaux soignés </p>
                </div>

                <div class="p4-boxChiffres">
                    <div class="p4-borderChiffres"> 43 274 </div>
                    <p> Animaux adoptés </p>
                </div>

                <div class="p4-boxChiffres">
                    <div class="p4-borderChiffres"> 4 289 </div>
                    <p> Bénévoles engagés </p>
                </div>

                <div class="p4-boxChiffres">
                    <div class="p4-borderChiffres"> 261 </div>
                    <p> Campagnes de <br>sensibilisation menées </p>
                </div>
            </div>

            <section class="benevoles">
                <div class="image-Benevoles">
                    <div> <img id="imgbenvl" src="./img/benevole.webp" alt="images des bénévoles"> </div>
                </div>

                <div class="texte-Benevoles">
                    <h2> Bénévoles SPA : des héros <br> anonymes pour nos boules de poils! </h2>
                    <p> À la SPA, nos bénévoles sont le cœur battant de notre engagement. Leur dévouement sans faille
                        crée
                        des liens inestimables avec nos compagnons à quatre pattes, offrant amour, soins et espoir à
                        chaque
                        instant.
                        Leur présence est une source inépuisable de soutien et de tendresse pour chaque animal
                        recueilli,
                        les aidant à retrouver confiance et à trouver un foyer aimant.
                    </p>
                    <a class="btn-benevoles" href="index.php?action=contact"><button>Je rejoins l’équipe de
                            bénévoles</button></a>
                </div>
            </section>
        </div>
    </section>

    <section class="p5" style="height: fit-content;">
        
    </section>

    <noscript>Please, activate javascript to make the website work perfectly.</noscript>

    <?php
    include "gabarit_footer.php";
    ?>


</body>

</html>