<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="client")
 */
class Client
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idClient;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nume;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $prenume;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $serie;

    /**
     * @ORM\Column(type="string", length=6)
     */
    private $numarSerie;

    /**
     * @ORM\Column(type="integer", length=13)
     */
    private $cnp;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $tel;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $email;

    /**
     * @return mixed
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * @param mixed $idClient
     * @return Client
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNume()
    {
        return $this->nume;
    }

    /**
     * @param mixed $nume
     * @return Client
     */
    public function setNume($nume)
    {
        $this->nume = $nume;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrenume()
    {
        return $this->prenume;
    }

    /**
     * @param mixed $prenume
     * @return Client
     */
    public function setPrenume($prenume)
    {
        $this->prenume = $prenume;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSerie()
    {
        return $this->serie;
    }

    /**
     * @param mixed $serie
     * @return Client
     */
    public function setSerie($serie)
    {
        $this->serie = $serie;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumarSerie()
    {
        return $this->numarSerie;
    }

    /**
     * @param mixed $numarSerie
     * @return Client
     */
    public function setNumarSerie($numarSerie)
    {
        $this->numarSerie = $numarSerie;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCnp()
    {
        return $this->cnp;
    }

    /**
     * @param mixed $cnp
     * @return Client
     */
    public function setCnp($cnp)
    {
        $this->cnp = $cnp;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     * @return Client
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     * @return Client
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
}