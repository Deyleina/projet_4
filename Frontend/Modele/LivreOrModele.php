<?php

namespace Frontend;

require_once (root_path . '/vendor/Modele.php');

class LivreModele extends \Cosplay\Modele {

	function __construct() {
		parent::__construct();
	}

	function listeCommentaire($debut, $limite) {
		$nombreParPage = 5;
		$totalCommentaire = $this->bdd->prepare('SELECT * FROM livre ORDER BY date_creation DESC LIMIT ' . $debut . ', ' . $nombreParPage);
		$totalCommentaire->execute();
		return $totalCommentaire;
		// cette fonction va afficher la liste des commentaires
	}

	function countCommentaire() {
		$retour = $this->bdd->query('SELECT COUNT(*) FROM livre');
		return $retour->fetch()[0];
	}

	function detailCompte($pseudo) {
		$compte = $this->bdd->prepare('SELECT * FROM utilisateurs WHERE pseudo = :pseudo');
		$compte->execute();
		return $compte;
	}

	function ajouterCommentaire($idUser, $auteur, $contenu) {
		$ajoutCommentaire = $this->bdd->prepare('INSERT INTO livre (id_utilisateur, auteur, contenu, date_creation) VALUES (:idUser, :auteur, :contenu, NOW())');
		$ajoutCommentaire->execute(array('idUser' => $idUser, 'auteur' => $auteur, 'contenu' => $contenu));
		return $ajoutCommentaire;
	}

	function recupererInfoCommentaire($id) {
		$infoCommentaire = $this->bdd->prepare('SELECT * FROM livre WHERE id = ?');
		$infoCommentaire->execute(array($id));
		return $infoCommentaire;
	}

	function validationModificationCommentaire($auteur, $contenu, $id) {
		$modifierCommentaire = $this->bdd->prepare('UPDATE livre SET auteur = :auteur, contenu = :contenu WHERE id = :id');
		$modifierCommentaire->execute(array('auteur' => $auteur, 'contenu' => $contenu, 'id' => $id));
		return $modifierCommentaire;
	}

	function signalementCommentaire($id) {
		$signaler = $this->bdd->prepare('UPDATE livre SET statut = 1 WHERE id = :id');
		$signaler->execute(array('id' => $id));
		return $signaler;
	}

	function suppressionCommentaire($id) {
		$supprimerCommentaire = $this->bdd->prepare('DELETE FROM livre WHERE id = ?');
		$supprimerCommentaire->execute(array($id));
		return $supprimerCommentaire;
	}
}