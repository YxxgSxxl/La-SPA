<?php
$nomSite = NOMSITE; // Intégration du nom du site dans le HTML title
$menu = MENU; // Intégration des pages du sites dans le header

$erreur = "";
$message = "";
$message2 = "";
$nom = "";
$prenom = "";
$adresse = "";
$numtel = "";
$user = "";

//Récupération du reste de l'utilisateur
if (isset($_POST['submit'])) {
    $bdd = connexionBDD();
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $adresse = htmlspecialchars($_POST['adresse']);
    $numtel = htmlspecialchars($_POST['numtel']);
    $user = $_SESSION['user'];

    // $insertEverything = $bdd->prepare('INSERT INTO parrainage(user, nom, prenom, adressemail, adresse, numtel ,mdp) VALUES( "", ?, ?, "", ?, ?, "");');
    // $insertEverything = $bdd->prepare('UPDATE parrainage SET nom = ?, prenom = ?, adresse = ?, numtel = ? WHERE user = ?;');
    // $insertEverything->execute(array($nom, $prenom, $adresse, $numtel));

    // Insère les nouvelles informations dans la base de donnée
    $insertEverything = $bdd->prepare("UPDATE parrainage SET nom=?, prenom=?, adresse=?, numtel=? WHERE user=?");
    $insertEverything->execute(array($nom, $prenom, $adresse, $numtel, $user));

    $message = "<span style='color: green;'>Bravo, Tu as modifié tes informations !</span>";
    $message2 = "";

    // var_dump($_SESSION);
    // $recupEverything = $bdd->prepare('SELECT * FROM parrainage WHERE nom = ? AND prenom = ? AND adresse = ? AND numtel = ? AND user = ?');
    // $recupEverything->execute(array($nom, $prenom, $adresse, $numtel, $user));
    // var_dump($recupEverything);
} else {
    null;
}


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
        <div class="profile1-wrap">
            <h2>Coucou
                <span style="text-decoration: underline 2px black;">
                    <?= $_SESSION['user']; ?>
                </span> ! Voici tes informations de profil :
                <p>
                    <?php echo "<br><span style='color: green;'>Nom d'utilisateur :</span> " . $user . "<br><span style='color: green;'>nom : </span>" . $nom, " <span style='color: green;'>prenom : </span>" . $prenom, " <span style='color: green;'><br> adresse : </span>" . $adresse, " <span style='color: green;'> N° de Téléphone : </span>" . $numtel ?>
                </p>


                <!-- <?= var_dump($_SESSION) ?>  -->
            </h2>

            <a href="./vue/deconnexion.php"><button class="slide-btn">Se déconnecter</button></a>   
        </div>

        <div class="profile2-wrap">
            <form class="profil-form" method="POST" action="">
                <label for="nom">Nom :</label>
                <input type="text" name="nom" autocomplete="off" placeholder="Nom">
                <label for="prenom">prenom :</label>
                <input type="text" name="prenom" autocomplete="off" placeholder="Prenom">
                <label for="nom">Adresse :</label>
                <input type="text" name="adresse" autocomplete="off" placeholder="Adresse">
                <label for="nom">Numéro de Téléphone :</label>
                <input type="text" name="numtel" autocomplete="off" placeholder="Numéro de Téléphone">
                <input type="submit" name="submit" value="Mettre à Jour">
            </form>

            <div class="infoProfil">
                <?php echo $message;
                echo
                    $erreur ?>
            </div>

        </div>
    </section>

</body>

</html>