<?php

namespace Backend;

require_once (root_path . '/vendor/ConnexionUnique.php');

class ModificationTravauxModele {

	private $con; //variable de connexion

    public function __construct()
    {
        $db = \Cosplay\ConnexionUnique::getInstance();
        $this->con = $db->getDbh();
    }

	function recupererInfoTravaux($id) {
		$infoTravaux = $this->con->prepare('SELECT * FROM travaux WHERE id = ?');
		$infoTravaux->execute(array($id));
		return $infoTravaux;
	}

	public function validationModificationTravaux($image, $titre, $contenu, $id) {
		$modifierTravaux = $this->con->prepare('UPDATE travaux SET image = :image, titre = :titre, contenu = :contenu, date = NOW() WHERE id = :id');
		$modifierTravaux->execute(array('image' => $image, 'titre' => $titre, 'contenu' => $contenu, 'id' => $id));
		return $modifierTravaux;
	}
}