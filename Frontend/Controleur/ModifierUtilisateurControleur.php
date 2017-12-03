<?php

namespace Backend;
	
require_once(root_path . '/Backend/Modele/ModifierUtilisateurModele.php');

class ModifierUtilisateurControleur {

	private $ModifierUtilisateurModele;

	public function __construct() {
		$this->ModifierUtilisateurModele = new ModifierUtilisateurModele();
	}

	public function recuperationDonneesUtilisateur() {
		if (isset($_GET['recup'])){
			$recuperation = $this->ModifierUtilisateurModele->recupererUtilisateurs($_GET['recup']);
			require (root_path . '/Backend/Vue/web/pageModificationUtilisateur.php');
		}
	}

	public function validerModificationUtilisateur(){
		$modifier = $this->ModifierUtilisateurModele->modifierUtilisateur($_POST['modif'], $_POST['idmodif']);
		// header('location: Index.php?p=dernierBillet_controleur');
		echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="Index.php?p=dernierBillet_controleur"</SCRIPT>';
		die();
	}
}

?>