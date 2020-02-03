<?php

class Backend {

    public function home()
    {
        //$loader = new \Twig\Loader\FilesystemLoader('view/');
        //$twig = new \Twig\Environment($loader);

        $coucou = 'salut';

        echo $this->twig->render('frontend/home.html.twig', [
            'coucou' => $coucou,
            'test'  => 'Hello'
        ]);
    }
}

/*function dashboard(){ //appel de la page du tableau de bord
    require('view/backend/dashboard.php');
}

public function admin()
    {
        $this->sessionExists();

        if (!empty($_GET['session']) && $_GET['session'] == 'end') {
            // Suppression des variables de session et de la session
            $_SESSION = array();
            session_destroy();
            header('Location: index.php?action=login');
            exit();
        }

        if (empty($_GET['success']))
        {
            $success = false;
        }
        elseif ($_GET['success'] == 'newArticle')
        {
            $success = 'Nouvel article ajouté !';
        }
        elseif ($_GET['success'] == 'updateArticle')
        {
            $success = 'Article mis à jour !';
        }

        $articleManager = new ArticleManager(); // création de l'Article Manager pour centraliser toutes les requêtes
        $commentManager = new CommentManager(); // création du Comment Manager pour centraliser toutes les requêtes

        // supression d'un article
        if (!empty($_GET['article']) && $_GET['event'] == 'delete')
        {
            $article = new Article([
                'id' => $_GET['article']
            ]);

            $articleManager->delete($article);

            if ($articleManager->delete($article))
            {
                $success = 'Article supprimé !';
            }
        }

        // approbation ou supression d'un commentaire
        if (!empty($_GET['comment']) && !empty($_GET['event']))
        {
            if ($_GET['event'] == 'accept')
            {
                $comment = new Comment([
                    'id' => $_GET['comment']
                ]);

                $commentManager->accept($comment);

                if ($commentManager->accept($comment))
                {
                    $success = 'Commentaire accepté !';
                }
            }

            if ($_GET['event'] == 'delete')
            {
                $comment = new Comment([
                    'id' => $_GET['comment']
                ]);

                $commentManager->delete($comment);

                if ($commentManager->delete($comment))
                {
                    $success = 'Commentaire supprimé !';
                }
            }
        }

        // récupère les articles et leurs options, du plus récent au plus daté
        $articles = $articleManager->getAll();

        // retourne une valeur true s'il y a des commentaires signalés
        $reported = $commentManager->getReported();

        // récupère les commentaires et leurs options, du plus récent au plus daté, en faisant une jointure pour récupérer le titre de l'article associé
        $comments = $commentManager->getAll();

        require('view/backend/admin.php');
    }

    public function newArticle()
    {
        $this->sessionExists();

        $error = null;

        if (!empty($_POST)) // on rentre dans la condition si POST n'est pas vide
        {
            $validation = true;

            if (empty($_POST['title']) && empty($_POST['text'])) {
                $error = 1; // message vide
                $validation = false;
            }
            if (strlen($_POST['title']) > 255) {
                $error = 2; // titre trop long
                $validation = false;
            }

            if ($validation) // si pas d'erreurs
            {
                // définit la variable qui indique si le billet est publié en ligne ou enregistré en brouillon
                if (isset($_POST['submit'])) {
                    $online = 1;
                } else if (isset($_POST['draft'])) {
                    $online = 0;
                }

                // crée l'objet Article et ses valeurs
                $article = new Article([
                    'title' => $_POST['title'],
                    'content' => $_POST['text'],
                    'on_line' => $online
                ]);

                // instanciation de la classe ArticleManager, qui lance la connexion à la BDD
                $articleManager = new ArticleManager();
                $articleManager->add($article); // ajout de l'article à la BDD

                // redirection vers la page d'administration
                header('Location: index.php?action=admin&success=newArticle');
            }
            
        }

        switch ($error) {
            case 1:
                $error = '<p class="text-danger">Message vide !</p>';
                break;
            case 2:
                $error = '<p class="text-danger">Titre trop long !</p>';
                break;
        }
        
        require('view/backend/newArticle.php');
    }

function changeArticle()
{
    require('view/backend/changeArticle.php');
}

function manageReviews()
{
    require('view/backend/manageReviews.php');
} */