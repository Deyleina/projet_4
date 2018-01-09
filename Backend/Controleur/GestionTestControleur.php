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
		$listeTests = $gestionTests->fetchAll();
		if(isset($_SESSION['pseudo']) AND $_SESSION['pseudo'] == "Deyleina") {
			require (root_path . '/Backend/Vue/web/pageGestionTest.php');
		} else {
			echo '<p style="text-align:center;font-weight:bold;color:red;">Seul l\'administrateur a accès à cette partie du site !<p>';
		}
		$gestionTests->closeCursor();
	}

	function supprimerTest() {
		$supprimerTest = $this->GestionTestModele->suppressionTest($_POST['idActuel']);
		$supprimerTest->closeCursor();
		echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="index.php?page=gestionTest"</SCRIPT>';
		die;
	}

}

?>