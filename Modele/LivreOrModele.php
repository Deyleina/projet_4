<?php

namespace Cosplay;

require_once ('Modele.php');

class LivreModele extends Modele {

	function __construct() {
		parent::__construct();
	}

	function listeCommentaire() {
		$com = $this->bdd->query('SELECT pseudo, contenu, date_creation FROM livre ORDER BY date_creation DESC LIMIT 0, 10');
		return $com;
		// cette fonction va afficher la liste des commentaires
	}

	function ajouterCommentaire() {
		// cette fonction va ajouter un test dans la bdd
	}

	function modifierCommentaire() {
		// cette fonction va permettre de modifier un test
	}

	function supprimerCommentaire() {
		// cette fonction va permettre de supprimer un test
	}
}