<!DOCTYPE html>
<html lang="fr">

    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="google-site-verification" content="d9OqWcwHf9B33pRCcDiPwypaHBaWkgWp19WHAqqw_FM" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Le site d'une passionnée de Cosplay, qui fait vivre l'art des fans">
        <meta name="author" content="Deyleina">
        <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />

        <title>Deyleina</title>

        <!-- Bootstrap-->
        <link href="Frontend/Vue/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Style CSS -->
        <link href="Frontend/Vue/css/style.css" rel="stylesheet">

    </head>

    <body>

    <!-- Header -->
    <header>
        <div class="navbar navbar-default">
            <?php if (isset($_SESSION['pseudo'])) {
                if ($_SESSION['pseudo'] == 'Deyleina') {
                    ?>
                        <a href="index.php?page=admin" title="" class="admin">
                            Accéder au compte administrateur
                        </a><br/>
                    <?php }
                    ?>
                <a href="index.php?page=compte" title="" class="compte">
                    Accéder à mon compte
                </a><br/>
                <a href="index.php?page=deconnexion" title="" class="deconnexion">
                    Se déconnecter
                </a><br/>
            <?php }else {
                ?>
                    <a href="index.php?page=connexion" title="">
                        Se connecter ?
                    </a><br/>
                    <a href="index.php?page=inscription" title="">
                        Inscrivez-vous
                    </a>
                <?php }
            ?>
            <div class="accueilPersonnalise">
                Bienvenue
                <?php if (isset($_SESSION['pseudo'])) {
                    echo $_SESSION['pseudo'];
                } else {
                    echo 'visiteur invité';
                } ?> !
            </div>
        </div>
        <div class="titre">
            <h1>
                <a href="index.php?page=accueil">Deyleina Passion Cosplay</a>
            </h1>
        </div>
    </header>

    <!-- Navigation -->
    <div class="btn-navigation">
        <div class="barre"></div>
        <div class="barre"></div>
        <div class="barre"></div>
    </div>

    <nav class="navbar navbar-inverse">
        <ul>
            <li>
                <a href="index.php?page=multimedia">Photos/Vidéos</a>
            </li>
            <li>
                <a href="index.php?page=travaux">Work In Progress</a>
            </li>
            <li>
                <a href="index.php?page=test">Mes tests gaming</a>
            </li>
            <li>
                <a href="index.php?page=moi">A propos de nous</a>
            </li>
            <li>
                <a href="index.php?page=livre">Livre d'or</a>
            </li>
          </ul>
    </nav>

    <!-- Conteneur central -->
    <section>
            <div class="container">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <?= $content ?>
                </div>
            </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="liens-footer">
                    <h4 class="text-uppercase"><a href="index.php?page=cgu" class="cgu-affiche">Conditions Générales d'Utilisation (CGU)</a></h4>
                    <h4 class="text-uppercase"><a href="index.php?page=cgu" class="cgu-cache">C.G.U</a></h4>
                    <h4 class="text-uppercase"><a href="index.php?page=mention">Mentions légales</a></h4>
                </div>
            </div>
        </div>
        <a href="#" class="ancre"><span class="glyphicon glyphicon-arrow-up"></span></a>
    </footer>

    <!-- JavaScript -->
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="Frontend/Vue/js/script.js"></script>
    <script src="Frontend/Vue/js/slider.js"></script>

  </body>

</html>