<?php

namespace Frontend;
	
require_once('/Frontend/Modele/InscriptionModele.php');

class InscriptionControleur {

	private $InscriptionModele;

	public function __construct(){
		$this->InscriptionModele = new InscriptionModele();
	}

	public function afficherPageInscription(){
		require '/Frontend/Vue/web/pageInscription.php';
	}

	public function ajoutUtilisateur(){
		$ajout = $this->InscriptionModele->ajoutUtilisateur($_POST['nouveauPseudo'], $_POST['nouvelEmail'], $_POST['nouveauMotDePasse']);
		$ajouter = $ajout->fetch();
		require '/Frontend/Vue/web/pageAccueil.php';
	}
}

?>