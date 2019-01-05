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
          <h2>Bienvenue <?= $_SESSION['nom']; ?></h2>
          <article class="modif-email">
            <p>Voici votre adresse e-mail: <?= $_SESSION['email'] ?></p>
            <form class="" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">

            </form>
          </article>
        </section>
      </main>


    <script type="text/javascript" src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="src/script/style.js"></script>
  </body>
</html>
