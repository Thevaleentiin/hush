<?php

/**
 * Class Chat ORM
 */
class Chat extends BDD
{
    protected $id;
    protected $toId;
    protected $fromId;
    protected $message;
    protected $view;
    protected $datemessage;

    // Id
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    //toId
    public function settoId($toId)
    {
        $this->toId = $toId;
    }
    public function gettoId()
    {
        return $this->toId;
    }
    // from Id
    public function setfromId($fromId)
    {
        $this->fromId = $fromId;
    }
    public function getfromId()
    {
        return $this->fromId;
    }
    // Message
    public function setmessage($message)
    {
        $this->message = $message;
    }
    public function getmessage()
    {
        return $this->message;
    }
    // View
    public function setview($view)
    {
        $this->view = $view;
    }
    public function getview()
    {
        return $this->view;
    }
    // date message
    public function setdatemessage($datemessage)
    {
        $this->datemessage = $datemessage;
    }
    public function getdatemessage()
    {
        return $this->datemessage;
    }
}
