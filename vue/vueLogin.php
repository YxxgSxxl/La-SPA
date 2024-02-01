<?php
session_start();

$nomSite = NOMSITE; // Intégration du nom du site dans le HTML title
$menu = MENU; // Intégration des pages du sites dans le header


$erreur = "";

if (isset($_SESSION['user'])) {
    profil();
    die(); // Empêche la suite de l'execution du script
} else {
    if (isset($_POST['submit'])) {
        if (!empty($_POST['user'] and !empty($_POST['pass']))) {
            $bdd = connexionBDD();
            $user = htmlspecialchars($_POST['user']);
            $pass = sha1($_POST['pass']);

            $recupUser = $bdd->prepare('SELECT * FROM parrainage WHERE user = ? AND mdp = ?');
            $recupUser->execute(array($user, $pass));

            if ($recupUser->rowCount() > 0) {
                $_SESSION['user'] = $recupUser->fetch()['user'];
                $_SESSION['user'] = $user;
                $_SESSION['pass'] = $pass;
                // $_SESSION['idParrainage'] = $recupUser->fetch()['idParrainage']; // <-- DebuggingV1
                // echo $_SESSION['sid']; // <-- DebuggingV2

                header("Location: index.php?ation=accueil");
                die(); // Empêche la suite de l'execution du script
            } else {
                $erreur = "Utilisateur introuvable";
            }
        } else {
            $erreur = "Veuillez Compléter les champs de connection (<span style='color: red;'>*</span> = Obligatoire).";
        }
    }
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
    <h1>Connectez vous</h1>
    <form method="POST" action="">
        <label for="user">Nom d'utilisateur<span style="color: red;">*</span> :</label>
        <input type="text" name="user" autocomplete="on" placeholder="Nom d'utilisateur">
        <br>
        <label for="pass">Mot de passe<span style="color: red;">*</span> :</label>
        <input type="password" name="pass" autocomplete="on" placeholder="Mot de passe">
        <br><br>
        <input type="submit" name="submit">
        <p>J'aimerais me <a href="index.php?action=register">créer un compte</a></p>
        <div class="infoLogin">
            <?= $erreur ?>
        </div>
    </form>

</body>

</html>