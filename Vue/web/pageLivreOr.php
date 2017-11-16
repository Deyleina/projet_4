<div class="livre-or">
    <h2>Livre d'or</h2>
    <h3>Ce site vous plaît ? Alors laissez-moi un commentaire :</h3>
            
    <form>
        Veuillez indiquer votre pseudo :<br> <input type="text" name="pseudo" title=""><br>
        Votre message :<br> <textarea></textarea><br>
        <button>Envoyer</button>
    </form>

<?php
	while ($donnees = $com->fetch()) {
?>
    <p class="commentaire-exemple-pseudo"><?= $donnees['pseudo']; ?> a posté ceci le <?= $donnees['date_creation']; ?> :</p>
    <p class="commentaire-exemple-texte"><?= $donnees['contenu']; ?></p>
</div>

<?php
	}
?>