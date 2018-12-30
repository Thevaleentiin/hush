<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Hush</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/master.css">
  </head>
  <body id="inscription">
      <section class="menu-inscription">
        <div>
          <ul>
            <li>Créer un compte</li>
            <li><a href="connexion.php">Se Connecter</a></li>
          </ul>
        </div>
      </section>

      <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="">
        <br>
        <label for="mdp">Mot de passe</label>
        <input type="password" name="mdp" id="mdp" value="">
        <br>
        <input type="submit" name="inscription" value="Inscription">
      </form>

      <?php
        require_once '../class/bdd.php';
        require_once '../class/util.php';
        require_once '../model/UserManager.php';
        require_once '../orm/user.php';

        if (isset($_POST['inscription'])) {

          // TESt le mail
          $email_exist = UserManager::userExist($_POST['email']);


        }


       ?>
    <script type="text/javascript" src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="src/script/style.js"></script>
  </body>
</html>
