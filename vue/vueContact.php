<?php
$nomSite = NOMSITE; // Intégration du nom du site dans le HTML title
$menu = MENU; // Intégration des pages du sites dans le header


$message = "";

if (isset($_POST['submit'])) {
    // INIT
    $nomprenom = $_POST['name'];
    $mail = $_POST['email'];
    $msg = $_POST['message'];

    // Envoi des données dans la base de donnée
    $bdd = connexionBDD();
    $envoiContact = $bdd->prepare('INSERT INTO contact(nomprenom, mail, content) VALUES(?, ?, ?)');
    $envoiContact->execute(array($nomprenom, $mail, $msg));

    // Affichage du résultat
    $message = "<span style='color: green;'>Ton message a été envoyé !</span>";
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
    <title>La SPA - Contact</title>
</head>
<style>
    .container {
        background-color: rgba(255, 255, 255, 0.9);
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        max-width: 600px;
        width: 100%;
        margin-right: auto;
        margin-left: auto;
        margin-bottom: 100px;
        align-items: center;
        text-align: center;
    }

    header {
        margin: 0 0 2rem 0;
    }

    h1 {
        color: #333;
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
        color: #555;
    }

    input,
    textarea {
        width: calc(100% - 20px);
        padding: 10px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        background-color: #f5f5f5;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    input:focus,
    textarea:focus {
        outline: none;
        background-color: #e0e0e0;
    }

    button {
        background-color: #B5BAE0;
        color: white;
        padding: 12px 30px;
        font-size: 18px;
        border: none;
        border-radius: 25px;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    button:hover {
        background-color: #BFBAE9;
    }

    .form-group {
        margin-bottom: 25px;
        position: relative;
    }
</style>

<body>
    <div class="container">
        <h1>Contactez nous :</h1>
        <form method="post">
            <div class="form-group">
                <label for="name">Nom / Prenom: <span style="color: red;">*</span></label>
                <input type="text" id="name" name="name" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="email">Email: <span style="color: red;">*</span></label>
                <input type="email" id="email" name="email" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="message">Message: <span style="color: red;">*</span></label>
                <textarea id="message" name="message" autocomplete="off" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit" name="submit">Submit</button>
            </div>
            <div class="form-group">
                <?php echo $message ?>
            </div>
    </div>


    <?php
    include "gabarit_footer.php";
    ?>
</body>

</html>