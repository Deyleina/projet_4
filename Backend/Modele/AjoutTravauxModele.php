<?php

namespace Backend;

require_once ('Modele.php');

class AjoutTravauxModele extends Modele {

	function __construct() {
		parent::__construct();
	}

	function validerAjouterTravaux($image, $titre, $contenu) {
		$validerAjoutTravaux = $this->bdd->prepare('INSERT INTO travaux (image, titre, contenu) VALUES (:image, :titre, :contenu)');
		$validerAjoutTravaux->execute(array('image' => $image, 'titre' => $titre, 'contenu' => $contenu));
		return $validerAjoutTravaux;
		// cette fonction va afficher la liste des commentaires
	}
}