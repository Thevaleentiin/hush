<body id="profilParam">
  <?php
      // var_dump($_SESSION['email']);
      $recup = new UserController();
      $resultat = $recup->AfficherNomCompte($_SESSION['email'], 'nom');
      // var_dump($resultat);
   ?>
    <main>
        <header>
            <nav class="navBar">
                <ul>
                    <li><a href="?p=home"><img src="/hush/src/asset/images/prise-noir.png" alt=""><span>Recharger</span></a></li>
                    <li><a href="/hush/src/views/index-cultiver.php"><img src="/hush/src/asset/images/feuille-bleu.png" alt=""><span>Cultiver</span></a></li>
                    <li><a href=""><img src="/hush/src/asset/images/carnet-bleu.png" alt=""><span>Carnet</span></a></li>
                    <li><a href=""><img src="/hush/src/asset/images/message-bleu.png" alt=""><span>Message</span></a></li>
                    <li><a href="#"><img src="/hush/src/asset/images/message-bleu.png" alt=""><span>Compte</span></a></li>
                </ul>
            </nav>
        </header>
        <section class="content">
            <a href="?p=reglage-compte" class="BtnReturn"><img src="/hush/src/asset/images/arrow-left-noir.png" alt="flèche gauche retour en arrière"></a>
            <h1>Profil</h1>
        </section>
      <section>
        <article class="modification-compte">
          <p>Voici votre adresse e-mail: <?= $_SESSION['email'] ?></p>
          <form class="modifmail-form" action="<?= $_SERVER['PHP_SELF']; ?>?p=moncompte" method="post">
              <label for="email">Nouveau email :</label>
              <input type="email" name="email" id="email "value="">
              <input type="hidden" name="ancien_mail" value="<?= $_SESSION['email'] ?>">
              <input type="submit" name="update" value="Mettre à jour">
          </form>
          <a href="deconnexion.php">Se déconnecter</a>
          <form class="delete-form" action="<?= $_SERVER['PHP_SELF']; ?>?p=moncompte" method="post">
              <input type="hidden" name="email" value="<?= $_SESSION['email']; ?>">
              <input type="submit" name="delete" value="Supprimer son compte">
          </form>
        </article>
      </section>
    </main>
    <?php
      if (isset($_POST['update'])) {
          $up = new UserController();
          $up->lancerUpdate($_POST);
      }

      if (isset($_POST['delete'])) {
          $del = new UserController();
          $del->lancerDelete($_POST);
      }

     ?>
