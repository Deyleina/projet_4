<div class="bloc-test">
    <h2>Fallout 4 : le test sur PS4</h2>
    <div class="b1">
        <div class="bloc-test-image">
            <img src="../Vue/images/fallout.jpg" alt="image">
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
            <p style="font-weight: bold;">Intro :</p> <?= $donnees['intro']; ?>
        </div>
        <div class="bloc-test-3">
            <p>Aliquam scelerisque, nisi nec fringilla auctor, nisi lacus placerat erat, id semper nisi justo tincidunt dui. Morbi sit amet leo volutpat odio mattis ultrices. Ut mauris enim, pulvinar eget laoreet commodo, molestie non lorem. Ut non dignissim enim, ut imperdiet felis. Nam sed rutrum libero, eget convallis magna. Vivamus bibendum ex non eleifend vulputate. Nunc nisl ligula, porta et lectus sit amet, suscipit ullamcorper velit. Vestibulum condimentum ipsum id nulla gravida, in maximus quam luctus.</p>
        </div>
    </div>
    <?php
        }
    ?>
</div>