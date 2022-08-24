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
 * Tmp table0.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class TmpTable0 {

    /**
     * Base.
     *
     * @var float|null
     */
    private $base;

    /**
     * Base tot.
     *
     * @var float|null
     */
    private $baseTot;

    /**
     * Charge pat.
     *
     * @var float|null
     */
    private $chargePat;

    /**
     * Charge pat tot.
     *
     * @var float|null
     */
    private $chargePatTot;

    /**
     * Charge sal.
     *
     * @var float|null
     */
    private $chargeSal;

    /**
     * Charge sal tot.
     *
     * @var float|null
     */
    private $chargeSalTot;

    /**
     * Classe.
     *
     * @var string|null
     */
    private $classe;

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Code organisme.
     *
     * @var string|null
     */
    private $codeOrganisme;

    /**
     * Etablissement.
     *
     * @var int|null
     */
    private $etablissement;

    /**
     * Imputation.
     *
     * @var bool|null
     */
    private $imputation;

    /**
     * Indice periode.
     *
     * @var int|null
     */
    private $indicePeriode;

    /**
     * Inverse.
     *
     * @var bool|null
     */
    private $inverse;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Numero.
     *
     * @var string|null
     */
    private $numero;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Qui.
     *
     * @var int|null
     */
    private $qui;

    /**
     * Service.
     *
     * @var string|null
     */
    private $service;

    /**
     * Taux pat.
     *
     * @var float|null
     */
    private $tauxPat;

    /**
     * Taux sal.
     *
     * @var float|null
     */
    private $tauxSal;

    /**
     * Type.
     *
     * @var int|null
     */
    private $type;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the base.
     *
     * @return float|null Returns the base.
     */
    public function getBase(): ?float {
        return $this->base;
    }

    /**
     * Get the base tot.
     *
     * @return float|null Returns the base tot.
     */
    public function getBaseTot(): ?float {
        return $this->baseTot;
    }

    /**
     * Get the charge pat.
     *
     * @return float|null Returns the charge pat.
     */
    public function getChargePat(): ?float {
        return $this->chargePat;
    }

    /**
     * Get the charge pat tot.
     *
     * @return float|null Returns the charge pat tot.
     */
    public function getChargePatTot(): ?float {
        return $this->chargePatTot;
    }

    /**
     * Get the charge sal.
     *
     * @return float|null Returns the charge sal.
     */
    public function getChargeSal(): ?float {
        return $this->chargeSal;
    }

    /**
     * Get the charge sal tot.
     *
     * @return float|null Returns the charge sal tot.
     */
    public function getChargeSalTot(): ?float {
        return $this->chargeSalTot;
    }

    /**
     * Get the classe.
     *
     * @return string|null Returns the classe.
     */
    public function getClasse(): ?string {
        return $this->classe;
    }

    /**
     * Get the code.
     *
     * @return string|null Returns the code.
     */
    public function getCode(): ?string {
        return $this->code;
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
     * Get the etablissement.
     *
     * @return int|null Returns the etablissement.
     */
    public function getEtablissement(): ?int {
        return $this->etablissement;
    }

    /**
     * Get the imputation.
     *
     * @return bool|null Returns the imputation.
     */
    public function getImputation(): ?bool {
        return $this->imputation;
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
     * Get the inverse.
     *
     * @return bool|null Returns the inverse.
     */
    public function getInverse(): ?bool {
        return $this->inverse;
    }

    /**
     * Get the libelle.
     *
     * @return string|null Returns the libelle.
     */
    public function getLibelle(): ?string {
        return $this->libelle;
    }

    /**
     * Get the numero.
     *
     * @return string|null Returns the numero.
     */
    public function getNumero(): ?string {
        return $this->numero;
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
     * Get the qui.
     *
     * @return int|null Returns the qui.
     */
    public function getQui(): ?int {
        return $this->qui;
    }

    /**
     * Get the service.
     *
     * @return string|null Returns the service.
     */
    public function getService(): ?string {
        return $this->service;
    }

    /**
     * Get the taux pat.
     *
     * @return float|null Returns the taux pat.
     */
    public function getTauxPat(): ?float {
        return $this->tauxPat;
    }

    /**
     * Get the taux sal.
     *
     * @return float|null Returns the taux sal.
     */
    public function getTauxSal(): ?float {
        return $this->tauxSal;
    }

    /**
     * Get the type.
     *
     * @return int|null Returns the type.
     */
    public function getType(): ?int {
        return $this->type;
    }

    /**
     * Set the base.
     *
     * @param float|null $base The base.
     * @return TmpTable0 Returns this Tmp table0.
     */
    public function setBase(?float $base): TmpTable0 {
        $this->base = $base;
        return $this;
    }

    /**
     * Set the base tot.
     *
     * @param float|null $baseTot The base tot.
     * @return TmpTable0 Returns this Tmp table0.
     */
    public function setBaseTot(?float $baseTot): TmpTable0 {
        $this->baseTot = $baseTot;
        return $this;
    }

    /**
     * Set the charge pat.
     *
     * @param float|null $chargePat The charge pat.
     * @return TmpTable0 Returns this Tmp table0.
     */
    public function setChargePat(?float $chargePat): TmpTable0 {
        $this->chargePat = $chargePat;
        return $this;
    }

    /**
     * Set the charge pat tot.
     *
     * @param float|null $chargePatTot The charge pat tot.
     * @return TmpTable0 Returns this Tmp table0.
     */
    public function setChargePatTot(?float $chargePatTot): TmpTable0 {
        $this->chargePatTot = $chargePatTot;
        return $this;
    }

    /**
     * Set the charge sal.
     *
     * @param float|null $chargeSal The charge sal.
     * @return TmpTable0 Returns this Tmp table0.
     */
    public function setChargeSal(?float $chargeSal): TmpTable0 {
        $this->chargeSal = $chargeSal;
        return $this;
    }

    /**
     * Set the charge sal tot.
     *
     * @param float|null $chargeSalTot The charge sal tot.
     * @return TmpTable0 Returns this Tmp table0.
     */
    public function setChargeSalTot(?float $chargeSalTot): TmpTable0 {
        $this->chargeSalTot = $chargeSalTot;
        return $this;
    }

    /**
     * Set the classe.
     *
     * @param string|null $classe The classe.
     * @return TmpTable0 Returns this Tmp table0.
     */
    public function setClasse(?string $classe): TmpTable0 {
        $this->classe = $classe;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return TmpTable0 Returns this Tmp table0.
     */
    public function setCode(?string $code): TmpTable0 {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string|null $codeOrganisme The code organisme.
     * @return TmpTable0 Returns this Tmp table0.
     */
    public function setCodeOrganisme(?string $codeOrganisme): TmpTable0 {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the etablissement.
     *
     * @param int|null $etablissement The etablissement.
     * @return TmpTable0 Returns this Tmp table0.
     */
    public function setEtablissement(?int $etablissement): TmpTable0 {
        $this->etablissement = $etablissement;
        return $this;
    }

    /**
     * Set the imputation.
     *
     * @param bool|null $imputation The imputation.
     * @return TmpTable0 Returns this Tmp table0.
     */
    public function setImputation(?bool $imputation): TmpTable0 {
        $this->imputation = $imputation;
        return $this;
    }

    /**
     * Set the indice periode.
     *
     * @param int|null $indicePeriode The indice periode.
     * @return TmpTable0 Returns this Tmp table0.
     */
    public function setIndicePeriode(?int $indicePeriode): TmpTable0 {
        $this->indicePeriode = $indicePeriode;
        return $this;
    }

    /**
     * Set the inverse.
     *
     * @param bool|null $inverse The inverse.
     * @return TmpTable0 Returns this Tmp table0.
     */
    public function setInverse(?bool $inverse): TmpTable0 {
        $this->inverse = $inverse;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return TmpTable0 Returns this Tmp table0.
     */
    public function setLibelle(?string $libelle): TmpTable0 {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param string|null $numero The numero.
     * @return TmpTable0 Returns this Tmp table0.
     */
    public function setNumero(?string $numero): TmpTable0 {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return TmpTable0 Returns this Tmp table0.
     */
    public function setPeriode(?DateTime $periode): TmpTable0 {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the qui.
     *
     * @param int|null $qui The qui.
     * @return TmpTable0 Returns this Tmp table0.
     */
    public function setQui(?int $qui): TmpTable0 {
        $this->qui = $qui;
        return $this;
    }

    /**
     * Set the service.
     *
     * @param string|null $service The service.
     * @return TmpTable0 Returns this Tmp table0.
     */
    public function setService(?string $service): TmpTable0 {
        $this->service = $service;
        return $this;
    }

    /**
     * Set the taux pat.
     *
     * @param float|null $tauxPat The taux pat.
     * @return TmpTable0 Returns this Tmp table0.
     */
    public function setTauxPat(?float $tauxPat): TmpTable0 {
        $this->tauxPat = $tauxPat;
        return $this;
    }

    /**
     * Set the taux sal.
     *
     * @param float|null $tauxSal The taux sal.
     * @return TmpTable0 Returns this Tmp table0.
     */
    public function setTauxSal(?float $tauxSal): TmpTable0 {
        $this->tauxSal = $tauxSal;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param int|null $type The type.
     * @return TmpTable0 Returns this Tmp table0.
     */
    public function setType(?int $type): TmpTable0 {
        $this->type = $type;
        return $this;
    }
}
