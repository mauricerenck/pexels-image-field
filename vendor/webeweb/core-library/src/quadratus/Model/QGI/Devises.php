<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QGI;

use DateTime;

/**
 * Devises.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class Devises {

    /**
     * Code devise.
     *
     * @var string|null
     */
    private $codeDevise;

    /**
     * Date.
     *
     * @var DateTime|null
     */
    private $date;

    /**
     * Nb dec.
     *
     * @var string|null
     */
    private $nbDec;

    /**
     * Taux.
     *
     * @var float|null
     */
    private $taux;

    /**
     * Use nb dec.
     *
     * @var bool|null
     */
    private $useNbDec;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code devise.
     *
     * @return string|null Returns the code devise.
     */
    public function getCodeDevise(): ?string {
        return $this->codeDevise;
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
     * Get the nb dec.
     *
     * @return string|null Returns the nb dec.
     */
    public function getNbDec(): ?string {
        return $this->nbDec;
    }

    /**
     * Get the taux.
     *
     * @return float|null Returns the taux.
     */
    public function getTaux(): ?float {
        return $this->taux;
    }

    /**
     * Get the use nb dec.
     *
     * @return bool|null Returns the use nb dec.
     */
    public function getUseNbDec(): ?bool {
        return $this->useNbDec;
    }

    /**
     * Set the code devise.
     *
     * @param string|null $codeDevise The code devise.
     * @return Devises Returns this Devises.
     */
    public function setCodeDevise(?string $codeDevise): Devises {
        $this->codeDevise = $codeDevise;
        return $this;
    }

    /**
     * Set the date.
     *
     * @param DateTime|null $date The date.
     * @return Devises Returns this Devises.
     */
    public function setDate(?DateTime $date): Devises {
        $this->date = $date;
        return $this;
    }

    /**
     * Set the nb dec.
     *
     * @param string|null $nbDec The nb dec.
     * @return Devises Returns this Devises.
     */
    public function setNbDec(?string $nbDec): Devises {
        $this->nbDec = $nbDec;
        return $this;
    }

    /**
     * Set the taux.
     *
     * @param float|null $taux The taux.
     * @return Devises Returns this Devises.
     */
    public function setTaux(?float $taux): Devises {
        $this->taux = $taux;
        return $this;
    }

    /**
     * Set the use nb dec.
     *
     * @param bool|null $useNbDec The use nb dec.
     * @return Devises Returns this Devises.
     */
    public function setUseNbDec(?bool $useNbDec): Devises {
        $this->useNbDec = $useNbDec;
        return $this;
    }
}
