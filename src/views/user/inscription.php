<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Inscription - Hush</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/hush/src/asset/css/master.css">
    <link href="/hush/src/ressource/font/Gilroy-Bold.tff">
    <link href="/hush/src/ressource/font/Gilroy-Regular.tff">
  </head>
  <body id="inscription">
      <main>
          <a href="#" class="BtnReturn"><img src="/hush/src/asset/images/arrow-left.png" alt="flèche gauche retour en arrière"></a>
          <section class="menu-inscription">
            <div>
              <ul>
                <li class="active">Créer un compte</li>
                <li><a href="connexion.php">Se Connecter</a></li>
              </ul>
            </div>
          </section>
          <section class="form-user">
              <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="email" name="email" id="email" value="" placeholder="Adresse e-mail">
                <input type="text" name="nom" id="nom" value="" placeholder="Nom">
                <input type="password" name="mdp" id="mdp" value="" placeholder="Mot de Passe">
                <input type="submit" name="inscription" value="Inscription">
              </form>
          </section>
      </main>

      <?php
        require_once '../../class/bdd.php';
        require_once '../../class/util.php';
        require_once '../../orm/user.php';
        require_once '../../models/UserManager.php';


        if (isset($_POST['inscription'])) {
            $user = new UserManager();
            // TESt le mail
            $email_exist = $user->userExist($_POST['email']);
            if (empty($email_exist)) {
                if (Util::verifEmail($_POST['email']) == true) {
                    // insertion de l'Utilisateur
                    $user = new UserManager();
                    $user->setEmail($_POST['email']);
                    $user->setMdp($_POST['mdp']);
                    $user->setNom($_POST['nom']);
                    $user->inscription();
                    echo $_SESSION['email'];
                } else {
                    echo'Mavais email , erreur de syntaxe';
                }
            } else {
                echo 'Utilisateur déja existant';
            }
        }


       ?>
    <script type="text/javascript" src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/hush/src/asset/script/style.js"></script>
  </body>
</html>
