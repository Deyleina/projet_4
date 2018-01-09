<?php

namespace Frontend;

require_once(root_path . '/vendor/ConnexionUnique.php');
	
class InscriptionModele {
		
	private $con; //variable de connexion

    public function __construct()
    {
        $db = \Cosplay\ConnexionUnique::getInstance();
        $this->con = $db->getDbh();
    }

	public function ajoutUtilisateur($pseudo,$email,$motdepasse){
		$ajout = $this->con->prepare('INSERT INTO utilisateurs (pseudo, email, motdepasse, avatar) VALUES (:pseudo, :email, :motdepasse, "no_avatar.png")');
		$ajout->execute(array('pseudo' => $pseudo, 'email' => $email, 'motdepasse' => sha1($motdepasse)));
		return $ajout;
	}
}

?>