<?php

namespace Cosplay;

require_once(root_path . '/Modele/LivreOrModele.php');

class Livre {
	private $LivreOrModele;

	function __construct() {
		$this->LivreOrModele = new LivreModele();
	}

	function commentaireListe() {
		$requete = $this->LivreOrModele->listeCommentaire();
		require(root_path . '/Vue/web/pageLivreOr.html');
	}
}