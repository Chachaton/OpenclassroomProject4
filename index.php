<?php
// routeur du projet
session_start();

// on ouvre les controllers
require 'controller/frontend.php';
require 'controller/backend.php';

// conditions pour lancement des controllers  
try{ 
    if (isset($_GET['action'])) {

        // FRONTEND
        if ($_GET['action'] == 'home') {
            home();
        }

        elseif ($_GET['action'] == 'author') {
            author();
        }

        elseif ($_GET['action'] == 'chapters') {
            chapters();
        }

        elseif ($_GET['action'] == 'contact') {
            contact();
        }

        elseif ($_GET['action'] == 'logIn') {
            logIn();
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
