<div class="article-travaux">
    <article><?php while ($donnees = $travauxEnCours->fetch()) {?>
    	<img src="Frontend/Vue/images/pageTravaux/<?= $donnees['image'] ?>" alt="image">
    	<p>Wip du <?= $donnees['date'] ?> : <?= $donnees['titre'] ?></p><br/>
    	<p><?= $donnees['contenu'] ?></p>
		<?php } ?>
	</article>
</div>