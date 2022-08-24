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
 * Lignes profil.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class LignesProfil {

    /**
     * Code libelle.
     *
     * @var string|null
     */
    private $codeLibelle;

    /**
     * Code profil.
     *
     * @var string|null
     */
    private $codeProfil;

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
     * Num ligne profil.
     *
     * @var int|null
     */
    private $numLigneProfil;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code libelle.
     *
     * @return string|null Returns the code libelle.
     */
    public function getCodeLibelle(): ?string {
        return $this->codeLibelle;
    }

    /**
     * Get the code profil.
     *
     * @return string|null Returns the code profil.
     */
    public function getCodeProfil(): ?string {
        return $this->codeProfil;
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
     * Get the num ligne profil.
     *
     * @return int|null Returns the num ligne profil.
     */
    public function getNumLigneProfil(): ?int {
        return $this->numLigneProfil;
    }

    /**
     * Set the code libelle.
     *
     * @param string|null $codeLibelle The code libelle.
     * @return LignesProfil Returns this Lignes profil.
     */
    public function setCodeLibelle(?string $codeLibelle): LignesProfil {
        $this->codeLibelle = $codeLibelle;
        return $this;
    }

    /**
     * Set the code profil.
     *
     * @param string|null $codeProfil The code profil.
     * @return LignesProfil Returns this Lignes profil.
     */
    public function setCodeProfil(?string $codeProfil): LignesProfil {
        $this->codeProfil = $codeProfil;
        return $this;
    }

    /**
     * Set the deb per application.
     *
     * @param DateTime|null $debPerApplication The deb per application.
     * @return LignesProfil Returns this Lignes profil.
     */
    public function setDebPerApplication(?DateTime $debPerApplication): LignesProfil {
        $this->debPerApplication = $debPerApplication;
        return $this;
    }

    /**
     * Set the fin per application.
     *
     * @param DateTime|null $finPerApplication The fin per application.
     * @return LignesProfil Returns this Lignes profil.
     */
    public function setFinPerApplication(?DateTime $finPerApplication): LignesProfil {
        $this->finPerApplication = $finPerApplication;
        return $this;
    }

    /**
     * Set the freq1.
     *
     * @param string|null $freq1 The freq1.
     * @return LignesProfil Returns this Lignes profil.
     */
    public function setFreq1(?string $freq1): LignesProfil {
        $this->freq1 = $freq1;
        return $this;
    }

    /**
     * Set the freq10.
     *
     * @param string|null $freq10 The freq10.
     * @return LignesProfil Returns this Lignes profil.
     */
    public function setFreq10(?string $freq10): LignesProfil {
        $this->freq10 = $freq10;
        return $this;
    }

    /**
     * Set the freq11.
     *
     * @param string|null $freq11 The freq11.
     * @return LignesProfil Returns this Lignes profil.
     */
    public function setFreq11(?string $freq11): LignesProfil {
        $this->freq11 = $freq11;
        return $this;
    }

    /**
     * Set the freq12.
     *
     * @param string|null $freq12 The freq12.
     * @return LignesProfil Returns this Lignes profil.
     */
    public function setFreq12(?string $freq12): LignesProfil {
        $this->freq12 = $freq12;
        return $this;
    }

    /**
     * Set the freq2.
     *
     * @param string|null $freq2 The freq2.
     * @return LignesProfil Returns this Lignes profil.
     */
    public function setFreq2(?string $freq2): LignesProfil {
        $this->freq2 = $freq2;
        return $this;
    }

    /**
     * Set the freq3.
     *
     * @param string|null $freq3 The freq3.
     * @return LignesProfil Returns this Lignes profil.
     */
    public function setFreq3(?string $freq3): LignesProfil {
        $this->freq3 = $freq3;
        return $this;
    }

    /**
     * Set the freq4.
     *
     * @param string|null $freq4 The freq4.
     * @return LignesProfil Returns this Lignes profil.
     */
    public function setFreq4(?string $freq4): LignesProfil {
        $this->freq4 = $freq4;
        return $this;
    }

    /**
     * Set the freq5.
     *
     * @param string|null $freq5 The freq5.
     * @return LignesProfil Returns this Lignes profil.
     */
    public function setFreq5(?string $freq5): LignesProfil {
        $this->freq5 = $freq5;
        return $this;
    }

    /**
     * Set the freq6.
     *
     * @param string|null $freq6 The freq6.
     * @return LignesProfil Returns this Lignes profil.
     */
    public function setFreq6(?string $freq6): LignesProfil {
        $this->freq6 = $freq6;
        return $this;
    }

    /**
     * Set the freq7.
     *
     * @param string|null $freq7 The freq7.
     * @return LignesProfil Returns this Lignes profil.
     */
    public function setFreq7(?string $freq7): LignesProfil {
        $this->freq7 = $freq7;
        return $this;
    }

    /**
     * Set the freq8.
     *
     * @param string|null $freq8 The freq8.
     * @return LignesProfil Returns this Lignes profil.
     */
    public function setFreq8(?string $freq8): LignesProfil {
        $this->freq8 = $freq8;
        return $this;
    }

    /**
     * Set the freq9.
     *
     * @param string|null $freq9 The freq9.
     * @return LignesProfil Returns this Lignes profil.
     */
    public function setFreq9(?string $freq9): LignesProfil {
        $this->freq9 = $freq9;
        return $this;
    }

    /**
     * Set the num ligne profil.
     *
     * @param int|null $numLigneProfil The num ligne profil.
     * @return LignesProfil Returns this Lignes profil.
     */
    public function setNumLigneProfil(?int $numLigneProfil): LignesProfil {
        $this->numLigneProfil = $numLigneProfil;
        return $this;
    }
}
