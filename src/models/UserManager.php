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
    public static function findNameByEmail($email)
    {
        $sql = 'SELECT nom FROM users WHERE email = :email';
        $array = array('email'=> $email);
        return BDD::select($sql, $array, 'UserManager');
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
        header('location: /hush/src/views/mon-compte.php');
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
            header('location: /hush/src/views/mon-compte.php');
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

    // Verifcation si un utilisateur existe
    public function userExist($email)
    {
        $existe = self::findOneByEmail($email);
        return $existe;
    }
}
