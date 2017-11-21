<!doctype html>
<html lang="fr">
    <head>
      	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
      	<title>Titre de la page</title>
      	<link rel="stylesheet" href="Vue/css/style.css">
    </head>

    <body>
        <header>
            <div class="banniere"><a href="index.php?page=accueil">Banniere</a></div>
            <h1>Deyleina Passion Cosplay</h1>
            <a href="?page=connexion" title="" style="margin-left: 90%;">Se connecter ?</a>
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
                    <li><a href="index.php?page=wip" title="">Work In Progress</a></li>
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
        <script src="js/script.js"></script>
    </body>
</html>