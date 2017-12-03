<?php

namespace Frontend;

require_once ('Modele.php');

class TravauxEnCoursModele extends Modele {
	function afficherArticle() {
		$travauxEnCours = $this->bdd->query('SELECT image, titre, date, contenu FROM travaux ORDER BY id DESC LIMIT 0, 10');
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