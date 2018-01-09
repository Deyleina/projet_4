<div class="article-travaux">
    <article>
        <?php foreach ($listeTravaux as $donnees) {?>
            <div class="bloc-article">
                <div class="bloc-article-image">
        	        <img src="Backend/Vue/images/uploads/travaux/<?= htmlspecialchars($donnees['image']) ?>" title="Image WiP" alt="Image représentant l'activité">
                </div>
                <div class="bloc-article-texte">
        	        <p class="wip-texte-italique">Wip du <?= htmlspecialchars($donnees['date']) ?> :</p><p class="wip-texte-gras"> <?= htmlspecialchars($donnees['titre']) ?></p><br/>
        	        <p>Résumé : <?= htmlspecialchars($donnees['contenu']) ?></p>
                </div>
            </div>
		<?php } ?>
	</article>
</div>