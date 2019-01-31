<?php
    if (isset($_GET['toId']) && $_GET['toId'] != null && isset($_GET['fromId']) && $_GET['fromId'] != null) {
        $toid = trim($_GET['toId']);
        $fromid = trim($_GET['fromId']);

        require_once 'src/class/bdd.php';
        require_once 'src/orm/user.php';
        require_once 'src/models/UserManager.php';
        require_once 'src/orm/chat.php';
        require_once 'src/models/ChatManager.php';
        require_once 'src/controller/DefaultController.php';
        require_once 'src/controller/UserController.php';
        require_once 'src/controller/ChatController.php';

        $chat = new ChatController();
        $getMessages = $chat->RecupMessages($toid, $fromid);
    }
