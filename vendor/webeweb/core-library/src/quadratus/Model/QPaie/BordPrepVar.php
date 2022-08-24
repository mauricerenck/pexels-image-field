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
 * Bord prep var.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class BordPrepVar {

    /**
     * Code modele.
     *
     * @var string|null
     */
    private $codeModele;

    /**
     * Flag force.
     *
     * @var bool|null
     */
    private $flagForce;

    /**
     * Indice periode.
     *
     * @var int|null
     */
    private $indicePeriode;

    /**
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

    /**
     * Num col.
     *
     * @var string|null
     */
    private $numCol;

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
     * Valeur.
     *
     * @var float|null
     */
    private $valeur;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code modele.
     *
     * @return string|null Returns the code modele.
     */
    public function getCodeModele(): ?string {
        return $this->codeModele;
    }

    /**
     * Get the flag force.
     *
     * @return bool|null Returns the flag force.
     */
    public function getFlagForce(): ?bool {
        return $this->flagForce;
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
     * Get the intitule.
     *
     * @return string|null Returns the intitule.
     */
    public function getIntitule(): ?string {
        return $this->intitule;
    }

    /**
     * Get the num col.
     *
     * @return string|null Returns the num col.
     */
    public function getNumCol(): ?string {
        return $this->numCol;
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
     * Get the valeur.
     *
     * @return float|null Returns the valeur.
     */
    public function getValeur(): ?float {
        return $this->valeur;
    }

    /**
     * Set the code modele.
     *
     * @param string|null $codeModele The code modele.
     * @return BordPrepVar Returns this Bord prep var.
     */
    public function setCodeModele(?string $codeModele): BordPrepVar {
        $this->codeModele = $codeModele;
        return $this;
    }

    /**
     * Set the flag force.
     *
     * @param bool|null $flagForce The flag force.
     * @return BordPrepVar Returns this Bord prep var.
     */
    public function setFlagForce(?bool $flagForce): BordPrepVar {
        $this->flagForce = $flagForce;
        return $this;
    }

    /**
     * Set the indice periode.
     *
     * @param int|null $indicePeriode The indice periode.
     * @return BordPrepVar Returns this Bord prep var.
     */
    public function setIndicePeriode(?int $indicePeriode): BordPrepVar {
        $this->indicePeriode = $indicePeriode;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return BordPrepVar Returns this Bord prep var.
     */
    public function setIntitule(?string $intitule): BordPrepVar {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the num col.
     *
     * @param string|null $numCol The num col.
     * @return BordPrepVar Returns this Bord prep var.
     */
    public function setNumCol(?string $numCol): BordPrepVar {
        $this->numCol = $numCol;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return BordPrepVar Returns this Bord prep var.
     */
    public function setNumeroEmploye(?string $numeroEmploye): BordPrepVar {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return BordPrepVar Returns this Bord prep var.
     */
    public function setPeriode(?DateTime $periode): BordPrepVar {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the valeur.
     *
     * @param float|null $valeur The valeur.
     * @return BordPrepVar Returns this Bord prep var.
     */
    public function setValeur(?float $valeur): BordPrepVar {
        $this->valeur = $valeur;
        return $this;
    }
}
