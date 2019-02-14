<?php

/**
 * Class ORM borne
 */
class Publication extends BDD
{
    protected $id;
    protected $publication;
    protected $timemessage;
    protected $id_user;

    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setPublication($publication)
    {
        $this->publication = $publication;
    }
    public function getPublication()
    {
        return $this->publication;
    }
    public function setTimemessage($timemessage)
    {
        $this->timemessage = $timemessage;
    }
    public function getTimemessage()
    {
        return $this->timemessage;
    }
    public function setidUser($id_user)
    {
        $this->id_user = $id_user;
    }
    public function getidUser()
    {
        return $this->id_user;
    }
}
