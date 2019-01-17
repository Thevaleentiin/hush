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
        // require_once 'class/bdd.php';
        // require_once 'class/util.php';
        // require_once 'orm/user.php';
        // require_once 'models/UserManager.php';


        if (isset($_POST['inscription'])) {
            $user = new UserController();
            $inc_user = $user->lancerInscription($_POST);
        }


       ?>
