<?php
    // echo'11';
    session_start();
    // var_dump($_REQUEST);
    if (isset($_GET['id_borne']) && $_GET['id_borne'] != null) {
        $id = trim($_GET['id_borne']);

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

        if (isset($_SESSION['favoris_id'])) {
            // Trouver la borne
            $brn = new BorneController();
            $bornes = $brn->chercherUneBorne($_SESSION['favoris_id']);
            $mes = new PublicationController();
            $publications = $mes->RecupererDesPubli($_SESSION['favoris_id']);
            echo $publications;
        }else{
            if ($_POST['id_borne'] == "0" || !isset($_POST)) {
                echo' Vous n\'avez pas renseigner de borne favoris';
            }else {
                //echo $_POST['id_borne'];
                $updateid = new UserController();
                $Maj = $updateid->lancerAddFavoris($_POST['id_borne'], $_SESSION['email']);
            }
        }


    } else {
        echo 'Erreur d\'envoie';
    }
