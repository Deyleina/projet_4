<div class="formulaire-ajout-travaux-en-cours">
	<form action="index.php?page=validerAjoutTravaux" method="POST" enctype="multipart/form-data">
		<p><label><strong>Sélectionnez votre image : </strong></label><br><input title="Ajouter une image" type="file" name="nouvelleImageTravaux" ></p>
		<p><label><strong>Ajouter un titre : </strong></label><br><input title="Ajouter un titre" type="text" name="nouveauTitre"></p>
		<p><label><strong>Ajouter un contenu : </strong></label><br><input title="Ajouter un contenu" type="text" name="nouveauContenu" value=""></input></p>
		<button type="submit" class="btn btn-success" title="envoyer" name="ajouter">Envoyer <span class="glyphicon glyphicon-arrow-right"></span></button>
	</form>
</div>