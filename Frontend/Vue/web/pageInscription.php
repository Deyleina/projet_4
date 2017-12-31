<div class="bloc-connexion">

	<form action="index.php?page=nouvelUtilisateur" method="POST">
		Entrez votre pseudo : <br/>
		<input type="text" name="nouveauPseudo" required>  <br/>
		Entrez votre adresse e-mail : <br/>
		<input type="email" name="nouvelEmail" required>  <br/>
		Entrez votre mot de passe : <br/>
		<input type="password" name="nouveauMotDePasse" required> <br/>
		
		<button type="submit" class="btn btn-primary" title="inscription" name="inscription">S'inscrire</button>
	</form>
</div>