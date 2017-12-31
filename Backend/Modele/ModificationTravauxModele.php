<?php

namespace Backend;

require_once (root_path . '/vendor/Modele.php');

class ModificationTravauxModele extends \Cosplay\Modele {

	function __construct() {
		parent::__construct();
	}

	function recupererInfoTravaux($id) {
		$infoTravaux = $this->bdd->prepare('SELECT * FROM travaux WHERE id = ?');
		$infoTravaux->execute(array($id));
		return $infoTravaux;
	}

	public function validationModificationTravaux($image, $titre, $contenu, $id) {
		$modifierTravaux = $this->bdd->prepare('UPDATE travaux SET image = :image, titre = :titre, contenu = :contenu, date = NOW() WHERE id = :id');
		$modifierTravaux->execute(array('image' => $image, 'titre' => $titre, 'contenu' => $contenu, 'id' => $id));
		return $modifierTravaux;
	}
}