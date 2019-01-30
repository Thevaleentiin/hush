<body id="conversation">
    <main>
        <header>
            <nav class="navBar">
                <ul>
                    <li><a href="?p=home"><img src="src/asset/images/prise-bleu.png" alt=""><span class="active">Recharger</span></a></li>
                    <li><a href="/hush/src/views/index-cultiver.php"><img src="src/asset/images/feuille-noir.png" alt=""><span>Cultiver</span></a></li>
                    <li><a href=""><img src="src/asset/images/carnet-noir.png" alt=""><span>Carnet</span></a></li>
                    <li><a href=""><img src="src/asset/images/message-noir.png" alt=""><span>Message</span></a></li>
                    <li><a href="?p=moncompte"><img src="src/asset/images/profil-empty-noir.png" alt=""><span>Compte</span></a></li>
                </ul>
            </nav>
        </header>
        <section class="content-top">
            <h1>Conversations</h1>
            <form class="" action="<?= $_SERVER['PHP_SELF']; ?>?p=conversations" method="post">
                <input type="text" name="oneuser" value="" placeholder="Nom et prénom">
                <input type="submit" name="ajouterfriend" value="">
            </form>
        </section>
        <section class="conversations">

            <!-- <article class="conversation">
                <div class="img-container">
                    <img src="src/asset/images/profil-picture.png" alt="">
                </div>
                <div class="infos-conversation">
                    <p>Julie Sauvignet</p>
                    <p>Super et toi ? je pense...</p>
                </div>
            </article> -->
            <?php
            $convers = new ChatController();
            $requete = $convers ->RecupConversation(); ?>
        </section>
    </main>
</body>

<?php
// var_dump($_SESSION);
if (isset($_POST['ajouterfriend'])) {
    $user = new UserController();
    $result = $user->AddOneuser($_POST['oneuser']);
}
 ?>
