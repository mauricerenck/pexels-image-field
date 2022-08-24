<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QGI;

use DateTime;

/**
 * Tarifs tranches.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class TarifsTranches {

    /**
     * Code article.
     *
     * @var string|null
     */
    private $codeArticle;

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Code devise.
     *
     * @var string|null
     */
    private $codeDevise;

    /**
     * Code nature.
     *
     * @var string|null
     */
    private $codeNature;

    /**
     * Coeff.
     *
     * @var float|null
     */
    private $coeff;

    /**
     * Date debut.
     *
     * @var DateTime|null
     */
    private $dateDebut;

    /**
     * Date fin.
     *
     * @var DateTime|null
     */
    private $dateFin;

    /**
     * Num tranche.
     *
     * @var string|null
     */
    private $numTranche;

    /**
     * Prix net.
     *
     * @var bool|null
     */
    private $prixNet;

    /**
     * Prix unit.
     *
     * @var float|null
     */
    private $prixUnit;

    /**
     * Qte mini.
     *
     * @var float|null
     */
    private $qteMini;

    /**
     * Type code article.
     *
     * @var string|null
     */
    private $typeCodeArticle;

    /**
     * Type code client.
     *
     * @var string|null
     */
    private $typeCodeClient;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code article.
     *
     * @return string|null Returns the code article.
     */
    public function getCodeArticle(): ?string {
        return $this->codeArticle;
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
     * Get the code devise.
     *
     * @return string|null Returns the code devise.
     */
    public function getCodeDevise(): ?string {
        return $this->codeDevise;
    }

    /**
     * Get the code nature.
     *
     * @return string|null Returns the code nature.
     */
    public function getCodeNature(): ?string {
        return $this->codeNature;
    }

    /**
     * Get the coeff.
     *
     * @return float|null Returns the coeff.
     */
    public function getCoeff(): ?float {
        return $this->coeff;
    }

    /**
     * Get the date debut.
     *
     * @return DateTime|null Returns the date debut.
     */
    public function getDateDebut(): ?DateTime {
        return $this->dateDebut;
    }

    /**
     * Get the date fin.
     *
     * @return DateTime|null Returns the date fin.
     */
    public function getDateFin(): ?DateTime {
        return $this->dateFin;
    }

    /**
     * Get the num tranche.
     *
     * @return string|null Returns the num tranche.
     */
    public function getNumTranche(): ?string {
        return $this->numTranche;
    }

    /**
     * Get the prix net.
     *
     * @return bool|null Returns the prix net.
     */
    public function getPrixNet(): ?bool {
        return $this->prixNet;
    }

    /**
     * Get the prix unit.
     *
     * @return float|null Returns the prix unit.
     */
    public function getPrixUnit(): ?float {
        return $this->prixUnit;
    }

    /**
     * Get the qte mini.
     *
     * @return float|null Returns the qte mini.
     */
    public function getQteMini(): ?float {
        return $this->qteMini;
    }

    /**
     * Get the type code article.
     *
     * @return string|null Returns the type code article.
     */
    public function getTypeCodeArticle(): ?string {
        return $this->typeCodeArticle;
    }

    /**
     * Get the type code client.
     *
     * @return string|null Returns the type code client.
     */
    public function getTypeCodeClient(): ?string {
        return $this->typeCodeClient;
    }

    /**
     * Set the code article.
     *
     * @param string|null $codeArticle The code article.
     * @return TarifsTranches Returns this Tarifs tranches.
     */
    public function setCodeArticle(?string $codeArticle): TarifsTranches {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return TarifsTranches Returns this Tarifs tranches.
     */
    public function setCodeClient(?string $codeClient): TarifsTranches {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code devise.
     *
     * @param string|null $codeDevise The code devise.
     * @return TarifsTranches Returns this Tarifs tranches.
     */
    public function setCodeDevise(?string $codeDevise): TarifsTranches {
        $this->codeDevise = $codeDevise;
        return $this;
    }

    /**
     * Set the code nature.
     *
     * @param string|null $codeNature The code nature.
     * @return TarifsTranches Returns this Tarifs tranches.
     */
    public function setCodeNature(?string $codeNature): TarifsTranches {
        $this->codeNature = $codeNature;
        return $this;
    }

    /**
     * Set the coeff.
     *
     * @param float|null $coeff The coeff.
     * @return TarifsTranches Returns this Tarifs tranches.
     */
    public function setCoeff(?float $coeff): TarifsTranches {
        $this->coeff = $coeff;
        return $this;
    }

    /**
     * Set the date debut.
     *
     * @param DateTime|null $dateDebut The date debut.
     * @return TarifsTranches Returns this Tarifs tranches.
     */
    public function setDateDebut(?DateTime $dateDebut): TarifsTranches {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    /**
     * Set the date fin.
     *
     * @param DateTime|null $dateFin The date fin.
     * @return TarifsTranches Returns this Tarifs tranches.
     */
    public function setDateFin(?DateTime $dateFin): TarifsTranches {
        $this->dateFin = $dateFin;
        return $this;
    }

    /**
     * Set the num tranche.
     *
     * @param string|null $numTranche The num tranche.
     * @return TarifsTranches Returns this Tarifs tranches.
     */
    public function setNumTranche(?string $numTranche): TarifsTranches {
        $this->numTranche = $numTranche;
        return $this;
    }

    /**
     * Set the prix net.
     *
     * @param bool|null $prixNet The prix net.
     * @return TarifsTranches Returns this Tarifs tranches.
     */
    public function setPrixNet(?bool $prixNet): TarifsTranches {
        $this->prixNet = $prixNet;
        return $this;
    }

    /**
     * Set the prix unit.
     *
     * @param float|null $prixUnit The prix unit.
     * @return TarifsTranches Returns this Tarifs tranches.
     */
    public function setPrixUnit(?float $prixUnit): TarifsTranches {
        $this->prixUnit = $prixUnit;
        return $this;
    }

    /**
     * Set the qte mini.
     *
     * @param float|null $qteMini The qte mini.
     * @return TarifsTranches Returns this Tarifs tranches.
     */
    public function setQteMini(?float $qteMini): TarifsTranches {
        $this->qteMini = $qteMini;
        return $this;
    }

    /**
     * Set the type code article.
     *
     * @param string|null $typeCodeArticle The type code article.
     * @return TarifsTranches Returns this Tarifs tranches.
     */
    public function setTypeCodeArticle(?string $typeCodeArticle): TarifsTranches {
        $this->typeCodeArticle = $typeCodeArticle;
        return $this;
    }

    /**
     * Set the type code client.
     *
     * @param string|null $typeCodeClient The type code client.
     * @return TarifsTranches Returns this Tarifs tranches.
     */
    public function setTypeCodeClient(?string $typeCodeClient): TarifsTranches {
        $this->typeCodeClient = $typeCodeClient;
        return $this;
    }
}
