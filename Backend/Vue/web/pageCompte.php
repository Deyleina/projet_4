<div class="bloc-compte">
	<div class="bandeau-compte">
		<p class="texte-bandeau">Mes informations</p>
	</div>

	<div class="detail-compte">
		<p class="compte-pseudo">Pseudo : <?= $donnees['pseudo'] ?></p>
		<p class="compte-email">Adresse mail : <?= $donnees['email'] ?></p>
		<form action="?page=modifierCompte&recup=<?= $donnees['id'] ?>" method="POST">
			<input type="submit" name="modifierCompte" value="Modifier"><br/>
		</form>
		<form action="?page=supprimerCompte&recup=<?= $donnees['id'] ?>" method="POST">
			<input type="hidden" name="idActuel" value="<?= $donnees['id'] ?>">
			<input type="submit" name="supprimerCompte" value="Supprimer">
		</form>

		<h3>Voici la liste de vos commentaires :</h3>

			<?php foreach ($listeCom as $commentaire) { ?>
					<p>Le <?= $commentaire['date_creation'] ?> :</p>
		    		<p><?= $commentaire['contenu'] ?></p>

		    		<form action="?page=modifierCommentaire&recup=<?= $donnees['id'] ?>" method="POST">
				        <input type="hidden" name="idActuel" value="<?= $donnees['id'] ?>">
				        <input type="submit" name="" value="Modifier ce commentaire">
				    </form>
				    <form action="?page=supprimerCommentaire&recup=<?= $donnees['id'] ?>" method="POST">
				        <input type="hidden" name="idActuel" value="<?= $donnees['id'] ?>">
				        <input type="submit" name="" value="Supprimer ce commentaire">
				    </form>
			<?php } ?>
	</div>

</div>