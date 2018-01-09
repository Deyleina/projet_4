<?php

require_once('config.php');

if (isset($_GET['page'])) {
		$page = $_GET['page'];
	} else {
		$page = 'accueil';
	}

	ob_start();

		switch($page) {

			/* Partie affichage des pages */
		case 'accueil' :
		$pagesControleur->afficherAccueil();
		break;
		case 'cgu' :
		$pagesControleur->afficherConditionsGeneralesUtilisation();
		break;
		case 'mention' :
		$pagesControleur->afficherMention();
		break;
		case 'multimedia' :
		$pagesControleur->afficherPageMultimedia();
		break;	
		case 'dossierJeuxVideos' :
		$pagesControleur->afficherPageMultimediaDossierJeuxVideos();
		break;
		case 'detailHorizonZeroDawn' :
		$pagesControleur->afficherPageMultimediaDetailHorizonZeroDawn();
		break;
		case 'detailTombRaider' :
		$pagesControleur->afficherPageMultimediaDetailTombRaider();
		break;
		case 'dossierAnimeMangas' :
		$pagesControleur->afficherPageMultimediaDossierAnimeMangas();
		break;
		case 'detailFairyTail' :
		$pagesControleur->afficherPageMultimediaDetailFairyTail();
		break;
		case 'detailVampireKnight' :
		$pagesControleur->afficherPageMultimediaDetailVampireKnight();
		break;
		case 'dossierDivers' :
		$pagesControleur->afficherPageMultimediaDossierDivers();
		break;
		case 'detailLoL' :
		$pagesControleur->afficherPageMultimediaDetailLoL();
		break;
		case 'detailDivers' :
		$pagesControleur->afficherPageMultimediaDetailDivers();
		break;
		case 'envoiFichier' :
		$imagesControleur->envoyerImage();
		break;
		case 'travaux' :
		$travauxEnCoursControleur->afficherPageTravauxEnCours();
		break;	
		case 'test' :
		$testControleur->afficherPageTest();
		break;
		case 'suiteTest' :
		$testControleur->afficherSuiteTest();
		break;
		case 'moi' :
		$pagesControleur->afficherPageAPropos();
		break;
		case 'livre' :
		$livreOrControleur->afficherPageLivreOr();
		break;

			/* Partie commentaires */

		case 'envoyerCommentaire' :
		$livreOrControleur->envoyerCommentaire();
		break;
		case 'modifierCommentaire' :
		$livreOrControleur->infoCommentaire();
		break;
		case 'validerModificationCommentaire' :
		$livreOrControleur->modifierCommentaire();
		break;
		case 'signalerCommentaire' :
		$livreOrControleur->signalerCommentaire();
		break;
		case 'supprimerCommentaire' :
		$livreOrControleur->supprimerCommentaire();
		break;

			/* Partie inscription, connexion, compte */
		
		case 'inscription' :
		$inscriptionControleur->afficherPageInscription();
		break;
		case 'nouvelUtilisateur' :
		$inscriptionControleur->ajoutUtilisateur();
		break;
		case 'connexion' :
		$connexionControleur->afficherPageConnexion();
		break;
		case 'connexionUtilisateur' :
		$connexionControleur->connexionUtilisateur();
		break;
		case 'compte' :
		$compteControleur->afficherPageCompte();
		break;		
		case 'modifierCompte' :
		$compteControleur->modifierLeCompte();
		break;
		case 'validerModificationUtilisateur' :
		$compteControleur->modificationValidee();
		break;
		case 'supprimerCompte' :
		$compteControleur->supprimerLeCompte();
		break;
		case 'admin' :
		$adminControleur->afficherPageAdmin();
		break;
		case 'deconnexion' :
		$connexionControleur->deconnexionUtilisateur();
		break;

			/* Partie avatars */

		case 'selectionAvatar' :
		$compteControleur->afficherPageAvatars();
		break;
		case 'ajoutAvatarFille' :
		$compteControleur->ajouterAvatarBaseFille();
		break;
		case 'ajoutAvatarGarçon' :
		$compteControleur->ajouterAvatarBaseGarçon();
		break;
		case 'selectionAvatarPerso' :
		$compteControleur->afficherPageModificationAvatarPerso();
		break;
		case 'validerModificationAvatarUtilisateur' :
		$compteControleur->modificationAvatarValidee();
		break;

			/* Partie gestion Wip */

		case 'gestionTravaux' :
		$gestionTravauxControleur->afficherGestionTravaux();
		break;
		case 'ajoutTravaux' :
		$ajoutTravauxControleur->afficherFormulaireAjoutTravaux();
		break;
		case 'validerAjoutTravaux' :
		$ajoutTravauxControleur->validationAjoutTravaux();
		break;
		case 'modifierTravaux' :
		$modificationTravauxControleur->infoTravaux();
		break;
		case 'validerModificationTravaux' :
		$modificationTravauxControleur->validationModificationTravaux();
		break;
		case 'supprimerTravaux' :
		$gestionTravauxControleur->supprimerTravaux();
		break;

			/* Partie gestion livre d'or */

		case 'gestionLivreOr' :
		$gestionLivreControleur->afficherListeCommentaires();
		break;
		case 'modifierCommentaireAdmin' :
		$gestionLivreControleur->infoCommentaireAdmin();
		break;
		case 'validerModificationCommentaireCompte' :
		$gestionLivreControleur->modifierCommentaireAdmin();
		break;
		case 'supprimerCommentaireAdmin' :
		$gestionLivreControleur->supprimerCommentaireAdmin();
		break;

			/* Partie gestion test */

		case 'gestionTest' :
		$gestionTestControleur->afficherListeTests();
		break;
		case 'ajoutTestGaming' :
		$ajoutTestControleur->afficherFormulaireAjoutTest();
		break;
		case 'validerAjoutTest' :
		$ajoutTestControleur->validationAjoutTest();
		break;
		case 'modifierTest' :
		$modificationTestControleur->infoTest();
		break;
		case 'validerModificationTest' :
		$modificationTestControleur->validationModificationTest();
		break;
		case 'supprimerTest' :
		$gestionTestControleur->supprimerTest();
		break;

			/* Partie gestion utilisateurs */

		case 'gestionUtilisateurs' :
		$gestionUtilisateursControleur->afficherListeUtilisateurs();
		break;
		case 'supprimerCompteDepuisPageAdmin' :
		$gestionUtilisateursControleur->supprimerUtilisateurDepuisCompteAdmin();
		break;

		default :
		$pagesControleur->afficherPageErreur(); // rediriger vers controleur
		break;
		}

		$content = ob_get_clean();
		require(root_path . '/Frontend/Vue/template.php');