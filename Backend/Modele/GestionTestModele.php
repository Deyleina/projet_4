<?php

namespace Backend;

require_once ('Modele.php');

class GestionTestModele extends Modele {

	function __construct() {
		parent::__construct();
	}

	function listeTests() {
		$gestionTests = $this->bdd->query('SELECT * FROM test ORDER BY id DESC LIMIT 0, 10');
		return $gestionTests;
		// cette fonction va afficher la liste des commentaires
	}
}