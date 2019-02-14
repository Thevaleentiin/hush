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
                    <li><a href="?p=home-cultiver"><img src="/hush/src/asset/images/feuille-noir.png" alt=""><span>Cultiver</span></a></li>
                    <li><a href="?p=mycarnet"><img src="/hush/src/asset/images/carnet-noir.png" alt=""><span>Carnet</span></a></li>
                    <li><a href="?p=conversations"><img src="/hush/src/asset/images/message-noir.png" alt=""><span>Message</span></a></li>
                    <li><a href="?p=moncompte"><img src="/hush/src/asset/images/message-noir.png" alt=""><span>Compte</span></a></li>
                </ul>
            </nav>
        </header>
        <section class="content">
            <a href="javascript:history.back()" class="BtnReturn"><img src="/hush/src/asset/images/arrow-left-noir.png" alt="flèche gauche retour en arrière"></a>
            <h1>Profil</h1>
        </section>
      <section class="parameters-profil">
        <article class="modification-compte">
          <form class="modif-form" action="<?= $_SERVER['PHP_SELF']; ?>?p=moncompte" method="post">
              <ul>
                  <li>
                      <input type="email" name="email" id="email "value="" placeholder="Adresse e-mail">
                      <input type="hidden" name="ancien_mail" value="<?= $_SESSION['email'] ?>">
                  </li>
                  <li><input type="text" name="nom" id="nom "value="" placeholder="Nom"></li>
                  <li><input type="text" name="prenom" id="prenom "value="" placeholder="Prénom"></li>
                  <li><input type="password" name="mdp" id="mdp "value="" placeholder="Mot de passe"></li>
                  <li><input type="submit" name="update" id="Valider" value="Mettre à jour"></li>
              </ul>
          </form>
          <a href="?p=deconnexion">Se déconnecter</a>
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
