<?php

namespace Frontend;

require_once (root_path . '/vendor/ConnexionUnique.php');

class ImageModele {

	private $con; //variable de connexion

    public function __construct()
    {
        $db = \Cosplay\ConnexionUnique::getInstance();
        $this->con = $db->getDbh();
    }

	/* function ajouterImage($pseudo, $contenu, $idUser) {
		$ajoutCommentaire = $this->bdd->prepare('INSERT INTO livre (id_utilisateur, pseudo, contenu, date_creation) VALUES (:idUser, :pseudo, :contenu, NOW())');
		$ajoutCommentaire->execute(array('idUser' => $idUser, 'pseudo' => $pseudo, 'contenu' => $contenu));
		return $ajoutCommentaire;
	} */
}