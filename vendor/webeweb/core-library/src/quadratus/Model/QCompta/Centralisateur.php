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
 * Centralisateur.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class Centralisateur {

    /**
     * Code journal.
     *
     * @var string|null
     */
    private $codeJournal;

    /**
     * Credit classe15.
     *
     * @var float|null
     */
    private $creditClasse15;

    /**
     * Credit classe67.
     *
     * @var float|null
     */
    private $creditClasse67;

    /**
     * Credit client.
     *
     * @var float|null
     */
    private $creditClient;

    /**
     * Credit fournisseur.
     *
     * @var float|null
     */
    private $creditFournisseur;

    /**
     * Debit classe15.
     *
     * @var float|null
     */
    private $debitClasse15;

    /**
     * Debit classe67.
     *
     * @var float|null
     */
    private $debitClasse67;

    /**
     * Debit client.
     *
     * @var float|null
     */
    private $debitClient;

    /**
     * Debit fournisseur.
     *
     * @var float|null
     */
    private $debitFournisseur;

    /**
     * Folio.
     *
     * @var int|null
     */
    private $folio;

    /**
     * Nb ligne folio.
     *
     * @var int|null
     */
    private $nbLigneFolio;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Prochaine ligne.
     *
     * @var int|null
     */
    private $prochaineLigne;

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
     * Get the credit classe15.
     *
     * @return float|null Returns the credit classe15.
     */
    public function getCreditClasse15(): ?float {
        return $this->creditClasse15;
    }

    /**
     * Get the credit classe67.
     *
     * @return float|null Returns the credit classe67.
     */
    public function getCreditClasse67(): ?float {
        return $this->creditClasse67;
    }

    /**
     * Get the credit client.
     *
     * @return float|null Returns the credit client.
     */
    public function getCreditClient(): ?float {
        return $this->creditClient;
    }

    /**
     * Get the credit fournisseur.
     *
     * @return float|null Returns the credit fournisseur.
     */
    public function getCreditFournisseur(): ?float {
        return $this->creditFournisseur;
    }

    /**
     * Get the debit classe15.
     *
     * @return float|null Returns the debit classe15.
     */
    public function getDebitClasse15(): ?float {
        return $this->debitClasse15;
    }

    /**
     * Get the debit classe67.
     *
     * @return float|null Returns the debit classe67.
     */
    public function getDebitClasse67(): ?float {
        return $this->debitClasse67;
    }

    /**
     * Get the debit client.
     *
     * @return float|null Returns the debit client.
     */
    public function getDebitClient(): ?float {
        return $this->debitClient;
    }

    /**
     * Get the debit fournisseur.
     *
     * @return float|null Returns the debit fournisseur.
     */
    public function getDebitFournisseur(): ?float {
        return $this->debitFournisseur;
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
     * Get the nb ligne folio.
     *
     * @return int|null Returns the nb ligne folio.
     */
    public function getNbLigneFolio(): ?int {
        return $this->nbLigneFolio;
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
     * Get the prochaine ligne.
     *
     * @return int|null Returns the prochaine ligne.
     */
    public function getProchaineLigne(): ?int {
        return $this->prochaineLigne;
    }

    /**
     * Set the code journal.
     *
     * @param string|null $codeJournal The code journal.
     * @return Centralisateur Returns this Centralisateur.
     */
    public function setCodeJournal(?string $codeJournal): Centralisateur {
        $this->codeJournal = $codeJournal;
        return $this;
    }

    /**
     * Set the credit classe15.
     *
     * @param float|null $creditClasse15 The credit classe15.
     * @return Centralisateur Returns this Centralisateur.
     */
    public function setCreditClasse15(?float $creditClasse15): Centralisateur {
        $this->creditClasse15 = $creditClasse15;
        return $this;
    }

    /**
     * Set the credit classe67.
     *
     * @param float|null $creditClasse67 The credit classe67.
     * @return Centralisateur Returns this Centralisateur.
     */
    public function setCreditClasse67(?float $creditClasse67): Centralisateur {
        $this->creditClasse67 = $creditClasse67;
        return $this;
    }

    /**
     * Set the credit client.
     *
     * @param float|null $creditClient The credit client.
     * @return Centralisateur Returns this Centralisateur.
     */
    public function setCreditClient(?float $creditClient): Centralisateur {
        $this->creditClient = $creditClient;
        return $this;
    }

    /**
     * Set the credit fournisseur.
     *
     * @param float|null $creditFournisseur The credit fournisseur.
     * @return Centralisateur Returns this Centralisateur.
     */
    public function setCreditFournisseur(?float $creditFournisseur): Centralisateur {
        $this->creditFournisseur = $creditFournisseur;
        return $this;
    }

    /**
     * Set the debit classe15.
     *
     * @param float|null $debitClasse15 The debit classe15.
     * @return Centralisateur Returns this Centralisateur.
     */
    public function setDebitClasse15(?float $debitClasse15): Centralisateur {
        $this->debitClasse15 = $debitClasse15;
        return $this;
    }

    /**
     * Set the debit classe67.
     *
     * @param float|null $debitClasse67 The debit classe67.
     * @return Centralisateur Returns this Centralisateur.
     */
    public function setDebitClasse67(?float $debitClasse67): Centralisateur {
        $this->debitClasse67 = $debitClasse67;
        return $this;
    }

    /**
     * Set the debit client.
     *
     * @param float|null $debitClient The debit client.
     * @return Centralisateur Returns this Centralisateur.
     */
    public function setDebitClient(?float $debitClient): Centralisateur {
        $this->debitClient = $debitClient;
        return $this;
    }

    /**
     * Set the debit fournisseur.
     *
     * @param float|null $debitFournisseur The debit fournisseur.
     * @return Centralisateur Returns this Centralisateur.
     */
    public function setDebitFournisseur(?float $debitFournisseur): Centralisateur {
        $this->debitFournisseur = $debitFournisseur;
        return $this;
    }

    /**
     * Set the folio.
     *
     * @param int|null $folio The folio.
     * @return Centralisateur Returns this Centralisateur.
     */
    public function setFolio(?int $folio): Centralisateur {
        $this->folio = $folio;
        return $this;
    }

    /**
     * Set the nb ligne folio.
     *
     * @param int|null $nbLigneFolio The nb ligne folio.
     * @return Centralisateur Returns this Centralisateur.
     */
    public function setNbLigneFolio(?int $nbLigneFolio): Centralisateur {
        $this->nbLigneFolio = $nbLigneFolio;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return Centralisateur Returns this Centralisateur.
     */
    public function setPeriode(?DateTime $periode): Centralisateur {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the prochaine ligne.
     *
     * @param int|null $prochaineLigne The prochaine ligne.
     * @return Centralisateur Returns this Centralisateur.
     */
    public function setProchaineLigne(?int $prochaineLigne): Centralisateur {
        $this->prochaineLigne = $prochaineLigne;
        return $this;
    }
}
