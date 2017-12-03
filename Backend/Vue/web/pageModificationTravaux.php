<?php while ($donnees = $gestionTravaux->fetch()) { ?>

<div id="">
	<form action="?p=validerAjoutTravaux" method="POST">
		<input type="hidden" name="id" value="<?= $donnees['id'] ?>">
		<p><label><strong>Titre à modifier : </strong></label><input title="modifier" type="text" name="titreModif" value="<?= $donnees['titre']; ?>"></p>
		<p><label><strong>Contenu à modifier : </strong></label><input class="tinyMceText" title="modification de contenu" type="text" name="contenuModif" value="<?=htmlspecialchars($donnees['contenu']);?>"></input></p>
		<input title="envoyer" type="submit" name="modifier" value="Envoyer">
	</form>
</div>

<?php } ?>