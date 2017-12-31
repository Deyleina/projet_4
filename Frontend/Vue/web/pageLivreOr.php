<div class="livre-or">
    <h2>Livre d'or</h2>
    <h3>Mon site vous plaît ? Alors laissez-moi un commentaire :</h3>
            
    <form action="index.php?page=envoyerCommentaire" method="POST" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="float: none;">
        <label for="text">Veuillez indiquer votre pseudo :</label><br>
        <input type="text" name="nouvelAuteur" title="" value="<?php if(isset($_SESSION['pseudo'])) { ?><?= htmlspecialchars($_SESSION['pseudo']) ?> <?php } ?>" class="form-control" required><br>
        <label for="text">Et votre message :</label><br>
        <input type="text" name="nouveauContenu" class="form-control" required><br>
        <input type="hidden" name="idUser" value="<?php if(isset($_SESSION['id'])) { ?><?= htmlspecialchars($_SESSION['id']) ?> <?php } ?>">
        
        <?php if(isset($_SESSION['id'])) { ?>
            <button type="submit" class="btn btn-success" title="envoyerCommentaire" name="envoyerCommentaire">Envoyer <span class="glyphicon glyphicon-arrow-right"></span></button>
        <?php } else {
            echo "Veuillez vous connecter pour pouvoir poster un commentaire !";
        } ?>
    </form>

    <?php if ($pagePrecedente != null) { ?>
        <a class="pagination-livre-or" href="index.php?page=livre&p=<?= $pagePrecedente ?>">Precedent</a>
    <?php } ?>

    <?php if ($pageSuivante != null) { ?>
        <a class="pagination-livre-or" href="index.php?page=livre&p=<?= $pageSuivante ?>">Suivant</a>
    <?php } ?>

    <div class="partie-commentaires">
        <?php while ($donnees = $totalCommentaire->fetch()) {?>
            <div class="commentaire">
                <div class="bloc-commentaire">
                    <div class="commentaire-info-contenu">
                        <p class="commentaire-contenu">“<?= strip_tags(htmlspecialchars($donnees['contenu'])) ?>”</p>
                        <p class="commentaire-pseudo">posté par <?= strip_tags(htmlspecialchars($donnees['auteur'])) ?> le <?= htmlspecialchars($donnees['date_creation']) ?></p>
                    </div>
                    
                    <?php if (isset($_SESSION['pseudo']) AND $_SESSION['id'] == $donnees['id_utilisateur']) { ?>
                        <div class="modifier-supprimer-commentaire">
                            <form action="index.php?page=modifierCommentaire&recup=<?= htmlspecialchars($donnees['id']) ?>" method="POST">
                                <input type="hidden" name="idActuel" value="<?= htmlspecialchars($donnees['id']) ?>">
                                <button type="submit" class="btn btn-warning" title="modifier" name="modifier">Modifier ce commentaire <span class="glyphicon glyphicon-pencil"></span></button>
                            </form>
                            <form action="index.php?page=supprimerCommentaire&recup=<?= htmlspecialchars($donnees['id']) ?>" method="POST">
                                <input type="hidden" name="idActuel" value="<?= htmlspecialchars($donnees['id']) ?>">
                                <button type="submit" class="btn btn-danger" title="supprimer" name="supprimer">Supprimer ce commentaire <span class="glyphicon glyphicon-remove"></span></button>
                            </form>
                        </div>
                    <?php } ?>
                    
                    <?php if(isset($_SESSION['pseudo']) AND $_SESSION['id'] != $donnees['id_utilisateur']) { ?>
                        <div class="signaler-commentaire">
                            <form action="index.php?page=signalerCommentaire&recup=<?= htmlspecialchars($donnees['id']) ?>" method="POST">
                                    <input type="hidden" name="idActuel" value="<?= htmlspecialchars($donnees['id']) ?>">
                                    <button type="submit" class="btn btn-outline-danger" title="signaler" name="signaler">Signaler ce commentaire <span class="glyphicon glyphicon-exclamation-sign"></span></button>
                            </form>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <img src="Frontend/Vue/images/separateur.gif" title="Séparateur" alt="Image servant de séparateur" class="separateur-commentaire-livre-or">
        <?php } ?>
    </div>
</div>