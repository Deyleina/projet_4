<?php while ($donnees = $infoCom->fetch()) { ?>

<div>
	<form action="?page=validerModificationCommentaire" method="POST">
		<input type="hidden" name="idModif" value="<?= $_GET['recup']; ?>">
		<p><label>Pseudo à modifier : </label><input title="modifier" type="text" name="pseudoModif" value="<?= $donnees['pseudo']; ?>"></p>
		<p><label>Contenu à modifier : </label><input title="modification de contenu" type="text" name="contenuModif" value="<?= $donnees['contenu']; ?>"></input></p>
		<input title="envoyer" type="submit" name="modifier" value="Envoyer">
	</form>
</div>

<?php } ?>