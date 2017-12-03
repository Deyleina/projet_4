<?php

namespace Backend;
	
require_once('/Backend/Modele/AdminModele.php');

class AdminControleur {

	private $AdminModele;

	public function __construct() {
		$this->AdminModele = new AdminModele();
	}

	public function afficherPageAdmin() {
		$admin = $this->AdminModele->detailCompteAdmin($_SESSION['pseudo']);
		$donnees = $admin->fetch();
		if (isset($_SESSION['pseudo']) == $donnees['pseudo']) {
			$_SESSION['pseudo'] = $donnees['pseudo'];
		require '/Backend/Vue/web/pageAdmin.php';
		}
	}
}

?>