<?php
/**
 * CLASS MANAGER USER
 */
class UserManager extends User{
  //SELECT INSERT UPDATE DELETE

  public function findAll(){
    $sql = 'SELECT * FROM users';
    return BDD::select($sql, null, 'UserManager');
  }
  public static function findOneById($id){
    $sql = 'SELECT * FROM users WHERE id= :id ';
    $array = array('id'=> $id);
    return current(BDD::select($sql, $array, 'UserManager'));
  }
  public static function findOneByEmail($email){
    $sql = 'SELECT * FROM users WHERE email = :email';
    $array = array('email'=> $email);
    return current(BDD::select($sql, $array, 'UserManager'));
  }

  // Inscription
  public function inscription(){
    $sql = 'INSERT INTO users (email, mdp, nom) VALUES (:email, :mdp, :nom)';
    $array = array(
      'email'=>$this->email,
      'mdp'=>$this->mdp,
      'nom'=>$this->nom
    );
    $_SESSION['email'] = $this->email;
    header('location: /hush/index.php');
    return BDD::insert($sql, $array);
  }

  public function userExist($email){
    $existe = self::findOneByEmail($email);
    return $existe;
  }

}
 ?>
