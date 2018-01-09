<div class="bloc-entier-test">
    <h2>Fallout 4 : le test sur PS4</h2>

    <?php
        foreach ($listeTests as $donnees) {
    ?>
    <div class="bloc-test">
        <div class="b1">
            <div class="bloc-test-1">
                <div class="interieur-bloc-test-1">
                    <p style="font-weight: bold;">Plateforme :</p> <?= htmlspecialchars($donnees['plateforme']); ?>
                    <p style="font-weight: bold;">Développeur :</p> <?= htmlspecialchars($donnees['developpeur']); ?>
                    <p style="font-weight: bold;">Genre :</p> <?= htmlspecialchars($donnees['genre']); ?>
                </div>
            </div>
        </div>

        <div class="b2">
            <div class="bloc-test-2">
                <div class="bloc-interieur">
                    <div class="interieur-bloc-test-2">
                        <img src="Backend/Vue/images/uploads/tests/<?= htmlspecialchars($donnees['image']); ?>" title="Image test" alt="Image représentant le jeu testé"><br/>
                    </div>
                    <div class="bloc-intro">
                        <p><?= htmlspecialchars($donnees['intro']); ?></p><br/>
                        <div class="bloc-intro-lien">
                            <a href="index.php?page=suiteTest&recup=<?= htmlspecialchars($donnees['id']) ?>">Lire la suite...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <img src="Backend/Vue/images/forest.jpg" title="Séparateur" alt="Image servant de séparateur">
    </div>
    <?php
        }
    ?>
</div>