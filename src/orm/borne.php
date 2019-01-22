<?php

/**
 * Class ORM borne
 */
class Borne extends BDD
{
    protected $id;
    protected $position;
    protected $adresse;
    protected $personne;

    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setPosition($position)
    {
        $this->position = $position;
    }
    public function getPosition()
    {
        return $this->position;
    }
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }
    public function getAdresse()
    {
        return $this->adresse;
    }
    public function setPersonne($personne)
    {
        $this->personne = $personne;
    }
    public function getPersonne()
    {
        return $this->personne;
    }
}
