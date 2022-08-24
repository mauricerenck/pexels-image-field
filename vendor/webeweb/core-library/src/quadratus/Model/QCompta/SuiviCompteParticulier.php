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
 * Suivi compte particulier.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class SuiviCompteParticulier {

    /**
     * Code journal.
     *
     * @var string|null
     */
    private $codeJournal;

    /**
     * Code lettrage.
     *
     * @var string|null
     */
    private $codeLettrage;

    /**
     * Code libelle auto.
     *
     * @var string|null
     */
    private $codeLibelleAuto;

    /**
     * Code operateur.
     *
     * @var string|null
     */
    private $codeOperateur;

    /**
     * Date operation.
     *
     * @var DateTime|null
     */
    private $dateOperation;

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
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Ligne folio.
     *
     * @var int|null
     */
    private $ligneFolio;

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
     * Num uniq.
     *
     * @var int|null
     */
    private $numUniq;

    /**
     * Numero compte.
     *
     * @var string|null
     */
    private $numeroCompte;

    /**
     * Numero piece.
     *
     * @var string|null
     */
    private $numeroPiece;

    /**
     * Periode ecriture.
     *
     * @var DateTime|null
     */
    private $periodeEcriture;

    /**
     * Type ligne.
     *
     * @var string|null
     */
    private $typeLigne;

    /**
     * Type operation.
     *
     * @var string|null
     */
    private $typeOperation;

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
     * Get the code lettrage.
     *
     * @return string|null Returns the code lettrage.
     */
    public function getCodeLettrage(): ?string {
        return $this->codeLettrage;
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
     * Get the code operateur.
     *
     * @return string|null Returns the code operateur.
     */
    public function getCodeOperateur(): ?string {
        return $this->codeOperateur;
    }

    /**
     * Get the date operation.
     *
     * @return DateTime|null Returns the date operation.
     */
    public function getDateOperation(): ?DateTime {
        return $this->dateOperation;
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
     * Get the libelle.
     *
     * @return string|null Returns the libelle.
     */
    public function getLibelle(): ?string {
        return $this->libelle;
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
     * Get the num uniq.
     *
     * @return int|null Returns the num uniq.
     */
    public function getNumUniq(): ?int {
        return $this->numUniq;
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
     * Get the numero piece.
     *
     * @return string|null Returns the numero piece.
     */
    public function getNumeroPiece(): ?string {
        return $this->numeroPiece;
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
     * Get the type ligne.
     *
     * @return string|null Returns the type ligne.
     */
    public function getTypeLigne(): ?string {
        return $this->typeLigne;
    }

    /**
     * Get the type operation.
     *
     * @return string|null Returns the type operation.
     */
    public function getTypeOperation(): ?string {
        return $this->typeOperation;
    }

    /**
     * Set the code journal.
     *
     * @param string|null $codeJournal The code journal.
     * @return SuiviCompteParticulier Returns this Suivi compte particulier.
     */
    public function setCodeJournal(?string $codeJournal): SuiviCompteParticulier {
        $this->codeJournal = $codeJournal;
        return $this;
    }

    /**
     * Set the code lettrage.
     *
     * @param string|null $codeLettrage The code lettrage.
     * @return SuiviCompteParticulier Returns this Suivi compte particulier.
     */
    public function setCodeLettrage(?string $codeLettrage): SuiviCompteParticulier {
        $this->codeLettrage = $codeLettrage;
        return $this;
    }

    /**
     * Set the code libelle auto.
     *
     * @param string|null $codeLibelleAuto The code libelle auto.
     * @return SuiviCompteParticulier Returns this Suivi compte particulier.
     */
    public function setCodeLibelleAuto(?string $codeLibelleAuto): SuiviCompteParticulier {
        $this->codeLibelleAuto = $codeLibelleAuto;
        return $this;
    }

    /**
     * Set the code operateur.
     *
     * @param string|null $codeOperateur The code operateur.
     * @return SuiviCompteParticulier Returns this Suivi compte particulier.
     */
    public function setCodeOperateur(?string $codeOperateur): SuiviCompteParticulier {
        $this->codeOperateur = $codeOperateur;
        return $this;
    }

    /**
     * Set the date operation.
     *
     * @param DateTime|null $dateOperation The date operation.
     * @return SuiviCompteParticulier Returns this Suivi compte particulier.
     */
    public function setDateOperation(?DateTime $dateOperation): SuiviCompteParticulier {
        $this->dateOperation = $dateOperation;
        return $this;
    }

    /**
     * Set the folio.
     *
     * @param int|null $folio The folio.
     * @return SuiviCompteParticulier Returns this Suivi compte particulier.
     */
    public function setFolio(?int $folio): SuiviCompteParticulier {
        $this->folio = $folio;
        return $this;
    }

    /**
     * Set the jour ecriture.
     *
     * @param string|null $jourEcriture The jour ecriture.
     * @return SuiviCompteParticulier Returns this Suivi compte particulier.
     */
    public function setJourEcriture(?string $jourEcriture): SuiviCompteParticulier {
        $this->jourEcriture = $jourEcriture;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return SuiviCompteParticulier Returns this Suivi compte particulier.
     */
    public function setLibelle(?string $libelle): SuiviCompteParticulier {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the ligne folio.
     *
     * @param int|null $ligneFolio The ligne folio.
     * @return SuiviCompteParticulier Returns this Suivi compte particulier.
     */
    public function setLigneFolio(?int $ligneFolio): SuiviCompteParticulier {
        $this->ligneFolio = $ligneFolio;
        return $this;
    }

    /**
     * Set the montant tenu credit.
     *
     * @param float|null $montantTenuCredit The montant tenu credit.
     * @return SuiviCompteParticulier Returns this Suivi compte particulier.
     */
    public function setMontantTenuCredit(?float $montantTenuCredit): SuiviCompteParticulier {
        $this->montantTenuCredit = $montantTenuCredit;
        return $this;
    }

    /**
     * Set the montant tenu debit.
     *
     * @param float|null $montantTenuDebit The montant tenu debit.
     * @return SuiviCompteParticulier Returns this Suivi compte particulier.
     */
    public function setMontantTenuDebit(?float $montantTenuDebit): SuiviCompteParticulier {
        $this->montantTenuDebit = $montantTenuDebit;
        return $this;
    }

    /**
     * Set the num uniq.
     *
     * @param int|null $numUniq The num uniq.
     * @return SuiviCompteParticulier Returns this Suivi compte particulier.
     */
    public function setNumUniq(?int $numUniq): SuiviCompteParticulier {
        $this->numUniq = $numUniq;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string|null $numeroCompte The numero compte.
     * @return SuiviCompteParticulier Returns this Suivi compte particulier.
     */
    public function setNumeroCompte(?string $numeroCompte): SuiviCompteParticulier {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the numero piece.
     *
     * @param string|null $numeroPiece The numero piece.
     * @return SuiviCompteParticulier Returns this Suivi compte particulier.
     */
    public function setNumeroPiece(?string $numeroPiece): SuiviCompteParticulier {
        $this->numeroPiece = $numeroPiece;
        return $this;
    }

    /**
     * Set the periode ecriture.
     *
     * @param DateTime|null $periodeEcriture The periode ecriture.
     * @return SuiviCompteParticulier Returns this Suivi compte particulier.
     */
    public function setPeriodeEcriture(?DateTime $periodeEcriture): SuiviCompteParticulier {
        $this->periodeEcriture = $periodeEcriture;
        return $this;
    }

    /**
     * Set the type ligne.
     *
     * @param string|null $typeLigne The type ligne.
     * @return SuiviCompteParticulier Returns this Suivi compte particulier.
     */
    public function setTypeLigne(?string $typeLigne): SuiviCompteParticulier {
        $this->typeLigne = $typeLigne;
        return $this;
    }

    /**
     * Set the type operation.
     *
     * @param string|null $typeOperation The type operation.
     * @return SuiviCompteParticulier Returns this Suivi compte particulier.
     */
    public function setTypeOperation(?string $typeOperation): SuiviCompteParticulier {
        $this->typeOperation = $typeOperation;
        return $this;
    }
}
