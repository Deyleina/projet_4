<?php

namespace Frontend;

require_once(root_path . '/vendor/ConnexionUnique.php');

class PagesModele {

	private $con; //variable de connexion

    public function __construct()
    {
        $db = \Cosplay\ConnexionUnique::getInstance();
        $this->con = $db->getDbh();
    }
    
	function page() {}
}