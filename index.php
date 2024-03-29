<?php
require "config/config.php";
require "controller/controller.php";



if (isset($_GET["action"])) {
    try {
        if ($_GET["action"] == "accueil") {
            accueil();
        }
        if ($_GET["action"] == "apropos") {
            apropos();
        }
        if ($_GET["action"] == "adopter") {
            adopter();
        }
        if ($_GET["action"] == "nosactions") {
            nosactions();
        }
        if ($_GET["action"] == "contact") {
            contact();
        }
        if ($_GET["action"] == "conditions") {
            conditions();
        }
        if ($_GET["action"] == "login") {
            login();
        }
        if ($_GET["action"] == "register") {
            register();
        }
        if ($_GET["action"] == "animal" &&isset($_GET['id'])) {
                pageAnimal($_GET['id']);
        }
    } catch (Exception $e) {
        erreur($e->getMessage());
    }

} else {
    accueil();
}
