<body id="conversation">
    <main>
        <header>
            <nav class="navBar">
                <ul>
                    <li><a href="?p=home"><img src="src/asset/images/prise-noir.png" alt=""><span>Recharger</span></a></li>
                    <li><a href="?p=home-cultiver"><img src="src/asset/images/feuille-noir.png" alt=""><span>Cultiver</span></a></li>
                    <li><a href="?p=mycarnet"><img src="src/asset/images/carnet-noir.png" alt=""><span>Carnet</span></a></li>
                    <li><a href="?p=conversations"><img src="src/asset/images/message-bleu.png" alt=""><span class="active">Message</span></a></li>
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
            <?php
            $convers = new ChatController();
            $requete = $convers ->RecupConversation(); ?>
        </section>
    </main>

<?php
// var_dump($_SESSION);
if (isset($_POST['ajouterfriend'])) {
    $user = new UserController();
    $result = $user->AddOneuser($_POST['oneuser']);
}
 ?>
