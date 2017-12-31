<?php

namespace Frontend;
	
require_once(root_path . '/Frontend/Modele/ImageModele.php');

class ImagesControleur {

	private $ImageModele;

	public function __construct(){
		$this->ImageModele = new ImageModele();
	}

	public function envoyerImage(){
		if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0) {
			if ($_FILES['monfichier']['size'] <= 1000000) {
				$infosfichier = pathinfo($_FILES['monfichier']['name']);
				$extension_upload = $infosfichier['extension'];
				$extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
				if (in_array($extension_upload, $extensions_autorisees)) {
					mkdir(root_path . 'Frontend/Vue/upload/', 0777, true);
					move_uploaded_file($_FILES['monfichier']['tmp_name'], root_path . 'Frontend/Vue/uploads/' . basename($_FILES['monfichier']['name']));
					echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="index.php?page=accueil"</SCRIPT>';
					die();
				}
			}
		}
		/* $ajout = $this->ImageModele->ajouterImage($_POST['nouveauPseudo'], $_POST['nouvelEmail'], $_POST['nouveauMotDePasse']);
		$ajouter = $ajout->fetch();
		require '/Frontend/Vue/web/pageAccueil.php';*/
	}
}

?>