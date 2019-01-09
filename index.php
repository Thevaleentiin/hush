<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Hush</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="src/css/master.css">
    <link href="src/ressource/font/Gilroy-Bold.tff">
    <link href="src/ressource/font/Gilroy-Regular.tff">
  </head>
  <body id="index">
      <main>
          <div id="loader">
            <img src="src/images/loader.gif" alt="loader hush">
          </div>
          <header>
              <nav class="navBar">
                  <ul>
                      <li><a href=""><img src="src/images/prise-noir.png" alt=""><span>Recharger</span></a></li>
                      <li><a href=""><img src="src/images/feuille-bleu.png" alt=""><span>Cultiver</span></a></li>
                      <li><a href=""><img src="src/images/carnet-bleu.png" alt=""><span>Carnet</span></a></li>
                      <li><a href=""><img src="src/images/message-bleu.png" alt=""><span>Message</span></a></li>
                      <li><a href="/src/views/mon-compte.php"><img src="src/images/message-bleu.png" alt=""><span>Compte</span></a></li>
                  </ul>
              </nav>
          </header>
          <section>
              <form class="search_bar" id="SearchBar" action="index.html" method="post">
                  <input type="text" name="search" value="" placeholder="Où allez-vous ?">
              </form>
          </section>

          <section class="menu-inscription">
            <div>
              <ul>
                <li><a href="/hush/src/views/inscription">Créer un compte</a></li>
                <li><a href="/hush/src/views/connexion.php">Se Connecter</a></li>
              </ul>
            </div>
          </section>
      </main>

    <?php
    if (isset($_SESSION['email'])) {
        echo $_SESSION['email'];
    }

    ?>
    <script type="text/javascript" src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="src/script/style.js"></script>
  </body>
</html>
<?php




 ?>
