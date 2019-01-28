  <body id="connexion">
      <main>
          <a href="#" class="BtnReturn"><img src="/hush/src/asset/images/arrow-left-noir.png" alt="flèche gauche retour en arrière"></a>
          <section class="menu-inscription">
            <div>
              <ul>
                <li><a href="inscription">Créer un compte</a></li>
                <li class="active">Se Connecter</li>
              </ul>
            </div>
          </section>
          <section class="form-user">
              <form action="<?= $_SERVER['PHP_SELF']; ?>?p=connexion" method="post">
                <input type="email" name="email" id="email" value="" placeholder="Adresse e-mail">
                <input type="password" name="mdp" id="mdp" value="" placeholder="Mot de passe">
                <input type="submit" name="connexion" value="Suivant">
              </form>
          </section>
      </main>

      <?php


        if (isset($_POST['connexion'])) {
            $user = new UserController();
            $inc_user = $user->lancerConnexion($_POST);
        }


       ?>
