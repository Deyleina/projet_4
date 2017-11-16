<?php

namespace Cosplay;

require_once('Modele.php');

class PagesModele extends Modele {

	function __construct() {
		parent::__construct();
	}

	function page() {}

	function listeTest() {
		$test = $this->bdd->query('SELECT plateforme, développeur, genre, intro FROM test ORDER BY id DESC LIMIT 0, 10');
		return $test;
		// cette fonction va afficher la liste des commentaires
	}

	function listeCommentaire() {
		$com = $this->bdd->query('SELECT pseudo, contenu, date_creation FROM livre ORDER BY date_creation DESC LIMIT 0, 10');
		return $com;
		// cette fonction va afficher la liste des commentaires
	}
}