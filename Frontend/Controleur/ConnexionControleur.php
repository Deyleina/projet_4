<?php

namespace Frontend;
	
require_once('/Frontend/Modele/ConnexionModele.php');

class ConnexionControleur {

	private $ConnexionModele;

	public function __construct() {
		$this->ConnexionModele = new ConnexionModele();
	}

	public function afficherPageConnexion() {
		require '/Frontend/Vue/web/pageConnexion.php';
	}

	public function connexionUtilisateur() {
		$connexion = $this->ConnexionModele->utilisateurConnexion($_POST['pseudo']);
		$donnees = $connexion->fetch();
		if ($_POST['pseudo'] == $donnees['pseudo'] & sha1($_POST['motdepasse']) ==  $donnees['motdepasse']) {
			$_SESSION['pseudo'] = $donnees['pseudo'];
			$_SESSION['id'] = $donnees['id'];
			require (root_path . '/Frontend/Vue/web/pageAccueil.php');
		}else {
			echo '<p>Mot de passe ou pseudo incorrect</p>';
		}
	}

	public function deconnexionUtilisateur() {
		session_destroy();
		//echo "<p>Vous vous êtes déconnecté. A bientôt !</p>";
		header('Location: index.php?page=accueil');
	}
}

?>