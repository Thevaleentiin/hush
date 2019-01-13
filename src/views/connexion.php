<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Connectez vous - Hush</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/hush/src/css/master.css">
    <link href="/hush/src/ressource/font/Gilroy-Bold.tff">
    <link href="/hush/src/ressource/font/Gilroy-Regular.tff">
  </head>
  <body id="connexion">
      <main>
          <a href="#" class="BtnReturn"><img src="/hush/src/images/arrow-left.png" alt="flèche gauche retour en arrière"></a>
          <section class="menu-inscription">
            <div>
              <ul>
                <li><a href="inscription">Créer un compte</a></li>
                <li class="active">Se Connecter</li>
              </ul>
            </div>
          </section>
          <section class="form-user">
              <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="email" name="email" id="email" value="" placeholder="Adresse e-mail">
                <input type="password" name="mdp" id="mdp" value="" placeholder="Mot de passe">
                <input type="submit" name="connexion" value="Suivant">
              </form>
          </section>
      </main>




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
    <script type="text/javascript" src="/hush/src/script/style.js"></script>
  </body>
</html>
