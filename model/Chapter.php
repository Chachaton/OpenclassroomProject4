<?php
class Chapter
{
    //Attributs de la classe
    private $_id_chapter;
    private $_title_chapter;
    private $_text_chapter;
    private $_date_online_chapter;

    //Constructeur de la classe
    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }

    //Hydratation de l'objet chapter
    public function hydrate(array $donnees)
    {
      foreach ($donnees as $key => $value)
      {
        $method = 'set'.ucfirst($key);
        if (method_exists($this, $method))
        {
          $this->$method($value);
        }
      }
    }

    //Getters
    public function id_chapter(){
        return $this->_id_chapter;
    }

    public function title_chapter(){
        return $this->_title_chapter;
    }

    public function text_chapter(){
        return $this->_text_chapter;
    }

    public function date_online_chapter(){
        return $this->_date_online_chapter;
    }

    //Setters
    /*public function setId_chapter($id_chapter){
        if(!is_int($id_chapter)){
            trigger_error('Il faut un nombre entier', E_USER_WARNING);
            return;
        }
        $this->_id_chapter = $id_chapter;
    }*/

    public function setTitle_chapter($title_chapter){
        if(!is_string($title_chapter)){
            trigger_error('Il faut du texte', E_USER_WARNING);
            return;
        }
        $this->_title_chapter = $title_chapter;
    }

    public function setText_chapter($text_chapter){
        if(!is_string($text_chapter)){
            trigger_error('Il faut du texte', E_USER_WARNING);
            return;
        }
        $this->_text_chapter = $text_chapter;
    }

    /*public function setDate_cnline_chapter($date_online_chapter){
        if(!empty($date_online_chapter)){
            if (filter_var($_dateC, FILTER_VALIDATE_REGEXP, array("options" => array("regexp"=>"/^(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))$/"))) !== false )
                {
                    $this->date_online_chapter = $date_online_chapter;
                    return $this;
                } else{ 
                    echo "le format " .$date_online_chapter. "  est incorrect! <br>";
                }
            } else {
                echo "Veuillez saisir une date! <br>";
            }
        }
    }*/
}