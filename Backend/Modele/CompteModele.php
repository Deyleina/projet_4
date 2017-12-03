<?php

namespace Backend;

require_once ('Modele.php');

class CompteModele extends Modele {

	function __construct() {
		parent::__construct();
	}

	function detailCompte($pseudo) {
		$compte = $this->bdd->prepare('SELECT * FROM utilisateurs WHERE pseudo = :pseudo');
		$compte->execute(array('pseudo' => $pseudo));
		return $compte;
		// cette fonction va afficher la liste des commentaires
	}

	function listeCom($idUser) {
		$infoCom = $this->bdd->prepare('SELECT * FROM livre WHERE id_utilisateur = :id ORDER BY id DESC LIMIT 0, 3');
		$infoCom->execute(array('id' => $idUser));
		return $infoCom;
	}

	function modificationCompte($id) {
		$infoCompte = $this->bdd->prepare('SELECT * FROM utilisateurs WHERE id = ?');
		$infoCompte->execute(array($id));
		return $infoCompte;
	}

	function validationModification($pseudo, $email, $motdepasse, $id) {
		$valide = $this->bdd->prepare('UPDATE utilisateurs SET pseudo = :pseudo, email = :email, motdepasse = :motdepasse WHERE id = :id');
		$valide->execute(array('pseudo' => $pseudo, 'email' => $email, 'motdepasse' => $motdepasse, 'id' => $id));
		return $valide;
	}

	function suppressionCompte($id) {
		$supprimerCompte = $this->bdd->prepare('DELETE FROM utilisateurs WHERE id = ?');
		$supprimerCompte->execute(array($id));
		return $supprimerCompte;
	}
}