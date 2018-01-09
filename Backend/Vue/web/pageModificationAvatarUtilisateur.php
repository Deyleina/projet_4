<div class="bloc-modification-avatar-utilisateur" style="text-align: center;">
	<?php foreach ($infoAvatarUtilisateur as $donnees) { ?>
		<form action="index.php?page=validerModificationAvatarUtilisateur" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="idModif" value="<?= htmlspecialchars($_GET['recup']); ?>">
			<input type="file" name="avatarPersoModif" style="margin: 2% auto 2% auto;">
			
			<button type="submit" class="btn btn-success" title="envoyer" name="modifier">Envoyer <span class="glyphicon glyphicon-arrow-right"></span></button>
		</form>
	<?php } ?>
</div>