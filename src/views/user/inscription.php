  <body id="inscription">
      <main>
          <a href="#" class="BtnReturn"><img src="/hush/src/asset/images/arrow-left-noir.png" alt="flèche gauche retour en arrière"></a>
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
                <input type="text" name="phone" id="phone" value="" placeholder="Numéro de téléphone">
                <input type="password" name="mdp" id="mdp" value="" placeholder="Mot de Passe">
                <input type="submit" name="inscription" value="Inscription">
              </form>
          </section>
      </main>

      <?php



        if (isset($_POST['inscription'])) {
            $user = new UserController();
            $inc_user = $user->lancerInscription($_POST);
        }


       ?>
