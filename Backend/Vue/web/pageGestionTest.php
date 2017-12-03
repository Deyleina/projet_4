<div class="gestion-commentaires-liste">
    <table>
    	<caption>Liste des tests</caption>
    	<thead>
	    	<tr>
	    		<th>Plateforme</th>
	    		<th>Développeur</th>
	    		<th>Genre</th>
	    		<th>Intro</th>
	    		<th>Titre</th>
	    		<th>Image</th>
	    		<th>Contenu</th>
	    	</tr>
    	</thead>
    	<?php while ($donnees = $gestionTests->fetch()) { ?>
    	<td style="display: none;"><p><?= $donnees['id'] ?></p></td>
    	<tbody>
	    	<tr>
	    		<td><p><?= $donnees['plateforme'] ?></p></td>
	    		<td><p><?= $donnees['développeur'] ?></p></td>
	    		<td><p><?= $donnees['genre'] ?></p></td>
	    		<td><p><?= $donnees['intro'] ?></p></td>
	    		<td><p><?= $donnees['titre'] ?></p></td>
	    		<td><p><?= $donnees['image'] ?></p></td>
	    		<td><p><?= $donnees['contenu'] ?></p></td>
	    		<td class="action"><a href="?page=modifierUtilisateur"><img src="http://icons.iconarchive.com/icons/fasticon/database/48/data-edit-icon.png"></a>
	    		<a href="?page=supprimerUtilisateur"><img src="http://icons.iconarchive.com/icons/gakuseisean/ivista-2/48/Misc-Delete-Database-icon.png"></a></td>
	    	</tr>
    	</tbody>
    	<?php } ?>
   	</table>
</div>