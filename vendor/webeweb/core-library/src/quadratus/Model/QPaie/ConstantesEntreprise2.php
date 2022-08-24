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
 * Constantes entreprise2.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class ConstantesEntreprise2 {

    /**
     * Date application forfait social8.
     *
     * @var DateTime|null
     */
    private $dateApplicationForfaitSocial8;

    /**
     * Date application fs lisse.
     *
     * @var DateTime|null
     */
    private $dateApplicationFsLisse;

    /**
     * Gere evt fin contrat lot.
     *
     * @var bool|null
     */
    private $gereEvtFinContratLot;

    /**
     * Gere prev norme dsn.
     *
     * @var bool|null
     */
    private $gerePrevNormeDsn;

    /**
     * Gestion dsn.
     *
     * @var bool|null
     */
    private $gestionDsn;

    /**
     * N evenement dsn.
     *
     * @var int|null
     */
    private $nEvenementDsn;

    /**
     * Ne pas activer prime annuelle proprete.
     *
     * @var bool|null
     */
    private $nePasActiverPrimeAnnuelleProprete;

    /**
     * Regime mixte msa.
     *
     * @var bool|null
     */
    private $regimeMixteMsa;

    /**
     * Taux prime annuelle proprete moins20 ans.
     *
     * @var float|null
     */
    private $tauxPrimeAnnuellePropreteMoins20Ans;

    /**
     * Taux prime annuelle proprete plus20 ans.
     *
     * @var float|null
     */
    private $tauxPrimeAnnuellePropretePlus20Ans;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the date application forfait social8.
     *
     * @return DateTime|null Returns the date application forfait social8.
     */
    public function getDateApplicationForfaitSocial8(): ?DateTime {
        return $this->dateApplicationForfaitSocial8;
    }

    /**
     * Get the date application fs lisse.
     *
     * @return DateTime|null Returns the date application fs lisse.
     */
    public function getDateApplicationFsLisse(): ?DateTime {
        return $this->dateApplicationFsLisse;
    }

    /**
     * Get the gere evt fin contrat lot.
     *
     * @return bool|null Returns the gere evt fin contrat lot.
     */
    public function getGereEvtFinContratLot(): ?bool {
        return $this->gereEvtFinContratLot;
    }

    /**
     * Get the gere prev norme dsn.
     *
     * @return bool|null Returns the gere prev norme dsn.
     */
    public function getGerePrevNormeDsn(): ?bool {
        return $this->gerePrevNormeDsn;
    }

    /**
     * Get the gestion dsn.
     *
     * @return bool|null Returns the gestion dsn.
     */
    public function getGestionDsn(): ?bool {
        return $this->gestionDsn;
    }

    /**
     * Get the n evenement dsn.
     *
     * @return int|null Returns the n evenement dsn.
     */
    public function getNEvenementDsn(): ?int {
        return $this->nEvenementDsn;
    }

    /**
     * Get the ne pas activer prime annuelle proprete.
     *
     * @return bool|null Returns the ne pas activer prime annuelle proprete.
     */
    public function getNePasActiverPrimeAnnuelleProprete(): ?bool {
        return $this->nePasActiverPrimeAnnuelleProprete;
    }

    /**
     * Get the regime mixte msa.
     *
     * @return bool|null Returns the regime mixte msa.
     */
    public function getRegimeMixteMsa(): ?bool {
        return $this->regimeMixteMsa;
    }

    /**
     * Get the taux prime annuelle proprete moins20 ans.
     *
     * @return float|null Returns the taux prime annuelle proprete moins20 ans.
     */
    public function getTauxPrimeAnnuellePropreteMoins20Ans(): ?float {
        return $this->tauxPrimeAnnuellePropreteMoins20Ans;
    }

    /**
     * Get the taux prime annuelle proprete plus20 ans.
     *
     * @return float|null Returns the taux prime annuelle proprete plus20 ans.
     */
    public function getTauxPrimeAnnuellePropretePlus20Ans(): ?float {
        return $this->tauxPrimeAnnuellePropretePlus20Ans;
    }

    /**
     * Set the date application forfait social8.
     *
     * @param DateTime|null $dateApplicationForfaitSocial8 The date application forfait social8.
     * @return ConstantesEntreprise2 Returns this Constantes entreprise2.
     */
    public function setDateApplicationForfaitSocial8(?DateTime $dateApplicationForfaitSocial8): ConstantesEntreprise2 {
        $this->dateApplicationForfaitSocial8 = $dateApplicationForfaitSocial8;
        return $this;
    }

    /**
     * Set the date application fs lisse.
     *
     * @param DateTime|null $dateApplicationFsLisse The date application fs lisse.
     * @return ConstantesEntreprise2 Returns this Constantes entreprise2.
     */
    public function setDateApplicationFsLisse(?DateTime $dateApplicationFsLisse): ConstantesEntreprise2 {
        $this->dateApplicationFsLisse = $dateApplicationFsLisse;
        return $this;
    }

    /**
     * Set the gere evt fin contrat lot.
     *
     * @param bool|null $gereEvtFinContratLot The gere evt fin contrat lot.
     * @return ConstantesEntreprise2 Returns this Constantes entreprise2.
     */
    public function setGereEvtFinContratLot(?bool $gereEvtFinContratLot): ConstantesEntreprise2 {
        $this->gereEvtFinContratLot = $gereEvtFinContratLot;
        return $this;
    }

    /**
     * Set the gere prev norme dsn.
     *
     * @param bool|null $gerePrevNormeDsn The gere prev norme dsn.
     * @return ConstantesEntreprise2 Returns this Constantes entreprise2.
     */
    public function setGerePrevNormeDsn(?bool $gerePrevNormeDsn): ConstantesEntreprise2 {
        $this->gerePrevNormeDsn = $gerePrevNormeDsn;
        return $this;
    }

    /**
     * Set the gestion dsn.
     *
     * @param bool|null $gestionDsn The gestion dsn.
     * @return ConstantesEntreprise2 Returns this Constantes entreprise2.
     */
    public function setGestionDsn(?bool $gestionDsn): ConstantesEntreprise2 {
        $this->gestionDsn = $gestionDsn;
        return $this;
    }

    /**
     * Set the n evenement dsn.
     *
     * @param int|null $nEvenementDsn The n evenement dsn.
     * @return ConstantesEntreprise2 Returns this Constantes entreprise2.
     */
    public function setNEvenementDsn(?int $nEvenementDsn): ConstantesEntreprise2 {
        $this->nEvenementDsn = $nEvenementDsn;
        return $this;
    }

    /**
     * Set the ne pas activer prime annuelle proprete.
     *
     * @param bool|null $nePasActiverPrimeAnnuelleProprete The ne pas activer prime annuelle proprete.
     * @return ConstantesEntreprise2 Returns this Constantes entreprise2.
     */
    public function setNePasActiverPrimeAnnuelleProprete(?bool $nePasActiverPrimeAnnuelleProprete): ConstantesEntreprise2 {
        $this->nePasActiverPrimeAnnuelleProprete = $nePasActiverPrimeAnnuelleProprete;
        return $this;
    }

    /**
     * Set the regime mixte msa.
     *
     * @param bool|null $regimeMixteMsa The regime mixte msa.
     * @return ConstantesEntreprise2 Returns this Constantes entreprise2.
     */
    public function setRegimeMixteMsa(?bool $regimeMixteMsa): ConstantesEntreprise2 {
        $this->regimeMixteMsa = $regimeMixteMsa;
        return $this;
    }

    /**
     * Set the taux prime annuelle proprete moins20 ans.
     *
     * @param float|null $tauxPrimeAnnuellePropreteMoins20Ans The taux prime annuelle proprete moins20 ans.
     * @return ConstantesEntreprise2 Returns this Constantes entreprise2.
     */
    public function setTauxPrimeAnnuellePropreteMoins20Ans(?float $tauxPrimeAnnuellePropreteMoins20Ans): ConstantesEntreprise2 {
        $this->tauxPrimeAnnuellePropreteMoins20Ans = $tauxPrimeAnnuellePropreteMoins20Ans;
        return $this;
    }

    /**
     * Set the taux prime annuelle proprete plus20 ans.
     *
     * @param float|null $tauxPrimeAnnuellePropretePlus20Ans The taux prime annuelle proprete plus20 ans.
     * @return ConstantesEntreprise2 Returns this Constantes entreprise2.
     */
    public function setTauxPrimeAnnuellePropretePlus20Ans(?float $tauxPrimeAnnuellePropretePlus20Ans): ConstantesEntreprise2 {
        $this->tauxPrimeAnnuellePropretePlus20Ans = $tauxPrimeAnnuellePropretePlus20Ans;
        return $this;
    }
}
