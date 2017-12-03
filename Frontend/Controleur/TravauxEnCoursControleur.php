<?php

namespace Frontend;

require_once(root_path . '/Frontend/Modele/TravauxEnCoursModele.php');

class TravauxEnCoursControleur {

	private $TravauxEnCoursModele;

	public function __construct() {
		$this->TravauxEnCoursModele = new TravauxEnCoursModele();
	}

	function afficherPageTravauxEnCours() {
		$travauxEnCours = $this->TravauxEnCoursModele->afficherArticle();
		require(root_path . '/Frontend/Vue/web/pageTravauxEnCours.php');
	}
}