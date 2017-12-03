<?php

namespace Frontend;

require_once ('Modele.php');

class TestModele extends Modele {
	function listeTest() {
		$test = $this->bdd->query('SELECT plateforme, développeur, genre, intro FROM test ORDER BY id DESC LIMIT 0, 10');
		return $test;
		// cette fonction va afficher la liste des tests dans la page
	}

	function afficherTest() {
		$testComplet = $this->bdd->query('SELECT titre, image, contenu FROM test ORDER BY id DESC LIMIT 0, 10');
		return $testComplet;
	}

	function ajouterTest() {
		// cette fonction va ajouter un test dans la bdd
	}

	function modifierTest() {
		// cette fonction va permettre de modifier un test
	}

	function supprimerTest() {
		// cette fonction va permettre de supprimer un test
	}
}