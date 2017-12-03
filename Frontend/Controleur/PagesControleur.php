<?php

namespace Frontend;

require_once(root_path . '/Frontend/Modele/PagesModele.php');

class Page {

	private $PagesModele;

	public function __construct() {
		$this->PagesModele = new pagesModele();
	}

	function afficherAccueil() {
		$requete = $this->PagesModele->page();
		require(root_path . '/Frontend/Vue/web/pageAccueil.php');
	}

	function afficherPageMultimedia() {
		$requete = $this->PagesModele->page();
		require(root_path . '/Frontend/Vue/web/pageMultimedia.php');
	}

	function afficherPageMultimediaDossier() {
		$requete = $this->PagesModele->page();
		require(root_path . '/Frontend/Vue/web/pageMultimediaDossier.php');
	}

	function afficherPageMultimediaDetail() {
		$requete = $this->PagesModele->page();
		require(root_path . '/Frontend/Vue/web/pageMultimediaDetail.php');
	}

	function afficherPageAPropos() {
		$requete = $this->PagesModele->page();
		require(root_path . '/Frontend/Vue/web/pageAPropos.php');
	}
}