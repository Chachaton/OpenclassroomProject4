<?php 

class Connexion {

	protected $db;
    public function connect() {
    	try {
    		$db = new PDO('mysql:host=localhost;dbname=JeanForteroche;charset=utf8', 'root', 'root');
    	} 
    	catch (Exception $e) {
    		die('Erreur : ' . $e->getMessage());
    	}

    	return $db;
    }

}