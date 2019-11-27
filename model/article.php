<?php
class article {
	private $id;
	private $title;
	private $content;
	private $date_creation;

	// récupération des informations
	public function getId() {
		return $this->id;
	}

	public function getTitle() {
		return $this->title;
	}

	public function getContent() {
		return $this->content;
	}

	public function getDate_Creation() {
		return $this->date_creation;
	}

	// definit les informations
	public function setId($id) {
		$this->id = $id;
		return $this;
	}

	public function setTitle($title) {
		$this->title = htmlspecialchars($title);
		return $this;
	}

	public function setContent($content) {
		$this->title = htmlspecialchars_decode($content);
		return $this;
	}
}