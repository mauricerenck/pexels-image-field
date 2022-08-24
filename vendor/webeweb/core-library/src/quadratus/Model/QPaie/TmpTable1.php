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
 * Tmp table1.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class TmpTable1 {

    /**
     * Classe.
     *
     * @var string|null
     */
    private $classe;

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
     * Type.
     *
     * @var int|null
     */
    private $type;

    /**
     * Valeur.
     *
     * @var float|null
     */
    private $valeur;

    /**
     * Valeur tot.
     *
     * @var float|null
     */
    private $valeurTot;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the type.
     *
     * @return int|null Returns the type.
     */
    public function getType(): ?int {
        return $this->type;
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
     * Get the valeur tot.
     *
     * @return float|null Returns the valeur tot.
     */
    public function getValeurTot(): ?float {
        return $this->valeurTot;
    }

    /**
     * Set the classe.
     *
     * @param string|null $classe The classe.
     * @return TmpTable1 Returns this Tmp table1.
     */
    public function setClasse(?string $classe): TmpTable1 {
        $this->classe = $classe;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string|null $codeOrganisme The code organisme.
     * @return TmpTable1 Returns this Tmp table1.
     */
    public function setCodeOrganisme(?string $codeOrganisme): TmpTable1 {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the etablissement.
     *
     * @param int|null $etablissement The etablissement.
     * @return TmpTable1 Returns this Tmp table1.
     */
    public function setEtablissement(?int $etablissement): TmpTable1 {
        $this->etablissement = $etablissement;
        return $this;
    }

    /**
     * Set the indice periode.
     *
     * @param int|null $indicePeriode The indice periode.
     * @return TmpTable1 Returns this Tmp table1.
     */
    public function setIndicePeriode(?int $indicePeriode): TmpTable1 {
        $this->indicePeriode = $indicePeriode;
        return $this;
    }

    /**
     * Set the inverse.
     *
     * @param bool|null $inverse The inverse.
     * @return TmpTable1 Returns this Tmp table1.
     */
    public function setInverse(?bool $inverse): TmpTable1 {
        $this->inverse = $inverse;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return TmpTable1 Returns this Tmp table1.
     */
    public function setPeriode(?DateTime $periode): TmpTable1 {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the qui.
     *
     * @param int|null $qui The qui.
     * @return TmpTable1 Returns this Tmp table1.
     */
    public function setQui(?int $qui): TmpTable1 {
        $this->qui = $qui;
        return $this;
    }

    /**
     * Set the service.
     *
     * @param string|null $service The service.
     * @return TmpTable1 Returns this Tmp table1.
     */
    public function setService(?string $service): TmpTable1 {
        $this->service = $service;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param int|null $type The type.
     * @return TmpTable1 Returns this Tmp table1.
     */
    public function setType(?int $type): TmpTable1 {
        $this->type = $type;
        return $this;
    }

    /**
     * Set the valeur.
     *
     * @param float|null $valeur The valeur.
     * @return TmpTable1 Returns this Tmp table1.
     */
    public function setValeur(?float $valeur): TmpTable1 {
        $this->valeur = $valeur;
        return $this;
    }

    /**
     * Set the valeur tot.
     *
     * @param float|null $valeurTot The valeur tot.
     * @return TmpTable1 Returns this Tmp table1.
     */
    public function setValeurTot(?float $valeurTot): TmpTable1 {
        $this->valeurTot = $valeurTot;
        return $this;
    }
}
