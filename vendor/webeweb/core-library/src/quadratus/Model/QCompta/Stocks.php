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
 * Stocks.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class Stocks {

    /**
     * Annee.
     *
     * @var string|null
     */
    private $annee;

    /**
     * Centre.
     *
     * @var string|null
     */
    private $centre;

    /**
     * Libelle ecriture.
     *
     * @var string|null
     */
    private $libelleEcriture;

    /**
     * Montant.
     *
     * @var float|null
     */
    private $montant;

    /**
     * Nature.
     *
     * @var string|null
     */
    private $nature;

    /**
     * Num ligne.
     *
     * @var int|null
     */
    private $numLigne;

    /**
     * Numero compte.
     *
     * @var string|null
     */
    private $numeroCompte;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Prix u.
     *
     * @var float|null
     */
    private $prixU;

    /**
     * Prix u2.
     *
     * @var float|null
     */
    private $prixU2;

    /**
     * Quantite.
     *
     * @var float|null
     */
    private $quantite;

    /**
     * Quantite2.
     *
     * @var float|null
     */
    private $quantite2;

    /**
     * Ref ecr code journal.
     *
     * @var string|null
     */
    private $refEcrCodeJournal;

    /**
     * Ref ecr folio.
     *
     * @var int|null
     */
    private $refEcrFolio;

    /**
     * Ref ecr ligne folio.
     *
     * @var int|null
     */
    private $refEcrLigneFolio;

    /**
     * Ref ecr num ligne.
     *
     * @var int|null
     */
    private $refEcrNumLigne;

    /**
     * Ref ecr periode ecriture.
     *
     * @var DateTime|null
     */
    private $refEcrPeriodeEcriture;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the annee.
     *
     * @return string|null Returns the annee.
     */
    public function getAnnee(): ?string {
        return $this->annee;
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
     * Get the libelle ecriture.
     *
     * @return string|null Returns the libelle ecriture.
     */
    public function getLibelleEcriture(): ?string {
        return $this->libelleEcriture;
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
     * Get the nature.
     *
     * @return string|null Returns the nature.
     */
    public function getNature(): ?string {
        return $this->nature;
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
     * Get the numero compte.
     *
     * @return string|null Returns the numero compte.
     */
    public function getNumeroCompte(): ?string {
        return $this->numeroCompte;
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
     * Get the prix u.
     *
     * @return float|null Returns the prix u.
     */
    public function getPrixU(): ?float {
        return $this->prixU;
    }

    /**
     * Get the prix u2.
     *
     * @return float|null Returns the prix u2.
     */
    public function getPrixU2(): ?float {
        return $this->prixU2;
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
     * Get the quantite2.
     *
     * @return float|null Returns the quantite2.
     */
    public function getQuantite2(): ?float {
        return $this->quantite2;
    }

    /**
     * Get the ref ecr code journal.
     *
     * @return string|null Returns the ref ecr code journal.
     */
    public function getRefEcrCodeJournal(): ?string {
        return $this->refEcrCodeJournal;
    }

    /**
     * Get the ref ecr folio.
     *
     * @return int|null Returns the ref ecr folio.
     */
    public function getRefEcrFolio(): ?int {
        return $this->refEcrFolio;
    }

    /**
     * Get the ref ecr ligne folio.
     *
     * @return int|null Returns the ref ecr ligne folio.
     */
    public function getRefEcrLigneFolio(): ?int {
        return $this->refEcrLigneFolio;
    }

    /**
     * Get the ref ecr num ligne.
     *
     * @return int|null Returns the ref ecr num ligne.
     */
    public function getRefEcrNumLigne(): ?int {
        return $this->refEcrNumLigne;
    }

    /**
     * Get the ref ecr periode ecriture.
     *
     * @return DateTime|null Returns the ref ecr periode ecriture.
     */
    public function getRefEcrPeriodeEcriture(): ?DateTime {
        return $this->refEcrPeriodeEcriture;
    }

    /**
     * Set the annee.
     *
     * @param string|null $annee The annee.
     * @return Stocks Returns this Stocks.
     */
    public function setAnnee(?string $annee): Stocks {
        $this->annee = $annee;
        return $this;
    }

    /**
     * Set the centre.
     *
     * @param string|null $centre The centre.
     * @return Stocks Returns this Stocks.
     */
    public function setCentre(?string $centre): Stocks {
        $this->centre = $centre;
        return $this;
    }

    /**
     * Set the libelle ecriture.
     *
     * @param string|null $libelleEcriture The libelle ecriture.
     * @return Stocks Returns this Stocks.
     */
    public function setLibelleEcriture(?string $libelleEcriture): Stocks {
        $this->libelleEcriture = $libelleEcriture;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float|null $montant The montant.
     * @return Stocks Returns this Stocks.
     */
    public function setMontant(?float $montant): Stocks {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the nature.
     *
     * @param string|null $nature The nature.
     * @return Stocks Returns this Stocks.
     */
    public function setNature(?string $nature): Stocks {
        $this->nature = $nature;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int|null $numLigne The num ligne.
     * @return Stocks Returns this Stocks.
     */
    public function setNumLigne(?int $numLigne): Stocks {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string|null $numeroCompte The numero compte.
     * @return Stocks Returns this Stocks.
     */
    public function setNumeroCompte(?string $numeroCompte): Stocks {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return Stocks Returns this Stocks.
     */
    public function setPeriode(?DateTime $periode): Stocks {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the prix u.
     *
     * @param float|null $prixU The prix u.
     * @return Stocks Returns this Stocks.
     */
    public function setPrixU(?float $prixU): Stocks {
        $this->prixU = $prixU;
        return $this;
    }

    /**
     * Set the prix u2.
     *
     * @param float|null $prixU2 The prix u2.
     * @return Stocks Returns this Stocks.
     */
    public function setPrixU2(?float $prixU2): Stocks {
        $this->prixU2 = $prixU2;
        return $this;
    }

    /**
     * Set the quantite.
     *
     * @param float|null $quantite The quantite.
     * @return Stocks Returns this Stocks.
     */
    public function setQuantite(?float $quantite): Stocks {
        $this->quantite = $quantite;
        return $this;
    }

    /**
     * Set the quantite2.
     *
     * @param float|null $quantite2 The quantite2.
     * @return Stocks Returns this Stocks.
     */
    public function setQuantite2(?float $quantite2): Stocks {
        $this->quantite2 = $quantite2;
        return $this;
    }

    /**
     * Set the ref ecr code journal.
     *
     * @param string|null $refEcrCodeJournal The ref ecr code journal.
     * @return Stocks Returns this Stocks.
     */
    public function setRefEcrCodeJournal(?string $refEcrCodeJournal): Stocks {
        $this->refEcrCodeJournal = $refEcrCodeJournal;
        return $this;
    }

    /**
     * Set the ref ecr folio.
     *
     * @param int|null $refEcrFolio The ref ecr folio.
     * @return Stocks Returns this Stocks.
     */
    public function setRefEcrFolio(?int $refEcrFolio): Stocks {
        $this->refEcrFolio = $refEcrFolio;
        return $this;
    }

    /**
     * Set the ref ecr ligne folio.
     *
     * @param int|null $refEcrLigneFolio The ref ecr ligne folio.
     * @return Stocks Returns this Stocks.
     */
    public function setRefEcrLigneFolio(?int $refEcrLigneFolio): Stocks {
        $this->refEcrLigneFolio = $refEcrLigneFolio;
        return $this;
    }

    /**
     * Set the ref ecr num ligne.
     *
     * @param int|null $refEcrNumLigne The ref ecr num ligne.
     * @return Stocks Returns this Stocks.
     */
    public function setRefEcrNumLigne(?int $refEcrNumLigne): Stocks {
        $this->refEcrNumLigne = $refEcrNumLigne;
        return $this;
    }

    /**
     * Set the ref ecr periode ecriture.
     *
     * @param DateTime|null $refEcrPeriodeEcriture The ref ecr periode ecriture.
     * @return Stocks Returns this Stocks.
     */
    public function setRefEcrPeriodeEcriture(?DateTime $refEcrPeriodeEcriture): Stocks {
        $this->refEcrPeriodeEcriture = $refEcrPeriodeEcriture;
        return $this;
    }
}
