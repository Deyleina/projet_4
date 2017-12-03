<?php

	session_start();

	use \Frontend\Page;
	use \Frontend\Autoloader;
	use \Frontend\LivreOrControleur;
	use \Frontend\TravauxEnCoursControleur;
	use \Frontend\TestControleur;
	
	use \Frontend\InscriptionControleur;
	use \Frontend\ConnexionControleur;
	use \Backend\CompteControleur;
	use \Backend\AdminControleur;
	
	use \Backend\GestionTravauxControleur;
	use \Backend\AjoutTravauxControleur;
	use \Backend\GestionLivreControleur;
	use \Backend\GestionTestControleur;
	use \Backend\GestionUtilisateursControleur;
	
	define('root_path', __DIR__);

	require root_path . '/autoloader.php';

	require_once(root_path . '/Frontend/Controleur/PagesControleur.php');
	$p = new Page();
	require_once(root_path . '/Frontend/Controleur/LivreOrControleur.php');
	$livreOrControleur = new LivreOrControleur();
	require_once(root_path . '/Frontend/Controleur/TravauxEnCoursControleur.php');
	$travauxEnCoursControleur = new TravauxEnCoursControleur();
	require_once(root_path . '/Frontend/Controleur/TestControleur.php');
	$testControleur = new TestControleur();
	
	require_once(root_path . '/Frontend/Controleur/InscriptionControleur.php');
	$inscriptionControleur = new InscriptionControleur();
	require_once(root_path . '/Frontend/Controleur/ConnexionControleur.php');
	$connexionControleur = new ConnexionControleur();
	require_once(root_path . '/Backend/Controleur/CompteControleur.php');
	$compteControleur = new CompteControleur();
	require_once(root_path . '/Backend/Controleur/AdminControleur.php');
	$adminControleur = new AdminControleur();
	
	require_once(root_path . '/Backend/Controleur/GestionTravauxControleur.php');
	$gestionTravauxControleur = new GestionTravauxControleur();
	require_once(root_path . '/Backend/Controleur/AjoutTravauxControleur.php');
	$ajoutTravauxControleur = new AjoutTravauxControleur();
	require_once(root_path . '/Backend/Controleur/GestionTestControleur.php');
	$gestionTestControleur = new GestionTestControleur();
	require_once(root_path . '/Backend/Controleur/GestionLivreControleur.php');
	$gestionLivreControleur = new GestionLivreControleur();
	require_once(root_path . '/Backend/Controleur/GestionUtilisateursControleur.php');
	$gestionUtilisateursControleur = new GestionUtilisateursControleur();
	$e = new Exception();

	if (isset($_GET['page'])) {
		$page = $_GET['page'];
	}

	ob_start();

	switch($page) {
	case ('multimedia') :
	$p->afficherPageMultimedia();
	break;	
	case ('dossier') :
	$p->afficherPageMultimediaDossier();
	break;
	case ('detail') :
	$p->afficherPageMultimediaDetail();
	break;
	case ('travaux') :
	$travauxEnCoursControleur->afficherPageTravauxEnCours();
	break;	
	case ('test') :
	$testControleur->afficherPageTest();
	break;
	case ('suiteTest') :
	$testControleur->afficherSuiteTest();
	break;
	case ('moi') :
	$p->afficherPageAPropos();
	break;
	case ('livre') :
	$livreOrControleur->afficherPageLivreOr();
	break;
	case ('envoyerCommentaire');
	$livreOrControleur->envoyerCommentaire();
	break;
	case ('modifierCommentaire');
	$livreOrControleur->infoCommentaire();
	break;
	case ('validerModificationCommentaire');
	$livreOrControleur->modifierCommentaire();
	break;
	case ('supprimerCommentaire');
	$livreOrControleur->supprimerCommentaire();
	break;
	
	case ('inscription') :
	$inscriptionControleur->afficherPageInscription();
	break;
	case ('nouvelUtilisateur') :
	$inscriptionControleur->ajoutUtilisateur();
	break;
	case ('connexion') :
	$connexionControleur->afficherPageConnexion();
	break;
	case ('connexionUtilisateur') :
	$connexionControleur->connexionUtilisateur();
	break;
	case ('compte') :
	$compteControleur->afficherPageCompte();
	break;
	case ('modifierCompte') :
	$compteControleur->modifierLeCompte();
	break;
	case ('validerModificationUtilisateur') :
	$compteControleur->modificationValidee();
	break;
	case ('supprimerCompte') :
	$compteControleur->supprimerLeCompte();
	break;
	case ('admin') :
	$adminControleur->afficherPageAdmin();
	break;
	case ('deconnexion') :
	$connexionControleur->deconnexionUtilisateur();
	break;

	case ('gestionTravaux') :
	$gestionTravauxControleur->afficherGestionTravaux();
	break;

	case ('gestionLivre') :
	$gestionLivreControleur->afficherListeCommentaires();
	break;

	case ('gestionTest') :
	$gestionTestControleur->afficherListeTests();
	break;

	case ('gestionUtilisateurs') :
	$gestionUtilisateursControleur->afficherListeUtilisateurs();
	break;

	default :
	$p->afficherAccueil();
	break;
	}

	$content = ob_get_clean();
	require(root_path . '/Frontend/Vue/template.php');
?>