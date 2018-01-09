<?php

namespace Backend;

require_once (root_path . '/vendor/ConnexionUnique.php');

class CompteModele {

	private $con; //variable de connexion

    public function __construct()
    {
        $db = \Cosplay\ConnexionUnique::getInstance();
        $this->con = $db->getDbh();
    }

	function detailCompte($pseudo) {
		$compte = $this->con->prepare('SELECT * FROM utilisateurs WHERE pseudo = :pseudo');
		$compte->execute(array('pseudo' => $pseudo));
		return $compte;
		// cette fonction va afficher la liste des commentaires
	}

	function ajoutAvatarPredefini() {
		$ajoutAvatarPredefini = $this->con->query('INSERT INTO utilisateurs');
		return $ajoutAvatarPredefini;
	}

	function listeAvatarsFilles() {
		$infoAvatarFilles = $this->con->query('SELECT * FROM avatars ORDER BY id LIMIT 32');
		return $infoAvatarFilles;
	}

	function listeAvatarsGarçons() {
		$infoAvatarGarçons = $this->con->query('SELECT * FROM avatars ORDER BY id LIMIT 33,56');
		return $infoAvatarGarçons;
	}

	function ajouterAvatarPredefiniFille($avatar, $id) {
		$choixAvatarFille = $this->con->prepare('UPDATE utilisateurs SET avatar = :avatar WHERE id = :id)');
		$choixAvatarFille->execute(array('avatar' => $avatar, 'id' => $id));
		return $choixAvatarFille;
	}

	function ajouterAvatarPredefiniGarçon($avatar, $id) {
		$choixAvatarGarçon = $this->con->prepare('UPDATE utilisateurs SET avatar = :avatar WHERE id = :id)');
		$choixAvatarGarçon->execute(array('avatar' => $avatar, 'id' => $id));
		return $choixAvatarGarçon;
	}

	function listeCommentaires($auteur) {
		$infoCommentaire = $this->con->prepare('SELECT * FROM livre WHERE auteur = :auteur ORDER BY id DESC LIMIT 0, 3');
		$infoCommentaire->execute(array('auteur' => $auteur));
		return $infoCommentaire;
	}

	function modificationCompte($id) {
		$infoCompte = $this->con->prepare('SELECT * FROM utilisateurs WHERE id = ?');
		$infoCompte->execute(array($id));
		return $infoCompte;
	}

	function validationModification($pseudo, $email, $motdepasse, $id) {
		$valide = $this->con->prepare('UPDATE utilisateurs SET pseudo = :pseudo, email = :email, motdepasse = :motdepasse WHERE id = :id');
		$valide->execute(array('pseudo' => $pseudo, 'email' => $email, 'motdepasse' => $motdepasse, 'id' => $id));
		return $valide;
	}

	function modificationAvatar($id) {
		$infoAvatar = $this->con->prepare('SELECT * FROM utilisateurs WHERE id = ?');
		$infoAvatar->execute(array($id));
		return $infoAvatar;
	}

	function validationModificationAvatar($avatar, $id) {
		$valideAvatar = $this->con->prepare('UPDATE utilisateurs SET avatar = :avatar WHERE id = :id');
		$valideAvatar->execute(array('avatar' => $avatar, 'id' => $id));
		return $valideAvatar;
	}

	function suppressionCompte($id) {
		$supprimerCompte = $this->con->prepare('DELETE FROM utilisateurs WHERE id = ?');
		$supprimerCompte->execute(array($id));
		return $supprimerCompte;
	}
}