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
 * Trames lignes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class TramesLignes {

    /**
     * Code.
     *
     * @var int|null
     */
    private $code;

    /**
     * Code affaire.
     *
     * @var string|null
     */
    private $codeAffaire;

    /**
     * Code lib auto.
     *
     * @var string|null
     */
    private $codeLibAuto;

    /**
     * Compte.
     *
     * @var string|null
     */
    private $compte;

    /**
     * Compte contrepartie.
     *
     * @var string|null
     */
    private $compteContrepartie;

    /**
     * Credit.
     *
     * @var float|null
     */
    private $credit;

    /**
     * Date echeance.
     *
     * @var DateTime|null
     */
    private $dateEcheance;

    /**
     * Debit.
     *
     * @var float|null
     */
    private $debit;

    /**
     * Is debit.
     *
     * @var bool|null
     */
    private $isDebit;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Num ligne.
     *
     * @var int|null
     */
    private $numLigne;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code.
     *
     * @return int|null Returns the code.
     */
    public function getCode(): ?int {
        return $this->code;
    }

    /**
     * Get the code affaire.
     *
     * @return string|null Returns the code affaire.
     */
    public function getCodeAffaire(): ?string {
        return $this->codeAffaire;
    }

    /**
     * Get the code lib auto.
     *
     * @return string|null Returns the code lib auto.
     */
    public function getCodeLibAuto(): ?string {
        return $this->codeLibAuto;
    }

    /**
     * Get the compte.
     *
     * @return string|null Returns the compte.
     */
    public function getCompte(): ?string {
        return $this->compte;
    }

    /**
     * Get the compte contrepartie.
     *
     * @return string|null Returns the compte contrepartie.
     */
    public function getCompteContrepartie(): ?string {
        return $this->compteContrepartie;
    }

    /**
     * Get the credit.
     *
     * @return float|null Returns the credit.
     */
    public function getCredit(): ?float {
        return $this->credit;
    }

    /**
     * Get the date echeance.
     *
     * @return DateTime|null Returns the date echeance.
     */
    public function getDateEcheance(): ?DateTime {
        return $this->dateEcheance;
    }

    /**
     * Get the debit.
     *
     * @return float|null Returns the debit.
     */
    public function getDebit(): ?float {
        return $this->debit;
    }

    /**
     * Get the is debit.
     *
     * @return bool|null Returns the is debit.
     */
    public function getIsDebit(): ?bool {
        return $this->isDebit;
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
     * Get the num ligne.
     *
     * @return int|null Returns the num ligne.
     */
    public function getNumLigne(): ?int {
        return $this->numLigne;
    }

    /**
     * Set the code.
     *
     * @param int|null $code The code.
     * @return TramesLignes Returns this Trames lignes.
     */
    public function setCode(?int $code): TramesLignes {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return TramesLignes Returns this Trames lignes.
     */
    public function setCodeAffaire(?string $codeAffaire): TramesLignes {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code lib auto.
     *
     * @param string|null $codeLibAuto The code lib auto.
     * @return TramesLignes Returns this Trames lignes.
     */
    public function setCodeLibAuto(?string $codeLibAuto): TramesLignes {
        $this->codeLibAuto = $codeLibAuto;
        return $this;
    }

    /**
     * Set the compte.
     *
     * @param string|null $compte The compte.
     * @return TramesLignes Returns this Trames lignes.
     */
    public function setCompte(?string $compte): TramesLignes {
        $this->compte = $compte;
        return $this;
    }

    /**
     * Set the compte contrepartie.
     *
     * @param string|null $compteContrepartie The compte contrepartie.
     * @return TramesLignes Returns this Trames lignes.
     */
    public function setCompteContrepartie(?string $compteContrepartie): TramesLignes {
        $this->compteContrepartie = $compteContrepartie;
        return $this;
    }

    /**
     * Set the credit.
     *
     * @param float|null $credit The credit.
     * @return TramesLignes Returns this Trames lignes.
     */
    public function setCredit(?float $credit): TramesLignes {
        $this->credit = $credit;
        return $this;
    }

    /**
     * Set the date echeance.
     *
     * @param DateTime|null $dateEcheance The date echeance.
     * @return TramesLignes Returns this Trames lignes.
     */
    public function setDateEcheance(?DateTime $dateEcheance): TramesLignes {
        $this->dateEcheance = $dateEcheance;
        return $this;
    }

    /**
     * Set the debit.
     *
     * @param float|null $debit The debit.
     * @return TramesLignes Returns this Trames lignes.
     */
    public function setDebit(?float $debit): TramesLignes {
        $this->debit = $debit;
        return $this;
    }

    /**
     * Set the is debit.
     *
     * @param bool|null $isDebit The is debit.
     * @return TramesLignes Returns this Trames lignes.
     */
    public function setIsDebit(?bool $isDebit): TramesLignes {
        $this->isDebit = $isDebit;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return TramesLignes Returns this Trames lignes.
     */
    public function setLibelle(?string $libelle): TramesLignes {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int|null $numLigne The num ligne.
     * @return TramesLignes Returns this Trames lignes.
     */
    public function setNumLigne(?int $numLigne): TramesLignes {
        $this->numLigne = $numLigne;
        return $this;
    }
}
