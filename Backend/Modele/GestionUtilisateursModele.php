<?php

namespace Backend;

require_once (root_path . '/vendor/ConnexionUnique.php');

class GestionUtilisateursModele {

	private $con; //variable de connexion

    public function __construct()
    {
        $db = \Cosplay\ConnexionUnique::getInstance();
        $this->con = $db->getDbh();
    }

	function listeUtilisateurs() {
		$gestionUtilisateurs = $this->con->query('SELECT * FROM utilisateurs ORDER BY id DESC LIMIT 0, 10');
		return $gestionUtilisateurs;
		// cette fonction va afficher la liste des commentaires
	}

	function ajouterUtilisateur($pseudo,$email,$motdepasse){
		$ajouter = $this->con->prepare('INSERT INTO utilisateurs (pseudo, email, motdepasse) VALUES (:pseudo, :email, :motdepasse)');
		$ajouter->execute(array('pseudo' => $pseudo, 'email' => $email, 'motdepasse' => sha1($motdepasse)));
		return $ajouter;
	}

	function suppressionUtilisateurDepuisCompteAdmin($id) {
		$supprimerUtilisateurDepuisCompteAdmin = $this->con->prepare('DELETE FROM utilisateurs WHERE id = ?');
		$supprimerUtilisateurDepuisCompteAdmin->execute(array($id));
		return $supprimerUtilisateurDepuisCompteAdmin;
	}
}