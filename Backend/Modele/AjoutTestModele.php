<?php

namespace Backend;

require_once (root_path . '/vendor/ConnexionUnique.php');

class AjoutTestModele {

	private $con; //variable de connexion

    public function __construct()
    {
        $db = \Cosplay\ConnexionUnique::getInstance();
        $this->con = $db->getDbh();
    }

	public function ajoutTest($plateforme, $developpeur, $genre, $intro, $titre, $image, $contenu) {
		$ajouterTest = $this->con->prepare('INSERT INTO test (plateforme, developpeur, genre, intro, titre, image, contenu) VALUES (:plateforme, :developpeur, :genre, :intro, :titre, :image, :contenu)');
		$ajouterTest->execute(array('plateforme' => $plateforme, 'developpeur' => $developpeur, 'genre' => $genre, 'intro' => $intro, 'titre' => $titre, 'image' => $image, 'contenu' => $contenu));
		return $ajouterTest;
	}
}