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
 * Taux at.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class TauxAt {

    /**
     * A partir de.
     *
     * @var DateTime|null
     */
    private $aPartirDe;

    /**
     * Bureau.
     *
     * @var string|null
     */
    private $bureau;

    /**
     * Code at.
     *
     * @var int|null
     */
    private $codeAt;

    /**
     * Code etablissement.
     *
     * @var int|null
     */
    private $codeEtablissement;

    /**
     * Risque.
     *
     * @var string|null
     */
    private $risque;

    /**
     * Section.
     *
     * @var string|null
     */
    private $section;

    /**
     * Taux.
     *
     * @var float|null
     */
    private $taux;

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
     * Get the bureau.
     *
     * @return string|null Returns the bureau.
     */
    public function getBureau(): ?string {
        return $this->bureau;
    }

    /**
     * Get the code at.
     *
     * @return int|null Returns the code at.
     */
    public function getCodeAt(): ?int {
        return $this->codeAt;
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
     * Get the risque.
     *
     * @return string|null Returns the risque.
     */
    public function getRisque(): ?string {
        return $this->risque;
    }

    /**
     * Get the section.
     *
     * @return string|null Returns the section.
     */
    public function getSection(): ?string {
        return $this->section;
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
     * Set the a partir de.
     *
     * @param DateTime|null $aPartirDe The a partir de.
     * @return TauxAt Returns this Taux at.
     */
    public function setAPartirDe(?DateTime $aPartirDe): TauxAt {
        $this->aPartirDe = $aPartirDe;
        return $this;
    }

    /**
     * Set the bureau.
     *
     * @param string|null $bureau The bureau.
     * @return TauxAt Returns this Taux at.
     */
    public function setBureau(?string $bureau): TauxAt {
        $this->bureau = $bureau;
        return $this;
    }

    /**
     * Set the code at.
     *
     * @param int|null $codeAt The code at.
     * @return TauxAt Returns this Taux at.
     */
    public function setCodeAt(?int $codeAt): TauxAt {
        $this->codeAt = $codeAt;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return TauxAt Returns this Taux at.
     */
    public function setCodeEtablissement(?int $codeEtablissement): TauxAt {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the risque.
     *
     * @param string|null $risque The risque.
     * @return TauxAt Returns this Taux at.
     */
    public function setRisque(?string $risque): TauxAt {
        $this->risque = $risque;
        return $this;
    }

    /**
     * Set the section.
     *
     * @param string|null $section The section.
     * @return TauxAt Returns this Taux at.
     */
    public function setSection(?string $section): TauxAt {
        $this->section = $section;
        return $this;
    }

    /**
     * Set the taux.
     *
     * @param float|null $taux The taux.
     * @return TauxAt Returns this Taux at.
     */
    public function setTaux(?float $taux): TauxAt {
        $this->taux = $taux;
        return $this;
    }
}
