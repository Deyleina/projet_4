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
		$listeTravaux = $gestionTravaux->fetchAll();
		if(isset($_SESSION['pseudo']) AND $_SESSION['pseudo'] == "Deyleina") {
			require (root_path . '/Backend/Vue/web/pageGestionTravaux.php');
		} else {
			echo '<p style="text-align:center;font-weight:bold;color:red;">Seul l\'administrateur a accès à cette partie du site !<p>';
		}
		$gestionTravaux->closeCursor();
	}

	function supprimerTravaux() {
		$supprimerTravaux = $this->GestionTravauxModele->suppressionTravaux($_POST['idActuel']);
		$supprimerTravaux->closeCursor();
		echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="index.php?page=gestionTravaux"</SCRIPT>';
		die;
	}
}

?>