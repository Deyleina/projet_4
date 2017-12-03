<?php

namespace Frontend;

	class Modele {
		protected $bdd;

		function __construct() {
			try {
			  	$this->bdd = new \PDO('mysql:host=localhost;dbname=projet_5;charset=utf8','root',''); // Tentative de connexion.
			} catch (PDOException $e) { // On attrape les exceptions PDOException.
			  	echo 'Informations : [', $e->getCode(), '] ', $e->getMessage(); // On affiche le n° de l'erreur ainsi que le message.
			}
		}
	}

?>