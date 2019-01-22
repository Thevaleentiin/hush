<?php

/**
 * BorneManager
 */
class BorneManager extends Borne
{
    public function findAllBorne()
    {
        $sql = 'SELECT * FROM borne';
        return BDD::select($sql, null, 'BorneManager');
    }
    public static function findOneById($id)
    {
        $sql = 'SELECT * FROM borne WHERE id= :id ';
        $array = array('id'=> $id);
        return current(BDD::select($sql, $array, 'UserManager'));
    }
}
