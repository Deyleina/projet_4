<div class="gestionTravaux">
<?php while ($donnees = $gestionTravaux->fetch()) { ?>
    <table>
    	<caption>Liste des "Work In Progress"</caption>
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
	    		<td><img src="Frontend/Vue/images/pageTravaux/<?= $donnees['image'] ?>" alt="image" style="width: 70%;height: 90px;"></td>
	    		<td><p><?= $donnees['titre'] ?></p></td>
	    		<td><p><?= $donnees['date'] ?></p></td>
	    		<td><p><?= $donnees['contenu'] ?></p></td>
	    		<td class="action"><a href="?page=ajoutTravaux"><img src="http://icons.iconarchive.com/icons/gakuseisean/ivista-2/48/Misc-New-Database-icon.png"></a>
	    		<a href="?page=modifierTravaux"><img src="http://icons.iconarchive.com/icons/fasticon/database/48/data-edit-icon.png"></a>
	    		<a href="?page=supprimerTravaux"><img src="http://icons.iconarchive.com/icons/gakuseisean/ivista-2/48/Misc-Delete-Database-icon.png"></a></td>
	    	</tr>
    	</tbody>
   	</table>
<?php } ?>
</div>

<!-- <p style="text-align: center">Il y a actuellement <?= $nombreBillets ?> billets. En voici la liste :</p> -->