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
 * Emp recap cicemsa.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class EmpRecapCicemsa {

    /**
     * Caisse cp.
     *
     * @var bool|null
     */
    private $caisseCp;

    /**
     * Code etablissement.
     *
     * @var int|null
     */
    private $codeEtablissement;

    /**
     * Code unite.
     *
     * @var string|null
     */
    private $codeUnite;

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
     * Get the code etablissement.
     *
     * @return int|null Returns the code etablissement.
     */
    public function getCodeEtablissement(): ?int {
        return $this->codeEtablissement;
    }

    /**
     * Get the code unite.
     *
     * @return string|null Returns the code unite.
     */
    public function getCodeUnite(): ?string {
        return $this->codeUnite;
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
     * @return EmpRecapCicemsa Returns this Emp recap cicemsa.
     */
    public function setCaisseCp(?bool $caisseCp): EmpRecapCicemsa {
        $this->caisseCp = $caisseCp;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return EmpRecapCicemsa Returns this Emp recap cicemsa.
     */
    public function setCodeEtablissement(?int $codeEtablissement): EmpRecapCicemsa {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code unite.
     *
     * @param string|null $codeUnite The code unite.
     * @return EmpRecapCicemsa Returns this Emp recap cicemsa.
     */
    public function setCodeUnite(?string $codeUnite): EmpRecapCicemsa {
        $this->codeUnite = $codeUnite;
        return $this;
    }

    /**
     * Set the indice periode.
     *
     * @param int|null $indicePeriode The indice periode.
     * @return EmpRecapCicemsa Returns this Emp recap cicemsa.
     */
    public function setIndicePeriode(?int $indicePeriode): EmpRecapCicemsa {
        $this->indicePeriode = $indicePeriode;
        return $this;
    }

    /**
     * Set the nom employe.
     *
     * @param string|null $nomEmploye The nom employe.
     * @return EmpRecapCicemsa Returns this Emp recap cicemsa.
     */
    public function setNomEmploye(?string $nomEmploye): EmpRecapCicemsa {
        $this->nomEmploye = $nomEmploye;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return EmpRecapCicemsa Returns this Emp recap cicemsa.
     */
    public function setNumeroEmploye(?string $numeroEmploye): EmpRecapCicemsa {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return EmpRecapCicemsa Returns this Emp recap cicemsa.
     */
    public function setPeriode(?DateTime $periode): EmpRecapCicemsa {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the remun assiette cice.
     *
     * @param float|null $remunAssietteCice The remun assiette cice.
     * @return EmpRecapCicemsa Returns this Emp recap cicemsa.
     */
    public function setRemunAssietteCice(?float $remunAssietteCice): EmpRecapCicemsa {
        $this->remunAssietteCice = $remunAssietteCice;
        return $this;
    }

    /**
     * Set the remun brut cice.
     *
     * @param float|null $remunBrutCice The remun brut cice.
     * @return EmpRecapCicemsa Returns this Emp recap cicemsa.
     */
    public function setRemunBrutCice(?float $remunBrutCice): EmpRecapCicemsa {
        $this->remunBrutCice = $remunBrutCice;
        return $this;
    }

    /**
     * Set the smic mcice.
     *
     * @param float|null $smicMcice The smic mcice.
     * @return EmpRecapCicemsa Returns this Emp recap cicemsa.
     */
    public function setSmicMcice(?float $smicMcice): EmpRecapCicemsa {
        $this->smicMcice = $smicMcice;
        return $this;
    }

    /**
     * Set the sortie mois.
     *
     * @param bool|null $sortieMois The sortie mois.
     * @return EmpRecapCicemsa Returns this Emp recap cicemsa.
     */
    public function setSortieMois(?bool $sortieMois): EmpRecapCicemsa {
        $this->sortieMois = $sortieMois;
        return $this;
    }
}
