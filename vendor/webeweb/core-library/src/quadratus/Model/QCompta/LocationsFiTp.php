<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QCompta;

use DateTime;

/**
 * Locations fi tp.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class LocationsFiTp {

    /**
     * Assurance.
     *
     * @var float|null
     */
    private $assurance;

    /**
     * Code tva.
     *
     * @var string|null
     */
    private $codeTva;

    /**
     * Date.
     *
     * @var DateTime|null
     */
    private $date;

    /**
     * Entretien.
     *
     * @var float|null
     */
    private $entretien;

    /**
     * Loyer ht.
     *
     * @var float|null
     */
    private $loyerHt;

    /**
     * Num ligne.
     *
     * @var int|null
     */
    private $numLigne;

    /**
     * Numero.
     *
     * @var int|null
     */
    private $numero;

    /**
     * Numero compte.
     *
     * @var string|null
     */
    private $numeroCompte;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the assurance.
     *
     * @return float|null Returns the assurance.
     */
    public function getAssurance(): ?float {
        return $this->assurance;
    }

    /**
     * Get the code tva.
     *
     * @return string|null Returns the code tva.
     */
    public function getCodeTva(): ?string {
        return $this->codeTva;
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
     * Get the entretien.
     *
     * @return float|null Returns the entretien.
     */
    public function getEntretien(): ?float {
        return $this->entretien;
    }

    /**
     * Get the loyer ht.
     *
     * @return float|null Returns the loyer ht.
     */
    public function getLoyerHt(): ?float {
        return $this->loyerHt;
    }

    /**
     * Get the num ligne.
     *
     * @return int|null Returns the num ligne.
     */
    public function getNumLigne(): ?int {
        return $this->numLigne;
    }

    /**
     * Get the numero.
     *
     * @return int|null Returns the numero.
     */
    public function getNumero(): ?int {
        return $this->numero;
    }

    /**
     * Get the numero compte.
     *
     * @return string|null Returns the numero compte.
     */
    public function getNumeroCompte(): ?string {
        return $this->numeroCompte;
    }

    /**
     * Set the assurance.
     *
     * @param float|null $assurance The assurance.
     * @return LocationsFiTp Returns this Locations fi tp.
     */
    public function setAssurance(?float $assurance): LocationsFiTp {
        $this->assurance = $assurance;
        return $this;
    }

    /**
     * Set the code tva.
     *
     * @param string|null $codeTva The code tva.
     * @return LocationsFiTp Returns this Locations fi tp.
     */
    public function setCodeTva(?string $codeTva): LocationsFiTp {
        $this->codeTva = $codeTva;
        return $this;
    }

    /**
     * Set the date.
     *
     * @param DateTime|null $date The date.
     * @return LocationsFiTp Returns this Locations fi tp.
     */
    public function setDate(?DateTime $date): LocationsFiTp {
        $this->date = $date;
        return $this;
    }

    /**
     * Set the entretien.
     *
     * @param float|null $entretien The entretien.
     * @return LocationsFiTp Returns this Locations fi tp.
     */
    public function setEntretien(?float $entretien): LocationsFiTp {
        $this->entretien = $entretien;
        return $this;
    }

    /**
     * Set the loyer ht.
     *
     * @param float|null $loyerHt The loyer ht.
     * @return LocationsFiTp Returns this Locations fi tp.
     */
    public function setLoyerHt(?float $loyerHt): LocationsFiTp {
        $this->loyerHt = $loyerHt;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int|null $numLigne The num ligne.
     * @return LocationsFiTp Returns this Locations fi tp.
     */
    public function setNumLigne(?int $numLigne): LocationsFiTp {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param int|null $numero The numero.
     * @return LocationsFiTp Returns this Locations fi tp.
     */
    public function setNumero(?int $numero): LocationsFiTp {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string|null $numeroCompte The numero compte.
     * @return LocationsFiTp Returns this Locations fi tp.
     */
    public function setNumeroCompte(?string $numeroCompte): LocationsFiTp {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }
}
