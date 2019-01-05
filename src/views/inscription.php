<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Inscription - Hush</title>
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
        <label for="nom">Pseudo</label>
        <input type="text" name="nom" id="nom" value="">
        <br>
        <label for="mdp">Mot de passe</label>
        <input type="password" name="mdp" id="mdp" value="">
        <br>
        <input type="submit" name="inscription" value="Inscription">
      </form>

      <?php
        require_once '../class/bdd.php';
        require_once '../class/util.php';
        require_once '../orm/user.php';
        require_once '../models/UserManager.php';


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
    <script type="text/javascript" src="src/script/style.js"></script>
  </body>
</html>
