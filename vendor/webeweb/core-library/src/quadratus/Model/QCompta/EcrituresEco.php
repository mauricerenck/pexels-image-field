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
 * Ecritures eco.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class EcrituresEco {

    /**
     * Centre.
     *
     * @var string|null
     */
    private $centre;

    /**
     * Code journal.
     *
     * @var string|null
     */
    private $codeJournal;

    /**
     * Code libelle auto.
     *
     * @var string|null
     */
    private $codeLibelleAuto;

    /**
     * Folio.
     *
     * @var int|null
     */
    private $folio;

    /**
     * Jour ecriture.
     *
     * @var string|null
     */
    private $jourEcriture;

    /**
     * Liaison ecriture.
     *
     * @var bool|null
     */
    private $liaisonEcriture;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Montant tenu credit.
     *
     * @var float|null
     */
    private $montantTenuCredit;

    /**
     * Montant tenu debit.
     *
     * @var float|null
     */
    private $montantTenuDebit;

    /**
     * Nature.
     *
     * @var string|null
     */
    private $nature;

    /**
     * No lot trace.
     *
     * @var string|null
     */
    private $noLotTrace;

    /**
     * Num ecr eco.
     *
     * @var int|null
     */
    private $numEcrEco;

    /**
     * Numero compte.
     *
     * @var string|null
     */
    private $numeroCompte;

    /**
     * Periode ecriture.
     *
     * @var DateTime|null
     */
    private $periodeEcriture;

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
     * Get the code journal.
     *
     * @return string|null Returns the code journal.
     */
    public function getCodeJournal(): ?string {
        return $this->codeJournal;
    }

    /**
     * Get the code libelle auto.
     *
     * @return string|null Returns the code libelle auto.
     */
    public function getCodeLibelleAuto(): ?string {
        return $this->codeLibelleAuto;
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
     * Get the jour ecriture.
     *
     * @return string|null Returns the jour ecriture.
     */
    public function getJourEcriture(): ?string {
        return $this->jourEcriture;
    }

    /**
     * Get the liaison ecriture.
     *
     * @return bool|null Returns the liaison ecriture.
     */
    public function getLiaisonEcriture(): ?bool {
        return $this->liaisonEcriture;
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
     * Get the montant tenu credit.
     *
     * @return float|null Returns the montant tenu credit.
     */
    public function getMontantTenuCredit(): ?float {
        return $this->montantTenuCredit;
    }

    /**
     * Get the montant tenu debit.
     *
     * @return float|null Returns the montant tenu debit.
     */
    public function getMontantTenuDebit(): ?float {
        return $this->montantTenuDebit;
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
     * Get the no lot trace.
     *
     * @return string|null Returns the no lot trace.
     */
    public function getNoLotTrace(): ?string {
        return $this->noLotTrace;
    }

    /**
     * Get the num ecr eco.
     *
     * @return int|null Returns the num ecr eco.
     */
    public function getNumEcrEco(): ?int {
        return $this->numEcrEco;
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
     * Get the periode ecriture.
     *
     * @return DateTime|null Returns the periode ecriture.
     */
    public function getPeriodeEcriture(): ?DateTime {
        return $this->periodeEcriture;
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
     * Set the centre.
     *
     * @param string|null $centre The centre.
     * @return EcrituresEco Returns this Ecritures eco.
     */
    public function setCentre(?string $centre): EcrituresEco {
        $this->centre = $centre;
        return $this;
    }

    /**
     * Set the code journal.
     *
     * @param string|null $codeJournal The code journal.
     * @return EcrituresEco Returns this Ecritures eco.
     */
    public function setCodeJournal(?string $codeJournal): EcrituresEco {
        $this->codeJournal = $codeJournal;
        return $this;
    }

    /**
     * Set the code libelle auto.
     *
     * @param string|null $codeLibelleAuto The code libelle auto.
     * @return EcrituresEco Returns this Ecritures eco.
     */
    public function setCodeLibelleAuto(?string $codeLibelleAuto): EcrituresEco {
        $this->codeLibelleAuto = $codeLibelleAuto;
        return $this;
    }

    /**
     * Set the folio.
     *
     * @param int|null $folio The folio.
     * @return EcrituresEco Returns this Ecritures eco.
     */
    public function setFolio(?int $folio): EcrituresEco {
        $this->folio = $folio;
        return $this;
    }

    /**
     * Set the jour ecriture.
     *
     * @param string|null $jourEcriture The jour ecriture.
     * @return EcrituresEco Returns this Ecritures eco.
     */
    public function setJourEcriture(?string $jourEcriture): EcrituresEco {
        $this->jourEcriture = $jourEcriture;
        return $this;
    }

    /**
     * Set the liaison ecriture.
     *
     * @param bool|null $liaisonEcriture The liaison ecriture.
     * @return EcrituresEco Returns this Ecritures eco.
     */
    public function setLiaisonEcriture(?bool $liaisonEcriture): EcrituresEco {
        $this->liaisonEcriture = $liaisonEcriture;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return EcrituresEco Returns this Ecritures eco.
     */
    public function setLibelle(?string $libelle): EcrituresEco {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the montant tenu credit.
     *
     * @param float|null $montantTenuCredit The montant tenu credit.
     * @return EcrituresEco Returns this Ecritures eco.
     */
    public function setMontantTenuCredit(?float $montantTenuCredit): EcrituresEco {
        $this->montantTenuCredit = $montantTenuCredit;
        return $this;
    }

    /**
     * Set the montant tenu debit.
     *
     * @param float|null $montantTenuDebit The montant tenu debit.
     * @return EcrituresEco Returns this Ecritures eco.
     */
    public function setMontantTenuDebit(?float $montantTenuDebit): EcrituresEco {
        $this->montantTenuDebit = $montantTenuDebit;
        return $this;
    }

    /**
     * Set the nature.
     *
     * @param string|null $nature The nature.
     * @return EcrituresEco Returns this Ecritures eco.
     */
    public function setNature(?string $nature): EcrituresEco {
        $this->nature = $nature;
        return $this;
    }

    /**
     * Set the no lot trace.
     *
     * @param string|null $noLotTrace The no lot trace.
     * @return EcrituresEco Returns this Ecritures eco.
     */
    public function setNoLotTrace(?string $noLotTrace): EcrituresEco {
        $this->noLotTrace = $noLotTrace;
        return $this;
    }

    /**
     * Set the num ecr eco.
     *
     * @param int|null $numEcrEco The num ecr eco.
     * @return EcrituresEco Returns this Ecritures eco.
     */
    public function setNumEcrEco(?int $numEcrEco): EcrituresEco {
        $this->numEcrEco = $numEcrEco;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string|null $numeroCompte The numero compte.
     * @return EcrituresEco Returns this Ecritures eco.
     */
    public function setNumeroCompte(?string $numeroCompte): EcrituresEco {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the periode ecriture.
     *
     * @param DateTime|null $periodeEcriture The periode ecriture.
     * @return EcrituresEco Returns this Ecritures eco.
     */
    public function setPeriodeEcriture(?DateTime $periodeEcriture): EcrituresEco {
        $this->periodeEcriture = $periodeEcriture;
        return $this;
    }

    /**
     * Set the quantite.
     *
     * @param float|null $quantite The quantite.
     * @return EcrituresEco Returns this Ecritures eco.
     */
    public function setQuantite(?float $quantite): EcrituresEco {
        $this->quantite = $quantite;
        return $this;
    }

    /**
     * Set the quantite2.
     *
     * @param float|null $quantite2 The quantite2.
     * @return EcrituresEco Returns this Ecritures eco.
     */
    public function setQuantite2(?float $quantite2): EcrituresEco {
        $this->quantite2 = $quantite2;
        return $this;
    }
}
