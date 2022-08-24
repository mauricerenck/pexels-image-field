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
 * Fact fourn entete.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class FactFournEntete {

    /**
     * Boni mali.
     *
     * @var bool|null
     */
    private $boniMali;

    /**
     * Code journal.
     *
     * @var string|null
     */
    private $codeJournal;

    /**
     * Date.
     *
     * @var DateTime|null
     */
    private $date;

    /**
     * Folio.
     *
     * @var int|null
     */
    private $folio;

    /**
     * Lib auto.
     *
     * @var string|null
     */
    private $libAuto;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Monnaie.
     *
     * @var string|null
     */
    private $monnaie;

    /**
     * Montant tt ccredit.
     *
     * @var string|null
     */
    private $montantTtCcredit;

    /**
     * Montant tt cdebit.
     *
     * @var string|null
     */
    private $montantTtCdebit;

    /**
     * Num doss cpta.
     *
     * @var string|null
     */
    private $numDossCpta;

    /**
     * Num facture.
     *
     * @var string|null
     */
    private $numFacture;

    /**
     * Num fournisseur.
     *
     * @var string|null
     */
    private $numFournisseur;

    /**
     * Num lot.
     *
     * @var int|null
     */
    private $numLot;

    /**
     * Num uniq.
     *
     * @var string|null
     */
    private $numUniq;

    /**
     * Ref image.
     *
     * @var string|null
     */
    private $refImage;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the boni mali.
     *
     * @return bool|null Returns the boni mali.
     */
    public function getBoniMali(): ?bool {
        return $this->boniMali;
    }

    /**
     * Get the code journal.
     *
     * @return string|null Returns the code journal.
     */
    public function getCodeJournal(): ?string {
        return $this->codeJournal;
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
     * Get the folio.
     *
     * @return int|null Returns the folio.
     */
    public function getFolio(): ?int {
        return $this->folio;
    }

    /**
     * Get the lib auto.
     *
     * @return string|null Returns the lib auto.
     */
    public function getLibAuto(): ?string {
        return $this->libAuto;
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
     * Get the monnaie.
     *
     * @return string|null Returns the monnaie.
     */
    public function getMonnaie(): ?string {
        return $this->monnaie;
    }

    /**
     * Get the montant tt ccredit.
     *
     * @return string|null Returns the montant tt ccredit.
     */
    public function getMontantTtCcredit(): ?string {
        return $this->montantTtCcredit;
    }

    /**
     * Get the montant tt cdebit.
     *
     * @return string|null Returns the montant tt cdebit.
     */
    public function getMontantTtCdebit(): ?string {
        return $this->montantTtCdebit;
    }

    /**
     * Get the num doss cpta.
     *
     * @return string|null Returns the num doss cpta.
     */
    public function getNumDossCpta(): ?string {
        return $this->numDossCpta;
    }

    /**
     * Get the num facture.
     *
     * @return string|null Returns the num facture.
     */
    public function getNumFacture(): ?string {
        return $this->numFacture;
    }

    /**
     * Get the num fournisseur.
     *
     * @return string|null Returns the num fournisseur.
     */
    public function getNumFournisseur(): ?string {
        return $this->numFournisseur;
    }

    /**
     * Get the num lot.
     *
     * @return int|null Returns the num lot.
     */
    public function getNumLot(): ?int {
        return $this->numLot;
    }

    /**
     * Get the num uniq.
     *
     * @return string|null Returns the num uniq.
     */
    public function getNumUniq(): ?string {
        return $this->numUniq;
    }

    /**
     * Get the ref image.
     *
     * @return string|null Returns the ref image.
     */
    public function getRefImage(): ?string {
        return $this->refImage;
    }

    /**
     * Set the boni mali.
     *
     * @param bool|null $boniMali The boni mali.
     * @return FactFournEntete Returns this Fact fourn entete.
     */
    public function setBoniMali(?bool $boniMali): FactFournEntete {
        $this->boniMali = $boniMali;
        return $this;
    }

    /**
     * Set the code journal.
     *
     * @param string|null $codeJournal The code journal.
     * @return FactFournEntete Returns this Fact fourn entete.
     */
    public function setCodeJournal(?string $codeJournal): FactFournEntete {
        $this->codeJournal = $codeJournal;
        return $this;
    }

    /**
     * Set the date.
     *
     * @param DateTime|null $date The date.
     * @return FactFournEntete Returns this Fact fourn entete.
     */
    public function setDate(?DateTime $date): FactFournEntete {
        $this->date = $date;
        return $this;
    }

    /**
     * Set the folio.
     *
     * @param int|null $folio The folio.
     * @return FactFournEntete Returns this Fact fourn entete.
     */
    public function setFolio(?int $folio): FactFournEntete {
        $this->folio = $folio;
        return $this;
    }

    /**
     * Set the lib auto.
     *
     * @param string|null $libAuto The lib auto.
     * @return FactFournEntete Returns this Fact fourn entete.
     */
    public function setLibAuto(?string $libAuto): FactFournEntete {
        $this->libAuto = $libAuto;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return FactFournEntete Returns this Fact fourn entete.
     */
    public function setLibelle(?string $libelle): FactFournEntete {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the monnaie.
     *
     * @param string|null $monnaie The monnaie.
     * @return FactFournEntete Returns this Fact fourn entete.
     */
    public function setMonnaie(?string $monnaie): FactFournEntete {
        $this->monnaie = $monnaie;
        return $this;
    }

    /**
     * Set the montant tt ccredit.
     *
     * @param string|null $montantTtCcredit The montant tt ccredit.
     * @return FactFournEntete Returns this Fact fourn entete.
     */
    public function setMontantTtCcredit(?string $montantTtCcredit): FactFournEntete {
        $this->montantTtCcredit = $montantTtCcredit;
        return $this;
    }

    /**
     * Set the montant tt cdebit.
     *
     * @param string|null $montantTtCdebit The montant tt cdebit.
     * @return FactFournEntete Returns this Fact fourn entete.
     */
    public function setMontantTtCdebit(?string $montantTtCdebit): FactFournEntete {
        $this->montantTtCdebit = $montantTtCdebit;
        return $this;
    }

    /**
     * Set the num doss cpta.
     *
     * @param string|null $numDossCpta The num doss cpta.
     * @return FactFournEntete Returns this Fact fourn entete.
     */
    public function setNumDossCpta(?string $numDossCpta): FactFournEntete {
        $this->numDossCpta = $numDossCpta;
        return $this;
    }

    /**
     * Set the num facture.
     *
     * @param string|null $numFacture The num facture.
     * @return FactFournEntete Returns this Fact fourn entete.
     */
    public function setNumFacture(?string $numFacture): FactFournEntete {
        $this->numFacture = $numFacture;
        return $this;
    }

    /**
     * Set the num fournisseur.
     *
     * @param string|null $numFournisseur The num fournisseur.
     * @return FactFournEntete Returns this Fact fourn entete.
     */
    public function setNumFournisseur(?string $numFournisseur): FactFournEntete {
        $this->numFournisseur = $numFournisseur;
        return $this;
    }

    /**
     * Set the num lot.
     *
     * @param int|null $numLot The num lot.
     * @return FactFournEntete Returns this Fact fourn entete.
     */
    public function setNumLot(?int $numLot): FactFournEntete {
        $this->numLot = $numLot;
        return $this;
    }

    /**
     * Set the num uniq.
     *
     * @param string|null $numUniq The num uniq.
     * @return FactFournEntete Returns this Fact fourn entete.
     */
    public function setNumUniq(?string $numUniq): FactFournEntete {
        $this->numUniq = $numUniq;
        return $this;
    }

    /**
     * Set the ref image.
     *
     * @param string|null $refImage The ref image.
     * @return FactFournEntete Returns this Fact fourn entete.
     */
    public function setRefImage(?string $refImage): FactFournEntete {
        $this->refImage = $refImage;
        return $this;
    }
}
