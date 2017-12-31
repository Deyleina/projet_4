<div class="gestion-tests-liste">
	<h2>Liste des "tests" :</h2>
    <table class="table table-bordered table-striped table-condensed">
    	<thead>
	    	<tr>
	    		<th>Plateforme</th>
	    		<th>Développeur</th>
	    		<th>Genre</th>
	    		<th>Intro</th>
	    	</tr>
    	</thead>
    	<?php foreach ($listeTests as $donnees) { ?>
    	<td style="display: none;"><p><?= htmlspecialchars($donnees['id']) ?></p></td>
    	<tbody>
	    	<tr>
	    		<td><p><?= htmlspecialchars($donnees['plateforme']) ?></p></td>
	    		<td><p><?= htmlspecialchars($donnees['developpeur']) ?></p></td>
	    		<td><p><?= htmlspecialchars($donnees['genre']) ?></p></td>
	    		<td><p><?= htmlspecialchars($donnees['intro']) ?></p></td>
	    	</tr>
    	</tbody>
    	<?php } ?>
    	<thead style="margin-top: 5%;">
	    	<tr>
	    		<th>Titre</th>
	    		<th>Image</th>
	    		<th>Contenu</th>
	    		<th>Actions</th>
	    	</tr>
    	</thead>
    	<?php foreach ($listeTests as $donnees) { ?>
    	<td style="display: none;"><p><?= htmlspecialchars($donnees['id']) ?></p></td>
    	<tbody>
	    	<tr>
	    		<td><p><?= htmlspecialchars($donnees['titre']) ?></p></td>
	    		<td><p><img src="Backend/Vue/images/uploads/tests/<?= htmlspecialchars($donnees['image']) ?>" title="Image test <?= htmlspecialchars($donnees['titre']) ?>" alt="Image représentant le jeu testé"></p></td>
	    		<td><p><?= htmlspecialchars($donnees['contenu']) ?></p></td>
	    		<td class="action"><a href="index.php?page=modifierTest&recup=<?= htmlspecialchars($donnees['id']) ?>" class="btn btn-warning">Modifier <span class="glyphicon glyphicon-pencil"></span></a>
	    		<form action="index.php?page=supprimerTest&recup=<?= htmlspecialchars($donnees['id']) ?>" method="POST">
	    			<input type="hidden" name="idActuel" value="<?= htmlspecialchars($donnees['id']) ?>">
	    			<button type="submit" class="btn btn-danger" title="supprimerLeTest" name="supprimerTest">Supprimer <span class="glyphicon glyphicon-remove"></span></button></td>
	    		</form>
	    	</tr>
    	</tbody>
    	<?php } ?>
   	</table>

   	<a href="index.php?page=ajoutTestGaming" class="btn btn-success">Ajouter <span class="glyphicon glyphicon-plus"></span></a>
</div>