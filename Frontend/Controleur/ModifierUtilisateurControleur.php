<?php

namespace Backend;
	
require_once(root_path . '/Backend/Modele/ModifierUtilisateurModele.php');

class ModifierUtilisateurControleur {

	private $ModifierUtilisateurModele;

	public function __construct() {
		$this->ModifierUtilisateurModele = new ModifierUtilisateurModele();
	}

	public function recuperationDonneesUtilisateur() {
		if (isset($_GET['recup'])){
			$recuperation = $this->ModifierUtilisateurModele->recupererUtilisateurs($_GET['recup']);
			require (root_path . '/Backend/Vue/web/pageModificationUtilisateur.php');
			$recuperation->closeCursor();
		}
	}
}

?>