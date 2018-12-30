<?php

/**
 * Class USER
 */
class User extends BDD {

  protected $email;
  protected $mdp;
  protected $id;

  public function setEmail($email){
    $this->email = $email;
  }
  public function getEmail(){
    return $this->email;
  }
  public function setMdp($mdp){
    $this->mdp = md5($mdp);
  }
  public function getMdp(){
    return $this->mdp;
  }
  public function setId($id){
    $this->mdp = md5($mdp);
  }
  public function getId(){
    return $this->mdp;
  }

}


 ?>
