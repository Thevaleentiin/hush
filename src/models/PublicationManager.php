<?php

/**
 * BorneManager
 */
class PublicationManager extends Publication
{
    public function findAllPubli()
    {
        $sql = 'SELECT * FROM publications';
        return BDD::select($sql, null, 'PublicationManager');
    }
    public static function findOneById($id)
    {
        $sql = 'SELECT * FROM publications WHERE id= :id ';
        $array = array('id'=> $id);
        return current(BDD::select($sql, $array, 'PublicationManager'));
    }

    public function AjouterPubli($id, $id_borne, $publication)
    {
        $date = new DateTime('now');
        $sql = 'INSERT INTO publications (publication, timemessage, id_user, id_borne) VALUES (:publication, :timemessage, :id_user, :id_borne)';
        $array = array(
          'publication'=>$publication,
          'timemessage'=>$date->format('Y-m-d H:i:s'),
          'id_user'=>$id,
          'id_borne'=>$id_borne
        );
        return BDD::insert($sql, $array);
    }

    public function GetAllPubli($id)
    {
        $sql = 'SELECT * FROM publications WHERE id_user = :id ORDER BY timemessage DESC';
        $array = array('id'=>$id);
        return BDD::select($sql, $array, 'PublicationManager');
    }
    public function getAllPublibyBorne($id_borne)
    {
        $sql = 'SELECT * FROM publications WHERE id_borne = :id ORDER BY timemessage DESC';
        $array = array('id'=>$id_borne);
        return BDD::select($sql, $array, 'PublicationManager');
    }
}
