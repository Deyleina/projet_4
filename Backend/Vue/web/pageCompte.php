<div class="bloc-compte">
	<div class="bandeau-compte">
		<p class="texte-bandeau">Mes informations</p>
	</div>

	<div class="detail-compte">
		<p class="compte-pseudo">Pseudo :</p> <p><?= htmlspecialchars($donnees['pseudo']) ?></p>
		<p class="compte-email">Adresse mail :</p> <p><?= htmlspecialchars($donnees['email']) ?></p>
		<?php if (empty($_donnees['avatar'])) { ?>
			<p class="compte-avatar"><img src="Backend/Vue/images/uploads/<?= htmlspecialchars($donnees['avatar']) ?>"></p>
		<?php } else { ?>
			<div class="bloc-avatar">
				<img src="Backend/Vue/images/avatars/no_avatar.png" title="Avatar" alt="Image représentant l'avatar de l'utilisateur">
			</div>
		<?php } ?>

		<a href="index.php?page=selectionAvatarPerso&recup=<?= htmlspecialchars($donnees['id']) ?>">Choisissez un avatar qui vous est propre !</a>
		
		<div class="formulaire-information-compte">
			<form action="/modifierCompte&recup=<?= htmlspecialchars($donnees['id']) ?>" method="POST">
				<button type="submit" class="btn btn-warning" title="modifierLeCompte" name="modifierCompte">Modifier le compte <span class="glyphicon glyphicon-pencil"></span></button>
			</form>
			<form action="/supprimerCompte&recup=<?= htmlspecialchars($donnees['id']) ?>" method="POST">
				<input type="hidden" name="idActuel" value="<?= htmlspecialchars($donnees['id']) ?>">
				<button type="submit" class="btn btn-danger" title="supprimerLeCompte" name="supprimerCompte">Supprimer le compte <span class="glyphicon glyphicon-remove"></span></button>
			</form>
		</div>

		<h3>Voici la liste de vos commentaires :</h3>

			<?php foreach ($listeCommentaires as $commentaire) { ?>
				<?php if (isset($_SESSION['id']) AND $_SESSION['id'] == $commentaire['id_utilisateur']) { ?>
					<p>Le <?= htmlspecialchars($commentaire['date_creation']) ?> :</p>
				    <p class="contenu-commentaire-compte">“<?= htmlspecialchars($commentaire['contenu']) ?>”</p>
					<img src="Frontend/Vue/images/separateur.gif" title="Séparateur" alt="Image servant de séparateur" class="separateur-commentaire-livre-or">
				<?php } ?>
			<?php } ?>
	</div>

</div>