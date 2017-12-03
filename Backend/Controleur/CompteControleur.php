<?php

namespace Backend;
	
require_once('/Backend/Modele/CompteModele.php');

class CompteControleur {

	private $CompteModele;

	public function __construct() {
		$this->CompteModele = new CompteModele();
	}

	public function afficherPageCompte() {
		$infoCom = $this->CompteModele->listeCom($_SESSION['id']);
		$listeCom = $infoCom->fetchAll();
		$compte = $this->CompteModele->detailCompte($_SESSION['pseudo']);
		$donnees = $compte->fetch();
		if (isset($_SESSION['pseudo']) == $donnees['pseudo']) {
			$_SESSION['pseudo'] = $donnees['pseudo'];
		require '/Backend/Vue/web/pageCompte.php';
		}
	}

	public function modifierLeCompte() {
		if (isset($_GET['recup'])) {
			$infoCompte = $this->CompteModele->modificationCompte($_GET['recup']);
			require '/Backend/Vue/web/pageModificationUtilisateur.php';
		}
	}

	public function modificationValidee() {
		$valide = $this->CompteModele->validationModification($_POST['pseudoModif'], $_POST['emailModif'], sha1($_POST['motdepasseModif']), $_POST['idModif']);
		require '/Frontend/Vue/web/pageAccueil.php';
	}

	public function supprimerLeCompte() {
		$supprimerCompte = $this->CompteModele->suppressionCompte($_POST['idActuel']);
		session_destroy();
		require '/Frontend/Vue/web/pageAccueil.php';
	}
}

?>