<?php

namespace Cosplay;

require_once('../Modele/PagesModele.php');

class Page {

	private $PagesModele;

	public function __construct() {
		$this->PagesModele = new pagesModele();
	}

	function afficherAccueil() {
		$requete = $this->PagesModele->page();
		require('../Vue/web/pageAccueil.php');
	}

	function afficherPageMultimedia() {
		$requete = $this->PagesModele->page();
		require('../Vue/web/pageMultimedia.php');
	}

	function afficherPageMultimediaDossier() {
		$requete = $this->PagesModele->page();
		require('../Vue/web/pageMultimediaDossier.php');
	}

	function afficherPageMultimediaDetail() {
		$requete = $this->PagesModele->page();
		require('../Vue/web/pageMultimediaDetail.php');
	}

	function afficherPageWip() {
		$requete = $this->PagesModele->page();
		require('../Vue/web/pageWip.php');
	}

	function afficherPageTest() {
		$requete = $this->PagesModele->page();
		$test = $this->PagesModele->listeTest();
		require('../Vue/web/pageTest.php');
	}

	function afficherPageAPropos() {
		$requete = $this->PagesModele->page();
		require('../Vue/web/pageAPropos.php');
	}

	function afficherPageLivreOr() {
		$requete = $this->PagesModele->page();
		$com = $this->PagesModele->listeCommentaire();
		require('../Vue/web/pageLivreOr.php');
	}

	function afficherPageConnexion() {
		$requete = $this->PagesModele->page();
		require('../Vue/web/pageConnexion.php');
	}
}