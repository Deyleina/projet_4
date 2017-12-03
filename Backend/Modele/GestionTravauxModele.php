<?php

namespace Backend;

require_once ('Modele.php');

class GestionTravauxModele extends Modele {

	function __construct() {
		parent::__construct();
	}

	function listeTravaux() {
		$gestionTravaux = $this->bdd->query('SELECT id, image, titre, date, contenu FROM travaux ORDER BY id DESC LIMIT 0, 10');
		return $gestionTravaux;
		// cette fonction va afficher la liste des commentaires
	}

	function validerModifierTravaux($image, $titre, $contenu, $id) {
		$validerModificationTravaux = $this->bdd->prepare('UPDATE travaux SET image = :image, titre = :titre, date = NOW(), contenu = :contenu) WHERE id = :id');
		$validerModificationTravaux->execute(array('image' => $image, 'titre' => $titre, 'contenu' => $contenu, 'id' => $id));
		return $validerModificationTravaux;
		// cette fonction va afficher la liste des commentaires
	}

	function supprimerTravaux($id) {
		$supprimerTravaux = $this->bdd->query('DELETE * FROM travaux WHERE id = :id');
		$supprimerTravaux->execute(array('id' => $id));
		return $supprimerTravaux;
		// cette fonction va afficher la liste des commentaires
	}
}