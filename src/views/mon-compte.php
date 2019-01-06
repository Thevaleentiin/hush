<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Connectez vous - Hush</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/master.css">
  </head>
  <body id="monCompte">
    <?php
      require_once '../class/bdd.php';
      require_once '../class/util.php';
      require_once '../orm/user.php';
      require_once '../models/UserManager.php';

     ?>
      <main>
        <h1>Mon Compte</h1>
        <section>
          <h2>Bienvenue</h2>
          <article class="modif-email">
            <p>Voici votre adresse e-mail: <?= $_SESSION['email'] ?></p>
            <form class="" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                <label for="email">Nouveau email :</label>
                <input type="email" name="email" id="email "value="">
                <input type="hidden" name="ancien_mail" value="<?= $_SESSION['email'] ?>">
                <input type="submit" name="update" value="Mettre à jour">
            </form>
          </article>
        </section>
      </main>
      <?php
        if (isset($_POST['update'])) {
            if (Util::verifEmail($_POST['email']) == true) {
                $maj = new UserManager();
                $maj->setEmail($_POST['email']);
                $maj->MiseaJour();
                // var_dump($maj);
                if (isset($_POST['email'])) {
                    // on verifie que l'email n'etait vide
                    $_SESSION['email'] = $_POST['email'];
                    echo 'Compte mis à jour';
                } else {
                    echo 'Erreur de mise à jour';
                }
            } else {
                echo 'erreur de syntaxe , veuillez réessayer';
            }
        }

       ?>

    <script type="text/javascript" src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="src/script/style.js"></script>
  </body>
</html>
