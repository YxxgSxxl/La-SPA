<?php
require "./model/model.php";


// Fonction qui renvoie à la page d'accueil
function accueil() {
    require "vue/vueAccueil.php";
}

// Fonction qui renvoie à la page d'à propos
function apropos() {
    require "vue/vueApropos.php";
}

// Fonction qui renvoie à la page d'adoption
function adopter() {
    require "vue/vueAdopter.php";
}

// Fonction qui renvoie à la page d'actions réalisées par La SPA
function nosactions() {
    require "vue/vueNosactions.php";
}

// Fonction qui renvoie à la page de contact
function contact() {
    require "vue/vueContact.php";
}

// Fonction qui renvoie à la page des conditions d'utilisation
function conditions() {
    require "vue/vueConditions.php";
}

// Fonction qui renvoie à la page de connection utilisateur
function login() {
    require "vue/vueLogin.php";
}

// Fonction qui renvoie à la page d'inscription
function register() {
    require "vue/vueRegister.php";
}

// Fonction qui renvoie à la page de profile utilisateur
function profil() {
    require "vue/vueProfil.php";
}

// Fonction qui renvoie à la page d'erreurs
function erreur($message) {
    require "vue/vueErreur.php";
}