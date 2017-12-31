<?php

namespace Backend;

require_once (root_path . '/vendor/Modele.php');

class ModificationTestModele extends \Cosplay\Modele {

	function __construct() {
		parent::__construct();
	}

	function recupererInfoTest($id) {
		$infoTest = $this->bdd->prepare('SELECT * FROM test WHERE id = ?');
		$infoTest->execute(array($id));
		return $infoTest;
	}

	public function validationModificationTest($plateforme, $developpeur, $genre, $intro, $titre, $image, $contenu, $id) {
		$modifierTest = $this->bdd->prepare('UPDATE test SET plateforme = :plateforme, developpeur = :developpeur, genre = :genre, intro = :intro, titre = :titre, image = :image, contenu = :contenu WHERE id = :id');
		$modifierTest->execute(array('plateforme' => $plateforme, 'developpeur' => $developpeur, 'genre' => $genre, 'intro' => $intro, 'titre' => $titre, 'image' => $image, 'contenu' => $contenu, 'id' => $id));
		return $modifierTest;
	}
}