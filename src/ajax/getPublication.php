<?php
    // echo'11';
    // var_dump($_REQUEST);
    if (isset($_GET['id_user']) && $_GET['id_user'] != null && isset($_GET['nom']) && $_GET['nom'] != null && isset($_GET['prenom']) && $_GET['prenom'] != null) {
        $id = trim($_GET['id_user']);
        $nom = trim($_GET['nom']);
        $prenom = trim($_GET['prenom']);

        require_once '../class/bdd.php';
        require_once '../orm/user.php';
        require_once '../orm/publication.php';
        require_once '../models/UserManager.php';
        require_once '../models/PublicationManager.php';
        require_once '../orm/borne.php';
        require_once '../models/BorneManager.php';
        require_once '../controller/DefaultController.php';
        require_once '../controller/UserController.php';
        require_once '../controller/BorneController.php';
        require_once '../controller/PublicationController.php';

        $publi = new PublicationController();
        $publication = $publi->RecupPublication($id); //Recup Publication user

        // var_dump($publication);
        foreach ($publication as $publi) {
            ?>
            <article class="publication-content">
                <div class="top-content">
                    <img src="src/asset/images/profil-picture.png" alt="photo de profil">
                    <div class="text-content">
                        <p class="title-content"><span><?= $nom.' '.$prenom ?></span> à partagé une publication</p>
                        <p class="date"><?= $publi->getTimemessage() ?></p>
                    </div>
                </div>
                <p class="message-content">
                    <?= $publi->getPublication() ?>
                </p>
            </article>
            <?php
        }
    } else {
        echo 'Erreur d\'envoie';
    }
