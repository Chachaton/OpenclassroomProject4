<?php

class frontendController{

	public function __construct($db, $twig)
	{
		$this->_db = $db;
        $this->twig = $twig;
	}

    public function home() // appel de la page accueil 
    {
         echo $this->twig->render('frontend/home.html.twig', [
            'title' => 'variables', 
        ]);

    }

    public function billetSimple() // appel de la page chapitres
    {
        $chapterModel = new ChaptersManager($this->_db);
        $list_chapitres = $chapterModel->getList();
        $numeros_chapitres = $chapterModel->getId($id);

         echo $this->twig->render('frontend/billetSimple.html.twig', [
            'chapitres' => $list_chapitres
            'numeros' => $numeros_chapitres
        ]);
    }


/*public function biographie() // appel de la page biographie
{
    require('view/frontend/biographie.php');
}

public function contact() // appel de la page contact
{
    require('view/frontend/contact.php');
}

public function login() // appel de la page d'identification 
{
    require('view/frontend/biographie.php');
}*/
}