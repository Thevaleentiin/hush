<?php
    // echo'11';
    // var_dump($_REQUEST);
    if (isset($_GET['toid']) && $_GET['toid'] != null && isset($_GET['fromid']) && $_GET['fromid'] != null) {
        $toid = trim($_GET['toid']);
        $fromid = trim($_GET['fromid']);

        require_once '../class/bdd.php';
        require_once '../orm/user.php';
        require_once '../models/UserManager.php';
        require_once '../orm/chat.php';
        require_once '../models/ChatManager.php';
        require_once '../controller/DefaultController.php';
        require_once '../controller/UserController.php';
        require_once '../controller/ChatController.php';

        $chat = new ChatController();
        $Messages = $chat->RecupMessages($toid, $fromid); //Message envoyé

        foreach ($Messages as $message) {
            if ($message->gettoId() === $toid) {
                ?>
                <article class="message receive-message">
                    <img src="src/asset/images/profil-empty-noir" alt="">
                    <p><?= htmlentities($message->getMessage()); ?></p>
                    <span><?= $message->getdatemessage(); ?></span>
                </article>
                <?php
            } else {
                ?>
                <article class="message sended-message">
                    <img src="src/asset/images/profil-empty-noir" alt="">
                    <p><?= htmlentities($message->getMessage()); ?></p>
                    <span><?= $message->getdatemessage(); ?></span>
                </article>
                <?php
            }
        }
    } else {
        echo "T nul C cho";
    }
