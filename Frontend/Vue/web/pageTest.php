<div class="bloc-test">
    <h2>Fallout 4 : le test sur PS4</h2>
    <div class="b1">
        <div class="bloc-test-image">
            <img src="Frontend/Vue/images/fallout.jpg" alt="image">
        </div>
        <?php
            while ($donnees = $test->fetch()) {
        ?>
        <div class="bloc-test-1">
            <p style="font-weight: bold;">Plateforme :</p> <?= $donnees['plateforme']; ?>
            <p style="font-weight: bold;">Développeur :</p> <?= $donnees['développeur']; ?>
            <p style="font-weight: bold;">Genre :</p> <?= $donnees['genre']; ?>
        </div>
    </div>
    <div class="b2">
        <div class="bloc-test-2">
            <p style="font-weight: bold;">Intro :</p> <?= $donnees['intro']; ?><br/>
            <a href="?page=suiteTest">Lire la suite...</a>
        </div>
    </div>
    <?php
        }
    ?>
</div>