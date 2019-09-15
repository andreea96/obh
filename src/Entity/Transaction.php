<?php
/**
 * Created by PhpStorm.
 * User: Andreea
 * Date: 9/15/2019
 * Time: 1:12 PM
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="split_tranzactie")
 */
class Transaction
{
    /**
     * @ORM\Column(type="int")
     */
    private $idTranzactie;
    /**
     * @ORM\Column(type="int")
     */
    private $idContSursa;
    /**
     * @ORM\Column(type="DateType")
     */
    private $dataCerere;
    /**
     * @ORM\Column(type="string")
     */
    private $dataFinalizare;
    /**
     * @ORM\Column(type="int")
     */
    private $valoare;
    /**
     * @ORM\Column(type="string")
     */
    private $detalii;
    /**
     * @ORM\Column(type="int")
     */
    private $status;

    /**
     * @return mixed
     */
    public function getIdTranzactie()
    {
        return $this->idTranzactie;
    }

    /**
     * @param mixed $idTranzactie
     */
    public function setIdTranzactie($idTranzactie)
    {
        $this->idTranzactie = $idTranzactie;
    }

    /**
     * @return mixed
     */
    public function getIdContSursa()
    {
        return $this->idContSursa;
    }

    /**
     * @param mixed $idContSursa
     */
    public function setIdContSursa($idContSursa)
    {
        $this->idContSursa = $idContSursa;
    }

    /**
     * @return mixed
     */
    public function getDataCerere()
    {
        return $this->dataCerere;
    }

    /**
     * @param mixed $dataCerere
     */
    public function setDataCerere($dataCerere)
    {
        $this->dataCerere = $dataCerere;
    }

    /**
     * @return mixed
     */
    public function getDataFinalizare()
    {
        return $this->dataFinalizare;
    }

    /**
     * @param mixed $dataFinalizare
     */
    public function setDataFinalizare($dataFinalizare)
    {
        $this->dataFinalizare = $dataFinalizare;
    }

    /**
     * @return mixed
     */
    public function getValoare()
    {
        return $this->valoare;
    }

    /**
     * @param mixed $valoare
     */
    public function setValoare($valoare)
    {
        $this->valoare = $valoare;
    }

    /**
     * @return mixed
     */
    public function getDetalii()
    {
        return $this->detalii;
    }

    /**
     * @param mixed $detalii
     */
    public function setDetalii($detalii)
    {
        $this->detalii = $detalii;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
}