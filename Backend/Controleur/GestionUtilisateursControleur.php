<?php

namespace Backend;
	
require_once(root_path . '/Backend/Modele/GestionUtilisateursModele.php');

class GestionUtilisateursControleur {

	private $GestionUtilisateursModele;

	public function __construct() {
		$this->GestionUtilisateursModele = new GestionUtilisateursModele();
	}

	public function afficherListeUtilisateurs() {
		/* $compte = $this->GestionUtilisateursModele->nombreUtilisateurs(); */
		$gestionUtilisateurs = $this->GestionUtilisateursModele->listeUtilisateurs();
		require (root_path . '/Backend/Vue/web/pageGestionUtilisateurs.php');
	}

}

?>