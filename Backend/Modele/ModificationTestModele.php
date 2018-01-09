<?php

namespace Backend;

require_once (root_path . '/vendor/ConnexionUnique.php');

class ModificationTestModele {

	private $con; //variable de connexion

    public function __construct()
    {
        $db = \Cosplay\ConnexionUnique::getInstance();
        $this->con = $db->getDbh();
    }

	function recupererInfoTest($id) {
		$infoTest = $this->con->prepare('SELECT * FROM test WHERE id = ?');
		$infoTest->execute(array($id));
		return $infoTest;
	}

	public function validationModificationTest($plateforme, $developpeur, $genre, $intro, $titre, $image, $contenu, $id) {
		$modifierTest = $this->con->prepare('UPDATE test SET plateforme = :plateforme, developpeur = :developpeur, genre = :genre, intro = :intro, titre = :titre, image = :image, contenu = :contenu WHERE id = :id');
		$modifierTest->execute(array('plateforme' => $plateforme, 'developpeur' => $developpeur, 'genre' => $genre, 'intro' => $intro, 'titre' => $titre, 'image' => $image, 'contenu' => $contenu, 'id' => $id));
		return $modifierTest;
	}
}