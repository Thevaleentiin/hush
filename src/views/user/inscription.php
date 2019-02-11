  <body id="inscription">
      <main>
          <a href="#" class="BtnReturn"><img src="src/asset/images/arrow-left-noir.png" alt="flèche gauche retour en arrière"></a>
          <section class="menu-inscription">
            <div>
              <ul>
                <li class="active">Créer un compte</li>
                <li><a href="?p=connexion">Se Connecter</a></li>
              </ul>
            </div>
          </section>
          <section class="form-user">
              <form action="<?= $_SERVER['PHP_SELF']; ?>?p=inscription" method="post">
                <div class="container-name">
                    <input type="text" name="nom" id="nom" value="" placeholder="Nom">
                    <input type="text" name="prenom" id="prenom" value="" placeholder="Prénom">
                </div>
                <input type="email" name="email" id="email" value="" placeholder="Adresse e-mail">
                <input type="number" name="phone" id="phone" value="" placeholder="Numéro de téléphone">
                <div class="container-password">
                    <input id="password-field" type="password" class="form-control" name="mdp" value="" placeholder="Mot de passe">
                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>
                <input type="submit" name="inscription" id="s'inscrire" value="Inscription">
              </form>
          </section>
      </main>

      <?php



        if (isset($_POST['inscription'])) {
            $user = new UserController();
            $inc_user = $user->lancerInscription($_POST);
        }


       ?>
