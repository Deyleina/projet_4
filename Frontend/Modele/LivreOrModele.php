<?php

namespace Frontend;

require_once ('Modele.php');

class LivreModele extends Modele {

	function __construct() {
		parent::__construct();
	}

	function listeCommentaire() {
		$com = $this->bdd->query('SELECT * FROM livre ORDER BY date_creation DESC LIMIT 0, 10');
		return $com;
		// cette fonction va afficher la liste des commentaires
	}

	function ajouterCommentaire($pseudo, $contenu, $idUser) {
		$ajoutCom = $this->bdd->prepare('INSERT INTO livre (id_utilisateur, pseudo, contenu, date_creation) VALUES (:idUser, :pseudo, :contenu, NOW())');
		$ajoutCom->execute(array('idUser' => $idUser, 'pseudo' => $pseudo, 'contenu' => $contenu));
		return $ajoutCom;
	}

	function recupererInfoCommentaire($id) {
		$infoCom = $this->bdd->prepare('SELECT * FROM livre WHERE id = ?');
		$infoCom->execute(array($id));
		return $infoCom;
	}

	function validationModificationCommentaire($pseudo, $contenu, $id) {
		$modifierCom = $this->bdd->prepare('UPDATE livre SET pseudo = :pseudo, contenu = :contenu WHERE id = :id');
		$modifierCom->execute(array('pseudo' => $pseudo, 'contenu' => $contenu, 'id' => $id));
		return $modifierCom;
	}

	function suppressionCommentaire($id) {
		$suppCom = $this->bdd->prepare('DELETE FROM livre WHERE id = ?');
		$suppCom->execute(array($id));
		return $suppCom;
	}
}