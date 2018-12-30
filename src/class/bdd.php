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

  public static function select($sql, $params, $manager){
    $select = self::$bdd->prepare($sql);
    $select ->execute($params);
    return $select->fetchAll(PDO::FETCH_CLASS, $manager);
  }
  public static function prepareExecute($sql, $params){
    $requete = self::$bdd->prepare($sql);
    $requete->execute($params);
    return $requete->rowCount();
  }
  public static function insert($sql, $params){
    return self::prepareExecute($sql, $params);
  }
  public static function update($sql, $params){
    return self::prepareExecute($sql, $params);
  }
  public static function delete($sql, $params){
    return self::prepareExecute($sql, $params);
  }






}




 ?>
