<?php

namespace Backend;
	
require_once(root_path . '/Backend/Modele/AjoutUtilisateurModele.php');

class AjoutUtilisateurControleur {

	private $AjoutUtilisateurModele;

	public function __construct() {
		$this->AjoutUtilisateurModele = new AjoutUtilisateurModele();
	}

	public function afficherPageNouvelUtilisateur() {
		$ajoutUtilisateur = $this->AjoutUtilisateurModele->ajouterUtilisateur();
		if(isset($_SESSION['pseudo']) AND $_SESSION['pseudo'] == "Deyleina") {
			require (root_path . '/Backend/Vue/web/pageAjoutUtilisateur.php');
		} else {
			echo '<p style="text-align:center;font-weight:bold;color:red;">Seul l\'administrateur a accès à cette partie du site !<p>';
		}
		$ajoutUtilisateur->closeCursor();
	}
}

?>