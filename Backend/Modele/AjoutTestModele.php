<?php

namespace Backend;

require_once (root_path . '/vendor/Modele.php');

class AjoutTestModele extends \Cosplay\Modele {

	function __construct() {
		parent::__construct();
	}

	public function ajoutTest($plateforme, $developpeur, $genre, $intro, $titre, $image, $contenu) {
		$ajouterTest = $this->bdd->prepare('INSERT INTO test (plateforme, developpeur, genre, intro, titre, image, contenu) VALUES (:plateforme, :developpeur, :genre, :intro, :titre, :image, :contenu)');
		$ajouterTest->execute(array('plateforme' => $plateforme, 'developpeur' => $developpeur, 'genre' => $genre, 'intro' => $intro, 'titre' => $titre, 'image' => $image, 'contenu' => $contenu));
		return $ajouterTest;
	}
}