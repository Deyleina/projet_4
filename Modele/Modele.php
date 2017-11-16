<?php

namespace Cosplay;

	class Modele {
		protected $bdd;

		function __construct() {
			$this->bdd = new \PDO('mysql:host=localhost;dbname=projet_5;charset=utf8','root','');
		}
	}

?>