<?php

namespace Frontend;

require_once('Modele.php');
	
class ConnexionModele extends Modele{
		
	function __construct(){
		parent::__construct();
	}

	function utilisateurConnexion($pseudo) {
		$connexion = $this->bdd->prepare('SELECT * FROM utilisateurs WHERE pseudo = :pseudo');
		$connexion-> execute(array('pseudo' => $pseudo));
		return $connexion;
		// cette fonction va afficher la liste des tests dans la page
	}
}

?>