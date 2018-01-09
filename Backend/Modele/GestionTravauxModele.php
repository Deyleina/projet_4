<?php

namespace Backend;

require_once (root_path . '/vendor/ConnexionUnique.php');

class GestionTravauxModele {

	private $con; //variable de connexion

    public function __construct()
    {
        $db = \Cosplay\ConnexionUnique::getInstance();
        $this->con = $db->getDbh();
    }

	function listeTravaux() {
		$gestionTravaux = $this->con->query('SELECT id, image, titre, date, contenu FROM travaux ORDER BY id DESC LIMIT 0, 10');
		return $gestionTravaux;
		// cette fonction va afficher la liste des commentaires
	}

	function suppressionTravaux($id) {
		$supprimerTravaux = $this->con->prepare('DELETE FROM travaux WHERE id = ?');
		$supprimerTravaux->execute(array($id));
		return $supprimerTravaux;
		// cette fonction va afficher la liste des commentaires
	}
}