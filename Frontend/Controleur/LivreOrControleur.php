<?php

namespace Frontend;

require_once(root_path . '/Frontend/Modele/LivreOrModele.php');

class LivreOrControleur {
	private $LivreOrModele;

	function __construct() {
		$this->LivreOrModele = new LivreModele();
	}

	function afficherPageLivreOr() {
		$com = $this->LivreOrModele->listeCommentaire();
		require(root_path . '/Frontend/Vue/web/pageLivreOr.php');
	}

	function envoyerCommentaire() {
		$ajoutCom = $this->LivreOrModele->ajouterCommentaire($_POST['nouveauPseudo'], $_POST['nouveauContenu'], $_POST['idUser']);
		require(root_path . '/Frontend/Vue/web/pageAccueil.php');
	}

	function infoCommentaire() {
		if (isset($_GET['recup'])) {
			$infoCom = $this->LivreOrModele->recupererInfoCommentaire($_GET['recup']);
			require(root_path . '/Frontend/Vue/web/pageModificationCommentaire.php');
		}
	}

	function modifierCommentaire() {
		$modifierCom = $this->LivreOrModele->validationModificationCommentaire($_POST['pseudoModif'], $_POST['contenuModif'], $_POST['idModif']);
		require(root_path . '/Frontend/Vue/web/pageAccueil.php');
	}

	function supprimerCommentaire() {
		$suppCom = $this->LivreOrModele->suppressionCommentaire($_POST['idActuel']);
		require(root_path . '/Frontend/Vue/web/pageAccueil.php');
	}
}