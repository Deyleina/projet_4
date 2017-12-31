<?php

namespace Backend;

require_once (root_path . '/vendor/Modele.php');

class AjoutTravauxModele extends \Cosplay\Modele {

	function __construct() {
		parent::__construct();
	}

	function ajoutTravaux($image, $titre, $contenu) {
		$ajouterTravaux = $this->bdd->prepare('INSERT INTO travaux (image, titre, contenu, date) VALUES (:image, :titre, :contenu, NOW())');
		$ajouterTravaux->execute(array('image' => $image, 'titre' => $titre, 'contenu' => $contenu));
		return $ajouterTravaux;
		// cette fonction va afficher la liste des commentaires
	}
}