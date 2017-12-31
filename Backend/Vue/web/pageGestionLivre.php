<div class="gestion-commentaires-liste">
	<h2>Commentaires signalés de la page "Livre d'Or" :</h2>
    <table class="table table-bordered table-striped table-condensed">
    	<thead>
	    	<tr>
	    		<th>Auteur</th>
	    		<th>Contenu</th>
	    		<th>Actions</th>
	    	</tr>
    	</thead>
    	<?php foreach ($listeCommentairesSignales as $donnees) { ?>
    	<td style="display: none;"><p><?= htmlspecialchars($donnees['id']) ?></p></td>
    	<tbody>
	    	<tr>
	    		<td><p><?= htmlspecialchars($donnees['auteur']) ?></p></td>
	    		<td><p><?= htmlspecialchars($donnees['contenu']) ?></p></td>
	    		<td class="action">
	    			<form action="index.php?page=modifierCommentaireAdmin&recup=<?= htmlspecialchars($donnees['id']) ?>" method="POST">
                        <input type="hidden" name="idActuel" value="<?= htmlspecialchars($donnees['id']) ?>">
	    				<button type="submit" class="btn btn-warning" title="modifierLeCommentaire" name="modifier">Modifier <span class="glyphicon glyphicon-pencil"></span></button>
	    			</form>
	    			<form action="index.php?page=supprimerCommentaireAdmin&recup=<?= htmlspecialchars($donnees['id']) ?>" method="POST">
	    				<input type="hidden" name="idActuel" value="<?= htmlspecialchars($donnees['id']) ?>">
	    				<button type="submit" class="btn btn-danger" title="supprimerLeCommentaire" name="supprimer">Supprimer <span class="glyphicon glyphicon-remove"></span></button>
	    			</form>
	    		</td>
	    	</tr>
    	</tbody>
    	<?php } ?>
   	</table>

   	<h2>Liste de tous les commentaires postés sur la page "Livre d'Or" :</h2>
    <table class="table table-bordered table-striped table-condensed">
    	<thead>
	    	<tr>
	    		<th>Pseudo</th>
	    		<th>Contenu</th>
	    		<th>Actions</th>
	    	</tr>
    	</thead>
    	<?php foreach ($listeCommentaires as $donnees) { ?>
    	<td style="display: none;"><p><?= htmlspecialchars($donnees['id']) ?></p></td>
    	<tbody>
	    	<tr>
	    		<td><p><?= htmlspecialchars($donnees['auteur']) ?></p></td>
	    		<td><p><?= htmlspecialchars($donnees['contenu']) ?></p></td>
	    		<td class="action">
	    			<form action="index.php?page=modifierCommentaireAdmin&recup=<?= htmlspecialchars($donnees['id']) ?>" method="POST">
                        <input type="hidden" name="idActuel" value="<?= htmlspecialchars($donnees['id']) ?>">
	    				<button type="submit" class="btn btn-warning" title="modifierLeCommentaire" name="modifier">Modifier <span class="glyphicon glyphicon-pencil"></span></button>
	    			</form>
	    			<form action="index.php?page=supprimerCommentaireAdmin&recup=<?= htmlspecialchars($donnees['id']) ?>" method="POST">
	    				<input type="hidden" name="idActuel" value="<?= htmlspecialchars($donnees['id']) ?>">
	    				<button type="submit" class="btn btn-danger" title="supprimerLeCommentaire" name="supprimer">Supprimer <span class="glyphicon glyphicon-remove"></span></button>
	    			</form>
	    		</td>
	    	</tr>
    	</tbody>
    	<?php } ?>
   	</table>
</div>