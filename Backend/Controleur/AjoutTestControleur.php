<?php

namespace Backend;
	
require_once(root_path . '/Backend/Modele/AjoutTestModele.php');

class AjoutTestControleur {

	private $AjoutTestModele;

	public function __construct(){
		$this->AjoutTestModele = new AjoutTestModele();
	}

	public function afficherFormulaireAjoutTest() {
		if(isset($_SESSION['pseudo']) AND $_SESSION['pseudo'] == "Deyleina") {
			require (root_path . '/Backend/Vue/web/pageAjoutTest.php');
		} else {
			echo '<p style="text-align:center;font-weight:bold;color:red;">Seul l\'administrateur a accès à cette partie du site !<p>';
		}
	}

	public function validationAjoutTest() {
		$dossier = root_path . '/Backend/Vue/images/uploads/tests/';
		$poidsMax = '8196394'; // équivalent à 8Mo maximum
		if(isset($_FILES['nouvelleImageTest']) AND $_FILES['nouvelleImageTest']['error']==0) {
			if($_FILES['nouvelleImageTest']['size'] <= $poidsMax) {
				move_uploaded_file($_FILES['nouvelleImageTest']['tmp_name'], $dossier . basename($_FILES['nouvelleImageTest']['name']));
			}
		}
		$ajouterTest = $this->AjoutTestModele->ajoutTest($_POST['nouvellePlateforme'], $_POST['nouveauDeveloppeur'], $_POST['nouveauGenre'], $_POST['nouvelleIntro'], $_POST['nouveauTitre'], $_FILES['nouvelleImageTest']['name'], $_POST['nouveauContenu']);
		$ajouterTest->closeCursor();
		echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="index.php?page=gestionTest"</SCRIPT>';
		die;
	}
}