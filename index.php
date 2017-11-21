<?php

	use \Cosplay\Page;
	use \Cosplay\Autoloader;
	use \Cosplay\Livre;

	define('root_path', __DIR__);

	require root_path . '/autoloader.php';
	// require root_path . '/vendor/autoload.php';

	require_once(root_path . '/Controleur/PagesControleur.php');
	$p = new Page();
	require_once(root_path . '/Controleur/LivreOrControleur.php');
	$l = new Livre();
	$e = new Exception();

	if (isset($_GET['page'])) {
		$page = $_GET['page'];
	}else{
		$page = 'accueil';
	}

	function listeCommentaire() {
		$com = $this->bdd->query('SELECT pseudo, contenu, date_creation FROM livre ORDER BY date_creation DESC LIMIT 0, 10');
		return $com;
		// cette fonction va afficher la liste des commentaires
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
	require(root_path . '/Vue/template.php');
?>