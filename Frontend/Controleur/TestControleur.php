<?php

namespace Frontend;

require_once(root_path . '/Frontend/Modele/TestModele.php');

class TestControleur {

	private $TestModele;

	public function __construct() {
		$this->TestModele = new TestModele();
	}

	function afficherPageTest() {
		$test = $this->TestModele->listeTest();
		require(root_path . '/Frontend/Vue/web/pageTest.php');
	}

	function afficherSuiteTest() {
		$testComplet = $this->TestModele->afficherTest();
		require(root_path . '/Frontend/Vue/web/pageTestComplet.php');
	}
}