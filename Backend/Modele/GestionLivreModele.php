<?php

namespace Backend;

require_once (root_path . '/vendor/ConnexionUnique.php');

class GestionLivreModele {

	private $con; //variable de connexion

    public function __construct()
    {
        $db = \Cosplay\ConnexionUnique::getInstance();
        $this->con = $db->getDbh();
    }

	function listeCommentaires() {
		$gestionCommentaires = $this->con->query('SELECT * FROM livre ORDER BY id DESC LIMIT 0, 10');
		return $gestionCommentaires;
		// cette fonction va afficher la liste des commentaires
	}

	function listeCommentairesSignales() {
		$gestionCommentairesSignales = $this->con->query('SELECT * FROM livre WHERE statut = 1 ORDER BY id DESC LIMIT 0, 10');
		return $gestionCommentairesSignales;
		// cette fonction va afficher la liste des commentaires
	}

	function recupererInfoCommentaire($id) {
		$informationCommentaireCompte = $this->con->prepare('SELECT * FROM livre WHERE id = ?');
		$informationCommentaireCompte->execute(array($id));
		return $informationCommentaireCompte;
	}

	function validationModificationCommentaire($auteur, $contenu, $id) {
		$modifierCommentaireAdmin = $this->con->prepare('UPDATE livre SET auteur = :auteur, contenu = :contenu WHERE id = :id');
		$modifierCommentaireAdmin->execute(array('auteur' => $auteur, 'contenu' => $contenu, 'id' => $id));
		return $modifierCommentaireAdmin;
	}

	function suppressionCommentaire($id) {
		$supprimerCommentaireAdmin = $this->con->prepare('DELETE FROM livre WHERE id = ?');
		$supprimerCommentaireAdmin->execute(array($id));
		return $supprimerCommentaireAdmin;
	}
}