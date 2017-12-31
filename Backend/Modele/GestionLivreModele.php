<?php

namespace Backend;

require_once (root_path . '/vendor/Modele.php');

class GestionLivreModele extends \Cosplay\Modele {

	function __construct() {
		parent::__construct();
	}

	function listeCommentaires() {
		$gestionCommentaires = $this->bdd->query('SELECT * FROM livre ORDER BY id DESC LIMIT 0, 10');
		return $gestionCommentaires;
		// cette fonction va afficher la liste des commentaires
	}

	function listeCommentairesSignales() {
		$gestionCommentairesSignales = $this->bdd->query('SELECT * FROM livre WHERE statut = 1 ORDER BY id DESC LIMIT 0, 10');
		return $gestionCommentairesSignales;
		// cette fonction va afficher la liste des commentaires
	}

	function recupererInfoCommentaire($id) {
		$informationCommentaireCompte = $this->bdd->prepare('SELECT * FROM livre WHERE id = ?');
		$informationCommentaireCompte->execute(array($id));
		return $informationCommentaireCompte;
	}

	function validationModificationCommentaire($auteur, $contenu, $id) {
		$modifierCommentaireAdmin = $this->bdd->prepare('UPDATE livre SET auteur = :auteur, contenu = :contenu WHERE id = :id');
		$modifierCommentaireAdmin->execute(array('auteur' => $auteur, 'contenu' => $contenu, 'id' => $id));
		return $modifierCommentaireAdmin;
	}

	function suppressionCommentaire($id) {
		$supprimerCommentaireAdmin = $this->bdd->prepare('DELETE FROM livre WHERE id = ?');
		$supprimerCommentaireAdmin->execute(array($id));
		return $supprimerCommentaireAdmin;
	}
}