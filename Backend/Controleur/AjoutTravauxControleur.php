<?php

namespace Backend;
	
require_once(root_path . '/Backend/Modele/AjoutTravauxModele.php');

class AjoutTravauxControleur {

	private $AjoutTravauxModele;

	public function __construct() {
		$this->AjoutTravauxModele = new AjoutTravauxModele();
	}

	public function afficherFormulaireAjoutTravaux() {
		if(isset($_SESSION['pseudo']) AND $_SESSION['pseudo'] == "Deyleina") {
			require (root_path . '/Backend/Vue/web/pageAjoutTravaux.php');
		} else {
			echo '<p style="text-align:center;font-weight:bold;color:red;">Seul l\'administrateur a accès à cette partie du site !<p>';
		}
	}

	public function validationAjoutTravaux() {
		$dossier = root_path . '/Backend/Vue/images/uploads/travaux/';
		$poidsMax = '8196394'; // équivalent à 8Mo maximum
		if(isset($_FILES['nouvelleImageTravaux']) AND $_FILES['nouvelleImageTravaux']['error']==0) {
			if($_FILES['nouvelleImageTravaux']['size'] <= $poidsMax) {
				move_uploaded_file($_FILES['nouvelleImageTravaux']['tmp_name'], $dossier . basename($_FILES['nouvelleImageTravaux']['name']));
			}
		}
		$ajouterTravaux = $this->AjoutTravauxModele->ajoutTravaux($_FILES['nouvelleImageTravaux']['name'], $_POST['nouveauTitre'], $_POST['nouveauContenu']);
		$ajouterTravaux->closeCursor();
		echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="index.php?page=gestionTravaux"</SCRIPT>';
		die;
	}
}

?>