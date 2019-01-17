<?php
/**
 * CLASS MANAGER USER
 */
class UserManager extends User
{
    //SELECT INSERT UPDATE DELETE

    public function findAll()
    {
        $sql = 'SELECT * FROM users';
        return BDD::select($sql, null, 'UserManager');
    }
    public static function findOneById($id)
    {
        $sql = 'SELECT * FROM users WHERE id= :id ';
        $array = array('id'=> $id);
        return current(BDD::select($sql, $array, 'UserManager'));
    }
    public static function findOneByEmail($email)
    {
        $sql = 'SELECT * FROM users WHERE email = :email';
        $array = array('email'=> $email);
        return current(BDD::select($sql, $array, 'UserManager'));
    }
    public static function findAnythingByEmail($email, $params)
    {
        $sql = 'SELECT * FROM users WHERE email = :email';
        $array = array('email'=> $email);
        $requete = current(BDD::select($sql, $array, 'UserManager'));
        if ($params == 'nom') {
            $gty = new User();
            $gty->setNom($requete->nom);
            $result = $gty->getNom();
            $_SESSION['nom'] = $result;
            return $result;
        } elseif ($params == 'email') {
            $gty = new User();
            $gty->setEmail($requete->email);
            $result = $gty->getEmail();
            return $result;
        } elseif ($params == 'mdp') {
            $gty = new User();
            $gty->setMdp($requete->mdp);
            $result = $gty->getMdp();
            return $result;
        } else {
            echo'Erreur';
        }
        // return $gty;
    }


    // Inscription
    public function inscription()
    {
        $sql = 'INSERT INTO users (email, mdp, nom) VALUES (:email, :mdp, :nom)';
        $array = array(
      'email'=>$this->email,
      'mdp'=>$this->mdp,
      'nom'=>$this->nom
    );
        $_SESSION['email'] = $this->email;
        $_SESSION['mdp'] = $this->mdp;
        $_SESSION['nom'] = $this->nom;
        header('location: /hush/src/views/user/mon-compte.php');
        return BDD::insert($sql, $array);
    }


    // Connexion Utilisateur
    public function connexion()
    {
        $sql = 'SELECT * FROM users WHERE email = :email AND mdp = :mdp';
        $array = array(
      'email' => $this->email,
      'mdp' => $this->mdp
    );
        return BDD::select($sql, $array, 'UserManager');
    }

    public function accountExist()
    {
        $compte = self::connexion();
        var_dump($compte);
        if (!empty($compte)) {
            $_SESSION['email'] = $this->email;
            $_SESSION['pwd'] = $this->mdp;
            header('location: /hush/src/views/user/mon-compte.php');
        } else {
            echo'<p> Mauvais email ou mdp</p>';
        }
    }


    //Update Utilisateur
    public function MiseaJour()
    {
        $sql ='UPDATE users SET email = :email WHERE email = :ancien_mail';
        $array = array(
            'email' => $this->email,
            'ancien_mail' => $_SESSION['email']
        );
        return BDD::update($sql, $array);
    }


    //Delete utilisateur
    public function SupprUser()
    {
        $sql ='DELETE FROM users WHERE email = :email';
        $array = array('email' => $this->email);
        header('location: /hush/index.php');
        session_destroy();
        return BDD::supprimer($sql, $array);
    }


    // Verifcation si un utilisateur existe
    public function userExist($email)
    {
        $existe = self::findOneByEmail($email);
        return $existe;
    }
}
