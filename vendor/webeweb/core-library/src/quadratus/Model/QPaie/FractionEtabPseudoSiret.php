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
 * Fraction etab pseudo siret.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class FractionEtabPseudoSiret {

    /**
     * A partir de.
     *
     * @var DateTime|null
     */
    private $aPartirDe;

    /**
     * Code etablissement.
     *
     * @var int|null
     */
    private $codeEtablissement;

    /**
     * Num fraction.
     *
     * @var string|null
     */
    private $numFraction;

    /**
     * Pseudo siret.
     *
     * @var string|null
     */
    private $pseudoSiret;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the a partir de.
     *
     * @return DateTime|null Returns the a partir de.
     */
    public function getAPartirDe(): ?DateTime {
        return $this->aPartirDe;
    }

    /**
     * Get the code etablissement.
     *
     * @return int|null Returns the code etablissement.
     */
    public function getCodeEtablissement(): ?int {
        return $this->codeEtablissement;
    }

    /**
     * Get the num fraction.
     *
     * @return string|null Returns the num fraction.
     */
    public function getNumFraction(): ?string {
        return $this->numFraction;
    }

    /**
     * Get the pseudo siret.
     *
     * @return string|null Returns the pseudo siret.
     */
    public function getPseudoSiret(): ?string {
        return $this->pseudoSiret;
    }

    /**
     * Set the a partir de.
     *
     * @param DateTime|null $aPartirDe The a partir de.
     * @return FractionEtabPseudoSiret Returns this Fraction etab pseudo siret.
     */
    public function setAPartirDe(?DateTime $aPartirDe): FractionEtabPseudoSiret {
        $this->aPartirDe = $aPartirDe;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return FractionEtabPseudoSiret Returns this Fraction etab pseudo siret.
     */
    public function setCodeEtablissement(?int $codeEtablissement): FractionEtabPseudoSiret {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the num fraction.
     *
     * @param string|null $numFraction The num fraction.
     * @return FractionEtabPseudoSiret Returns this Fraction etab pseudo siret.
     */
    public function setNumFraction(?string $numFraction): FractionEtabPseudoSiret {
        $this->numFraction = $numFraction;
        return $this;
    }

    /**
     * Set the pseudo siret.
     *
     * @param string|null $pseudoSiret The pseudo siret.
     * @return FractionEtabPseudoSiret Returns this Fraction etab pseudo siret.
     */
    public function setPseudoSiret(?string $pseudoSiret): FractionEtabPseudoSiret {
        $this->pseudoSiret = $pseudoSiret;
        return $this;
    }
}
