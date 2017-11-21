<?php

namespace Cosplay;

require_once(root_path . '/Modele/PagesModele.php');

class Page {

	private $PagesModele;
	private $twig;

	public function __construct() {
		$this->PagesModele = new pagesModele();
		/* $loader = new \Twig_Loader_Filesystem(root_path . '/Vue/web');
		$this->twig = new \Twig_Environment($loader, array(
			'cache' => false,
		));*/
	}

	function afficherAccueil() {
		$requete = $this->PagesModele->page();
		require(root_path . '/Vue/web/pageAccueil.php');
	}

	function afficherPageMultimedia() {
		$requete = $this->PagesModele->page();
		require(root_path . '/Vue/web/pageMultimedia.php');
	}

	function afficherPageMultimediaDossier() {
		$requete = $this->PagesModele->page();
		require(root_path . '/Vue/web/pageMultimediaDossier.php');
	}

	function afficherPageMultimediaDetail() {
		$requete = $this->PagesModele->page();
		require(root_path . '/Vue/web/pageMultimediaDetail.php');
	}

	function afficherPageWip() {
		$requete = $this->PagesModele->page();
		require(root_path . '/Vue/web/pageWip.php');
	}

	function afficherPageTest() {
		$requete = $this->PagesModele->page();
		$test = $this->PagesModele->listeTest();
		require(root_path . '/Vue/web/pageTest.php');
	}

	function afficherPageAPropos() {
		$requete = $this->PagesModele->page();
		require(root_path . '/Vue/web/pageAPropos.php');
	}

	function afficherPageLivreOr() {
		$requete = $this->PagesModele->page();
		$com = $this->PagesModele->listeCommentaire();
		$template = $this->twig->load(root_path . '/Vue/web/pageLivreOr.html');
		echo $template->render(array(
			'donnees' => $com,
		));
		//require('../Vue/web/pageLivreOr.php');
	}

	function afficherPageConnexion() {
		$requete = $this->PagesModele->page();
		require(root_path . '/Vue/web/pageConnexion.php');
	}
}