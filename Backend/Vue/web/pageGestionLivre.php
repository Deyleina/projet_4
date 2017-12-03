<div class="gestion-commentaires-liste">
    <table>
    	<caption>Liste des commentaires</caption>
    	<thead>
	    	<tr>
	    		<th>Pseudo</th>
	    		<th>Contenu</th>
	    	</tr>
    	</thead>
    	<?php while ($donnees = $gestionCommentaires->fetch()) { ?>
    	<td style="display: none;"><p><?= $donnees['id'] ?></p></td>
    	<tbody>
	    	<tr>
	    		<td><p><?= $donnees['pseudo'] ?></p></td>
	    		<td><p><?= $donnees['contenu'] ?></p></td>
	    		<td class="action"><a href="?page=modifierUtilisateur"><img src="http://icons.iconarchive.com/icons/fasticon/database/48/data-edit-icon.png"></a>
	    		<a href="?page=supprimerUtilisateur"><img src="http://icons.iconarchive.com/icons/gakuseisean/ivista-2/48/Misc-Delete-Database-icon.png"></a></td>
	    	</tr>
    	</tbody>
    	<?php } ?>
   	</table>
</div>