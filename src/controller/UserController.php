<?php

/**
 * Class UserController
 */
class UserController extends DefaultController
{
    public function appelRender($vue, $variables = array())
    {
        parent::render($vue, $variables);
    }
    public function lancerInscription($post)
    {
        $user = new UserManager();
        // TESt le mail
        $email_exist = $user->userExist($post['email']);
        if (empty($email_exist)) {
            if (Util::verifEmail($post['email']) == true) {
                // insertion de l'Utilisateur
                $user = new UserManager();
                $user->setEmail($post['email']);
                $user->setMdp($post['mdp']);
                $user->setNom($post['nom']);
                $user->inscription();
                echo $_SESSION['email'];
            } else {
                echo'Mavais email , erreur de syntaxe';
            }
        } else {
            echo 'Utilisateur déja existant';
        }
    }
    public function lancerConnexion()
    {
    }
}
