<?php

namespace Cosplay;

require_once('../Modele/LivreOrModele.php');

class Livre {
	private $LivreOrModele;

	function __construct() {
		$this->LivreOrModele = new LivreModele();
	}

	function commentaireListe() {
		$requete = $this->LivreOrModele->listeCommentaire();
		require('../Vue/web/pageLivreOr.php');
	}
}