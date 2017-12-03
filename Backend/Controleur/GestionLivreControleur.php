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
		require (root_path . '/Backend/Vue/web/pageGestionLivre.php');
	}

}

?>