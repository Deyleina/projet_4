<div class="gestion-utilisateurs-liste">
	<h2>Liste des utilisateurs :</h2>
	<table class="table table-bordered table-striped table-condensed">
    	<thead>
	    	<tr>
	    		<th>Pseudo</th>
	    		<th>Email</th>
	    	</tr>
    	</thead>
	    <?php foreach ($listeUtilisateurs as $donnees) { ?>
	    <tbody>
	    	<tr>
	    		<td><p><?= htmlspecialchars($donnees['pseudo']) ?></p></td>
		    	<td><p><?= htmlspecialchars($donnees['email']) ?></p></td>
			</tr>
		</tbody>
		<?php } ?>
	</table>
</div>