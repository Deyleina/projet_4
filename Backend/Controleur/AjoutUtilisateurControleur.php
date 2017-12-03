<?php

namespace Backend;
	
require_once(root_path . '/Backend/Modele/AjoutUtilisateurModele.php');

class AjoutUtilisateurControleur {

	private $AjoutUtilisateurModele;

	public function __construct() {
		$this->AjoutUtilisateurModele = new AjoutUtilisateurModele();
	}

	public function afficherPageNouvelUtilisateur() {
		$ajoutUtilisateur = $this->AjoutUtilisateurModele->ajouterUtilisateur();
		require (root_path . '/Backend/Vue/web/pageAjoutUtilisateur.php');
	}
}

?>