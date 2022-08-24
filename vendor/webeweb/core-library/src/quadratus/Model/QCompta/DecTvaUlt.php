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
 * Dec tva ult.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class DecTvaUlt {

    /**
     * Code journal.
     *
     * @var string|null
     */
    private $codeJournal;

    /**
     * Code tva.
     *
     * @var int|null
     */
    private $codeTva;

    /**
     * Compteur.
     *
     * @var int|null
     */
    private $compteur;

    /**
     * Folio.
     *
     * @var int|null
     */
    private $folio;

    /**
     * Libelle ecr.
     *
     * @var string|null
     */
    private $libelleEcr;

    /**
     * Ligne folio.
     *
     * @var int|null
     */
    private $ligneFolio;

    /**
     * Montant ht.
     *
     * @var float|null
     */
    private $montantHt;

    /**
     * Montant tva.
     *
     * @var float|null
     */
    private $montantTva;

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
     * Per dec.
     *
     * @var DateTime|null
     */
    private $perDec;

    /**
     * Per dec ult.
     *
     * @var DateTime|null
     */
    private $perDecUlt;

    /**
     * Periode ecriture.
     *
     * @var DateTime|null
     */
    private $periodeEcriture;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the code tva.
     *
     * @return int|null Returns the code tva.
     */
    public function getCodeTva(): ?int {
        return $this->codeTva;
    }

    /**
     * Get the compteur.
     *
     * @return int|null Returns the compteur.
     */
    public function getCompteur(): ?int {
        return $this->compteur;
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
     * Get the libelle ecr.
     *
     * @return string|null Returns the libelle ecr.
     */
    public function getLibelleEcr(): ?string {
        return $this->libelleEcr;
    }

    /**
     * Get the ligne folio.
     *
     * @return int|null Returns the ligne folio.
     */
    public function getLigneFolio(): ?int {
        return $this->ligneFolio;
    }

    /**
     * Get the montant ht.
     *
     * @return float|null Returns the montant ht.
     */
    public function getMontantHt(): ?float {
        return $this->montantHt;
    }

    /**
     * Get the montant tva.
     *
     * @return float|null Returns the montant tva.
     */
    public function getMontantTva(): ?float {
        return $this->montantTva;
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
     * Get the per dec.
     *
     * @return DateTime|null Returns the per dec.
     */
    public function getPerDec(): ?DateTime {
        return $this->perDec;
    }

    /**
     * Get the per dec ult.
     *
     * @return DateTime|null Returns the per dec ult.
     */
    public function getPerDecUlt(): ?DateTime {
        return $this->perDecUlt;
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
     * Set the code journal.
     *
     * @param string|null $codeJournal The code journal.
     * @return DecTvaUlt Returns this Dec tva ult.
     */
    public function setCodeJournal(?string $codeJournal): DecTvaUlt {
        $this->codeJournal = $codeJournal;
        return $this;
    }

    /**
     * Set the code tva.
     *
     * @param int|null $codeTva The code tva.
     * @return DecTvaUlt Returns this Dec tva ult.
     */
    public function setCodeTva(?int $codeTva): DecTvaUlt {
        $this->codeTva = $codeTva;
        return $this;
    }

    /**
     * Set the compteur.
     *
     * @param int|null $compteur The compteur.
     * @return DecTvaUlt Returns this Dec tva ult.
     */
    public function setCompteur(?int $compteur): DecTvaUlt {
        $this->compteur = $compteur;
        return $this;
    }

    /**
     * Set the folio.
     *
     * @param int|null $folio The folio.
     * @return DecTvaUlt Returns this Dec tva ult.
     */
    public function setFolio(?int $folio): DecTvaUlt {
        $this->folio = $folio;
        return $this;
    }

    /**
     * Set the libelle ecr.
     *
     * @param string|null $libelleEcr The libelle ecr.
     * @return DecTvaUlt Returns this Dec tva ult.
     */
    public function setLibelleEcr(?string $libelleEcr): DecTvaUlt {
        $this->libelleEcr = $libelleEcr;
        return $this;
    }

    /**
     * Set the ligne folio.
     *
     * @param int|null $ligneFolio The ligne folio.
     * @return DecTvaUlt Returns this Dec tva ult.
     */
    public function setLigneFolio(?int $ligneFolio): DecTvaUlt {
        $this->ligneFolio = $ligneFolio;
        return $this;
    }

    /**
     * Set the montant ht.
     *
     * @param float|null $montantHt The montant ht.
     * @return DecTvaUlt Returns this Dec tva ult.
     */
    public function setMontantHt(?float $montantHt): DecTvaUlt {
        $this->montantHt = $montantHt;
        return $this;
    }

    /**
     * Set the montant tva.
     *
     * @param float|null $montantTva The montant tva.
     * @return DecTvaUlt Returns this Dec tva ult.
     */
    public function setMontantTva(?float $montantTva): DecTvaUlt {
        $this->montantTva = $montantTva;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int|null $numLigne The num ligne.
     * @return DecTvaUlt Returns this Dec tva ult.
     */
    public function setNumLigne(?int $numLigne): DecTvaUlt {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the num uniq ecr.
     *
     * @param int|null $numUniqEcr The num uniq ecr.
     * @return DecTvaUlt Returns this Dec tva ult.
     */
    public function setNumUniqEcr(?int $numUniqEcr): DecTvaUlt {
        $this->numUniqEcr = $numUniqEcr;
        return $this;
    }

    /**
     * Set the per dec.
     *
     * @param DateTime|null $perDec The per dec.
     * @return DecTvaUlt Returns this Dec tva ult.
     */
    public function setPerDec(?DateTime $perDec): DecTvaUlt {
        $this->perDec = $perDec;
        return $this;
    }

    /**
     * Set the per dec ult.
     *
     * @param DateTime|null $perDecUlt The per dec ult.
     * @return DecTvaUlt Returns this Dec tva ult.
     */
    public function setPerDecUlt(?DateTime $perDecUlt): DecTvaUlt {
        $this->perDecUlt = $perDecUlt;
        return $this;
    }

    /**
     * Set the periode ecriture.
     *
     * @param DateTime|null $periodeEcriture The periode ecriture.
     * @return DecTvaUlt Returns this Dec tva ult.
     */
    public function setPeriodeEcriture(?DateTime $periodeEcriture): DecTvaUlt {
        $this->periodeEcriture = $periodeEcriture;
        return $this;
    }
}
