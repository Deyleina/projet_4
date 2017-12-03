<?php while ($donnees = $infoCompte->fetch()) { ?>

<div>
	<form action="?page=validerModificationUtilisateur" method="POST">
		<input type="hidden" name="idModif" value="<?= $_GET['recup']; ?>">
		<p><label>Pseudo à modifier : </label><input title="modifier" type="text" name="pseudoModif" value="<?= $donnees['pseudo']; ?>"></p>
		<p><label>Email à modifier : </label><input title="modification de contenu" type="email" name="emailModif" value="<?=htmlspecialchars($donnees['email']);?>"></input></p>
		<p><label>Mot de passe à modifier : </label><input title="modification de contenu" type="password" name="motdepasseModif" value="<?=htmlspecialchars($donnees['motdepasse']);?>"></input></p>
		<input title="envoyer" type="submit" name="modifier" value="Envoyer">
	</form>
</div>

<?php } ?>