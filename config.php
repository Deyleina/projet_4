<?php
session_start();

	use \Frontend\PagesControleur;
	/* use \Frontend\ImagesControleur; */
	use \Frontend\LivreOrControleur;
	use \Frontend\TravauxEnCoursControleur;
	use \Frontend\TestControleur;
	
	use \Frontend\InscriptionControleur;
	use \Frontend\ConnexionControleur;
	use \Backend\CompteControleur;
	use \Backend\AdminControleur;
	
	use \Backend\GestionTravauxControleur;
	use \Backend\AjoutTravauxControleur;
	use \Backend\ModificationTestControleur;
	use \Backend\GestionLivreControleur;
	use \Backend\GestionTestControleur;
	use \Backend\AjoutTestControleur;
	use \Backend\ModificationTravauxControleur;
	use \Backend\GestionUtilisateursControleur;

	define('root_path', __DIR__);

	require_once(root_path . '/Frontend/Controleur/PagesControleur.php');
	$pagesControleur = new PagesControleur();
	/* require_once(root_path . '/Frontend/Controleur/ImagesControleur.php');
	$imagesControleur = new ImagesControleur(); */
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
	require_once(root_path . '/Backend/Controleur/ModificationTravauxControleur.php');
	$modificationTravauxControleur = new ModificationTravauxControleur();
	require_once(root_path . '/Backend/Controleur/GestionTestControleur.php');
	$gestionTestControleur = new GestionTestControleur();
	require_once(root_path . '/Backend/Controleur/AjoutTestControleur.php');
	$ajoutTestControleur = new AjoutTestControleur();
	require_once(root_path . '/Backend/Controleur/ModificationTestControleur.php');
	$modificationTestControleur = new ModificationTestControleur();
	require_once(root_path . '/Backend/Controleur/GestionLivreControleur.php');
	$gestionLivreControleur = new GestionLivreControleur();
	require_once(root_path . '/Backend/Controleur/GestionUtilisateursControleur.php');
	$gestionUtilisateursControleur = new GestionUtilisateursControleur();
	$e = new Exception();