<?php

namespace Backend;
	
require_once(root_path . '/Backend/Modele/GestionTestModele.php');

class GestionTestControleur {

	private $GestionTestModele;

	public function __construct() {
		$this->GestionTestModele = new GestionTestModele();
	}

	public function afficherListeTests() {
		$gestionTests = $this->GestionTestModele->listeTests();
		require (root_path . '/Backend/Vue/web/pageGestionTest.php');
	}

}

?>