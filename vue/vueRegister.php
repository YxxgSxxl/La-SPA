<?php
session_start();

$nomSite = NOMSITE; // Intégration du nom du site dans le HTML title
$menu = MENU; // Intégration des pages du sites dans le header

$message = "";
$erreur = "";

if (isset($_POST['submit'])) {
    if (!empty($_POST['user'] and !empty($_POST['pass']) and !empty($_POST['mail']))) {
        if (!empty($_POST['checkbox'])) {
            $bdd = connexionBDD();
            $user = htmlspecialchars($_POST['user']);
            $mail = htmlspecialchars($_POST['mail']);
            $pass = sha1($_POST['pass']);
            $insertUser = $bdd->prepare('INSERT INTO parrainage(user, nom, prenom, adressemail, adresse, numtel ,mdp) VALUES( ?, "", "", ?, "", "", ?);');
            $insertUser->execute(array($user, $mail, $pass));

            // Récupère et créer les cookies de session de l'utilisateur qui a créer son compte
            $recupUser = $bdd->prepare('SELECT * FROM parrainage WHERE user = ? AND adressemail = ? AND mdp = ?');
            $recupUser->execute(array($user, $mail, $pass));
            if ($recupUser->rowCount() > 0) {
                // $_SESSION['user'] = $user;
                $_SESSION['user'] = $recupUser->fetch()['user'];
                $_SESSION['mail'] = $mail;
                $_SESSION['pass'] = $pass;
                // $_SESSION['idParrainage'] = $recupUser->fetch()['idParrainage'];
            }
            // echo $_SESSION['sid']; // <-- Debugging
            // echo $_SESSION['user']; // <-- Debugging

            $message = "<span style='color: green;'>Bravo, Tu es maintenant inscrit sur La SPA !</span>";
        } else if (empty($_POST['checkbox'])) {
            $erreur = "<div class='infoRegister'>Pour finaliser votre inscription, veuillez accepter les conditions générales (<span style='color: red;'>*</span> = Obligatoire)</div>";
        }
    } else {
        $erreur = "<div class='infoRegister'>Veuillez compléter votre inscription (<span style='color: red;'>*</span> = Obligatoire)</div>";
    }
}

require "gabarit.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La SPA - Inscription 🐶</title>
    <link rel="stylesheet" href="./stylesheet/register-login.css">
</head>

<body>
    <main>
        <h1>Créez votre compte</h1>

        <div class="form-box">
            <div class="form-container">
                <form class="form" method="POST" action="">
                    <label for="user">Nom d'utilisateur<span style="color: red;">*</span> :</label>
                    <input class="input" type="text" name="user" autocomplete="off" placeholder="Nom d'utilisateur">

                    <br>
                    <label for="mail">Adresse mail<span style="color: red;">*</span> :</label>
                    <input class="input" type="email" name="mail" autocomplete="off" placeholder="Adresse mail">
                    <br>
                    <label for="pass">Mot de passe<span style="color: red;">*</span> :</label>
                    <input class="input" type="password" name="pass" autocomplete="off" placeholder="Mot de passe">
                    <br><br>
                    <div class="r-checkbox">
                        <label for="checkbox"> J'ai lu et j'accepte les <a
                                href="index.php?action=conditions#conditionsutilisation">conditions d'utilisation</a>
                            ainsi
                            que
                            les
                            <a href="index.php?action=conditions#mentionslegales">mentions légales</a>.<span
                                style='color: red;'>*</span></label>
                        <input type="checkbox" name="checkbox">
                    </div>
                    <br><br>
                    <input class="submit-btn" type="submit" name="submit">
                    <div class="infoRegister">
                        <?php echo $message;
                        echo
                            $erreur ?>
                        <!-- <?= 'Identifiant de session : ' . session_id() ?> -->
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>