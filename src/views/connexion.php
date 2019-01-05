<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Connectez vous - Hush</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/master.css">
  </head>
  <body id="connexion">
      <section class="menu-inscription">
        <div>
          <ul>
            <li><a href="inscription">Créer un compte</a></li>
            <li>Se Connecter</li>
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
        <input type="submit" name="connexion" value="connexion">
      </form>

      <?php
        require_once '../class/bdd.php';
        require_once '../class/util.php';
        require_once '../orm/user.php';
        require_once '../models/UserManager.php';


        if (isset($_POST['connexion'])) {
          $user = new UserManager();
          // var_dump($_POST['email']);
          // var_dump($_POST['mdp']);
          $user->setEmail($_POST['email']);
          $user->SetMdp($_POST['mdp']);
          $user->accountExist();
        }


       ?>
    <script type="text/javascript" src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="src/script/style.js"></script>
  </body>
</html>
