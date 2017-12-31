<?php

namespace Backend;

require_once (root_path . '/vendor/Modele.php');

class AdminModele extends \Cosplay\Modele {

	function __construct() {
		parent::__construct();
	}

	function detailCompteAdmin($pseudo) {
		$admin = $this->bdd->prepare('SELECT * FROM utilisateurs WHERE pseudo = :pseudo');
		$admin->execute(array('pseudo' => $pseudo));
		return $admin;
		// cette fonction va afficher la liste des commentaires
	}
}