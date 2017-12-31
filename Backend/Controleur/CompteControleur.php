<?php

namespace Backend;
	
require_once(root_path . '/Backend/Modele/CompteModele.php');

class CompteControleur {

	private $CompteModele;

	public function __construct() {
		$this->CompteModele = new CompteModele();
	}

	public function afficherPageCompte() {
		$infoCommentaire = $this->CompteModele->listeCommentaires($_SESSION['pseudo']);
		$listeCommentaires = $infoCommentaire->fetchAll();
		$compte = $this->CompteModele->detailCompte($_SESSION['pseudo']);
		$donnees = $compte->fetch();
		if (isset($_SESSION['pseudo']) AND $_SESSION['pseudo'] == $donnees['pseudo']) {
			$_SESSION['pseudo'] = $donnees['pseudo'];
			require root_path . '/Backend/Vue/web/pageCompte.php';
		} else {
			echo '<p style="text-align:center;font-weight:bold;color:red;">Vous n\'êtes pas un membre inscrit !<p>';
		}
	}

	public function afficherPageAvatars() {
		$infoAvatarFilles = $this->CompteModele->listeAvatarsFilles();
		$listeAvatarsFilles = $infoAvatarFilles->fetchAll();
		$infoAvatarGarçons = $this->CompteModele->listeAvatarsGarçons();
		$listeAvatarsGarçons = $infoAvatarGarçons->fetchAll();
		$compte = $this->CompteModele->detailCompte($_SESSION['pseudo']);
		$donnees = $compte->fetch();
		require root_path . '/Backend/Vue/web/pageSelectionAvatar.php';
		$infoAvatarFilles->closeCursor();
		$infoAvatarGarçons->closeCursor();
	}

	public function ajouterAvatarBaseFille() {
		$choixAvatarFille = $this->CompteModele->ajouterAvatarPredefiniFille($_POST['choix1'], $_POST['idUtilisateur']);
		$choixAvatarFille->closeCursor();
	}

	public function ajouterAvatarBaseGarçon() {
		$choixAvatarGarçon = $this->CompteModele->ajouterAvatarPredefiniGarçon($_POST['choix2'], $_POST['idUtilisateur']);
		$choixAvatarGarçon->closeCursor();
	}

	public function modifierLeCompte() {
		if (isset($_GET['recup'])) {
			$infoCompte = $this->CompteModele->modificationCompte($_GET['recup']);
			$infoUtilisateur = $infoCompte->fetchAll();
			require root_path . '/Backend/Vue/web/pageModificationUtilisateur.php';
			$infoCompte->closeCursor();
		}
	}

	public function modificationValidee() {
		$valide = $this->CompteModele->validationModification($_POST['pseudoModif'], $_POST['emailModif'], sha1($_POST['motdepasseModif']), $_POST['idModif']);
		session_destroy();
		echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="index.php?page=connexion"</SCRIPT>';
		die;
	}

	public function afficherPageModificationAvatarPerso() {
		if (isset($_GET['recup'])) {
			$infoAvatar = $this->CompteModele->modificationAvatar($_GET['recup']);
			$infoAvatarUtilisateur = $infoAvatar->fetchAll();
			$infoAvatar->closeCursor();
			require root_path . '/Backend/Vue/web/pageModificationAvatarUtilisateur.php';
		}
	}

	public function modificationAvatarValidee() {
		$dossier = root_path . '/Backend/Vue/images/uploads/';
		$poidsMax = '8196394'; // équivalent à 8Mo maximum
		if(isset($_FILES['avatarPersoModif']) AND $_FILES['avatarPersoModif']['error']==0) {
			if($_FILES['avatarPersoModif']['size'] <= $poidsMax) {
				move_uploaded_file($_FILES['avatarPersoModif']['tmp_name'], $dossier . basename($_FILES['avatarPersoModif']['name']));
			}
		}
		$valideAvatar = $this->CompteModele->validationModificationAvatar($_FILES['avatarPersoModif']['name'], $_POST['idModif']);
		$valideAvatar->closeCursor();
		echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="index.php?page=compte"</SCRIPT>';
		die;
	}

	public function supprimerLeCompte() {
		$supprimerCompte = $this->CompteModele->suppressionCompte($_POST['idActuel']);
		session_destroy();
		echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="index.php?page=accueil"</SCRIPT>';
		die;
	}
}

?>