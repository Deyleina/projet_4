<?php

namespace Frontend;

require_once (root_path . '/vendor/ConnexionUnique.php');

class LivreModele {

	private $con; //variable de connexion

    public function __construct()
    {
        $db = \Cosplay\ConnexionUnique::getInstance();
        $this->con = $db->getDbh();
    }

	function listeCommentaire($debut, $limite) {
		$nombreParPage = 5;
		$totalCommentaire = $this->con->prepare('SELECT * FROM livre ORDER BY date_creation DESC LIMIT ' . $debut . ', ' . $nombreParPage);
		$totalCommentaire->execute();
		return $totalCommentaire;
		// cette fonction va afficher la liste des commentaires
	}

	function countCommentaire() {
		$retour = $this->con->query('SELECT COUNT(*) FROM livre');
		return $retour->fetch()[0];
	}

	function detailCompte($pseudo) {
		$compte = $this->con->prepare('SELECT * FROM utilisateurs WHERE pseudo = :pseudo');
		$compte->execute();
		return $compte;
	}

	function ajouterCommentaire($idUser, $auteur, $contenu) {
		$ajoutCommentaire = $this->con->prepare('INSERT INTO livre (id_utilisateur, auteur, contenu, date_creation) VALUES (:idUser, :auteur, :contenu, NOW())');
		$ajoutCommentaire->execute(array('idUser' => $idUser, 'auteur' => $auteur, 'contenu' => $contenu));
		return $ajoutCommentaire;
	}

	function recupererInfoCommentaire($id) {
		$infoCommentaire = $this->con->prepare('SELECT * FROM livre WHERE id = ?');
		$infoCommentaire->execute(array($id));
		return $infoCommentaire;
	}

	function validationModificationCommentaire($auteur, $contenu, $id) {
		$modifierCommentaire = $this->con->prepare('UPDATE livre SET auteur = :auteur, contenu = :contenu WHERE id = :id');
		$modifierCommentaire->execute(array('auteur' => $auteur, 'contenu' => $contenu, 'id' => $id));
		return $modifierCommentaire;
	}

	function signalementCommentaire($id) {
		$signaler = $this->con->prepare('UPDATE livre SET statut = 1 WHERE id = :id');
		$signaler->execute(array('id' => $id));
		return $signaler;
	}

	function suppressionCommentaire($id) {
		$supprimerCommentaire = $this->con->prepare('DELETE FROM livre WHERE id = ?');
		$supprimerCommentaire->execute(array($id));
		return $supprimerCommentaire;
	}
}