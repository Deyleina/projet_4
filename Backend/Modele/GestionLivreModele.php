<?php

namespace Backend;

require_once ('Modele.php');

class GestionLivreModele extends Modele {

	function __construct() {
		parent::__construct();
	}

	function listeCommentaires() {
		$gestionCommentaires = $this->bdd->query('SELECT pseudo, contenu FROM livre ORDER BY id DESC LIMIT 0, 10');
		return $gestionCommentaires;
		// cette fonction va afficher la liste des commentaires
	}
}