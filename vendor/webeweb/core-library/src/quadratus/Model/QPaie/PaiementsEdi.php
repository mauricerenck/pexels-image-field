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

/**
 * Paiements edi.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class PaiementsEdi {

    /**
     * Bic.
     *
     * @var string|null
     */
    private $bic;

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
     * Dom banque.
     *
     * @var string|null
     */
    private $domBanque;

    /**
     * Generer coupon paiement.
     *
     * @var bool|null
     */
    private $genererCouponPaiement;

    /**
     * Iban.
     *
     * @var string|null
     */
    private $iban;

    /**
     * Montant.
     *
     * @var float|null
     */
    private $montant;

    /**
     * Montant ducs annuelle.
     *
     * @var float|null
     */
    private $montantDucsAnnuelle;

    /**
     * Moyen paiement.
     *
     * @var string|null
     */
    private $moyenPaiement;

    /**
     * Rib.
     *
     * @var string|null
     */
    private $rib;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the bic.
     *
     * @return string|null Returns the bic.
     */
    public function getBic(): ?string {
        return $this->bic;
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
     * Get the dom banque.
     *
     * @return string|null Returns the dom banque.
     */
    public function getDomBanque(): ?string {
        return $this->domBanque;
    }

    /**
     * Get the generer coupon paiement.
     *
     * @return bool|null Returns the generer coupon paiement.
     */
    public function getGenererCouponPaiement(): ?bool {
        return $this->genererCouponPaiement;
    }

    /**
     * Get the iban.
     *
     * @return string|null Returns the iban.
     */
    public function getIban(): ?string {
        return $this->iban;
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
     * Get the montant ducs annuelle.
     *
     * @return float|null Returns the montant ducs annuelle.
     */
    public function getMontantDucsAnnuelle(): ?float {
        return $this->montantDucsAnnuelle;
    }

    /**
     * Get the moyen paiement.
     *
     * @return string|null Returns the moyen paiement.
     */
    public function getMoyenPaiement(): ?string {
        return $this->moyenPaiement;
    }

    /**
     * Get the rib.
     *
     * @return string|null Returns the rib.
     */
    public function getRib(): ?string {
        return $this->rib;
    }

    /**
     * Set the bic.
     *
     * @param string|null $bic The bic.
     * @return PaiementsEdi Returns this Paiements edi.
     */
    public function setBic(?string $bic): PaiementsEdi {
        $this->bic = $bic;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return PaiementsEdi Returns this Paiements edi.
     */
    public function setCodeEtablissement(?int $codeEtablissement): PaiementsEdi {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string|null $codeOrganisme The code organisme.
     * @return PaiementsEdi Returns this Paiements edi.
     */
    public function setCodeOrganisme(?string $codeOrganisme): PaiementsEdi {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the dom banque.
     *
     * @param string|null $domBanque The dom banque.
     * @return PaiementsEdi Returns this Paiements edi.
     */
    public function setDomBanque(?string $domBanque): PaiementsEdi {
        $this->domBanque = $domBanque;
        return $this;
    }

    /**
     * Set the generer coupon paiement.
     *
     * @param bool|null $genererCouponPaiement The generer coupon paiement.
     * @return PaiementsEdi Returns this Paiements edi.
     */
    public function setGenererCouponPaiement(?bool $genererCouponPaiement): PaiementsEdi {
        $this->genererCouponPaiement = $genererCouponPaiement;
        return $this;
    }

    /**
     * Set the iban.
     *
     * @param string|null $iban The iban.
     * @return PaiementsEdi Returns this Paiements edi.
     */
    public function setIban(?string $iban): PaiementsEdi {
        $this->iban = $iban;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float|null $montant The montant.
     * @return PaiementsEdi Returns this Paiements edi.
     */
    public function setMontant(?float $montant): PaiementsEdi {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the montant ducs annuelle.
     *
     * @param float|null $montantDucsAnnuelle The montant ducs annuelle.
     * @return PaiementsEdi Returns this Paiements edi.
     */
    public function setMontantDucsAnnuelle(?float $montantDucsAnnuelle): PaiementsEdi {
        $this->montantDucsAnnuelle = $montantDucsAnnuelle;
        return $this;
    }

    /**
     * Set the moyen paiement.
     *
     * @param string|null $moyenPaiement The moyen paiement.
     * @return PaiementsEdi Returns this Paiements edi.
     */
    public function setMoyenPaiement(?string $moyenPaiement): PaiementsEdi {
        $this->moyenPaiement = $moyenPaiement;
        return $this;
    }

    /**
     * Set the rib.
     *
     * @param string|null $rib The rib.
     * @return PaiementsEdi Returns this Paiements edi.
     */
    public function setRib(?string $rib): PaiementsEdi {
        $this->rib = $rib;
        return $this;
    }
}
