<?php

/**
 * Class USER
 */
class User extends BDD
{
    protected $email;
    protected $mdp;
    protected $nom;
    protected $prenom;
    protected $phone;
    protected $id;
    protected $favoris_id;

    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setMdp($mdp)
    {
        $this->mdp = md5($mdp);
    }
    public function getMdp()
    {
        return $this->mdp;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setFavId($favoris_id)
    {
        $this->favoris_id = $favoris_id;
    }
    public function getFavId()
    {
        return $this->favoris_id;
    }
}
