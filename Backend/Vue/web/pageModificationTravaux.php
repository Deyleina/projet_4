<?php foreach ($informationTravaux as $donnees) { ?>

<div class="formulaire-modification-travaux">
	<form action="index.php?page=validerModificationTravaux" method="POST">
		<input type="hidden" name="idModif" value="<?= htmlspecialchars($_GET['recup']); ?>">
		<p><label>Image à modifier : </label><br><input title="modifier" type="text" name="imageModif" value="<?= htmlspecialchars($donnees['image']); ?>"></p>
		<p><label>Titre à modifier : </label><br><input title="modifier" type="text" name="titreModif" value="<?= htmlspecialchars($donnees['titre']); ?>"></p>
		<p><label>Contenu à modifier : </label><br><input title="modification de contenu" type="text" name="contenuModif" value="<?= htmlspecialchars($donnees['contenu']); ?>"></input></p>

		<button type="submit" class="btn btn-success" title="envoyer" name="modifier">Envoyer <span class="glyphicon glyphicon-arrow-right"></span></button>
	</form>
</div>

<?php } ?>