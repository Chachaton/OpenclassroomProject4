<?php

//Auto-chargement de classes
function chargerClasse($classe){
    require 'model/' . $classe . '.php';
}
spl_autoload_register('chargerClasse');

//Chargement de la Bdd
require 'model/Connexion.php';
$connexion = new Connexion();
$connect = $connexion->connect();

//Twig
require_once 'vendor/autoload.php';
require 'libraries/Twig.php';
$templateTwig = new Twig();
$twig = $templateTwig->run();


// on ouvre les controllers
require 'controller/frontend.php'; 
require 'controller/backend.php';

//instancie les class
$frontend = new frontendController($connect, $twig);
$backend = new Backend;


//conditions pour lancement des controllers  
try{ 
    if (isset($_GET['action'])) {

        // FRONTEND
        if ($_GET['action'] == 'home') {
            $frontend->home();
        }

        elseif ($_GET['action'] == 'biographie') {
            $frontend->biographie();
        }

        elseif ($_GET['action'] == 'billetSimple') {
            $frontend->billetSimple();
        }

        elseif ($_GET['action'] == 'contact') {
            $frontend->contact();
        }

        elseif ($_GET['action'] == 'logIn') {
            $frontend->logIn();
        }

        // BACKEND
        elseif ($_GET['action'] == 'dashboard') {
            dashboard();
        }

        elseif ($_GET['action'] == 'changeArticle') {
            changeArticle();
        }

        elseif ($_GET['action'] == 'manage') {
            manage();
        }

        elseif ($_GET['action'] == 'newArticle') {
            newArticle();
        }
    } 
}

// si il n'y a pas d'action, on affiche la page d'accueil
catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}