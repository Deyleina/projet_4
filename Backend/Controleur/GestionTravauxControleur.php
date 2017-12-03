<?php

namespace Backend;
	
require_once(root_path . '/Backend/Modele/GestionTravauxModele.php');

class GestionTravauxControleur {

	private $GestionTravauxModele;

	public function __construct() {
		$this->GestionTravauxModele = new GestionTravauxModele();
	}

	public function afficherGestionTravaux() {
		$gestionTravaux = $this->GestionTravauxModele->listeTravaux();
		require (root_path . '/Backend/Vue/web/pageGestionTravaux.php');
	}

	public function ajoutTravaux() {
		require (root_path . '/Backend/Vue/web/pageAjoutTravaux.php');
	}

	public function modifierTravaux() {
		$gestionTravaux = $this->GestionTravauxModele->listeTravaux();
		require (root_path . '/Backend/Vue/web/pageModificationTravaux.php');
	}

	public function validationModificationTravaux() {
		$validerModificationTravaux = $this->GestionTravauxModele->validerModifierTravaux();
		require (root_path . '/Backend/Vue/web/pageGestionTravaux.php');
	}

	public function supprimerTravaux() {
		$supprimerTravaux = $this->GestionTravauxModele->suppressionTravaux();
		require (root_path . '/Backend/Vue/web/pageGestionTravaux.php');
	}
}

?>