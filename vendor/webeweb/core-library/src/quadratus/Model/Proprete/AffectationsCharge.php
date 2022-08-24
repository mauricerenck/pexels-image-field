<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\Proprete;

use DateTime;

/**
 * Affectations charge.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class AffectationsCharge {

    /**
     * Ajout charge.
     *
     * @var bool|null
     */
    private $ajoutCharge;

    /**
     * Aou.
     *
     * @var bool|null
     */
    private $aou;

    /**
     * Avr.
     *
     * @var bool|null
     */
    private $avr;

    /**
     * Charge mensualisee.
     *
     * @var bool|null
     */
    private $chargeMensualisee;

    /**
     * Charge q fact.
     *
     * @var bool|null
     */
    private $chargeQFact;

    /**
     * Charge validee.
     *
     * @var bool|null
     */
    private $chargeValidee;

    /**
     * Chef equipe.
     *
     * @var string|null
     */
    private $chefEquipe;

    /**
     * Code affaire.
     *
     * @var string|null
     */
    private $codeAffaire;

    /**
     * Code chantier.
     *
     * @var string|null
     */
    private $codeChantier;

    /**
     * Code charge.
     *
     * @var string|null
     */
    private $codeCharge;

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Code inspecteur.
     *
     * @var string|null
     */
    private $codeInspecteur;

    /**
     * Code tache.
     *
     * @var string|null
     */
    private $codeTache;

    /**
     * Commentaire.
     *
     * @var string|null
     */
    private $commentaire;

    /**
     * Dec.
     *
     * @var bool|null
     */
    private $dec;

    /**
     * Fev.
     *
     * @var bool|null
     */
    private $fev;

    /**
     * Jan.
     *
     * @var bool|null
     */
    private $jan;

    /**
     * Juil.
     *
     * @var bool|null
     */
    private $juil;

    /**
     * Juin.
     *
     * @var bool|null
     */
    private $juin;

    /**
     * Mai.
     *
     * @var bool|null
     */
    private $mai;

    /**
     * Mar.
     *
     * @var bool|null
     */
    private $mar;

    /**
     * Montant.
     *
     * @var float|null
     */
    private $montant;

    /**
     * Nov.
     *
     * @var bool|null
     */
    private $nov;

    /**
     * Oct.
     *
     * @var bool|null
     */
    private $oct;

    /**
     * Origine charge mens.
     *
     * @var bool|null
     */
    private $origineChargeMens;

    /**
     * Periode deb.
     *
     * @var DateTime|null
     */
    private $periodeDeb;

    /**
     * Periode fin.
     *
     * @var DateTime|null
     */
    private $periodeFin;

    /**
     * Sep.
     *
     * @var bool|null
     */
    private $sep;

    /**
     * Uniq id.
     *
     * @var string|null
     */
    private $uniqId;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the ajout charge.
     *
     * @return bool|null Returns the ajout charge.
     */
    public function getAjoutCharge(): ?bool {
        return $this->ajoutCharge;
    }

    /**
     * Get the aou.
     *
     * @return bool|null Returns the aou.
     */
    public function getAou(): ?bool {
        return $this->aou;
    }

    /**
     * Get the avr.
     *
     * @return bool|null Returns the avr.
     */
    public function getAvr(): ?bool {
        return $this->avr;
    }

    /**
     * Get the charge mensualisee.
     *
     * @return bool|null Returns the charge mensualisee.
     */
    public function getChargeMensualisee(): ?bool {
        return $this->chargeMensualisee;
    }

    /**
     * Get the charge q fact.
     *
     * @return bool|null Returns the charge q fact.
     */
    public function getChargeQFact(): ?bool {
        return $this->chargeQFact;
    }

    /**
     * Get the charge validee.
     *
     * @return bool|null Returns the charge validee.
     */
    public function getChargeValidee(): ?bool {
        return $this->chargeValidee;
    }

    /**
     * Get the chef equipe.
     *
     * @return string|null Returns the chef equipe.
     */
    public function getChefEquipe(): ?string {
        return $this->chefEquipe;
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
     * Get the code chantier.
     *
     * @return string|null Returns the code chantier.
     */
    public function getCodeChantier(): ?string {
        return $this->codeChantier;
    }

    /**
     * Get the code charge.
     *
     * @return string|null Returns the code charge.
     */
    public function getCodeCharge(): ?string {
        return $this->codeCharge;
    }

    /**
     * Get the code client.
     *
     * @return string|null Returns the code client.
     */
    public function getCodeClient(): ?string {
        return $this->codeClient;
    }

    /**
     * Get the code inspecteur.
     *
     * @return string|null Returns the code inspecteur.
     */
    public function getCodeInspecteur(): ?string {
        return $this->codeInspecteur;
    }

    /**
     * Get the code tache.
     *
     * @return string|null Returns the code tache.
     */
    public function getCodeTache(): ?string {
        return $this->codeTache;
    }

    /**
     * Get the commentaire.
     *
     * @return string|null Returns the commentaire.
     */
    public function getCommentaire(): ?string {
        return $this->commentaire;
    }

    /**
     * Get the dec.
     *
     * @return bool|null Returns the dec.
     */
    public function getDec(): ?bool {
        return $this->dec;
    }

    /**
     * Get the fev.
     *
     * @return bool|null Returns the fev.
     */
    public function getFev(): ?bool {
        return $this->fev;
    }

    /**
     * Get the jan.
     *
     * @return bool|null Returns the jan.
     */
    public function getJan(): ?bool {
        return $this->jan;
    }

    /**
     * Get the juil.
     *
     * @return bool|null Returns the juil.
     */
    public function getJuil(): ?bool {
        return $this->juil;
    }

    /**
     * Get the juin.
     *
     * @return bool|null Returns the juin.
     */
    public function getJuin(): ?bool {
        return $this->juin;
    }

    /**
     * Get the mai.
     *
     * @return bool|null Returns the mai.
     */
    public function getMai(): ?bool {
        return $this->mai;
    }

    /**
     * Get the mar.
     *
     * @return bool|null Returns the mar.
     */
    public function getMar(): ?bool {
        return $this->mar;
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
     * Get the nov.
     *
     * @return bool|null Returns the nov.
     */
    public function getNov(): ?bool {
        return $this->nov;
    }

    /**
     * Get the oct.
     *
     * @return bool|null Returns the oct.
     */
    public function getOct(): ?bool {
        return $this->oct;
    }

    /**
     * Get the origine charge mens.
     *
     * @return bool|null Returns the origine charge mens.
     */
    public function getOrigineChargeMens(): ?bool {
        return $this->origineChargeMens;
    }

    /**
     * Get the periode deb.
     *
     * @return DateTime|null Returns the periode deb.
     */
    public function getPeriodeDeb(): ?DateTime {
        return $this->periodeDeb;
    }

    /**
     * Get the periode fin.
     *
     * @return DateTime|null Returns the periode fin.
     */
    public function getPeriodeFin(): ?DateTime {
        return $this->periodeFin;
    }

    /**
     * Get the sep.
     *
     * @return bool|null Returns the sep.
     */
    public function getSep(): ?bool {
        return $this->sep;
    }

    /**
     * Get the uniq id.
     *
     * @return string|null Returns the uniq id.
     */
    public function getUniqId(): ?string {
        return $this->uniqId;
    }

    /**
     * Set the ajout charge.
     *
     * @param bool|null $ajoutCharge The ajout charge.
     * @return AffectationsCharge Returns this Affectations charge.
     */
    public function setAjoutCharge(?bool $ajoutCharge): AffectationsCharge {
        $this->ajoutCharge = $ajoutCharge;
        return $this;
    }

    /**
     * Set the aou.
     *
     * @param bool|null $aou The aou.
     * @return AffectationsCharge Returns this Affectations charge.
     */
    public function setAou(?bool $aou): AffectationsCharge {
        $this->aou = $aou;
        return $this;
    }

    /**
     * Set the avr.
     *
     * @param bool|null $avr The avr.
     * @return AffectationsCharge Returns this Affectations charge.
     */
    public function setAvr(?bool $avr): AffectationsCharge {
        $this->avr = $avr;
        return $this;
    }

    /**
     * Set the charge mensualisee.
     *
     * @param bool|null $chargeMensualisee The charge mensualisee.
     * @return AffectationsCharge Returns this Affectations charge.
     */
    public function setChargeMensualisee(?bool $chargeMensualisee): AffectationsCharge {
        $this->chargeMensualisee = $chargeMensualisee;
        return $this;
    }

    /**
     * Set the charge q fact.
     *
     * @param bool|null $chargeQFact The charge q fact.
     * @return AffectationsCharge Returns this Affectations charge.
     */
    public function setChargeQFact(?bool $chargeQFact): AffectationsCharge {
        $this->chargeQFact = $chargeQFact;
        return $this;
    }

    /**
     * Set the charge validee.
     *
     * @param bool|null $chargeValidee The charge validee.
     * @return AffectationsCharge Returns this Affectations charge.
     */
    public function setChargeValidee(?bool $chargeValidee): AffectationsCharge {
        $this->chargeValidee = $chargeValidee;
        return $this;
    }

    /**
     * Set the chef equipe.
     *
     * @param string|null $chefEquipe The chef equipe.
     * @return AffectationsCharge Returns this Affectations charge.
     */
    public function setChefEquipe(?string $chefEquipe): AffectationsCharge {
        $this->chefEquipe = $chefEquipe;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return AffectationsCharge Returns this Affectations charge.
     */
    public function setCodeAffaire(?string $codeAffaire): AffectationsCharge {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return AffectationsCharge Returns this Affectations charge.
     */
    public function setCodeChantier(?string $codeChantier): AffectationsCharge {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code charge.
     *
     * @param string|null $codeCharge The code charge.
     * @return AffectationsCharge Returns this Affectations charge.
     */
    public function setCodeCharge(?string $codeCharge): AffectationsCharge {
        $this->codeCharge = $codeCharge;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return AffectationsCharge Returns this Affectations charge.
     */
    public function setCodeClient(?string $codeClient): AffectationsCharge {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code inspecteur.
     *
     * @param string|null $codeInspecteur The code inspecteur.
     * @return AffectationsCharge Returns this Affectations charge.
     */
    public function setCodeInspecteur(?string $codeInspecteur): AffectationsCharge {
        $this->codeInspecteur = $codeInspecteur;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string|null $codeTache The code tache.
     * @return AffectationsCharge Returns this Affectations charge.
     */
    public function setCodeTache(?string $codeTache): AffectationsCharge {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the commentaire.
     *
     * @param string|null $commentaire The commentaire.
     * @return AffectationsCharge Returns this Affectations charge.
     */
    public function setCommentaire(?string $commentaire): AffectationsCharge {
        $this->commentaire = $commentaire;
        return $this;
    }

    /**
     * Set the dec.
     *
     * @param bool|null $dec The dec.
     * @return AffectationsCharge Returns this Affectations charge.
     */
    public function setDec(?bool $dec): AffectationsCharge {
        $this->dec = $dec;
        return $this;
    }

    /**
     * Set the fev.
     *
     * @param bool|null $fev The fev.
     * @return AffectationsCharge Returns this Affectations charge.
     */
    public function setFev(?bool $fev): AffectationsCharge {
        $this->fev = $fev;
        return $this;
    }

    /**
     * Set the jan.
     *
     * @param bool|null $jan The jan.
     * @return AffectationsCharge Returns this Affectations charge.
     */
    public function setJan(?bool $jan): AffectationsCharge {
        $this->jan = $jan;
        return $this;
    }

    /**
     * Set the juil.
     *
     * @param bool|null $juil The juil.
     * @return AffectationsCharge Returns this Affectations charge.
     */
    public function setJuil(?bool $juil): AffectationsCharge {
        $this->juil = $juil;
        return $this;
    }

    /**
     * Set the juin.
     *
     * @param bool|null $juin The juin.
     * @return AffectationsCharge Returns this Affectations charge.
     */
    public function setJuin(?bool $juin): AffectationsCharge {
        $this->juin = $juin;
        return $this;
    }

    /**
     * Set the mai.
     *
     * @param bool|null $mai The mai.
     * @return AffectationsCharge Returns this Affectations charge.
     */
    public function setMai(?bool $mai): AffectationsCharge {
        $this->mai = $mai;
        return $this;
    }

    /**
     * Set the mar.
     *
     * @param bool|null $mar The mar.
     * @return AffectationsCharge Returns this Affectations charge.
     */
    public function setMar(?bool $mar): AffectationsCharge {
        $this->mar = $mar;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float|null $montant The montant.
     * @return AffectationsCharge Returns this Affectations charge.
     */
    public function setMontant(?float $montant): AffectationsCharge {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the nov.
     *
     * @param bool|null $nov The nov.
     * @return AffectationsCharge Returns this Affectations charge.
     */
    public function setNov(?bool $nov): AffectationsCharge {
        $this->nov = $nov;
        return $this;
    }

    /**
     * Set the oct.
     *
     * @param bool|null $oct The oct.
     * @return AffectationsCharge Returns this Affectations charge.
     */
    public function setOct(?bool $oct): AffectationsCharge {
        $this->oct = $oct;
        return $this;
    }

    /**
     * Set the origine charge mens.
     *
     * @param bool|null $origineChargeMens The origine charge mens.
     * @return AffectationsCharge Returns this Affectations charge.
     */
    public function setOrigineChargeMens(?bool $origineChargeMens): AffectationsCharge {
        $this->origineChargeMens = $origineChargeMens;
        return $this;
    }

    /**
     * Set the periode deb.
     *
     * @param DateTime|null $periodeDeb The periode deb.
     * @return AffectationsCharge Returns this Affectations charge.
     */
    public function setPeriodeDeb(?DateTime $periodeDeb): AffectationsCharge {
        $this->periodeDeb = $periodeDeb;
        return $this;
    }

    /**
     * Set the periode fin.
     *
     * @param DateTime|null $periodeFin The periode fin.
     * @return AffectationsCharge Returns this Affectations charge.
     */
    public function setPeriodeFin(?DateTime $periodeFin): AffectationsCharge {
        $this->periodeFin = $periodeFin;
        return $this;
    }

    /**
     * Set the sep.
     *
     * @param bool|null $sep The sep.
     * @return AffectationsCharge Returns this Affectations charge.
     */
    public function setSep(?bool $sep): AffectationsCharge {
        $this->sep = $sep;
        return $this;
    }

    /**
     * Set the uniq id.
     *
     * @param string|null $uniqId The uniq id.
     * @return AffectationsCharge Returns this Affectations charge.
     */
    public function setUniqId(?string $uniqId): AffectationsCharge {
        $this->uniqId = $uniqId;
        return $this;
    }
}
