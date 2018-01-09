<?php

namespace Frontend;

require_once(root_path . '/vendor/ConnexionUnique.php');
	
class ConnexionModele{

	private $con; //variable de connexion

    public function __construct()
    {
        $db = \Cosplay\ConnexionUnique::getInstance();
        $this->con = $db->getDbh();
    }
		
	function utilisateurConnexion($pseudo) {
		$connexion = $this->con->prepare('SELECT * FROM utilisateurs WHERE pseudo = :pseudo');
		$connexion-> execute(array('pseudo' => $pseudo));
		return $connexion;
		// cette fonction va afficher la liste des tests dans la page
	}
}

?>