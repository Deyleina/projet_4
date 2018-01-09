<?php

namespace Backend;
	
require_once(root_path . '/Backend/Modele/GestionUtilisateursModele.php');

class GestionUtilisateursControleur {

	private $GestionUtilisateursModele;

	public function __construct() {
		$this->GestionUtilisateursModele = new GestionUtilisateursModele();
	}

	public function afficherListeUtilisateurs() {
		$gestionUtilisateurs = $this->GestionUtilisateursModele->listeUtilisateurs();
		$listeUtilisateurs = $gestionUtilisateurs->fetchAll();
		$gestionUtilisateurs->closeCursor();
		if(isset($_SESSION['pseudo']) AND $_SESSION['pseudo'] == "Deyleina") {
			require (root_path . '/Backend/Vue/web/pageGestionUtilisateurs.php');
		} else {
			echo '<p style="text-align:center;font-weight:bold;color:red;">Seul l\'administrateur a accès à cette partie du site !<p>';
		}
	}

	public function supprimerUtilisateurDepuisCompteAdmin() {
		$supprimerUtilisateurDepuisCompteAdmin = $this->GestionUtilisateursModele->suppressionUtilisateurDepuisCompteAdmin($_POST['idActuel']);
		$supprimerUtilisateurDepuisCompteAdmin->closeCursor();
		echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="index.php?page=gestionUtilisateurs"</SCRIPT>';
		die;
	}
}

?>