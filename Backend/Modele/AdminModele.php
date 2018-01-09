<?php

namespace Backend;

require_once (root_path . '/vendor/ConnexionUnique.php');

class AdminModele {

	private $con; //variable de connexion

    public function __construct()
    {
        $db = \Cosplay\ConnexionUnique::getInstance();
        $this->con = $db->getDbh();
    }

	function detailCompteAdmin($pseudo) {
		$admin = $this->con->prepare('SELECT * FROM utilisateurs WHERE pseudo = :pseudo');
		$admin->execute(array('pseudo' => $pseudo));
		return $admin;
		// cette fonction va afficher la liste des commentaires
	}
}