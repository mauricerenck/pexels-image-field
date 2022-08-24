<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\Proprete;

/**
 * Prog type lignes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class ProgTypeLignes {

    /**
     * Code operation.
     *
     * @var string|null
     */
    private $codeOperation;

    /**
     * Coefficient.
     *
     * @var float|null
     */
    private $coefficient;

    /**
     * Num ligne.
     *
     * @var int|null
     */
    private $numLigne;

    /**
     * Num programme.
     *
     * @var int|null
     */
    private $numProgramme;

    /**
     * Vitesse reelle.
     *
     * @var float|null
     */
    private $vitesseReelle;

    /**
     * Vitesse theorique.
     *
     * @var float|null
     */
    private $vitesseTheorique;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code operation.
     *
     * @return string|null Returns the code operation.
     */
    public function getCodeOperation(): ?string {
        return $this->codeOperation;
    }

    /**
     * Get the coefficient.
     *
     * @return float|null Returns the coefficient.
     */
    public function getCoefficient(): ?float {
        return $this->coefficient;
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
     * Get the num programme.
     *
     * @return int|null Returns the num programme.
     */
    public function getNumProgramme(): ?int {
        return $this->numProgramme;
    }

    /**
     * Get the vitesse reelle.
     *
     * @return float|null Returns the vitesse reelle.
     */
    public function getVitesseReelle(): ?float {
        return $this->vitesseReelle;
    }

    /**
     * Get the vitesse theorique.
     *
     * @return float|null Returns the vitesse theorique.
     */
    public function getVitesseTheorique(): ?float {
        return $this->vitesseTheorique;
    }

    /**
     * Set the code operation.
     *
     * @param string|null $codeOperation The code operation.
     * @return ProgTypeLignes Returns this Prog type lignes.
     */
    public function setCodeOperation(?string $codeOperation): ProgTypeLignes {
        $this->codeOperation = $codeOperation;
        return $this;
    }

    /**
     * Set the coefficient.
     *
     * @param float|null $coefficient The coefficient.
     * @return ProgTypeLignes Returns this Prog type lignes.
     */
    public function setCoefficient(?float $coefficient): ProgTypeLignes {
        $this->coefficient = $coefficient;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int|null $numLigne The num ligne.
     * @return ProgTypeLignes Returns this Prog type lignes.
     */
    public function setNumLigne(?int $numLigne): ProgTypeLignes {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the num programme.
     *
     * @param int|null $numProgramme The num programme.
     * @return ProgTypeLignes Returns this Prog type lignes.
     */
    public function setNumProgramme(?int $numProgramme): ProgTypeLignes {
        $this->numProgramme = $numProgramme;
        return $this;
    }

    /**
     * Set the vitesse reelle.
     *
     * @param float|null $vitesseReelle The vitesse reelle.
     * @return ProgTypeLignes Returns this Prog type lignes.
     */
    public function setVitesseReelle(?float $vitesseReelle): ProgTypeLignes {
        $this->vitesseReelle = $vitesseReelle;
        return $this;
    }

    /**
     * Set the vitesse theorique.
     *
     * @param float|null $vitesseTheorique The vitesse theorique.
     * @return ProgTypeLignes Returns this Prog type lignes.
     */
    public function setVitesseTheorique(?float $vitesseTheorique): ProgTypeLignes {
        $this->vitesseTheorique = $vitesseTheorique;
        return $this;
    }
}
