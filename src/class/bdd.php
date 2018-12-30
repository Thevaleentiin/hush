<?php

/**
 * CLASS BDD
 */
class BDD{

  CONST host   = 'localhost';
  CONST user   = 'root';
  CONST pwd    = '';
  CONST dbname = 'hush_bdd';

  public static $bdd = false;

  public function __construct(){
    if (self::$bdd == false) {
      try{
          self::$bdd = new PDO('mysql:host='.self::host.';dbname='.self::dbname, self::user, self::pwd);
      }catch (\Exception $e) {
        die($e->getMessage());
      }
    }
  }





}




 ?>
