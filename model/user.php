<?php
class user {
	private $id;
	private $pseudo;
	private $password;
	private $mail;
	private $date_inscription;

	// récupération des informations
	public function getId() {
		return $this->id;
	}

	public function getTitle() {
		return $this->title;
	}

	public function getPseudo() {
		return $this->pseudo;
	}

	public function getPassword() {
		return $this->password;
	}

	public function getMail() {
		return $this->mail;
	}

	public function getDate_inscription() {
		return $this->date_inscription;
	}

	// definit les informations
	public function setId($id) {
		$this->id = $id;
	}

	public function setPseudo($pseudo) {
		$this->pseudo = $pseudo;
	}

	public function setPassword($password) {
		$this->password = $password;
	}

	public function setMail($mail) {
		$this->mail = $mail;
	}

	public function setDate_inscription($date_inscription) {
		$this->date_inscription = $date_inscription;
	}
}