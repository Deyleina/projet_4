<?php

namespace Frontend;

require_once('Modele.php');
	
class InscriptionModele extends Modele{
		
	function __construct(){
		parent::__construct();
	}

	public function ajoutUtilisateur($pseudo,$email,$motdepasse){
		$ajout = $this->bdd->prepare('INSERT INTO utilisateurs (pseudo, email, motdepasse) VALUES (:pseudo, :email, :motdepasse)');
		$ajout->execute(array('pseudo' => $pseudo, 'email' => $email, 'motdepasse' => sha1($motdepasse)));
		return $ajout;
	}
}

?>