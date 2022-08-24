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
 * Emp recap cice.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class EmpRecapCice {

    /**
     * Caisse cp.
     *
     * @var bool|null
     */
    private $caisseCp;

    /**
     * Code centre.
     *
     * @var string|null
     */
    private $codeCentre;

    /**
     * Code etablissement.
     *
     * @var int|null
     */
    private $codeEtablissement;

    /**
     * Code organisme.
     *
     * @var string|null
     */
    private $codeOrganisme;

    /**
     * Fraction etab.
     *
     * @var string|null
     */
    private $fractionEtab;

    /**
     * Indice periode.
     *
     * @var int|null
     */
    private $indicePeriode;

    /**
     * Nom employe.
     *
     * @var string|null
     */
    private $nomEmploye;

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
     * Remun assiette cice.
     *
     * @var float|null
     */
    private $remunAssietteCice;

    /**
     * Remun brut cice.
     *
     * @var float|null
     */
    private $remunBrutCice;

    /**
     * Smic mcice.
     *
     * @var float|null
     */
    private $smicMcice;

    /**
     * Sortie mois.
     *
     * @var bool|null
     */
    private $sortieMois;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the caisse cp.
     *
     * @return bool|null Returns the caisse cp.
     */
    public function getCaisseCp(): ?bool {
        return $this->caisseCp;
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
     * Get the code etablissement.
     *
     * @return int|null Returns the code etablissement.
     */
    public function getCodeEtablissement(): ?int {
        return $this->codeEtablissement;
    }

    /**
     * Get the code organisme.
     *
     * @return string|null Returns the code organisme.
     */
    public function getCodeOrganisme(): ?string {
        return $this->codeOrganisme;
    }

    /**
     * Get the fraction etab.
     *
     * @return string|null Returns the fraction etab.
     */
    public function getFractionEtab(): ?string {
        return $this->fractionEtab;
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
     * Get the nom employe.
     *
     * @return string|null Returns the nom employe.
     */
    public function getNomEmploye(): ?string {
        return $this->nomEmploye;
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
     * Get the remun assiette cice.
     *
     * @return float|null Returns the remun assiette cice.
     */
    public function getRemunAssietteCice(): ?float {
        return $this->remunAssietteCice;
    }

    /**
     * Get the remun brut cice.
     *
     * @return float|null Returns the remun brut cice.
     */
    public function getRemunBrutCice(): ?float {
        return $this->remunBrutCice;
    }

    /**
     * Get the smic mcice.
     *
     * @return float|null Returns the smic mcice.
     */
    public function getSmicMcice(): ?float {
        return $this->smicMcice;
    }

    /**
     * Get the sortie mois.
     *
     * @return bool|null Returns the sortie mois.
     */
    public function getSortieMois(): ?bool {
        return $this->sortieMois;
    }

    /**
     * Set the caisse cp.
     *
     * @param bool|null $caisseCp The caisse cp.
     * @return EmpRecapCice Returns this Emp recap cice.
     */
    public function setCaisseCp(?bool $caisseCp): EmpRecapCice {
        $this->caisseCp = $caisseCp;
        return $this;
    }

    /**
     * Set the code centre.
     *
     * @param string|null $codeCentre The code centre.
     * @return EmpRecapCice Returns this Emp recap cice.
     */
    public function setCodeCentre(?string $codeCentre): EmpRecapCice {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return EmpRecapCice Returns this Emp recap cice.
     */
    public function setCodeEtablissement(?int $codeEtablissement): EmpRecapCice {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string|null $codeOrganisme The code organisme.
     * @return EmpRecapCice Returns this Emp recap cice.
     */
    public function setCodeOrganisme(?string $codeOrganisme): EmpRecapCice {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the fraction etab.
     *
     * @param string|null $fractionEtab The fraction etab.
     * @return EmpRecapCice Returns this Emp recap cice.
     */
    public function setFractionEtab(?string $fractionEtab): EmpRecapCice {
        $this->fractionEtab = $fractionEtab;
        return $this;
    }

    /**
     * Set the indice periode.
     *
     * @param int|null $indicePeriode The indice periode.
     * @return EmpRecapCice Returns this Emp recap cice.
     */
    public function setIndicePeriode(?int $indicePeriode): EmpRecapCice {
        $this->indicePeriode = $indicePeriode;
        return $this;
    }

    /**
     * Set the nom employe.
     *
     * @param string|null $nomEmploye The nom employe.
     * @return EmpRecapCice Returns this Emp recap cice.
     */
    public function setNomEmploye(?string $nomEmploye): EmpRecapCice {
        $this->nomEmploye = $nomEmploye;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return EmpRecapCice Returns this Emp recap cice.
     */
    public function setNumeroEmploye(?string $numeroEmploye): EmpRecapCice {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return EmpRecapCice Returns this Emp recap cice.
     */
    public function setPeriode(?DateTime $periode): EmpRecapCice {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the remun assiette cice.
     *
     * @param float|null $remunAssietteCice The remun assiette cice.
     * @return EmpRecapCice Returns this Emp recap cice.
     */
    public function setRemunAssietteCice(?float $remunAssietteCice): EmpRecapCice {
        $this->remunAssietteCice = $remunAssietteCice;
        return $this;
    }

    /**
     * Set the remun brut cice.
     *
     * @param float|null $remunBrutCice The remun brut cice.
     * @return EmpRecapCice Returns this Emp recap cice.
     */
    public function setRemunBrutCice(?float $remunBrutCice): EmpRecapCice {
        $this->remunBrutCice = $remunBrutCice;
        return $this;
    }

    /**
     * Set the smic mcice.
     *
     * @param float|null $smicMcice The smic mcice.
     * @return EmpRecapCice Returns this Emp recap cice.
     */
    public function setSmicMcice(?float $smicMcice): EmpRecapCice {
        $this->smicMcice = $smicMcice;
        return $this;
    }

    /**
     * Set the sortie mois.
     *
     * @param bool|null $sortieMois The sortie mois.
     * @return EmpRecapCice Returns this Emp recap cice.
     */
    public function setSortieMois(?bool $sortieMois): EmpRecapCice {
        $this->sortieMois = $sortieMois;
        return $this;
    }
}
