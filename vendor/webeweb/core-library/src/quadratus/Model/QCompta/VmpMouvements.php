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

use DateTime;

/**
 * Vmp mouvements.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class VmpMouvements {

    /**
     * Code vmp.
     *
     * @var string|null
     */
    private $codeVmp;

    /**
     * Date.
     *
     * @var DateTime|null
     */
    private $date;

    /**
     * Francs euros.
     *
     * @var int|null
     */
    private $francsEuros;

    /**
     * Gratuit.
     *
     * @var bool|null
     */
    private $gratuit;

    /**
     * Montant comm.
     *
     * @var float|null
     */
    private $montantComm;

    /**
     * Montant coupon.
     *
     * @var float|null
     */
    private $montantCoupon;

    /**
     * Montant frais.
     *
     * @var float|null
     */
    private $montantFrais;

    /**
     * No lot ecr.
     *
     * @var int|null
     */
    private $noLotEcr;

    /**
     * No lot trace.
     *
     * @var string|null
     */
    private $noLotTrace;

    /**
     * Num ligne.
     *
     * @var int|null
     */
    private $numLigne;

    /**
     * Num uniq ecr.
     *
     * @var int|null
     */
    private $numUniqEcr;

    /**
     * Prix unitaire.
     *
     * @var float|null
     */
    private $prixUnitaire;

    /**
     * Quantite.
     *
     * @var float|null
     */
    private $quantite;

    /**
     * Solde quantite.
     *
     * @var float|null
     */
    private $soldeQuantite;

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
     * Get the code vmp.
     *
     * @return string|null Returns the code vmp.
     */
    public function getCodeVmp(): ?string {
        return $this->codeVmp;
    }

    /**
     * Get the date.
     *
     * @return DateTime|null Returns the date.
     */
    public function getDate(): ?DateTime {
        return $this->date;
    }

    /**
     * Get the francs euros.
     *
     * @return int|null Returns the francs euros.
     */
    public function getFrancsEuros(): ?int {
        return $this->francsEuros;
    }

    /**
     * Get the gratuit.
     *
     * @return bool|null Returns the gratuit.
     */
    public function getGratuit(): ?bool {
        return $this->gratuit;
    }

    /**
     * Get the montant comm.
     *
     * @return float|null Returns the montant comm.
     */
    public function getMontantComm(): ?float {
        return $this->montantComm;
    }

    /**
     * Get the montant coupon.
     *
     * @return float|null Returns the montant coupon.
     */
    public function getMontantCoupon(): ?float {
        return $this->montantCoupon;
    }

    /**
     * Get the montant frais.
     *
     * @return float|null Returns the montant frais.
     */
    public function getMontantFrais(): ?float {
        return $this->montantFrais;
    }

    /**
     * Get the no lot ecr.
     *
     * @return int|null Returns the no lot ecr.
     */
    public function getNoLotEcr(): ?int {
        return $this->noLotEcr;
    }

    /**
     * Get the no lot trace.
     *
     * @return string|null Returns the no lot trace.
     */
    public function getNoLotTrace(): ?string {
        return $this->noLotTrace;
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
     * Get the num uniq ecr.
     *
     * @return int|null Returns the num uniq ecr.
     */
    public function getNumUniqEcr(): ?int {
        return $this->numUniqEcr;
    }

    /**
     * Get the prix unitaire.
     *
     * @return float|null Returns the prix unitaire.
     */
    public function getPrixUnitaire(): ?float {
        return $this->prixUnitaire;
    }

    /**
     * Get the quantite.
     *
     * @return float|null Returns the quantite.
     */
    public function getQuantite(): ?float {
        return $this->quantite;
    }

    /**
     * Get the solde quantite.
     *
     * @return float|null Returns the solde quantite.
     */
    public function getSoldeQuantite(): ?float {
        return $this->soldeQuantite;
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
     * Set the code vmp.
     *
     * @param string|null $codeVmp The code vmp.
     * @return VmpMouvements Returns this Vmp mouvements.
     */
    public function setCodeVmp(?string $codeVmp): VmpMouvements {
        $this->codeVmp = $codeVmp;
        return $this;
    }

    /**
     * Set the date.
     *
     * @param DateTime|null $date The date.
     * @return VmpMouvements Returns this Vmp mouvements.
     */
    public function setDate(?DateTime $date): VmpMouvements {
        $this->date = $date;
        return $this;
    }

    /**
     * Set the francs euros.
     *
     * @param int|null $francsEuros The francs euros.
     * @return VmpMouvements Returns this Vmp mouvements.
     */
    public function setFrancsEuros(?int $francsEuros): VmpMouvements {
        $this->francsEuros = $francsEuros;
        return $this;
    }

    /**
     * Set the gratuit.
     *
     * @param bool|null $gratuit The gratuit.
     * @return VmpMouvements Returns this Vmp mouvements.
     */
    public function setGratuit(?bool $gratuit): VmpMouvements {
        $this->gratuit = $gratuit;
        return $this;
    }

    /**
     * Set the montant comm.
     *
     * @param float|null $montantComm The montant comm.
     * @return VmpMouvements Returns this Vmp mouvements.
     */
    public function setMontantComm(?float $montantComm): VmpMouvements {
        $this->montantComm = $montantComm;
        return $this;
    }

    /**
     * Set the montant coupon.
     *
     * @param float|null $montantCoupon The montant coupon.
     * @return VmpMouvements Returns this Vmp mouvements.
     */
    public function setMontantCoupon(?float $montantCoupon): VmpMouvements {
        $this->montantCoupon = $montantCoupon;
        return $this;
    }

    /**
     * Set the montant frais.
     *
     * @param float|null $montantFrais The montant frais.
     * @return VmpMouvements Returns this Vmp mouvements.
     */
    public function setMontantFrais(?float $montantFrais): VmpMouvements {
        $this->montantFrais = $montantFrais;
        return $this;
    }

    /**
     * Set the no lot ecr.
     *
     * @param int|null $noLotEcr The no lot ecr.
     * @return VmpMouvements Returns this Vmp mouvements.
     */
    public function setNoLotEcr(?int $noLotEcr): VmpMouvements {
        $this->noLotEcr = $noLotEcr;
        return $this;
    }

    /**
     * Set the no lot trace.
     *
     * @param string|null $noLotTrace The no lot trace.
     * @return VmpMouvements Returns this Vmp mouvements.
     */
    public function setNoLotTrace(?string $noLotTrace): VmpMouvements {
        $this->noLotTrace = $noLotTrace;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int|null $numLigne The num ligne.
     * @return VmpMouvements Returns this Vmp mouvements.
     */
    public function setNumLigne(?int $numLigne): VmpMouvements {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the num uniq ecr.
     *
     * @param int|null $numUniqEcr The num uniq ecr.
     * @return VmpMouvements Returns this Vmp mouvements.
     */
    public function setNumUniqEcr(?int $numUniqEcr): VmpMouvements {
        $this->numUniqEcr = $numUniqEcr;
        return $this;
    }

    /**
     * Set the prix unitaire.
     *
     * @param float|null $prixUnitaire The prix unitaire.
     * @return VmpMouvements Returns this Vmp mouvements.
     */
    public function setPrixUnitaire(?float $prixUnitaire): VmpMouvements {
        $this->prixUnitaire = $prixUnitaire;
        return $this;
    }

    /**
     * Set the quantite.
     *
     * @param float|null $quantite The quantite.
     * @return VmpMouvements Returns this Vmp mouvements.
     */
    public function setQuantite(?float $quantite): VmpMouvements {
        $this->quantite = $quantite;
        return $this;
    }

    /**
     * Set the solde quantite.
     *
     * @param float|null $soldeQuantite The solde quantite.
     * @return VmpMouvements Returns this Vmp mouvements.
     */
    public function setSoldeQuantite(?float $soldeQuantite): VmpMouvements {
        $this->soldeQuantite = $soldeQuantite;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param int|null $type The type.
     * @return VmpMouvements Returns this Vmp mouvements.
     */
    public function setType(?int $type): VmpMouvements {
        $this->type = $type;
        return $this;
    }
}
