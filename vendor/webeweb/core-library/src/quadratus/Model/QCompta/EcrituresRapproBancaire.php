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
 * Ecritures rappro bancaire.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class EcrituresRapproBancaire {

    /**
     * Code devise.
     *
     * @var string|null
     */
    private $codeDevise;

    /**
     * Date rappro bancaire.
     *
     * @var DateTime|null
     */
    private $dateRapproBancaire;

    /**
     * Jour ecriture.
     *
     * @var string|null
     */
    private $jourEcriture;

    /**
     * Jrn rappro bancaire.
     *
     * @var string|null
     */
    private $jrnRapproBancaire;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Montant saisi credit.
     *
     * @var float|null
     */
    private $montantSaisiCredit;

    /**
     * Montant saisi debit.
     *
     * @var float|null
     */
    private $montantSaisiDebit;

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
     * Rappro bancaire ok.
     *
     * @var bool|null
     */
    private $rapproBancaireOk;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the date rappro bancaire.
     *
     * @return DateTime|null Returns the date rappro bancaire.
     */
    public function getDateRapproBancaire(): ?DateTime {
        return $this->dateRapproBancaire;
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
     * Get the jrn rappro bancaire.
     *
     * @return string|null Returns the jrn rappro bancaire.
     */
    public function getJrnRapproBancaire(): ?string {
        return $this->jrnRapproBancaire;
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
     * Get the montant saisi credit.
     *
     * @return float|null Returns the montant saisi credit.
     */
    public function getMontantSaisiCredit(): ?float {
        return $this->montantSaisiCredit;
    }

    /**
     * Get the montant saisi debit.
     *
     * @return float|null Returns the montant saisi debit.
     */
    public function getMontantSaisiDebit(): ?float {
        return $this->montantSaisiDebit;
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
     * Get the rappro bancaire ok.
     *
     * @return bool|null Returns the rappro bancaire ok.
     */
    public function getRapproBancaireOk(): ?bool {
        return $this->rapproBancaireOk;
    }

    /**
     * Set the code devise.
     *
     * @param string|null $codeDevise The code devise.
     * @return EcrituresRapproBancaire Returns this Ecritures rappro bancaire.
     */
    public function setCodeDevise(?string $codeDevise): EcrituresRapproBancaire {
        $this->codeDevise = $codeDevise;
        return $this;
    }

    /**
     * Set the date rappro bancaire.
     *
     * @param DateTime|null $dateRapproBancaire The date rappro bancaire.
     * @return EcrituresRapproBancaire Returns this Ecritures rappro bancaire.
     */
    public function setDateRapproBancaire(?DateTime $dateRapproBancaire): EcrituresRapproBancaire {
        $this->dateRapproBancaire = $dateRapproBancaire;
        return $this;
    }

    /**
     * Set the jour ecriture.
     *
     * @param string|null $jourEcriture The jour ecriture.
     * @return EcrituresRapproBancaire Returns this Ecritures rappro bancaire.
     */
    public function setJourEcriture(?string $jourEcriture): EcrituresRapproBancaire {
        $this->jourEcriture = $jourEcriture;
        return $this;
    }

    /**
     * Set the jrn rappro bancaire.
     *
     * @param string|null $jrnRapproBancaire The jrn rappro bancaire.
     * @return EcrituresRapproBancaire Returns this Ecritures rappro bancaire.
     */
    public function setJrnRapproBancaire(?string $jrnRapproBancaire): EcrituresRapproBancaire {
        $this->jrnRapproBancaire = $jrnRapproBancaire;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return EcrituresRapproBancaire Returns this Ecritures rappro bancaire.
     */
    public function setLibelle(?string $libelle): EcrituresRapproBancaire {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the montant saisi credit.
     *
     * @param float|null $montantSaisiCredit The montant saisi credit.
     * @return EcrituresRapproBancaire Returns this Ecritures rappro bancaire.
     */
    public function setMontantSaisiCredit(?float $montantSaisiCredit): EcrituresRapproBancaire {
        $this->montantSaisiCredit = $montantSaisiCredit;
        return $this;
    }

    /**
     * Set the montant saisi debit.
     *
     * @param float|null $montantSaisiDebit The montant saisi debit.
     * @return EcrituresRapproBancaire Returns this Ecritures rappro bancaire.
     */
    public function setMontantSaisiDebit(?float $montantSaisiDebit): EcrituresRapproBancaire {
        $this->montantSaisiDebit = $montantSaisiDebit;
        return $this;
    }

    /**
     * Set the montant tenu credit.
     *
     * @param float|null $montantTenuCredit The montant tenu credit.
     * @return EcrituresRapproBancaire Returns this Ecritures rappro bancaire.
     */
    public function setMontantTenuCredit(?float $montantTenuCredit): EcrituresRapproBancaire {
        $this->montantTenuCredit = $montantTenuCredit;
        return $this;
    }

    /**
     * Set the montant tenu debit.
     *
     * @param float|null $montantTenuDebit The montant tenu debit.
     * @return EcrituresRapproBancaire Returns this Ecritures rappro bancaire.
     */
    public function setMontantTenuDebit(?float $montantTenuDebit): EcrituresRapproBancaire {
        $this->montantTenuDebit = $montantTenuDebit;
        return $this;
    }

    /**
     * Set the num uniq.
     *
     * @param int|null $numUniq The num uniq.
     * @return EcrituresRapproBancaire Returns this Ecritures rappro bancaire.
     */
    public function setNumUniq(?int $numUniq): EcrituresRapproBancaire {
        $this->numUniq = $numUniq;
        return $this;
    }

    /**
     * Set the numero piece.
     *
     * @param string|null $numeroPiece The numero piece.
     * @return EcrituresRapproBancaire Returns this Ecritures rappro bancaire.
     */
    public function setNumeroPiece(?string $numeroPiece): EcrituresRapproBancaire {
        $this->numeroPiece = $numeroPiece;
        return $this;
    }

    /**
     * Set the periode ecriture.
     *
     * @param DateTime|null $periodeEcriture The periode ecriture.
     * @return EcrituresRapproBancaire Returns this Ecritures rappro bancaire.
     */
    public function setPeriodeEcriture(?DateTime $periodeEcriture): EcrituresRapproBancaire {
        $this->periodeEcriture = $periodeEcriture;
        return $this;
    }

    /**
     * Set the rappro bancaire ok.
     *
     * @param bool|null $rapproBancaireOk The rappro bancaire ok.
     * @return EcrituresRapproBancaire Returns this Ecritures rappro bancaire.
     */
    public function setRapproBancaireOk(?bool $rapproBancaireOk): EcrituresRapproBancaire {
        $this->rapproBancaireOk = $rapproBancaireOk;
        return $this;
    }
}
