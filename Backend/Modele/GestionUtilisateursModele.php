<?php

namespace Backend;

require_once ('Modele.php');

class GestionUtilisateursModele extends Modele {

	function __construct() {
		parent::__construct();
	}

	function listeUtilisateurs() {
		$gestionUtilisateurs = $this->bdd->query('SELECT * FROM utilisateurs ORDER BY id DESC LIMIT 0, 10');
		return $gestionUtilisateurs;
		// cette fonction va afficher la liste des commentaires
	}

	/*function nombreUtilisateurs() {
		$compte = $this->bdd->query('SELECT COUNT (*) as nombre FROM utilisateurs');
		return $compte;
	}*/

	function ajouterUtilisateur($pseudo,$email,$motdepasse){
		$ajouter = $this->bdd->prepare('INSERT INTO utilisateurs (pseudo, email, motdepasse) VALUES (:pseudo, :email, :motdepasse)');
		$ajouter->execute(array('pseudo' => $pseudo, 'email' => $email, 'motdepasse' => sha1($motdepasse)));
		return $ajouter;
	}
}