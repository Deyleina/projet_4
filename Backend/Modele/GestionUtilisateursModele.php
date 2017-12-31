<?php

namespace Backend;

require_once (root_path . '/vendor/Modele.php');

class GestionUtilisateursModele extends \Cosplay\Modele {

	function __construct() {
		parent::__construct();
	}

	function listeUtilisateurs() {
		$gestionUtilisateurs = $this->bdd->query('SELECT * FROM utilisateurs ORDER BY id DESC LIMIT 0, 10');
		return $gestionUtilisateurs;
		// cette fonction va afficher la liste des commentaires
	}

	function ajouterUtilisateur($pseudo,$email,$motdepasse){
		$ajouter = $this->bdd->prepare('INSERT INTO utilisateurs (pseudo, email, motdepasse) VALUES (:pseudo, :email, :motdepasse)');
		$ajouter->execute(array('pseudo' => $pseudo, 'email' => $email, 'motdepasse' => sha1($motdepasse)));
		return $ajouter;
	}

	function suppressionUtilisateurDepuisCompteAdmin($id) {
		$supprimerUtilisateurDepuisCompteAdmin = $this->bdd->prepare('DELETE FROM utilisateurs WHERE id = ?');
		$supprimerUtilisateurDepuisCompteAdmin->execute(array($id));
		return $supprimerUtilisateurDepuisCompteAdmin;
	}
}