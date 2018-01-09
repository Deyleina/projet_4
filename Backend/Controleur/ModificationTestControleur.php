<?php

namespace Backend;
	
require_once(root_path . '/Backend/Modele/ModificationTestModele.php');

class ModificationTestControleur {

	private $ModificationTestModele;

	public function __construct(){
		$this->ModificationTestModele = new ModificationTestModele();
	}

	function infoTest() {
		if (isset($_GET['recup'])) {
			$infoTest = $this->ModificationTestModele->recupererInfoTest($_GET['recup']);
			$informationTest = $infoTest->fetchAll();
			require(root_path . '/Backend/Vue/web/pageModificationTest.php');
			$infoTest->closeCursor();
		}
	}

	public function validationModificationTest() {
		$modifierTest = $this->ModificationTestModele->validationModificationTest($_POST['plateformeModif'], $_POST['developpeurModif'], $_POST['genreModif'], $_POST['introModif'], $_POST['titreModif'], $_POST['imageModif'], $_POST['contenuModif'], $_POST['idModif']);
		$modifierTest->closeCursor();
		echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="index.php?page=gestionTest"</SCRIPT>';
		die;
	}
}