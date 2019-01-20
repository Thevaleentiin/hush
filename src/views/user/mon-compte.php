  <body id="monCompte">
    <?php
        var_dump($_SESSION['email']);
        $recup = new UserController();
        $resultat = $recup->AfficherNomCompte($_SESSION['email'], 'nom');
        // var_dump($resultat);
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
