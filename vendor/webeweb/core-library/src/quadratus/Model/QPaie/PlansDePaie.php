<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QPaie;

use DateTime;

/**
 * Plans de paie.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class PlansDePaie {

    /**
     * Code pro lib.
     *
     * @var string|null
     */
    private $codeProLib;

    /**
     * Deb per application.
     *
     * @var DateTime|null
     */
    private $debPerApplication;

    /**
     * Fin per application.
     *
     * @var DateTime|null
     */
    private $finPerApplication;

    /**
     * Freq1.
     *
     * @var string|null
     */
    private $freq1;

    /**
     * Freq10.
     *
     * @var string|null
     */
    private $freq10;

    /**
     * Freq11.
     *
     * @var string|null
     */
    private $freq11;

    /**
     * Freq12.
     *
     * @var string|null
     */
    private $freq12;

    /**
     * Freq2.
     *
     * @var string|null
     */
    private $freq2;

    /**
     * Freq3.
     *
     * @var string|null
     */
    private $freq3;

    /**
     * Freq4.
     *
     * @var string|null
     */
    private $freq4;

    /**
     * Freq5.
     *
     * @var string|null
     */
    private $freq5;

    /**
     * Freq6.
     *
     * @var string|null
     */
    private $freq6;

    /**
     * Freq7.
     *
     * @var string|null
     */
    private $freq7;

    /**
     * Freq8.
     *
     * @var string|null
     */
    private $freq8;

    /**
     * Freq9.
     *
     * @var string|null
     */
    private $freq9;

    /**
     * Num ligne plan.
     *
     * @var int|null
     */
    private $numLignePlan;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Profil ou libelle.
     *
     * @var string|null
     */
    private $profilOuLibelle;

    /**
     * Type bens.
     *
     * @var string|null
     */
    private $typeBens;

    /**
     * Type commentaire.
     *
     * @var bool|null
     */
    private $typeCommentaire;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code pro lib.
     *
     * @return string|null Returns the code pro lib.
     */
    public function getCodeProLib(): ?string {
        return $this->codeProLib;
    }

    /**
     * Get the deb per application.
     *
     * @return DateTime|null Returns the deb per application.
     */
    public function getDebPerApplication(): ?DateTime {
        return $this->debPerApplication;
    }

    /**
     * Get the fin per application.
     *
     * @return DateTime|null Returns the fin per application.
     */
    public function getFinPerApplication(): ?DateTime {
        return $this->finPerApplication;
    }

    /**
     * Get the freq1.
     *
     * @return string|null Returns the freq1.
     */
    public function getFreq1(): ?string {
        return $this->freq1;
    }

    /**
     * Get the freq10.
     *
     * @return string|null Returns the freq10.
     */
    public function getFreq10(): ?string {
        return $this->freq10;
    }

    /**
     * Get the freq11.
     *
     * @return string|null Returns the freq11.
     */
    public function getFreq11(): ?string {
        return $this->freq11;
    }

    /**
     * Get the freq12.
     *
     * @return string|null Returns the freq12.
     */
    public function getFreq12(): ?string {
        return $this->freq12;
    }

    /**
     * Get the freq2.
     *
     * @return string|null Returns the freq2.
     */
    public function getFreq2(): ?string {
        return $this->freq2;
    }

    /**
     * Get the freq3.
     *
     * @return string|null Returns the freq3.
     */
    public function getFreq3(): ?string {
        return $this->freq3;
    }

    /**
     * Get the freq4.
     *
     * @return string|null Returns the freq4.
     */
    public function getFreq4(): ?string {
        return $this->freq4;
    }

    /**
     * Get the freq5.
     *
     * @return string|null Returns the freq5.
     */
    public function getFreq5(): ?string {
        return $this->freq5;
    }

    /**
     * Get the freq6.
     *
     * @return string|null Returns the freq6.
     */
    public function getFreq6(): ?string {
        return $this->freq6;
    }

    /**
     * Get the freq7.
     *
     * @return string|null Returns the freq7.
     */
    public function getFreq7(): ?string {
        return $this->freq7;
    }

    /**
     * Get the freq8.
     *
     * @return string|null Returns the freq8.
     */
    public function getFreq8(): ?string {
        return $this->freq8;
    }

    /**
     * Get the freq9.
     *
     * @return string|null Returns the freq9.
     */
    public function getFreq9(): ?string {
        return $this->freq9;
    }

    /**
     * Get the num ligne plan.
     *
     * @return int|null Returns the num ligne plan.
     */
    public function getNumLignePlan(): ?int {
        return $this->numLignePlan;
    }

    /**
     * Get the numero employe.
     *
     * @return string|null Returns the numero employe.
     */
    public function getNumeroEmploye(): ?string {
        return $this->numeroEmploye;
    }

    /**
     * Get the profil ou libelle.
     *
     * @return string|null Returns the profil ou libelle.
     */
    public function getProfilOuLibelle(): ?string {
        return $this->profilOuLibelle;
    }

    /**
     * Get the type bens.
     *
     * @return string|null Returns the type bens.
     */
    public function getTypeBens(): ?string {
        return $this->typeBens;
    }

    /**
     * Get the type commentaire.
     *
     * @return bool|null Returns the type commentaire.
     */
    public function getTypeCommentaire(): ?bool {
        return $this->typeCommentaire;
    }

    /**
     * Set the code pro lib.
     *
     * @param string|null $codeProLib The code pro lib.
     * @return PlansDePaie Returns this Plans de paie.
     */
    public function setCodeProLib(?string $codeProLib): PlansDePaie {
        $this->codeProLib = $codeProLib;
        return $this;
    }

    /**
     * Set the deb per application.
     *
     * @param DateTime|null $debPerApplication The deb per application.
     * @return PlansDePaie Returns this Plans de paie.
     */
    public function setDebPerApplication(?DateTime $debPerApplication): PlansDePaie {
        $this->debPerApplication = $debPerApplication;
        return $this;
    }

    /**
     * Set the fin per application.
     *
     * @param DateTime|null $finPerApplication The fin per application.
     * @return PlansDePaie Returns this Plans de paie.
     */
    public function setFinPerApplication(?DateTime $finPerApplication): PlansDePaie {
        $this->finPerApplication = $finPerApplication;
        return $this;
    }

    /**
     * Set the freq1.
     *
     * @param string|null $freq1 The freq1.
     * @return PlansDePaie Returns this Plans de paie.
     */
    public function setFreq1(?string $freq1): PlansDePaie {
        $this->freq1 = $freq1;
        return $this;
    }

    /**
     * Set the freq10.
     *
     * @param string|null $freq10 The freq10.
     * @return PlansDePaie Returns this Plans de paie.
     */
    public function setFreq10(?string $freq10): PlansDePaie {
        $this->freq10 = $freq10;
        return $this;
    }

    /**
     * Set the freq11.
     *
     * @param string|null $freq11 The freq11.
     * @return PlansDePaie Returns this Plans de paie.
     */
    public function setFreq11(?string $freq11): PlansDePaie {
        $this->freq11 = $freq11;
        return $this;
    }

    /**
     * Set the freq12.
     *
     * @param string|null $freq12 The freq12.
     * @return PlansDePaie Returns this Plans de paie.
     */
    public function setFreq12(?string $freq12): PlansDePaie {
        $this->freq12 = $freq12;
        return $this;
    }

    /**
     * Set the freq2.
     *
     * @param string|null $freq2 The freq2.
     * @return PlansDePaie Returns this Plans de paie.
     */
    public function setFreq2(?string $freq2): PlansDePaie {
        $this->freq2 = $freq2;
        return $this;
    }

    /**
     * Set the freq3.
     *
     * @param string|null $freq3 The freq3.
     * @return PlansDePaie Returns this Plans de paie.
     */
    public function setFreq3(?string $freq3): PlansDePaie {
        $this->freq3 = $freq3;
        return $this;
    }

    /**
     * Set the freq4.
     *
     * @param string|null $freq4 The freq4.
     * @return PlansDePaie Returns this Plans de paie.
     */
    public function setFreq4(?string $freq4): PlansDePaie {
        $this->freq4 = $freq4;
        return $this;
    }

    /**
     * Set the freq5.
     *
     * @param string|null $freq5 The freq5.
     * @return PlansDePaie Returns this Plans de paie.
     */
    public function setFreq5(?string $freq5): PlansDePaie {
        $this->freq5 = $freq5;
        return $this;
    }

    /**
     * Set the freq6.
     *
     * @param string|null $freq6 The freq6.
     * @return PlansDePaie Returns this Plans de paie.
     */
    public function setFreq6(?string $freq6): PlansDePaie {
        $this->freq6 = $freq6;
        return $this;
    }

    /**
     * Set the freq7.
     *
     * @param string|null $freq7 The freq7.
     * @return PlansDePaie Returns this Plans de paie.
     */
    public function setFreq7(?string $freq7): PlansDePaie {
        $this->freq7 = $freq7;
        return $this;
    }

    /**
     * Set the freq8.
     *
     * @param string|null $freq8 The freq8.
     * @return PlansDePaie Returns this Plans de paie.
     */
    public function setFreq8(?string $freq8): PlansDePaie {
        $this->freq8 = $freq8;
        return $this;
    }

    /**
     * Set the freq9.
     *
     * @param string|null $freq9 The freq9.
     * @return PlansDePaie Returns this Plans de paie.
     */
    public function setFreq9(?string $freq9): PlansDePaie {
        $this->freq9 = $freq9;
        return $this;
    }

    /**
     * Set the num ligne plan.
     *
     * @param int|null $numLignePlan The num ligne plan.
     * @return PlansDePaie Returns this Plans de paie.
     */
    public function setNumLignePlan(?int $numLignePlan): PlansDePaie {
        $this->numLignePlan = $numLignePlan;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return PlansDePaie Returns this Plans de paie.
     */
    public function setNumeroEmploye(?string $numeroEmploye): PlansDePaie {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the profil ou libelle.
     *
     * @param string|null $profilOuLibelle The profil ou libelle.
     * @return PlansDePaie Returns this Plans de paie.
     */
    public function setProfilOuLibelle(?string $profilOuLibelle): PlansDePaie {
        $this->profilOuLibelle = $profilOuLibelle;
        return $this;
    }

    /**
     * Set the type bens.
     *
     * @param string|null $typeBens The type bens.
     * @return PlansDePaie Returns this Plans de paie.
     */
    public function setTypeBens(?string $typeBens): PlansDePaie {
        $this->typeBens = $typeBens;
        return $this;
    }

    /**
     * Set the type commentaire.
     *
     * @param bool|null $typeCommentaire The type commentaire.
     * @return PlansDePaie Returns this Plans de paie.
     */
    public function setTypeCommentaire(?bool $typeCommentaire): PlansDePaie {
        $this->typeCommentaire = $typeCommentaire;
        return $this;
    }
}
