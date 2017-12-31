<?php foreach ($informationCommentaireAdmin as $donnees) { ?>

<div class="formulaire-modification-commentaire-admin">
	<form action="index.php?page=validerModificationCommentaireCompte" method="POST">
		<input type="hidden" name="idModif" value="<?= htmlspecialchars($_GET['recup']); ?>">
		<p><label>Pseudo à modifier : </label><br><input title="modifier" type="text" name="auteurModif" value="<?= htmlspecialchars($donnees['auteur']); ?>"></p>
		<p><label>Contenu à modifier : </label><br><input title="modification de contenu" type="text" name="contenuModif" value="<?= htmlspecialchars($donnees['contenu']); ?>"></input></p>
		
		<button type="submit" class="btn btn-success" title="envoyer" name="modifier">Envoyer <span class="glyphicon glyphicon-arrow-right"></span></button>
	</form>
</div>

<?php } ?>