<?php

namespace Frontend;

require_once(root_path . '/vendor/Modele.php');
	
class InscriptionModele extends \Cosplay\Modele{
		
	function __construct(){
		parent::__construct();
	}

	public function ajoutUtilisateur($pseudo,$email,$motdepasse){
		$ajout = $this->bdd->prepare('INSERT INTO utilisateurs (pseudo, email, motdepasse, avatar) VALUES (:pseudo, :email, :motdepasse, "no_avatar.png")');
		$ajout->execute(array('pseudo' => $pseudo, 'email' => $email, 'motdepasse' => sha1($motdepasse)));
		return $ajout;
	}
}

?>