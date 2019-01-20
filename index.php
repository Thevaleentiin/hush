<?php
session_start();
// require_once
    require_once 'src/class/bdd.php';
    require_once 'src/class/util.php';
    require_once 'src/orm/user.php';
    require_once 'src/models/UserManager.php';
    require_once 'src/controller/DefaultController.php';
    require_once 'src/controller/UserController.php';

    $page = ''; // Page par défaut
  if (isset($_GET['p'])) { // Si on reçois un paramètre "p"
    $page = $_GET['p']; // On considère que c'est la page à afficher
  }

    switch ($page) {
        case 'home':
            $ctrl = new UserController();
            $ctrl->appelRender('home');
            break;
        case 'home-cultiver':
            echo'home-cultiver';
            break;
        case 'inscription':
            $ctrl = new UserController();
            $ctrl->appelRender('user/inscription');
            break;
        case 'connexion':
            $ctrl = new UserController();
            $ctrl->appelRender('user/connexion');
            break;
        case 'moncompte':
            $ctrl = new UserController();
            $ctrl->appelRender('user/mon-compte');
            break;
        default:
            echo'defaut';
            break;
    }
