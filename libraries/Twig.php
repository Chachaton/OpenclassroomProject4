<?php

class Twig{

	public function run(){
		$loader = new \Twig\Loader\FilesystemLoader('view/');
		$twig = new \Twig\Environment($loader, []);

		return $twig;

	}
}
