  <body id="connexion">
      <main>
          <a href="javascript:history.back()" class="BtnReturn"><img src="src/asset/images/arrow-left-noir.png" alt="flèche gauche retour en arrière"></a>
          <section class="menu-inscription">
            <div>
              <ul>
                <li><a href="?p=inscription">Créer un compte</a></li>
                <li class="active">Se Connecter</li>
              </ul>
            </div>
          </section>
          <section class="form-user">
              <form action="<?= $_SERVER['PHP_SELF']; ?>?p=connexion" method="post">
                <input type="email" name="email" id="email" value="" placeholder="Adresse e-mail">
                <div class="container-password">
                    <input id="password-field" type="password" class="form-control" name="mdp" value="" placeholder="Mot de passe">
                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>
                <input type="submit" name="connexion" id="connexion" value="Suivant">
              </form>
          </section>
      </main>

      <?php


        if (isset($_POST['connexion'])) {
            $user = new UserController();
            $inc_user = $user->lancerConnexion($_POST);
        }


       ?>
