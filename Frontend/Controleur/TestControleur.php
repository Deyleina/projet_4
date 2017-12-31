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
		$listeTests = $test->fetchAll();
		require(root_path . '/Frontend/Vue/web/pageTest.php');
		$test->closeCursor();
	}

	function afficherSuiteTest() {
		if (isset($_GET['recup'])) {
			$testComplet = $this->TestModele->afficherTest($_GET['recup']);
			$infoTestComplet = $testComplet->fetchAll();
			require(root_path . '/Frontend/Vue/web/pageTestComplet.php');
			$testComplet->closeCursor();
		}
	}
}