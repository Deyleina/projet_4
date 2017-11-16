<?php 

	use \Cosplay\Page;
	use \Cosplay\Autoloader;
	use \Cosplay\Livre;

	require '../autoloader.php';

	require_once('../Controleur/PagesControleur.php');
	$p = new Page();
	require_once('../Controleur/LivreOrControleur.php');
	$l = new Livre();

	if (isset($_GET['page'])) {
		$page = $_GET['page'];
	}else{
		$page = 'accueil';
	}

	ob_start();

	if ($page === 'multimedia') {
		$p->afficherPageMultimedia();
	} elseif ($page === 'dossier') {
		$p->afficherPageMultimediaDossier();
	} elseif ($page === 'detail') {
		$p->afficherPageMultimediaDetail();
	} elseif ($page === 'wip') {
		$p->afficherPageWip();
	} elseif ($page === 'test') {
		$p->afficherPageTest();
	} elseif ($page === 'moi') {
		$p->afficherPageAPropos();
	} elseif ($page === 'livre') {
		$p->afficherPageLivreOr();
	} elseif ($page === 'connexion') {
		$p->afficherPageConnexion();
	} elseif ($page === 'accueil') {
		$p->afficherAccueil();
	}

	$content = ob_get_clean();
	require('template.php');
?>