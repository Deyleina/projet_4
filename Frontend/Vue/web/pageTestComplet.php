<div class="bloc-entier-test-complet">
    <h2>Fallout 4 : le test sur PS4</h2>
    <?php
        foreach ($infoTestComplet as $donnees) {
    ?>
    <div class="b1">
        <div class="bloc-test-complet-image">
            <img src="Backend/Vue/images/uploads/tests/<?= htmlspecialchars($donnees['image']); ?>" title="Image test" alt="Image représentant le jeu testé">
        </div>
        <div class="bloc-test-complet-texte">
            <p>Titre :</p> <?= htmlspecialchars($donnees['titre']); ?>
            <p>Contenu :</p> <?= htmlspecialchars($donnees['contenu']); ?>
        </div>
    </div>
    <?php
        }
    ?>
</div>