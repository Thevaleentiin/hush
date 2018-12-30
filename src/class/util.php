<?php

class Util{

  public static function verifEmail($email){
    //verification syntaxe email
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      return true;
    }
    else{
      return false;
    }
  }

}

 ?>
