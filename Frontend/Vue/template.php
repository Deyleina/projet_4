<!doctype html>
<html lang="fr">
    <head>
      	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
      	<title>Titre de la page</title>
      	<link rel="stylesheet" href="Frontend/Vue/css/style.css">
    </head>

    <body>
        <header>
            <div class="banniere"><a href="index.php?page=accueil">Banniere</a></div>
            <h1>Deyleina Passion Cosplay</h1>
            <?php
            if (isset($_SESSION['pseudo'])) {
                if ($_SESSION['pseudo'] == 'Deyleina') { ?>
                    <a href="?page=admin" title="" style="margin-left: 80%;" class="admin">| Accéder au compte administrateur</a><br/>
                <?php } ?>
                <a href="?page=deconnexion" title="" style="margin-left: 80%;" class="deconnexion">| Se déconnecter</a><br/>
                <a href="?page=compte" title="" style="margin-left: 80%;" class="compte">| Accéder à mon compte</a>
            <?php } else { ?>
                <a href="?page=connexion" title="" style="margin-left: 80%;">| Se connecter ?</a><br/>
                <a href="?page=inscription" title="" style="margin-left: 80%;">| Inscrivez-vous</a>
            <?php } ?>
            <div class="id">| Bienvenue <?php if (isset($_SESSION['pseudo'])){echo $_SESSION['pseudo']; } else {echo 'visiteur invité';} ?> !</div>
        </header>

        <div class="btn-navigation">
            <div class="barre"></div>
            <div class="barre"></div>
            <div class="barre"></div>
        </div>
        
        <nav>
            <div class="navigation">
                <ul>
                    <li><a href="index.php?page=multimedia" title="">Photos/Vidéos</a></li>
                    <li><a href="index.php?page=travaux" title="">Work In Progress</a></li>
                    <li><a href="index.php?page=test" title="">Mes tests gaming</a></li>
                    <li><a href="index.php?page=moi" title="">A propos de moi</a></li>
                    <li><a href="index.php?page=livre" title="">Livre d'or</a></li>
                </ul>
            </div>
        </nav>

        <div class="conteneur-principal">
          <?= $content ?>
        </div>

        <footer>
            <p>Mentions légales</p>
        </footer>

        <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="Frontend/Vue/js/script.js"></script>
    </body>
</html>