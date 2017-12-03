<div class="bloc-test">
    <h2>Fallout 4 : le test sur PS4</h2>
    <?php
        while ($donnees = $testComplet->fetch()) {
    ?>
    <div class="b1">
        <div class="bloc-test-image">
            <img src="Frontend/Vue/images/<?= $donnees['image']; ?>" alt="image">
        </div>
        <div class="bloc-test-complet">
            <p style="font-weight: bold;">Titre :</p> <?= $donnees['titre']; ?>
            <p style="font-weight: bold;">Contenu :</p> <?= $donnees['contenu']; ?>
        </div>
    </div>
    <?php
        }
    ?>
</div>