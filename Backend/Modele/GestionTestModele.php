<?php

namespace Backend;

require_once (root_path . '/vendor/ConnexionUnique.php');

class GestionTestModele {

	private $con; //variable de connexion

    public function __construct()
    {
        $db = \Cosplay\ConnexionUnique::getInstance();
        $this->con = $db->getDbh();
    }

	function listeTests() {
		$gestionTests = $this->con->query('SELECT * FROM test ORDER BY id DESC LIMIT 0, 10');
		return $gestionTests;
		// cette fonction va afficher la liste des commentaires
	}

	function suppressionTest($id) {
		$supprimerTest = $this->con->prepare('DELETE FROM test WHERE id = ?');
		$supprimerTest->execute(array($id));
		return $supprimerTest;
	}


}