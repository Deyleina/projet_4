<?php

namespace Frontend;

require_once (root_path . '/vendor/ConnexionUnique.php');

class TestModele {

	private $con; //variable de connexion

    public function __construct()
    {
        $db = \Cosplay\ConnexionUnique::getInstance();
        $this->con = $db->getDbh();
    }

	function listeTest() {
		$test = $this->con->query('SELECT * FROM test ORDER BY id DESC LIMIT 0, 10');
		return $test;
		// cette fonction va afficher la liste des tests dans la page
	}

	function afficherTest($id) {
		$testComplet = $this->con->prepare('SELECT * FROM test WHERE id = ?');
		$testComplet->execute(array($id));
		return $testComplet;
	}

	function ajouterTest() {
		// cette fonction va ajouter un test dans la bdd
	}

	function modifierTest() {
		// cette fonction va permettre de modifier un test
	}

	function supprimerTest() {
		// cette fonction va permettre de supprimer un test
	}
}