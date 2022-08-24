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
 * Spectacles.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class Spectacles {

    /**
     * Dt debut.
     *
     * @var DateTime|null
     */
    private $dtDebut;

    /**
     * Dt fin.
     *
     * @var DateTime|null
     */
    private $dtFin;

    /**
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

    /**
     * Num objet.
     *
     * @var string|null
     */
    private $numObjet;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the dt debut.
     *
     * @return DateTime|null Returns the dt debut.
     */
    public function getDtDebut(): ?DateTime {
        return $this->dtDebut;
    }

    /**
     * Get the dt fin.
     *
     * @return DateTime|null Returns the dt fin.
     */
    public function getDtFin(): ?DateTime {
        return $this->dtFin;
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
     * Get the num objet.
     *
     * @return string|null Returns the num objet.
     */
    public function getNumObjet(): ?string {
        return $this->numObjet;
    }

    /**
     * Set the dt debut.
     *
     * @param DateTime|null $dtDebut The dt debut.
     * @return Spectacles Returns this Spectacles.
     */
    public function setDtDebut(?DateTime $dtDebut): Spectacles {
        $this->dtDebut = $dtDebut;
        return $this;
    }

    /**
     * Set the dt fin.
     *
     * @param DateTime|null $dtFin The dt fin.
     * @return Spectacles Returns this Spectacles.
     */
    public function setDtFin(?DateTime $dtFin): Spectacles {
        $this->dtFin = $dtFin;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return Spectacles Returns this Spectacles.
     */
    public function setIntitule(?string $intitule): Spectacles {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the num objet.
     *
     * @param string|null $numObjet The num objet.
     * @return Spectacles Returns this Spectacles.
     */
    public function setNumObjet(?string $numObjet): Spectacles {
        $this->numObjet = $numObjet;
        return $this;
    }
}
