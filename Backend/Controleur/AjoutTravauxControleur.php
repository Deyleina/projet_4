<?php

namespace Backend;
	
require_once(root_path . '/Backend/Modele/AjoutTravauxModele.php');

class AjoutTravauxControleur {

	private $AjoutTravauxModele;

	public function __construct() {
		$this->AjoutTravauxModele = new AjoutTravauxModele();
	}

	public function validationAjoutTravaux() {
		$validerAjoutTravaux = $this->AjoutTravauxModele->validerAjouterTravaux($_POST['nouvelleImage'], $_POST['nouveauTitre'], $_POST['nouveauContenu']);
		$ajout = $validerAjouterTravaux->fetch();
		require (root_path . '/Backend/Vue/web/pageAjoutTravaux.php');
	}
}

?>