<div class="livre-or">
    <h2>Livre d'or</h2>
    <h3>Ce site vous plaît ? Alors laissez-moi un commentaire :</h3>
            
    <form action="?page=envoyerCommentaire" method="POST">
        Veuillez indiquer votre pseudo :<br> <input type="text" name="nouveauPseudo" title="" value="<?php if(isset($_SESSION['pseudo'])) { ?>
        <?= $_SESSION['pseudo'] ?> <?php } ?>"><br>
        Votre message :<br> <input type="text" name="nouveauContenu"><br>
        <input type="hidden" name="idUser" value="<?= $_SESSION['id'] ?>">
        <input type="submit" name="envoyerCommentaire" value="Envoyer">
    </form>


	<?php while ($donnees = $com->fetch()) {?>
        <p class="commentaire-exemple-pseudo"><?= $donnees['pseudo'] ?> a posté ceci le <?= $donnees['date_creation'] ?> :</p>
        <p class="commentaire-exemple-texte"><?= $donnees['contenu'] ?></p>
        <?php if(isset($_SESSION['pseudo']) AND $_SESSION['pseudo'] == $donnees['pseudo']) { ?>
            <form action="?page=modifierCommentaire&recup=<?= $donnees['id'] ?>" method="POST">
                <input type="hidden" name="idActuel" value="<?= $donnees['id'] ?>">
                <input type="submit" name="" value="Modifier ce commentaire">
            </form>
            <form action="?page=supprimerCommentaire&recup=<?= $donnees['id'] ?>" method="POST">
                <input type="hidden" name="idActuel" value="<?= $donnees['id'] ?>">
                <input type="submit" name="" value="Supprimer ce commentaire">
            </form>
        <?php } ?>
    <?php } ?>
</div>