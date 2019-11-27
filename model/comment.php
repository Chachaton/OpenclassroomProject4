<?php
class comment {
	private $id;
	private $id_article;
	private $pseudo;
	private $comment;
	private $date_comment;
	private $title;

	// récupération des informations
	public function getId() {
		return $this->id;
	}

	public function getId_article() {
		return $this->id_article;
	}

	public function getPseudo() {
		return $this->pseudo;
	}

	public function getComment() {
		return $this->comment;
	}

	public function getDate_comment() {
		return $this->date_comment;
	}

	public function getTitle() {
		return $this->title;
	}

	// definit les informations
	public function setId($id) {
		$this->id = $id;
		return this;
	}

	public function setId_article($pseudo) {
		$this->pseudo = $id_article;
		return this;
	}

	public function setPseudo($pseudo) {
		$this->pseudo = htmlspecialchars($pseudo);
		return this;
	}

	public function setComment($comment) {
		$this->comment = htmlspecialchars_decode($comment);
		return this;
	}

	public function setDate_comment($date_comment) {
		$this->date_comment = $date_comment;
		return this;
	}

	public function setTitle($title) {
		$this->title = htmlspecialchars($title);
		return this;
	}
}