<?php

namespace Backend;

require_once (root_path . '/vendor/Modele.php');

class GestionTravauxModele extends \Cosplay\Modele {

	function __construct() {
		parent::__construct();
	}

	function listeTravaux() {
		$gestionTravaux = $this->bdd->query('SELECT id, image, titre, date, contenu FROM travaux ORDER BY id DESC LIMIT 0, 10');
		return $gestionTravaux;
		// cette fonction va afficher la liste des commentaires
	}

	function suppressionTravaux($id) {
		$supprimerTravaux = $this->bdd->prepare('DELETE FROM travaux WHERE id = ?');
		$supprimerTravaux->execute(array($id));
		return $supprimerTravaux;
		// cette fonction va afficher la liste des commentaires
	}
}