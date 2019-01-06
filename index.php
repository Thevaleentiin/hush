<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Hush</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="src/css/master.css">
  </head>
  <body id="index">
    <div id="loader">
      <img src="src/images/loader.gif" alt="loader hush">
    </div>

    <h1>Bienvenue</h1>

    <section class="menu-inscription">
      <div>
        <ul>
          <li><a href="/hush/src/views/inscription">Créer un compte</a></li>
          <li><a href="/hush/src/views/connexion.php">Se Connecter</a></li>
        </ul>
      </div>
    </section>

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
