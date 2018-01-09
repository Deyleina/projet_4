<div class="col-sm-12 col-md-12 col-lg-12">
	<div class="pageAvatars">
		<p class="avatar-texte">Sélectionner un avatar dans la liste :</p>

		<div class="avatarListe">
			<p class="avatar-sous-titre">Avatar fille :</p>
			<form method="POST" action="index.php?page=ajoutAvatarFille">
				<input type="hidden" name="idUtilisateur" value="<?= htmlspecialchars($_GET['recup']); ?>">
				<?php
				foreach ($listeAvatarsFilles as $donneesF) { ?>
					<div class="avatar">
						<img src="Backend/Vue/images/avatars/<?= htmlspecialchars($donneesF['nom']) ?>" title="Avatar fille" alt="Image d'un avatar fille">
						<INPUT type="radio" name="choix1" value="<?= htmlspecialchars($donneesF['nom']) ?>"><?= htmlspecialchars($donneesF['id']) ?>
					</div>
				<?php } ?>
			
			<button type="submit" class="btn btn-primary" title="envoyerAvatarFille" name="envoyerAvatarFille">Choisir mon avatar</button>
			</form>
			
			<p class="avatar-sous-titre">Avatar garçons :</p>
			<form method="POST" action="index.php?page=ajoutAvatarGarçon">
				<input type="hidden" name="idUtilisateur" value="<?php if(isset($_SESSION['id'])) { ?><?= htmlspecialchars($_SESSION['id']) ?> <?php } ?>">
				<?php
				foreach ($listeAvatarsGarçons as $donneesG) { ?>
					<div class="avatar">
						<img src="Backend/Vue/images/avatars/<?= htmlspecialchars($donneesG['nom']) ?>" title="Avatar garçon" alt="Image d'un avatar garçon">
						<INPUT type="checkbox" name="choix2" value="<?= htmlspecialchars($donneesG['id']) ?>"><?= htmlspecialchars($donneesG['id']) ?>
					</div>
				<?php } ?>

				<button type="submit" class="btn btn-primary" title="envoyerAvatarGarçon" name="envoyerAvatarGarçon">Choisir mon avatar</button>
				</form>
		</div>
	</div>
</div>