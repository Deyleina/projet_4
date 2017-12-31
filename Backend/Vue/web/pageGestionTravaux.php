<div class="gestionTravaux">
	<h2>Liste des "Work In Progress" :</h2>
	<?php foreach ($listeTravaux as $donnees) { ?>
	    <table class="table table-bordered table-striped table-condensed">
	    	<thead>
		    	<tr>
		    		<th>Image</th>
		    		<th>Titre</th>
		    		<th>Date</th>
		    		<th>Contenu</th>
		    		<th>Actions</th>
		    	</tr>
	    	</thead>
	    	<tbody>
		    	<tr>
		    		<td><img src="Backend/Vue/images/uploads/travaux/<?= $donnees['image'] ?>" title="Image WiP" alt="Image représentant l'activité"></td>
		    		<td><p><?= htmlspecialchars($donnees['titre']) ?></p></td>
		    		<td><p><?= htmlspecialchars($donnees['date']) ?></p></td>
		    		<td><p><?= htmlspecialchars($donnees['contenu']) ?></p></td>
		    		<td class="action">
		    			<a href="index.php?page=modifierTravaux&recup=<?= htmlspecialchars($donnees['id']) ?>" class="btn btn-warning">Modifier <span class="glyphicon glyphicon-pencil"></span></a>
						<form action="index.php?page=supprimerTravaux&recup=<?= htmlspecialchars($donnees['id']) ?>" method="POST">
		    				<input type="hidden" name="idActuel" value="<?= htmlspecialchars($donnees['id']) ?>">
		    				<button type="submit" class="btn btn-danger" title="supprimerLeWiP" name="supprimerWiP">Supprimer <span class="glyphicon glyphicon-remove"></span></button>
		    			</form>
		    		</td>
		    	</tr>
	    	</tbody>
	   	</table>
	<?php } ?>
	<a href="index.php?page=ajoutTravaux" class="btn btn-success">Ajouter <span class="glyphicon glyphicon-plus"></span></a>
</div>

<!-- <p style="text-align: center">Il y a actuellement <?= $nombreBillets ?> billets. En voici la liste :</p> -->