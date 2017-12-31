<?php foreach ($informationTest as $donnees) { ?>

<div class="formulaire-modification-test">
	<form action="index.php?page=validerModificationTest" method="POST">
		<input type="hidden" name="idModif" value="<?= htmlspecialchars($_GET['recup']); ?>">
		<p><label>Plateforme à modifier : </label><br><input title="modifier" type="text" name="plateformeModif" value="<?= htmlspecialchars($donnees['plateforme']); ?>"></p>
		<p><label>Développeur à modifier : </label><br><input title="modifier" type="text" name="developpeurModif" value="<?= htmlspecialchars($donnees['developpeur']); ?>"></p>
		<p><label>Genre à modifier : </label><br><input title="modifier" type="text" name="genreModif" value="<?= htmlspecialchars($donnees['genre']); ?>"></p>
		<p><label>Intro à modifier : </label><br><input title="modifier" type="text" name="introModif" value="<?= htmlspecialchars($donnees['intro']); ?>"></p>
		<p><label>Titre à modifier : </label><br><input title="modifier" type="text" name="titreModif" value="<?= htmlspecialchars($donnees['titre']); ?>"></p>
		<p><label>Image à modifier : </label><br><input title="modifier" type="text" name="imageModif" value="<?= htmlspecialchars($donnees['image']); ?>"></p>
		<p><label>Contenu à modifier : </label><br><input title="modification de contenu" type="text" name="contenuModif" value="<?= htmlspecialchars($donnees['contenu']); ?>"></input></p>

		<button type="submit" class="btn btn-success" title="envoyer" name="modifier">Envoyer <span class="glyphicon glyphicon-arrow-right"></span></button>
	</form>
</div>

<?php } ?>