<div class="bloc-modification-utilisateur" style="text-align: center;">
	<?php foreach ($infoUtilisateur as $donnees) { ?>
		<form action="index.php?page=validerModificationUtilisateur" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="idModif" value="<?= htmlspecialchars($_GET['recup']); ?>">
			<p><label style="display: block;">Pseudo à modifier : </label><input title="modifier" type="text" name="pseudoModif" value="<?= htmlspecialchars($donnees['pseudo']); ?>" style="margin: 2% 0 2% 0;"></p>
			<p><label style="display: block;">Email à modifier : </label><input title="modification de contenu" type="email" name="emailModif" value="<?=htmlspecialchars($donnees['email']);?>" style="margin: 2% 0 2% 0;"></input></p>
			<p><label style="display: block;">Mot de passe à modifier : </label><input title="modification de contenu" type="password" name="motdepasseModif" value="Modifier votre mot de passe" style="margin: 2% 0 2% 0;"></input></p>
			
			<button type="submit" class="btn btn-success" title="envoyer" name="modifier">Envoyer <span class="glyphicon glyphicon-arrow-right"></span></button>
		</form>
	<?php } ?>

	<p style="margin-top: 2%;font-weight: bold;color: red;">Attention, la modification de votre compte entraînera votre déconnexion, il faudra donc vous reconnecter.</p>
</div>