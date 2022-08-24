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
 * H sup tepa bul.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class HSupTepaBul {

    /**
     * Indice periode.
     *
     * @var int|null
     */
    private $indicePeriode;

    /**
     * Mt brut exo.
     *
     * @var float|null
     */
    private $mtBrutExo;

    /**
     * Mt brut exo abat.
     *
     * @var float|null
     */
    private $mtBrutExoAbat;

    /**
     * Nb jh exo.
     *
     * @var float|null
     */
    private $nbJhExo;

    /**
     * Num ligne.
     *
     * @var int|null
     */
    private $numLigne;

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
     * Pourcent majo.
     *
     * @var float|null
     */
    private $pourcentMajo;

    /**
     * Type exo.
     *
     * @var string|null
     */
    private $typeExo;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the indice periode.
     *
     * @return int|null Returns the indice periode.
     */
    public function getIndicePeriode(): ?int {
        return $this->indicePeriode;
    }

    /**
     * Get the mt brut exo.
     *
     * @return float|null Returns the mt brut exo.
     */
    public function getMtBrutExo(): ?float {
        return $this->mtBrutExo;
    }

    /**
     * Get the mt brut exo abat.
     *
     * @return float|null Returns the mt brut exo abat.
     */
    public function getMtBrutExoAbat(): ?float {
        return $this->mtBrutExoAbat;
    }

    /**
     * Get the nb jh exo.
     *
     * @return float|null Returns the nb jh exo.
     */
    public function getNbJhExo(): ?float {
        return $this->nbJhExo;
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
     * Get the pourcent majo.
     *
     * @return float|null Returns the pourcent majo.
     */
    public function getPourcentMajo(): ?float {
        return $this->pourcentMajo;
    }

    /**
     * Get the type exo.
     *
     * @return string|null Returns the type exo.
     */
    public function getTypeExo(): ?string {
        return $this->typeExo;
    }

    /**
     * Set the indice periode.
     *
     * @param int|null $indicePeriode The indice periode.
     * @return HSupTepaBul Returns this H sup tepa bul.
     */
    public function setIndicePeriode(?int $indicePeriode): HSupTepaBul {
        $this->indicePeriode = $indicePeriode;
        return $this;
    }

    /**
     * Set the mt brut exo.
     *
     * @param float|null $mtBrutExo The mt brut exo.
     * @return HSupTepaBul Returns this H sup tepa bul.
     */
    public function setMtBrutExo(?float $mtBrutExo): HSupTepaBul {
        $this->mtBrutExo = $mtBrutExo;
        return $this;
    }

    /**
     * Set the mt brut exo abat.
     *
     * @param float|null $mtBrutExoAbat The mt brut exo abat.
     * @return HSupTepaBul Returns this H sup tepa bul.
     */
    public function setMtBrutExoAbat(?float $mtBrutExoAbat): HSupTepaBul {
        $this->mtBrutExoAbat = $mtBrutExoAbat;
        return $this;
    }

    /**
     * Set the nb jh exo.
     *
     * @param float|null $nbJhExo The nb jh exo.
     * @return HSupTepaBul Returns this H sup tepa bul.
     */
    public function setNbJhExo(?float $nbJhExo): HSupTepaBul {
        $this->nbJhExo = $nbJhExo;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int|null $numLigne The num ligne.
     * @return HSupTepaBul Returns this H sup tepa bul.
     */
    public function setNumLigne(?int $numLigne): HSupTepaBul {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return HSupTepaBul Returns this H sup tepa bul.
     */
    public function setNumeroEmploye(?string $numeroEmploye): HSupTepaBul {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return HSupTepaBul Returns this H sup tepa bul.
     */
    public function setPeriode(?DateTime $periode): HSupTepaBul {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the pourcent majo.
     *
     * @param float|null $pourcentMajo The pourcent majo.
     * @return HSupTepaBul Returns this H sup tepa bul.
     */
    public function setPourcentMajo(?float $pourcentMajo): HSupTepaBul {
        $this->pourcentMajo = $pourcentMajo;
        return $this;
    }

    /**
     * Set the type exo.
     *
     * @param string|null $typeExo The type exo.
     * @return HSupTepaBul Returns this H sup tepa bul.
     */
    public function setTypeExo(?string $typeExo): HSupTepaBul {
        $this->typeExo = $typeExo;
        return $this;
    }
}
