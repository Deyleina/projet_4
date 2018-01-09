<?php

namespace Frontend;

require_once (root_path . '/vendor/ConnexionUnique.php');

class TravauxEnCoursModele {

	private $con; //variable de connexion

    public function __construct()
    {
        $db = \Cosplay\ConnexionUnique::getInstance();
        $this->con = $db->getDbh();
    }

	function afficherArticle() {
		$travauxEnCours = $this->con->query('SELECT image, titre, date, contenu FROM travaux ORDER BY id DESC LIMIT 0, 10');
		return $travauxEnCours;
		// cette fonction va afficher la liste des commentaires
	}

	function ajouterArticle() {
		// cette fonction va ajouter un article dans la bdd
	}

	function modifierArticle() {
		// cette fonction va permettre de modifier un article
	}

	function supprimerArticle() {
		// cette fonction va permettre de supprimer un article
	}
}