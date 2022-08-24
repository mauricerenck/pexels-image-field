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

use DateTime;

/**
 * Affectation employe chantier.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class AffectationEmployeChantier {

    /**
     * Code affaire.
     *
     * @var string|null
     */
    private $codeAffaire;

    /**
     * Code chantier.
     *
     * @var string|null
     */
    private $codeChantier;

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Code employe.
     *
     * @var string|null
     */
    private $codeEmploye;

    /**
     * Date affectation.
     *
     * @var DateTime|null
     */
    private $dateAffectation;

    /**
     * Date fin affectation.
     *
     * @var DateTime|null
     */
    private $dateFinAffectation;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code affaire.
     *
     * @return string|null Returns the code affaire.
     */
    public function getCodeAffaire(): ?string {
        return $this->codeAffaire;
    }

    /**
     * Get the code chantier.
     *
     * @return string|null Returns the code chantier.
     */
    public function getCodeChantier(): ?string {
        return $this->codeChantier;
    }

    /**
     * Get the code client.
     *
     * @return string|null Returns the code client.
     */
    public function getCodeClient(): ?string {
        return $this->codeClient;
    }

    /**
     * Get the code employe.
     *
     * @return string|null Returns the code employe.
     */
    public function getCodeEmploye(): ?string {
        return $this->codeEmploye;
    }

    /**
     * Get the date affectation.
     *
     * @return DateTime|null Returns the date affectation.
     */
    public function getDateAffectation(): ?DateTime {
        return $this->dateAffectation;
    }

    /**
     * Get the date fin affectation.
     *
     * @return DateTime|null Returns the date fin affectation.
     */
    public function getDateFinAffectation(): ?DateTime {
        return $this->dateFinAffectation;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return AffectationEmployeChantier Returns this Affectation employe chantier.
     */
    public function setCodeAffaire(?string $codeAffaire): AffectationEmployeChantier {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return AffectationEmployeChantier Returns this Affectation employe chantier.
     */
    public function setCodeChantier(?string $codeChantier): AffectationEmployeChantier {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return AffectationEmployeChantier Returns this Affectation employe chantier.
     */
    public function setCodeClient(?string $codeClient): AffectationEmployeChantier {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return AffectationEmployeChantier Returns this Affectation employe chantier.
     */
    public function setCodeEmploye(?string $codeEmploye): AffectationEmployeChantier {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the date affectation.
     *
     * @param DateTime|null $dateAffectation The date affectation.
     * @return AffectationEmployeChantier Returns this Affectation employe chantier.
     */
    public function setDateAffectation(?DateTime $dateAffectation): AffectationEmployeChantier {
        $this->dateAffectation = $dateAffectation;
        return $this;
    }

    /**
     * Set the date fin affectation.
     *
     * @param DateTime|null $dateFinAffectation The date fin affectation.
     * @return AffectationEmployeChantier Returns this Affectation employe chantier.
     */
    public function setDateFinAffectation(?DateTime $dateFinAffectation): AffectationEmployeChantier {
        $this->dateFinAffectation = $dateFinAffectation;
        return $this;
    }
}
