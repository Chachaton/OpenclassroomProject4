<?php

class ChaptersManager
{
  private $_db; // Instance de PDO

  public function __construct($db)
  {
    $this->setDb($db);
  }

  //Ajouter un chapitre
  public function add(Chapter $chapter)
  {
    $q = $this->_db->prepare('INSERT INTO chapters(title_chapter, text_chapter, date_online_chapter) VALUES(?, ?, NOW())');
    $q->bindValue(':title_chapter', $chapter->title_chapter());
    $q->bindValue(':text_chapter', $chapter->text_chapter());
    $q->execute();
    
    $chapter->hydrate([
      'id_chapter' => $this->_db->lastInsertId(),
    ]);
  }

  //Supprimer un chapitre
  public function delete(Chapter $chapter)
  {
    $this->_db->exec('DELETE FROM chapters WHERE id_chapter = '.$chapter->id_chapter());
  }

  //Récupérer un article par son id
  public function get($id)
  {
    $query = $this->db->prepare('SELECT(*) FROM chapters WHERE id_chapter = ?');
    $query->execute([
        $id_chapter
    ]);
    $chapter = $query->fetch(PDO::FETCH_ASSOC);
    return new Chapter($chapter);
  }

  //Retourne la liste de tous les chapitres
  public function getList()
  {
    $q = $this->_db->prepare('SELECT id_chapter, title_chapter, text_chapter, date_online_chapter FROM chapters ORDER BY id_chapter ASC');
    $q->execute();

    $chapters = $q->fetchAll(PDO::FETCH_ASSOC);
    
    return $chapters;
  }

  public function update(Chapter $chapter)
  {
    // Prépare une requête de type UPDATE.
    // Assignation des valeurs à la requête.
    // Exécution de la requête.
  }

  public function setDb(PDO $db)
  {
    $this->_db = $db;
  }
}






/*class ArticleManager extends Manager



    public function exists($id)
    {
        if (is_numeric($id))
        {
            $query = $this->db->prepare('SELECT id FROM articles WHERE id = ?');
            $query->execute([
                $id
            ]);

            return $query->fetch(PDO::FETCH_ASSOC);
        }
        else
        {
            return false;
        }  
    }


    public function getPosted()
	{
		// retourne la liste des articles publiés sous forme de tableau d'objets
		$articles = [];

		$query = $this->db->query("SELECT id, title, content, date_creation, on_line FROM articles WHERE on_line = 1 ORDER BY date_creation");

		while ($data = $query->fetch(PDO::FETCH_ASSOC))
		{
			$articles[] = new Article($data);
		}

        return $articles;
	}

    public function update(Article $article)
    {
        $query = $this->db->prepare("UPDATE articles SET title = :title, content = :content, date_update = NOW(), on_line = :on_line WHERE id = :id") or die(print_r($this->db->errorInfo()));
        $query->execute([
            ':title' => $article->getTitle(),
            ':content' => $article->getContent(),
            ':on_line' => $article->getOn_line(),
            ':id' => $article->getId()
        ]);
    }

}*/
