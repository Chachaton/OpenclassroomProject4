<?php
//ouvrir les contrôleurs
require('controller/frontend.php');
require('controller/backend.php');

//conditons puis lancement de la méthode du controller choisi
try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'accueil') {
            home();
        }
        elseif ($_GET['action'] == 'auteur') {
        	author();
    	}
        elseif ($_GET['action'] == 'roman') {
        	chapters();
    	}
        elseif ($_GET['action'] == 'contact') {
        	contact();
    	}
        elseif ($_GET['action'] == 'connexion') {
        	logIn();
    	}
        elseif ($_GET['action'] == 'changeArticle') {
        	changeArticle();
    	}
        elseif ($_GET['action'] == 'dashboard') {
        	dashboard();
    	}
        elseif ($_GET['action'] == 'manageReviews') {
        	manageReviews();
    	}
        elseif ($_GET['action'] == 'newArticle') {
        	newArticle();
    	}
    }
}

catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
