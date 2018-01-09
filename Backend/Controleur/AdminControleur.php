<?php

namespace Backend;
	
require_once(root_path . '/Backend/Modele/AdminModele.php');

class AdminControleur {

	private $AdminModele;

	public function __construct() {
		$this->AdminModele = new AdminModele();
	}

	public function afficherPageAdmin() {
		$admin = $this->AdminModele->detailCompteAdmin($_SESSION['pseudo']);
		$donnees = $admin->fetch();
		if(isset($_SESSION['pseudo']) AND $_SESSION['pseudo'] == "Deyleina") {
			require root_path . '/Backend/Vue/web/pageAdmin.php';
		} else {
			echo '<p style="text-align:center;font-weight:bold;color:red;">Vous n\'êtes pas l\'administrateur de ce site !<p>';
		}
		$admin->closeCursor();
	}
}

?>