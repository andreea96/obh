<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="split_tranzactie")
 */
class SplitTranzactie
{
    /**
     * @ORM\Column(type="string")
     */
    private $idSplit;

    /**
     * @ORM\Column(type="string")
     */
    private $idTranzactie;

    /**
     * @ORM\Column(type="string")
     */
    private $idContSursa;

    /**
     * @ORM\Column(type="string")
     */
    private $idContDestinatie;

    /**
     * @ORM\Column(type="string")
     */
    private $suma;

    /**
     * @ORM\Column(type="string")
     */
    private $data;
}