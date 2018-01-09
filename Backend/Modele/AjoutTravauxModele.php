<?php

namespace Backend;

require_once (root_path . '/vendor/ConnexionUnique.php');

class AjoutTravauxModele {

	private $con; //variable de connexion

    public function __construct()
    {
        $db = \Cosplay\ConnexionUnique::getInstance();
        $this->con = $db->getDbh();
    }

	function ajoutTravaux($image, $titre, $contenu) {
		$ajouterTravaux = $this->con->prepare('INSERT INTO travaux (image, titre, contenu, date) VALUES (:image, :titre, :contenu, NOW())');
		$ajouterTravaux->execute(array('image' => $image, 'titre' => $titre, 'contenu' => $contenu));
		return $ajouterTravaux;
		// cette fonction va afficher la liste des commentaires
	}
}