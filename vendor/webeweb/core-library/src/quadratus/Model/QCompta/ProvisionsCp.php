<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QCompta;

/**
 * Provisions cp.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class ProvisionsCp {

    /**
     * Centre.
     *
     * @var string|null
     */
    private $centre;

    /**
     * Col pour sal ref.
     *
     * @var string|null
     */
    private $colPourSalRef;

    /**
     * Dernier salaire.
     *
     * @var float|null
     */
    private $dernierSalaire;

    /**
     * Moyenne salaires.
     *
     * @var float|null
     */
    private $moyenneSalaires;

    /**
     * Nature.
     *
     * @var string|null
     */
    private $nature;

    /**
     * Nom complet emp.
     *
     * @var string|null
     */
    private $nomCompletEmp;

    /**
     * Numero emp.
     *
     * @var string|null
     */
    private $numeroEmp;

    /**
     * Provision totale.
     *
     * @var float|null
     */
    private $provisionTotale;

    /**
     * Salaire ref.
     *
     * @var float|null
     */
    private $salaireRef;

    /**
     * Solde jours n.
     *
     * @var float|null
     */
    private $soldeJoursN;

    /**
     * Solde jours n1.
     *
     * @var float|null
     */
    private $soldeJoursN1;

    /**
     * Tx charges soc.
     *
     * @var float|null
     */
    private $txChargesSoc;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the centre.
     *
     * @return string|null Returns the centre.
     */
    public function getCentre(): ?string {
        return $this->centre;
    }

    /**
     * Get the col pour sal ref.
     *
     * @return string|null Returns the col pour sal ref.
     */
    public function getColPourSalRef(): ?string {
        return $this->colPourSalRef;
    }

    /**
     * Get the dernier salaire.
     *
     * @return float|null Returns the dernier salaire.
     */
    public function getDernierSalaire(): ?float {
        return $this->dernierSalaire;
    }

    /**
     * Get the moyenne salaires.
     *
     * @return float|null Returns the moyenne salaires.
     */
    public function getMoyenneSalaires(): ?float {
        return $this->moyenneSalaires;
    }

    /**
     * Get the nature.
     *
     * @return string|null Returns the nature.
     */
    public function getNature(): ?string {
        return $this->nature;
    }

    /**
     * Get the nom complet emp.
     *
     * @return string|null Returns the nom complet emp.
     */
    public function getNomCompletEmp(): ?string {
        return $this->nomCompletEmp;
    }

    /**
     * Get the numero emp.
     *
     * @return string|null Returns the numero emp.
     */
    public function getNumeroEmp(): ?string {
        return $this->numeroEmp;
    }

    /**
     * Get the provision totale.
     *
     * @return float|null Returns the provision totale.
     */
    public function getProvisionTotale(): ?float {
        return $this->provisionTotale;
    }

    /**
     * Get the salaire ref.
     *
     * @return float|null Returns the salaire ref.
     */
    public function getSalaireRef(): ?float {
        return $this->salaireRef;
    }

    /**
     * Get the solde jours n.
     *
     * @return float|null Returns the solde jours n.
     */
    public function getSoldeJoursN(): ?float {
        return $this->soldeJoursN;
    }

    /**
     * Get the solde jours n1.
     *
     * @return float|null Returns the solde jours n1.
     */
    public function getSoldeJoursN1(): ?float {
        return $this->soldeJoursN1;
    }

    /**
     * Get the tx charges soc.
     *
     * @return float|null Returns the tx charges soc.
     */
    public function getTxChargesSoc(): ?float {
        return $this->txChargesSoc;
    }

    /**
     * Set the centre.
     *
     * @param string|null $centre The centre.
     * @return ProvisionsCp Returns this Provisions cp.
     */
    public function setCentre(?string $centre): ProvisionsCp {
        $this->centre = $centre;
        return $this;
    }

    /**
     * Set the col pour sal ref.
     *
     * @param string|null $colPourSalRef The col pour sal ref.
     * @return ProvisionsCp Returns this Provisions cp.
     */
    public function setColPourSalRef(?string $colPourSalRef): ProvisionsCp {
        $this->colPourSalRef = $colPourSalRef;
        return $this;
    }

    /**
     * Set the dernier salaire.
     *
     * @param float|null $dernierSalaire The dernier salaire.
     * @return ProvisionsCp Returns this Provisions cp.
     */
    public function setDernierSalaire(?float $dernierSalaire): ProvisionsCp {
        $this->dernierSalaire = $dernierSalaire;
        return $this;
    }

    /**
     * Set the moyenne salaires.
     *
     * @param float|null $moyenneSalaires The moyenne salaires.
     * @return ProvisionsCp Returns this Provisions cp.
     */
    public function setMoyenneSalaires(?float $moyenneSalaires): ProvisionsCp {
        $this->moyenneSalaires = $moyenneSalaires;
        return $this;
    }

    /**
     * Set the nature.
     *
     * @param string|null $nature The nature.
     * @return ProvisionsCp Returns this Provisions cp.
     */
    public function setNature(?string $nature): ProvisionsCp {
        $this->nature = $nature;
        return $this;
    }

    /**
     * Set the nom complet emp.
     *
     * @param string|null $nomCompletEmp The nom complet emp.
     * @return ProvisionsCp Returns this Provisions cp.
     */
    public function setNomCompletEmp(?string $nomCompletEmp): ProvisionsCp {
        $this->nomCompletEmp = $nomCompletEmp;
        return $this;
    }

    /**
     * Set the numero emp.
     *
     * @param string|null $numeroEmp The numero emp.
     * @return ProvisionsCp Returns this Provisions cp.
     */
    public function setNumeroEmp(?string $numeroEmp): ProvisionsCp {
        $this->numeroEmp = $numeroEmp;
        return $this;
    }

    /**
     * Set the provision totale.
     *
     * @param float|null $provisionTotale The provision totale.
     * @return ProvisionsCp Returns this Provisions cp.
     */
    public function setProvisionTotale(?float $provisionTotale): ProvisionsCp {
        $this->provisionTotale = $provisionTotale;
        return $this;
    }

    /**
     * Set the salaire ref.
     *
     * @param float|null $salaireRef The salaire ref.
     * @return ProvisionsCp Returns this Provisions cp.
     */
    public function setSalaireRef(?float $salaireRef): ProvisionsCp {
        $this->salaireRef = $salaireRef;
        return $this;
    }

    /**
     * Set the solde jours n.
     *
     * @param float|null $soldeJoursN The solde jours n.
     * @return ProvisionsCp Returns this Provisions cp.
     */
    public function setSoldeJoursN(?float $soldeJoursN): ProvisionsCp {
        $this->soldeJoursN = $soldeJoursN;
        return $this;
    }

    /**
     * Set the solde jours n1.
     *
     * @param float|null $soldeJoursN1 The solde jours n1.
     * @return ProvisionsCp Returns this Provisions cp.
     */
    public function setSoldeJoursN1(?float $soldeJoursN1): ProvisionsCp {
        $this->soldeJoursN1 = $soldeJoursN1;
        return $this;
    }

    /**
     * Set the tx charges soc.
     *
     * @param float|null $txChargesSoc The tx charges soc.
     * @return ProvisionsCp Returns this Provisions cp.
     */
    public function setTxChargesSoc(?float $txChargesSoc): ProvisionsCp {
        $this->txChargesSoc = $txChargesSoc;
        return $this;
    }
}
