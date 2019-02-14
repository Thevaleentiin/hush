<?php
    var_dump($_REQUEST);
// die();
    if (isset($_GET['id_user']) && $_GET['id_user'] != null && isset($_GET['id_borne']) && $_GET['id_borne'] != null && isset($_POST['publication']) && $_POST['publication'] != null) {
        $id = trim($_GET['id_user']);
        $id_borne = trim($_GET['id_borne']);
        $publication = trim($_POST['publication']);

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

        $Msg = new PublicationController();
        $SendMessage = $Msg->SendPublication($id, $id_borne, $publication);

    } else {
        echo 'T NUL C CHO';
    }
