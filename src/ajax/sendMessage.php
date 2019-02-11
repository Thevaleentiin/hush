<?php
// var_dump($_REQUEST);
// die();
    if (isset($_GET['toid']) && $_GET['toid'] != null && isset($_GET['fromid']) && $_GET['fromid'] != null && isset($_POST['message']) && $_POST['message'] != null) {
        $toid = trim($_GET['toid']);
        $fromid = trim($_GET['fromid']);
        $message = trim($_POST['message']);

        require_once '../class/bdd.php';
        require_once '../orm/user.php';
        require_once '../models/UserManager.php';
        require_once '../orm/chat.php';
        require_once '../models/ChatManager.php';
        require_once '../controller/DefaultController.php';
        require_once '../controller/UserController.php';
        require_once '../controller/ChatController.php';

        $Msg = new ChatController();
        $SendMessage = $Msg->SendMessage($toid, $fromid, $message); //fromid = $_SESSION['fromid']; pour pouvoir recharger la page message
        echo $toid;
        echo $SendMessage;
    } else {
        echo 'T NUL C CHO';
    }
