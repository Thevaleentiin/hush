<?php
// CONNEXION POUR LA VERSION EN MIGNE
/**
 * CLASS BDD
 */
class BDD
{
    // const host   = 'localhost';
    // const user   = 'root';
    // const pwd    = '';
    // const dbname = 'hush_bdd;charset=UTF8';
    // FTP
    const host   = 'db772458236.hosting-data.io';
    const user   = 'dbo772458236';
    const pwd    = '24Blazer24$';
    const dbname = 'db772458236;charset=UTF8';

    public static $bdd = false;

    public function __construct()
    {
        if (self::$bdd == false) {
            try {
                self::$bdd = new PDO('mysql:host='.self::host.';dbname='.self::dbname, self::user, self::pwd);
            } catch (\Exception $e) {
                die($e->getMessage());
            }
        }
    }

    public static function select($sql, $params, $manager)
    {
        $select = self::$bdd->prepare($sql);
        $select ->execute($params);
        return $select->fetchAll(PDO::FETCH_CLASS, $manager);
    }
    public static function prepareExecute($sql, $params)
    {
        $requete = self::$bdd->prepare($sql);
        $requete->execute($params);
        // echo $requete->debugDumpParams();
        return $requete->rowCount();
    }
    public static function insert($sql, $params)
    {
        return self::prepareExecute($sql, $params);
    }
    public static function update($sql, $params)
    {
        return self::prepareExecute($sql, $params);
    }
    public static function supprimer($sql, $params)
    {
        return self::prepareExecute($sql, $params);
    }
}
