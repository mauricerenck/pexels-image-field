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

/**
 * Affectation ana.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class AffectationAna {

    /**
     * Code centre.
     *
     * @var string|null
     */
    private $codeCentre;

    /**
     * Code nature.
     *
     * @var string|null
     */
    private $codeNature;

    /**
     * Num compte.
     *
     * @var string|null
     */
    private $numCompte;

    /**
     * Num ligne.
     *
     * @var int|null
     */
    private $numLigne;

    /**
     * Pourcentage.
     *
     * @var float|null
     */
    private $pourcentage;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code centre.
     *
     * @return string|null Returns the code centre.
     */
    public function getCodeCentre(): ?string {
        return $this->codeCentre;
    }

    /**
     * Get the code nature.
     *
     * @return string|null Returns the code nature.
     */
    public function getCodeNature(): ?string {
        return $this->codeNature;
    }

    /**
     * Get the num compte.
     *
     * @return string|null Returns the num compte.
     */
    public function getNumCompte(): ?string {
        return $this->numCompte;
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
     * Get the pourcentage.
     *
     * @return float|null Returns the pourcentage.
     */
    public function getPourcentage(): ?float {
        return $this->pourcentage;
    }

    /**
     * Set the code centre.
     *
     * @param string|null $codeCentre The code centre.
     * @return AffectationAna Returns this Affectation ana.
     */
    public function setCodeCentre(?string $codeCentre): AffectationAna {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the code nature.
     *
     * @param string|null $codeNature The code nature.
     * @return AffectationAna Returns this Affectation ana.
     */
    public function setCodeNature(?string $codeNature): AffectationAna {
        $this->codeNature = $codeNature;
        return $this;
    }

    /**
     * Set the num compte.
     *
     * @param string|null $numCompte The num compte.
     * @return AffectationAna Returns this Affectation ana.
     */
    public function setNumCompte(?string $numCompte): AffectationAna {
        $this->numCompte = $numCompte;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int|null $numLigne The num ligne.
     * @return AffectationAna Returns this Affectation ana.
     */
    public function setNumLigne(?int $numLigne): AffectationAna {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the pourcentage.
     *
     * @param float|null $pourcentage The pourcentage.
     * @return AffectationAna Returns this Affectation ana.
     */
    public function setPourcentage(?float $pourcentage): AffectationAna {
        $this->pourcentage = $pourcentage;
        return $this;
    }
}
