<?php

namespace Frontend;

require_once(root_path . '/Frontend/Modele/PagesModele.php');

class PagesControleur {

	private $PagesModele;

	public function __construct() {
		$this->PagesModele = new pagesModele();
	}

	function afficherAccueil() {
		$requete = $this->PagesModele->page();
		require(root_path . '/Frontend/Vue/web/pageAccueil.php');
	}

	function afficherConditionsGeneralesUtilisation() {
		$requete = $this->PagesModele->page();
		require(root_path . '/Frontend/Vue/web/pageConditionsGeneralesUtilisation.php');
	}

	function afficherMention() {
		$requete = $this->PagesModele->page();
		require(root_path . '/Frontend/Vue/web/pageMentionsLegales.php');
	}

	function afficherPageMultimedia() {
		$requete = $this->PagesModele->page();
		require(root_path . '/Frontend/Vue/web/pageMultimedia.php');
	}

	function afficherPageMultimediaDossierJeuxVideos() {
		$requete = $this->PagesModele->page();
		require(root_path . '/Frontend/Vue/web/pageMultimediaDossierJeuxVideos.php');
	}

	function afficherPageMultimediaDetailHorizonZeroDawn() {
		$requete = $this->PagesModele->page();
		require(root_path . '/Frontend/Vue/web/pageMultimediaDetailHorizonZeroDawn.php');
	}

	function afficherPageMultimediaDetailTombRaider() {
		$requete = $this->PagesModele->page();
		require(root_path . '/Frontend/Vue/web/pageMultimediaDetailTombRaider.php');
	}

	function afficherPageMultimediaDossierAnimeMangas() {
		$requete = $this->PagesModele->page();
		require(root_path . '/Frontend/Vue/web/pageMultimediaDossierAnimeMangas.php');
	}

	function afficherPageMultimediaDetailFairyTail() {
		$requete = $this->PagesModele->page();
		require(root_path . '/Frontend/Vue/web/pageMultimediaDetailFairyTail.php');
	}

	function afficherPageMultimediaDetailVampireKnight() {
		$requete = $this->PagesModele->page();
		require(root_path . '/Frontend/Vue/web/pageMultimediaDetailVampireKnight.php');
	}

	function afficherPageMultimediaDossierDivers() {
		$requete = $this->PagesModele->page();
		require(root_path . '/Frontend/Vue/web/pageMultimediaDossierDivers.php');
	}

	function afficherPageMultimediaDetailLoL() {
		$requete = $this->PagesModele->page();
		require(root_path . '/Frontend/Vue/web/pageMultimediaDetailLoL.php');
	}

	function afficherPageMultimediaDetailDivers() {
		$requete = $this->PagesModele->page();
		require(root_path . '/Frontend/Vue/web/pageMultimediaDetailDivers.php');
	}

	function afficherPageAPropos() {
		$requete = $this->PagesModele->page();
		require(root_path . '/Frontend/Vue/web/pageAPropos.php');
	}

	function afficherPageErreur() {
		$requete = $this->PagesModele->page();
		require(root_path . '/Frontend/Vue/web/pageErreur404.php');
	}
}