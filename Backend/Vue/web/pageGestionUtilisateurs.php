<div class="gestion-utilisateurs-liste">
	<form>
	    <?php while ($donnees = $gestionUtilisateurs->fetch()) { ?>
	    	<p><?= $donnees['pseudo'] ?></p>
		    <p><?= $donnees['email'] ?></p>

		    <form action="?page=suppressionUtilisateur" method="POST">
					<input type="hidden" name="supprimer" value="<?= $donnees['id']; ?>">
					<input title="envoyer" type="submit" name="supprimerBillet" value="Supprimer">
				</form>
		    
		    <a href="?page=supprimerUtilisateur"><img src="http://icons.iconarchive.com/icons/gakuseisean/ivista-2/48/Misc-Delete-Database-icon.png"></a>
		<?php } ?>
	</form>
</div>