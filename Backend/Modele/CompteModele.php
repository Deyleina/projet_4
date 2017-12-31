<?php

namespace Backend;

require_once (root_path . '/vendor/Modele.php');

class CompteModele extends \Cosplay\Modele {

	function __construct() {
		parent::__construct();
	}

	function detailCompte($pseudo) {
		$compte = $this->bdd->prepare('SELECT * FROM utilisateurs WHERE pseudo = :pseudo');
		$compte->execute(array('pseudo' => $pseudo));
		return $compte;
		// cette fonction va afficher la liste des commentaires
	}

	function ajoutAvatarPredefini() {
		$ajoutAvatarPredefini = $this->bdd->query('INSERT INTO utilisateurs');
		return $ajoutAvatarPredefini;
	}

	function listeAvatarsFilles() {
		$infoAvatarFilles = $this->bdd->query('SELECT * FROM avatars ORDER BY id LIMIT 32');
		return $infoAvatarFilles;
	}

	function listeAvatarsGarçons() {
		$infoAvatarGarçons = $this->bdd->query('SELECT * FROM avatars ORDER BY id LIMIT 33,56');
		return $infoAvatarGarçons;
	}

	function ajouterAvatarPredefiniFille($avatar, $id) {
		$choixAvatarFille = $this->bdd->prepare('UPDATE utilisateurs SET avatar = :avatar WHERE id = :id)');
		$choixAvatarFille->execute(array('avatar' => $avatar, 'id' => $id));
		return $choixAvatarFille;
	}

	function ajouterAvatarPredefiniGarçon($avatar, $id) {
		$choixAvatarGarçon = $this->bdd->prepare('UPDATE utilisateurs SET avatar = :avatar WHERE id = :id)');
		$choixAvatarGarçon->execute(array('avatar' => $avatar, 'id' => $id));
		return $choixAvatarGarçon;
	}

	function listeCommentaires($auteur) {
		$infoCommentaire = $this->bdd->prepare('SELECT * FROM livre WHERE auteur = :auteur ORDER BY id DESC LIMIT 0, 3');
		$infoCommentaire->execute(array('auteur' => $auteur));
		return $infoCommentaire;
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

	function modificationAvatar($id) {
		$infoAvatar = $this->bdd->prepare('SELECT * FROM utilisateurs WHERE id = ?');
		$infoAvatar->execute(array($id));
		return $infoAvatar;
	}

	function validationModificationAvatar($avatar, $id) {
		$valideAvatar = $this->bdd->prepare('UPDATE utilisateurs SET avatar = :avatar WHERE id = :id');
		$valideAvatar->execute(array('avatar' => $avatar, 'id' => $id));
		return $valideAvatar;
	}

	function suppressionCompte($id) {
		$supprimerCompte = $this->bdd->prepare('DELETE FROM utilisateurs WHERE id = ?');
		$supprimerCompte->execute(array($id));
		return $supprimerCompte;
	}
}