<?php
// Connexion à la BDD
function connexionBDD()
{
    try { // Connexion à la base de données
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
        $base = new PDO('mysql:host=' . DBHOST . ';dbname=' . DBNAME, DBUSER, DBPWD, $options);
    } catch (Exception $err) { // Erreur lors de la connexion à la BDD
        throw new Exception("Connexion à la BDD"); //.$err->getMessage());
    }
    return $base;
}

// Fonction de debug (inutile)
function displayAdmin()
{
    $bdd = connexionBDD();
    $reponse = $bdd->query("SELECT * FROM admin");
    $admin = $reponse->fetch(PDO::FETCH_ASSOC);
    return implode($admin); //implode() -> permet de convertir un array en string
}

// Fonction sélecteur de tout les animaux
function getAnimaux()
{
    $bdd = connexionBDD();
    $reponse = $bdd->query("SELECT * FROM animal;");
    $getAnimaux = $reponse->fetchAll(PDO::FETCH_ASSOC);
    return $getAnimaux;
}

// Fonction sélecteur de l'ID d'un animal choisi
function getAnimalID()
{
    $bdd = connexionBDD();
    $reponse = $bdd->query('SELECT idAnimal FROM animal WHERE idAnimal = $ligne["idAnimal"];');
    $getAnimalID = $reponse->fetch(PDO::FETCH_ASSOC);
    return $getAnimalID;
}

// Fonction sélecteur de toutes les informations d'un animal choisi
function getAnimal($idAnimal)
{
    $bdd = connexionBDD();
    $reponse = $bdd->query('SELECT * FROM animal WHERE idAnimal = ' . $idAnimal . ';');
    $getAnimal = $reponse->fetch(PDO::FETCH_ASSOC);
    return $getAnimal;
}



// query="SELECT * FROM ... (INNER JOIN)".$option1.$option2 || $option
// Initialisation des option avec test if (empty($race))
// 
// 
// 
// 
// 
// 

// if (empty($race)) {
//     $option1 = "(espace..) AND race = $race";
// } else {
//     $option1 = "";
// }