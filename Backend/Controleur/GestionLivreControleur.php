<?php

namespace Backend;
	
require_once(root_path . '/Backend/Modele/GestionLivreModele.php');

class GestionLivreControleur {

	private $GestionLivreModele;

	public function __construct() {
		$this->GestionLivreModele = new GestionLivreModele();
	}

	public function afficherListeCommentaires() {
		$gestionCommentaires = $this->GestionLivreModele->listeCommentaires();
		$listeCommentaires = $gestionCommentaires->fetchAll();
		$gestionCommentairesSignales = $this->GestionLivreModele->listeCommentairesSignales();
		$listeCommentairesSignales = $gestionCommentairesSignales->fetchAll();
		if(isset($_SESSION['pseudo']) AND $_SESSION['pseudo'] == "Deyleina") {
			require (root_path . '/Backend/Vue/web/pageGestionLivre.php');
		} else {
			echo '<p style="text-align:center;font-weight:bold;color:red;">Seul l\'administrateur a accès à cette partie du site !<p>';
		}
		$gestionCommentaires->closeCursor();
		$gestionCommentairesSignales->closeCursor();

	}

	public function infoCommentaireAdmin() {
		if (isset($_GET['recup'])) {
			$informationCommentaireCompte = $this->GestionLivreModele->recupererInfoCommentaire($_GET['recup']);
			$informationCommentaireAdmin = $informationCommentaireCompte->fetchAll();
			require(root_path . '/Backend/Vue/web/pageModificationCommentaireCompte.php');
		}
	}

	public function modifierCommentaireAdmin() {
		if (empty($_POST['auteurModif']) || empty($_POST['contenuModif'])) {
			echo '<script>Javascript:alert("Merci de remplir tous les champs !")</script>';
			echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="index.php?page=gestionLivreOr"</SCRIPT>';
			die;
		} else {
			$modifierCommentaireAdmin = $this->GestionLivreModele->validationModificationCommentaire($_POST['auteurModif'], $_POST['contenuModif'], $_POST['idModif']);
			echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="index.php?page=gestionLivreOr"</SCRIPT>';
			die;
		}
	}

	public function supprimerCommentaireAdmin() {
		$supprimerCommentaireAdmin = $this->GestionLivreModele->suppressionCommentaire($_POST['idActuel']);
		echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="index.php?page=gestionLivreOr"</SCRIPT>';
		die;
	}
}

?>