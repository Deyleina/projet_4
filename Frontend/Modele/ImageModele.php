<?php

namespace Frontend;

require_once (root_path . '/vendor/Modele.php');

class ImageModele extends \Cosplay\Modele {

	function __construct() {
		parent::__construct();
	}

	/* function ajouterImage($pseudo, $contenu, $idUser) {
		$ajoutCommentaire = $this->bdd->prepare('INSERT INTO livre (id_utilisateur, pseudo, contenu, date_creation) VALUES (:idUser, :pseudo, :contenu, NOW())');
		$ajoutCommentaire->execute(array('idUser' => $idUser, 'pseudo' => $pseudo, 'contenu' => $contenu));
		return $ajoutCommentaire;
	} */
}