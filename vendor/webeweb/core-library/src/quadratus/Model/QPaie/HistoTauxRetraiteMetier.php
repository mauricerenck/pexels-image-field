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
 * Histo taux retraite metier.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class HistoTauxRetraiteMetier {

    /**
     * A partir de.
     *
     * @var DateTime|null
     */
    private $aPartirDe;

    /**
     * Categ salarie.
     *
     * @var int|null
     */
    private $categSalarie;

    /**
     * Code activite.
     *
     * @var string|null
     */
    private $codeActivite;

    /**
     * Code libelle.
     *
     * @var string|null
     */
    private $codeLibelle;

    /**
     * Code metier.
     *
     * @var string|null
     */
    private $codeMetier;

    /**
     * Format non etendu.
     *
     * @var bool|null
     */
    private $formatNonEtendu;

    /**
     * Indice categ.
     *
     * @var int|null
     */
    private $indiceCateg;

    /**
     * Montant.
     *
     * @var float|null
     */
    private $montant;

    /**
     * Taux patronal.
     *
     * @var float|null
     */
    private $tauxPatronal;

    /**
     * Taux salarial.
     *
     * @var float|null
     */
    private $tauxSalarial;

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
     * Get the categ salarie.
     *
     * @return int|null Returns the categ salarie.
     */
    public function getCategSalarie(): ?int {
        return $this->categSalarie;
    }

    /**
     * Get the code activite.
     *
     * @return string|null Returns the code activite.
     */
    public function getCodeActivite(): ?string {
        return $this->codeActivite;
    }

    /**
     * Get the code libelle.
     *
     * @return string|null Returns the code libelle.
     */
    public function getCodeLibelle(): ?string {
        return $this->codeLibelle;
    }

    /**
     * Get the code metier.
     *
     * @return string|null Returns the code metier.
     */
    public function getCodeMetier(): ?string {
        return $this->codeMetier;
    }

    /**
     * Get the format non etendu.
     *
     * @return bool|null Returns the format non etendu.
     */
    public function getFormatNonEtendu(): ?bool {
        return $this->formatNonEtendu;
    }

    /**
     * Get the indice categ.
     *
     * @return int|null Returns the indice categ.
     */
    public function getIndiceCateg(): ?int {
        return $this->indiceCateg;
    }

    /**
     * Get the montant.
     *
     * @return float|null Returns the montant.
     */
    public function getMontant(): ?float {
        return $this->montant;
    }

    /**
     * Get the taux patronal.
     *
     * @return float|null Returns the taux patronal.
     */
    public function getTauxPatronal(): ?float {
        return $this->tauxPatronal;
    }

    /**
     * Get the taux salarial.
     *
     * @return float|null Returns the taux salarial.
     */
    public function getTauxSalarial(): ?float {
        return $this->tauxSalarial;
    }

    /**
     * Set the a partir de.
     *
     * @param DateTime|null $aPartirDe The a partir de.
     * @return HistoTauxRetraiteMetier Returns this Histo taux retraite metier.
     */
    public function setAPartirDe(?DateTime $aPartirDe): HistoTauxRetraiteMetier {
        $this->aPartirDe = $aPartirDe;
        return $this;
    }

    /**
     * Set the categ salarie.
     *
     * @param int|null $categSalarie The categ salarie.
     * @return HistoTauxRetraiteMetier Returns this Histo taux retraite metier.
     */
    public function setCategSalarie(?int $categSalarie): HistoTauxRetraiteMetier {
        $this->categSalarie = $categSalarie;
        return $this;
    }

    /**
     * Set the code activite.
     *
     * @param string|null $codeActivite The code activite.
     * @return HistoTauxRetraiteMetier Returns this Histo taux retraite metier.
     */
    public function setCodeActivite(?string $codeActivite): HistoTauxRetraiteMetier {
        $this->codeActivite = $codeActivite;
        return $this;
    }

    /**
     * Set the code libelle.
     *
     * @param string|null $codeLibelle The code libelle.
     * @return HistoTauxRetraiteMetier Returns this Histo taux retraite metier.
     */
    public function setCodeLibelle(?string $codeLibelle): HistoTauxRetraiteMetier {
        $this->codeLibelle = $codeLibelle;
        return $this;
    }

    /**
     * Set the code metier.
     *
     * @param string|null $codeMetier The code metier.
     * @return HistoTauxRetraiteMetier Returns this Histo taux retraite metier.
     */
    public function setCodeMetier(?string $codeMetier): HistoTauxRetraiteMetier {
        $this->codeMetier = $codeMetier;
        return $this;
    }

    /**
     * Set the format non etendu.
     *
     * @param bool|null $formatNonEtendu The format non etendu.
     * @return HistoTauxRetraiteMetier Returns this Histo taux retraite metier.
     */
    public function setFormatNonEtendu(?bool $formatNonEtendu): HistoTauxRetraiteMetier {
        $this->formatNonEtendu = $formatNonEtendu;
        return $this;
    }

    /**
     * Set the indice categ.
     *
     * @param int|null $indiceCateg The indice categ.
     * @return HistoTauxRetraiteMetier Returns this Histo taux retraite metier.
     */
    public function setIndiceCateg(?int $indiceCateg): HistoTauxRetraiteMetier {
        $this->indiceCateg = $indiceCateg;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float|null $montant The montant.
     * @return HistoTauxRetraiteMetier Returns this Histo taux retraite metier.
     */
    public function setMontant(?float $montant): HistoTauxRetraiteMetier {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the taux patronal.
     *
     * @param float|null $tauxPatronal The taux patronal.
     * @return HistoTauxRetraiteMetier Returns this Histo taux retraite metier.
     */
    public function setTauxPatronal(?float $tauxPatronal): HistoTauxRetraiteMetier {
        $this->tauxPatronal = $tauxPatronal;
        return $this;
    }

    /**
     * Set the taux salarial.
     *
     * @param float|null $tauxSalarial The taux salarial.
     * @return HistoTauxRetraiteMetier Returns this Histo taux retraite metier.
     */
    public function setTauxSalarial(?float $tauxSalarial): HistoTauxRetraiteMetier {
        $this->tauxSalarial = $tauxSalarial;
        return $this;
    }
}
