<?php

namespace Frontend;

require_once(root_path . '/Frontend/Modele/LivreOrModele.php');

class LivreOrControleur {
	private $LivreOrModele;

	function __construct() {
		$this->LivreOrModele = new LivreModele();
	}

	function afficherPageLivreOr() {
		$nombreParPage = 5; // On met dans une variable le nombre de messages qu'on veut par page
		//$totalCommentaire = $this->LivreOrModele->listeCommentaire();
		//$listeCommentaires = $totalCommentaire->fetchAll();

		$totalDesCommentaires = $this->LivreOrModele->countCommentaire();

		if (isset($_GET['p'])) {
			$pageActuelle = $_GET['p'];
		} else {
			$pageActuelle = 1;
		}

		if ($pageActuelle == null) {
			$debut = 0;
			$pageSuivante = 2;
			$pagePrecedente = null;
		} else {
			$debut = $pageActuelle * $nombreParPage - $nombreParPage;
			$pagePrecedente = $pageActuelle - 1;
			if (($pageActuelle * $nombreParPage) < $totalDesCommentaires) {
				$pageSuivante = $pageActuelle + 1;
			} else {
				$pageSuivante = null;
			}
		}

		$totalCommentaire = $this->LivreOrModele->listeCommentaire($debut, $nombreParPage);
		$compte = $this->LivreOrModele->detailCompte($_SESSION['pseudo']);

		require(root_path . '/Frontend/Vue/web/pageLivreOr.php');
	}

	function envoyerCommentaire() {
		if (isset($_SESSION)) {
			$ajoutCommentaire = $this->LivreOrModele->ajouterCommentaire($_POST['idUser'], $_POST['nouvelAuteur'], $_POST['nouveauContenu']);
			echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="index.php?page=livre"</SCRIPT>';
			die;
		} else {
			echo '<p style="text-align:center;font-weight:bold;color:red;">Seul un utilisateur connecté peut envoyer un commentaire !<p>';
		}
	}

	function infoCommentaire() {
		if (isset($_GET['recup'])) {
			$infoCommentaire = $this->LivreOrModele->recupererInfoCommentaire($_GET['recup']);
			$informationCommentaire = $infoCommentaire->fetchAll();
			require(root_path . '/Frontend/Vue/web/pageModificationCommentaire.php');
		}
	}

	function modifierCommentaire() {
		if (empty($_POST['auteurModif']) || empty($_POST['contenuModif'])) {
			echo '<script>Javascript:alert("Merci de remplir tous les champs !")</script>';
			echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="index.php?page=livre"</SCRIPT>';
			die;
		} else {
			$modifierCommentaire = $this->LivreOrModele->validationModificationCommentaire($_POST['auteurModif'], $_POST['contenuModif'], $_POST['idModif']);
			echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="index.php?page=livre"</SCRIPT>';
			die;
		}
	}

	function signalerCommentaire() {
		$signalerCommentaire = $this->LivreOrModele->signalementCommentaire($_POST['idActuel']);
		echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="index.php?page=livre"</SCRIPT>';
		die;
	}

	function supprimerCommentaire() {
		$supprimerCommentaire = $this->LivreOrModele->suppressionCommentaire($_POST['idActuel']);
		echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="index.php?page=livre"</SCRIPT>';
		die;
	}
}