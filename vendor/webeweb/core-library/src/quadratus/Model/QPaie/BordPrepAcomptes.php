<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QPaie;

use DateTime;

/**
 * Bord prep acomptes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class BordPrepAcomptes {

    /**
     * Date.
     *
     * @var DateTime|null
     */
    private $date;

    /**
     * Id.
     *
     * @var int|null
     */
    private $id;

    /**
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

    /**
     * Montant.
     *
     * @var float|null
     */
    private $montant;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Type paiement.
     *
     * @var string|null
     */
    private $typePaiement;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the date.
     *
     * @return DateTime|null Returns the date.
     */
    public function getDate(): ?DateTime {
        return $this->date;
    }

    /**
     * Get the id.
     *
     * @return int|null Returns the id.
     */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * Get the intitule.
     *
     * @return string|null Returns the intitule.
     */
    public function getIntitule(): ?string {
        return $this->intitule;
    }

    /**
     * Get the montant.
     *
     * @return float|null Returns the montant.
     */
    public function getMontant(): ?float {
        return $this->montant;
    }

    /**
     * Get the numero employe.
     *
     * @return string|null Returns the numero employe.
     */
    public function getNumeroEmploye(): ?string {
        return $this->numeroEmploye;
    }

    /**
     * Get the periode.
     *
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode(): ?DateTime {
        return $this->periode;
    }

    /**
     * Get the type paiement.
     *
     * @return string|null Returns the type paiement.
     */
    public function getTypePaiement(): ?string {
        return $this->typePaiement;
    }

    /**
     * Set the date.
     *
     * @param DateTime|null $date The date.
     * @return BordPrepAcomptes Returns this Bord prep acomptes.
     */
    public function setDate(?DateTime $date): BordPrepAcomptes {
        $this->date = $date;
        return $this;
    }

    /**
     * Set the id.
     *
     * @param int|null $id The id.
     * @return BordPrepAcomptes Returns this Bord prep acomptes.
     */
    public function setId(?int $id): BordPrepAcomptes {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return BordPrepAcomptes Returns this Bord prep acomptes.
     */
    public function setIntitule(?string $intitule): BordPrepAcomptes {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float|null $montant The montant.
     * @return BordPrepAcomptes Returns this Bord prep acomptes.
     */
    public function setMontant(?float $montant): BordPrepAcomptes {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return BordPrepAcomptes Returns this Bord prep acomptes.
     */
    public function setNumeroEmploye(?string $numeroEmploye): BordPrepAcomptes {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return BordPrepAcomptes Returns this Bord prep acomptes.
     */
    public function setPeriode(?DateTime $periode): BordPrepAcomptes {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the type paiement.
     *
     * @param string|null $typePaiement The type paiement.
     * @return BordPrepAcomptes Returns this Bord prep acomptes.
     */
    public function setTypePaiement(?string $typePaiement): BordPrepAcomptes {
        $this->typePaiement = $typePaiement;
        return $this;
    }
}
