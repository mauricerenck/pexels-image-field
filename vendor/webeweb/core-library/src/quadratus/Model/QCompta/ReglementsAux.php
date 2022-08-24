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
 * Reglements aux.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class ReglementsAux {

    /**
     * Actif.
     *
     * @var bool|null
     */
    private $actif;

    /**
     * Autre dom banque.
     *
     * @var string|null
     */
    private $autreDomBanque;

    /**
     * Autre rib.
     *
     * @var string|null
     */
    private $autreRib;

    /**
     * Code journal banque.
     *
     * @var string|null
     */
    private $codeJournalBanque;

    /**
     * Code mode paiement.
     *
     * @var string|null
     */
    private $codeModePaiement;

    /**
     * Dans1 groupe.
     *
     * @var bool|null
     */
    private $dans1Groupe;

    /**
     * Date echeance.
     *
     * @var DateTime|null
     */
    private $dateEcheance;

    /**
     * Montant groupe.
     *
     * @var float|null
     */
    private $montantGroupe;

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
     * No rib.
     *
     * @var string|null
     */
    private $noRib;

    /**
     * Num groupe.
     *
     * @var int|null
     */
    private $numGroupe;

    /**
     * Num lot lcr.
     *
     * @var int|null
     */
    private $numLotLcr;

    /**
     * Num lot lettre p.
     *
     * @var int|null
     */
    private $numLotLettreP;

    /**
     * Num lot traite.
     *
     * @var int|null
     */
    private $numLotTraite;

    /**
     * Num uniq.
     *
     * @var int|null
     */
    private $numUniq;

    /**
     * Num uniq ecriture.
     *
     * @var int|null
     */
    private $numUniqEcriture;

    /**
     * Numero compte.
     *
     * @var string|null
     */
    private $numeroCompte;

    /**
     * Reference tire.
     *
     * @var string|null
     */
    private $referenceTire;

    /**
     * Type reglement.
     *
     * @var string|null
     */
    private $typeReglement;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the actif.
     *
     * @return bool|null Returns the actif.
     */
    public function getActif(): ?bool {
        return $this->actif;
    }

    /**
     * Get the autre dom banque.
     *
     * @return string|null Returns the autre dom banque.
     */
    public function getAutreDomBanque(): ?string {
        return $this->autreDomBanque;
    }

    /**
     * Get the autre rib.
     *
     * @return string|null Returns the autre rib.
     */
    public function getAutreRib(): ?string {
        return $this->autreRib;
    }

    /**
     * Get the code journal banque.
     *
     * @return string|null Returns the code journal banque.
     */
    public function getCodeJournalBanque(): ?string {
        return $this->codeJournalBanque;
    }

    /**
     * Get the code mode paiement.
     *
     * @return string|null Returns the code mode paiement.
     */
    public function getCodeModePaiement(): ?string {
        return $this->codeModePaiement;
    }

    /**
     * Get the dans1 groupe.
     *
     * @return bool|null Returns the dans1 groupe.
     */
    public function getDans1Groupe(): ?bool {
        return $this->dans1Groupe;
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
     * Get the montant groupe.
     *
     * @return float|null Returns the montant groupe.
     */
    public function getMontantGroupe(): ?float {
        return $this->montantGroupe;
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
     * Get the no rib.
     *
     * @return string|null Returns the no rib.
     */
    public function getNoRib(): ?string {
        return $this->noRib;
    }

    /**
     * Get the num groupe.
     *
     * @return int|null Returns the num groupe.
     */
    public function getNumGroupe(): ?int {
        return $this->numGroupe;
    }

    /**
     * Get the num lot lcr.
     *
     * @return int|null Returns the num lot lcr.
     */
    public function getNumLotLcr(): ?int {
        return $this->numLotLcr;
    }

    /**
     * Get the num lot lettre p.
     *
     * @return int|null Returns the num lot lettre p.
     */
    public function getNumLotLettreP(): ?int {
        return $this->numLotLettreP;
    }

    /**
     * Get the num lot traite.
     *
     * @return int|null Returns the num lot traite.
     */
    public function getNumLotTraite(): ?int {
        return $this->numLotTraite;
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
     * Get the num uniq ecriture.
     *
     * @return int|null Returns the num uniq ecriture.
     */
    public function getNumUniqEcriture(): ?int {
        return $this->numUniqEcriture;
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
     * Get the reference tire.
     *
     * @return string|null Returns the reference tire.
     */
    public function getReferenceTire(): ?string {
        return $this->referenceTire;
    }

    /**
     * Get the type reglement.
     *
     * @return string|null Returns the type reglement.
     */
    public function getTypeReglement(): ?string {
        return $this->typeReglement;
    }

    /**
     * Set the actif.
     *
     * @param bool|null $actif The actif.
     * @return ReglementsAux Returns this Reglements aux.
     */
    public function setActif(?bool $actif): ReglementsAux {
        $this->actif = $actif;
        return $this;
    }

    /**
     * Set the autre dom banque.
     *
     * @param string|null $autreDomBanque The autre dom banque.
     * @return ReglementsAux Returns this Reglements aux.
     */
    public function setAutreDomBanque(?string $autreDomBanque): ReglementsAux {
        $this->autreDomBanque = $autreDomBanque;
        return $this;
    }

    /**
     * Set the autre rib.
     *
     * @param string|null $autreRib The autre rib.
     * @return ReglementsAux Returns this Reglements aux.
     */
    public function setAutreRib(?string $autreRib): ReglementsAux {
        $this->autreRib = $autreRib;
        return $this;
    }

    /**
     * Set the code journal banque.
     *
     * @param string|null $codeJournalBanque The code journal banque.
     * @return ReglementsAux Returns this Reglements aux.
     */
    public function setCodeJournalBanque(?string $codeJournalBanque): ReglementsAux {
        $this->codeJournalBanque = $codeJournalBanque;
        return $this;
    }

    /**
     * Set the code mode paiement.
     *
     * @param string|null $codeModePaiement The code mode paiement.
     * @return ReglementsAux Returns this Reglements aux.
     */
    public function setCodeModePaiement(?string $codeModePaiement): ReglementsAux {
        $this->codeModePaiement = $codeModePaiement;
        return $this;
    }

    /**
     * Set the dans1 groupe.
     *
     * @param bool|null $dans1Groupe The dans1 groupe.
     * @return ReglementsAux Returns this Reglements aux.
     */
    public function setDans1Groupe(?bool $dans1Groupe): ReglementsAux {
        $this->dans1Groupe = $dans1Groupe;
        return $this;
    }

    /**
     * Set the date echeance.
     *
     * @param DateTime|null $dateEcheance The date echeance.
     * @return ReglementsAux Returns this Reglements aux.
     */
    public function setDateEcheance(?DateTime $dateEcheance): ReglementsAux {
        $this->dateEcheance = $dateEcheance;
        return $this;
    }

    /**
     * Set the montant groupe.
     *
     * @param float|null $montantGroupe The montant groupe.
     * @return ReglementsAux Returns this Reglements aux.
     */
    public function setMontantGroupe(?float $montantGroupe): ReglementsAux {
        $this->montantGroupe = $montantGroupe;
        return $this;
    }

    /**
     * Set the montant saisi credit.
     *
     * @param float|null $montantSaisiCredit The montant saisi credit.
     * @return ReglementsAux Returns this Reglements aux.
     */
    public function setMontantSaisiCredit(?float $montantSaisiCredit): ReglementsAux {
        $this->montantSaisiCredit = $montantSaisiCredit;
        return $this;
    }

    /**
     * Set the montant saisi debit.
     *
     * @param float|null $montantSaisiDebit The montant saisi debit.
     * @return ReglementsAux Returns this Reglements aux.
     */
    public function setMontantSaisiDebit(?float $montantSaisiDebit): ReglementsAux {
        $this->montantSaisiDebit = $montantSaisiDebit;
        return $this;
    }

    /**
     * Set the montant tenu credit.
     *
     * @param float|null $montantTenuCredit The montant tenu credit.
     * @return ReglementsAux Returns this Reglements aux.
     */
    public function setMontantTenuCredit(?float $montantTenuCredit): ReglementsAux {
        $this->montantTenuCredit = $montantTenuCredit;
        return $this;
    }

    /**
     * Set the montant tenu debit.
     *
     * @param float|null $montantTenuDebit The montant tenu debit.
     * @return ReglementsAux Returns this Reglements aux.
     */
    public function setMontantTenuDebit(?float $montantTenuDebit): ReglementsAux {
        $this->montantTenuDebit = $montantTenuDebit;
        return $this;
    }

    /**
     * Set the no rib.
     *
     * @param string|null $noRib The no rib.
     * @return ReglementsAux Returns this Reglements aux.
     */
    public function setNoRib(?string $noRib): ReglementsAux {
        $this->noRib = $noRib;
        return $this;
    }

    /**
     * Set the num groupe.
     *
     * @param int|null $numGroupe The num groupe.
     * @return ReglementsAux Returns this Reglements aux.
     */
    public function setNumGroupe(?int $numGroupe): ReglementsAux {
        $this->numGroupe = $numGroupe;
        return $this;
    }

    /**
     * Set the num lot lcr.
     *
     * @param int|null $numLotLcr The num lot lcr.
     * @return ReglementsAux Returns this Reglements aux.
     */
    public function setNumLotLcr(?int $numLotLcr): ReglementsAux {
        $this->numLotLcr = $numLotLcr;
        return $this;
    }

    /**
     * Set the num lot lettre p.
     *
     * @param int|null $numLotLettreP The num lot lettre p.
     * @return ReglementsAux Returns this Reglements aux.
     */
    public function setNumLotLettreP(?int $numLotLettreP): ReglementsAux {
        $this->numLotLettreP = $numLotLettreP;
        return $this;
    }

    /**
     * Set the num lot traite.
     *
     * @param int|null $numLotTraite The num lot traite.
     * @return ReglementsAux Returns this Reglements aux.
     */
    public function setNumLotTraite(?int $numLotTraite): ReglementsAux {
        $this->numLotTraite = $numLotTraite;
        return $this;
    }

    /**
     * Set the num uniq.
     *
     * @param int|null $numUniq The num uniq.
     * @return ReglementsAux Returns this Reglements aux.
     */
    public function setNumUniq(?int $numUniq): ReglementsAux {
        $this->numUniq = $numUniq;
        return $this;
    }

    /**
     * Set the num uniq ecriture.
     *
     * @param int|null $numUniqEcriture The num uniq ecriture.
     * @return ReglementsAux Returns this Reglements aux.
     */
    public function setNumUniqEcriture(?int $numUniqEcriture): ReglementsAux {
        $this->numUniqEcriture = $numUniqEcriture;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string|null $numeroCompte The numero compte.
     * @return ReglementsAux Returns this Reglements aux.
     */
    public function setNumeroCompte(?string $numeroCompte): ReglementsAux {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the reference tire.
     *
     * @param string|null $referenceTire The reference tire.
     * @return ReglementsAux Returns this Reglements aux.
     */
    public function setReferenceTire(?string $referenceTire): ReglementsAux {
        $this->referenceTire = $referenceTire;
        return $this;
    }

    /**
     * Set the type reglement.
     *
     * @param string|null $typeReglement The type reglement.
     * @return ReglementsAux Returns this Reglements aux.
     */
    public function setTypeReglement(?string $typeReglement): ReglementsAux {
        $this->typeReglement = $typeReglement;
        return $this;
    }
}
