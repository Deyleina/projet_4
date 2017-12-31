<?php

namespace Frontend;
	
require_once(root_path . '/Frontend/Modele/InscriptionModele.php');

class InscriptionControleur {

	private $InscriptionModele;

	public function __construct(){
		$this->InscriptionModele = new InscriptionModele();
	}

	public function afficherPageInscription(){
		require root_path . '/Frontend/Vue/web/pageInscription.php';
	}

	public function ajoutUtilisateur(){
		if (empty($_POST['nouveauPseudo']) || empty($_POST['nouvelEmail']) || empty($_POST['nouveauMotDePasse'])) {
			echo '<script>Javascript:alert("Merci de remplir tous les champs !")</script>';
			echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="index.php?page=inscription"</SCRIPT>';
			die;
		} else {
			$ajout = $this->InscriptionModele->ajoutUtilisateur($_POST['nouveauPseudo'], $_POST['nouvelEmail'], $_POST['nouveauMotDePasse']);
			$ajouter = $ajout->fetch();
			$ajout->closeCursor();
			echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="index.php?page=connexion"</SCRIPT>';
			die();
		}
	}
}

?>