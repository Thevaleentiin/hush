<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Connectez vous - Hush</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/hush/src/asset/css/master.css">
    <link href="/hush/src/ressource/font/Gilroy-Bold.tff">
    <link href="/hush/src/ressource/font/Gilroy-Regular.tff">
  </head>
  <body id="monCompte">
    <?php
    require_once '../../class/bdd.php';
    require_once '../../class/util.php';
    require_once '../../orm/user.php';
    require_once '../../models/UserManager.php';

          $test = new UserManager();
          $resultat = $test->findAnythingByEmail($_SESSION['email'], 'nom');
     ?>
      <main>
          <header>
              <nav class="navBar">
                  <ul>
                      <li><a href="/hush/index.php"><img src="/hush/src/asset/images/prise-noir.png" alt=""><span>Recharger</span></a></li>
                      <li><a href="/hush/src/views/index-cultiver.php"><img src="/hush/src/asset/images/feuille-bleu.png" alt=""><span>Cultiver</span></a></li>
                      <li><a href=""><img src="/hush/src/asset/images/carnet-bleu.png" alt=""><span>Carnet</span></a></li>
                      <li><a href=""><img src="/hush/src/asset/images/message-bleu.png" alt=""><span>Message</span></a></li>
                      <li><a href="#"><img src="/hush/src/asset/images/message-bleu.png" alt=""><span>Compte</span></a></li>
                  </ul>
              </nav>
          </header>
        <h1>Mon Compte</h1>
        <section>
          <h2>Bienvenue <?= $_SESSION['nom']; ?></h2>
          <article class="modification-compte">
            <p>Voici votre adresse e-mail: <?= $_SESSION['email'] ?></p>
            <form class="modifmail-form" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                <label for="email">Nouveau email :</label>
                <input type="email" name="email" id="email "value="">
                <input type="hidden" name="ancien_mail" value="<?= $_SESSION['email'] ?>">
                <input type="submit" name="update" value="Mettre à jour">
            </form>
            <a href="deconnexion.php">Se déconnecter</a>
            <form class="delete-form" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="hidden" name="email" value="<?= $_SESSION['email']; ?>">
                <input type="submit" name="delete" value="Supprimer son compte">
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

        if (isset($_POST['delete'])) {
            if (isset($_POST['email'])) {
                $del = new UserManager();
                $del->setEmail($_POST['email']);
                $del->SupprUser();
            }
        }

       ?>

    <script type="text/javascript" src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="src/script/style.js"></script>
  </body>
</html>
