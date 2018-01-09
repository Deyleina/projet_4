<?php

namespace Frontend;
	
require_once(root_path . '/Frontend/Modele/ConnexionModele.php');

class ConnexionControleur {

	private $ConnexionModele;

	public function __construct() {
		$this->ConnexionModele = new ConnexionModele();
	}

	public function afficherPageConnexion() {
		require root_path . '/Frontend/Vue/web/pageConnexion.php';
	}

	public function connexionUtilisateur() {
		$connexion = $this->ConnexionModele->utilisateurConnexion($_POST['pseudo']);
		$donnees = $connexion->fetch();
		if ($_POST['pseudo'] == $donnees['pseudo'] & sha1($_POST['motdepasse']) ==  $donnees['motdepasse']) {
			$_SESSION['pseudo'] = $donnees['pseudo'];
			$_SESSION['id'] = $donnees['id'];
			$connexion->closeCursor();
			echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="index.php?page=compte"</SCRIPT>';
			die();
		}else {
			echo '<p>Mot de passe ou pseudo incorrect</p>';
		}
	}

	public function deconnexionUtilisateur() {
		session_destroy();
		//echo "<p>Vous vous êtes déconnecté. A bientôt !</p>";
		echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="index.php?page=accueil"</SCRIPT>';
		die();
	}
}

?>