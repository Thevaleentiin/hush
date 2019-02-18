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
                $user->setPrenom($post['prenom']);
                $user->setEmail($post['email']);
                $user->setMdp($post['mdp']);
                $user->setNom($post['nom']);
                $user->setPhone($post['phone']);
                $user->inscription();
                echo $_SESSION['email'];
            } else {
                echo'Mavais email , erreur de syntaxe';
            }
        } else {
            echo 'Utilisateur déja existant';
        }
    }
    public function lancerConnexion($post)
    {
        $user = new UserManager();
        $user->setEmail($post['email']);
        $user->SetMdp($post['mdp']);
        $user->accountExist();
    }
    public function lancerUpdate($post)
    {
        if (Util::verifEmail($post['email']) == true) {
            $maj = new UserManager();
            $maj->setEmail($post['email']);
            $maj->MiseaJour();
            // var_dump($maj);
            if (isset($post['email'])) {
                // on verifie que l'email n'etait vide
                $_SESSION['email'] = $post['email'];
                echo 'Compte mis à jour';
            } else {
                echo 'Erreur de mise à jour';
            }
        } else {
            echo 'erreur de syntaxe , veuillez réessayer';
        }
    }
    public function lancerAddFavoris($id_borne, $email){
        $mis = new UserManager();
        $req = $mis->addBorneFav($id_borne, $email);
        return $req;
    }
    public function lancerDelete($post)
    {
        if (isset($post['email'])) {
            $del = new UserManager();
            $del->setEmail($post['email']);
            $del->SupprUser();
        }
    }
    public function AfficherNomCompte($data, $champ)
    {
        $test = new UserManager();
        $resultat = $test->findAnythingByEmail($data, $champ);
        return $resultat;
        // var_dump($resultat);
    }
    public function findNameForOneUser($id_user)
    {
        $usr = new UserManager();
        $user = $usr->findNameById($id_user);
        return $user;
    }
    public function AddOneuser($params)
    {
        $requete = new UserManager();
        $lesnoms = explode(" ", $params);
        $nom = $lesnoms[0];
        $prenom = $lesnoms[1];
        $rez = $requete->findOneByName($nom, $prenom);
        if (!empty($rez)) {
            echo $rez->getNom().' '.$rez->getPrenom();
        } else {
            echo'erreur lors de l\'ajout';
        }
    }
}
