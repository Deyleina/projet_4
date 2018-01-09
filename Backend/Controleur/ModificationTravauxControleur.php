<?php

namespace Backend;
	
require_once(root_path . '/Backend/Modele/ModificationTravauxModele.php');

class ModificationTravauxControleur {

	private $ModificationTravauxModele;

	public function __construct(){
		$this->ModificationTravauxModele = new ModificationTravauxModele();
	}

	function infoTravaux() {
		if (isset($_GET['recup'])) {
			$infoTravaux = $this->ModificationTravauxModele->recupererInfoTravaux($_GET['recup']);
			$informationTravaux = $infoTravaux->fetchAll();
			require(root_path . '/Backend/Vue/web/pageModificationTravaux.php');
			$infoTravaux->closeCursor();
		}
	}

	public function validationModificationTravaux() {
		$modifierTravaux = $this->ModificationTravauxModele->validationModificationTravaux($_POST['imageModif'], $_POST['titreModif'], $_POST['contenuModif'], $_POST['idModif']);
		$modifierTravaux->closeCursor();
		echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="index.php?page=gestionTravaux"</SCRIPT>';
		die;
	}
}