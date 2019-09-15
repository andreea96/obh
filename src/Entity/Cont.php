<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="cont")
 */
class Cont
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idCont;

    /**
     * @ORM\Column(type="string")
     */
    private $idClient;

    /**
     * @ORM\Column(type="string")
     */
    private $iban;

    /**
     * @ORM\Column(type="string")
     */
    private $user;

    /**
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string")
     */
    private $suma;

    /**
     * @ORM\Column(type="string")
     */
    private $valuta;

    /**
     * @ORM\Column(type="string")
     */
    private $userApp;

    /**
     * @ORM\Column(type="string")
     */
    private $passwordApp;
    //id:
    //
    //       idCont:
    //
    //           type: integer
    //
    //           id: true
    //
    //           generator:
    //
    //               strategy: AUTO
    //
    //           options:
    //
    //               unsigned: false
    //
    //
    //
    //   fields:
    //
    //     iban:
    //
    //        type: string
    //
    //        nullable: false
    //
    //
    //
    //      user:
    //
    //        type: string
    //
    //        nullable: false
    //
    //
    //
    //      password:
    //
    //        type: string
    //
    //        nullable: false
    //
    //
    //
    //      suma:
    //
    //        type: integer
    //
    //        nullable: true
    //
    //
    //
    //      valuta:
    //
    //        type: string
    //
    //        nullable: false
    //
    //
    //
    //      userApp:
    //
    //        type: string
    //
    //        nullable: false
    //
    //
    //
    //      passwordApp:
    //
    //        type: string
    //
    //        nullable: false
    //
    //
    //
    //       manyToOne:
    //
    //        idClient:
    //
    //          targetEntity: open_banking_hack\src\Entity\Client
    //
    //          joinColumn:
    //
    //            name: idClient
    //
    //            referencedColumnName: idClient
}