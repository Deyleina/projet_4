<?php

namespace Backend;

require_once (root_path . '/vendor/Modele.php');

class GestionTestModele extends \Cosplay\Modele {

	function __construct() {
		parent::__construct();
	}

	function listeTests() {
		$gestionTests = $this->bdd->query('SELECT * FROM test ORDER BY id DESC LIMIT 0, 10');
		return $gestionTests;
		// cette fonction va afficher la liste des commentaires
	}

	function suppressionTest($id) {
		$supprimerTest = $this->bdd->prepare('DELETE FROM test WHERE id = ?');
		$supprimerTest->execute(array($id));
		return $supprimerTest;
	}


}