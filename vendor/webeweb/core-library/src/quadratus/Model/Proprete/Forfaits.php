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
 * Forfaits.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class Forfaits {

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
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Code employe.
     *
     * @var string|null
     */
    private $codeEmploye;

    /**
     * Code prime.
     *
     * @var string|null
     */
    private $codePrime;

    /**
     * Code tache type.
     *
     * @var string|null
     */
    private $codeTacheType;

    /**
     * Date debut.
     *
     * @var DateTime|null
     */
    private $dateDebut;

    /**
     * Date fin.
     *
     * @var DateTime|null
     */
    private $dateFin;

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
     * Num forfait.
     *
     * @var int|null
     */
    private $numForfait;

    /**
     * Oct.
     *
     * @var bool|null
     */
    private $oct;

    /**
     * Sep.
     *
     * @var bool|null
     */
    private $sep;

    /**
     * Type code prime.
     *
     * @var string|null
     */
    private $typeCodePrime;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the code client.
     *
     * @return string|null Returns the code client.
     */
    public function getCodeClient(): ?string {
        return $this->codeClient;
    }

    /**
     * Get the code employe.
     *
     * @return string|null Returns the code employe.
     */
    public function getCodeEmploye(): ?string {
        return $this->codeEmploye;
    }

    /**
     * Get the code prime.
     *
     * @return string|null Returns the code prime.
     */
    public function getCodePrime(): ?string {
        return $this->codePrime;
    }

    /**
     * Get the code tache type.
     *
     * @return string|null Returns the code tache type.
     */
    public function getCodeTacheType(): ?string {
        return $this->codeTacheType;
    }

    /**
     * Get the date debut.
     *
     * @return DateTime|null Returns the date debut.
     */
    public function getDateDebut(): ?DateTime {
        return $this->dateDebut;
    }

    /**
     * Get the date fin.
     *
     * @return DateTime|null Returns the date fin.
     */
    public function getDateFin(): ?DateTime {
        return $this->dateFin;
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
     * Get the num forfait.
     *
     * @return int|null Returns the num forfait.
     */
    public function getNumForfait(): ?int {
        return $this->numForfait;
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
     * Get the sep.
     *
     * @return bool|null Returns the sep.
     */
    public function getSep(): ?bool {
        return $this->sep;
    }

    /**
     * Get the type code prime.
     *
     * @return string|null Returns the type code prime.
     */
    public function getTypeCodePrime(): ?string {
        return $this->typeCodePrime;
    }

    /**
     * Set the aou.
     *
     * @param bool|null $aou The aou.
     * @return Forfaits Returns this Forfaits.
     */
    public function setAou(?bool $aou): Forfaits {
        $this->aou = $aou;
        return $this;
    }

    /**
     * Set the avr.
     *
     * @param bool|null $avr The avr.
     * @return Forfaits Returns this Forfaits.
     */
    public function setAvr(?bool $avr): Forfaits {
        $this->avr = $avr;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return Forfaits Returns this Forfaits.
     */
    public function setCodeAffaire(?string $codeAffaire): Forfaits {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return Forfaits Returns this Forfaits.
     */
    public function setCodeChantier(?string $codeChantier): Forfaits {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return Forfaits Returns this Forfaits.
     */
    public function setCodeClient(?string $codeClient): Forfaits {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return Forfaits Returns this Forfaits.
     */
    public function setCodeEmploye(?string $codeEmploye): Forfaits {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code prime.
     *
     * @param string|null $codePrime The code prime.
     * @return Forfaits Returns this Forfaits.
     */
    public function setCodePrime(?string $codePrime): Forfaits {
        $this->codePrime = $codePrime;
        return $this;
    }

    /**
     * Set the code tache type.
     *
     * @param string|null $codeTacheType The code tache type.
     * @return Forfaits Returns this Forfaits.
     */
    public function setCodeTacheType(?string $codeTacheType): Forfaits {
        $this->codeTacheType = $codeTacheType;
        return $this;
    }

    /**
     * Set the date debut.
     *
     * @param DateTime|null $dateDebut The date debut.
     * @return Forfaits Returns this Forfaits.
     */
    public function setDateDebut(?DateTime $dateDebut): Forfaits {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    /**
     * Set the date fin.
     *
     * @param DateTime|null $dateFin The date fin.
     * @return Forfaits Returns this Forfaits.
     */
    public function setDateFin(?DateTime $dateFin): Forfaits {
        $this->dateFin = $dateFin;
        return $this;
    }

    /**
     * Set the dec.
     *
     * @param bool|null $dec The dec.
     * @return Forfaits Returns this Forfaits.
     */
    public function setDec(?bool $dec): Forfaits {
        $this->dec = $dec;
        return $this;
    }

    /**
     * Set the fev.
     *
     * @param bool|null $fev The fev.
     * @return Forfaits Returns this Forfaits.
     */
    public function setFev(?bool $fev): Forfaits {
        $this->fev = $fev;
        return $this;
    }

    /**
     * Set the jan.
     *
     * @param bool|null $jan The jan.
     * @return Forfaits Returns this Forfaits.
     */
    public function setJan(?bool $jan): Forfaits {
        $this->jan = $jan;
        return $this;
    }

    /**
     * Set the juil.
     *
     * @param bool|null $juil The juil.
     * @return Forfaits Returns this Forfaits.
     */
    public function setJuil(?bool $juil): Forfaits {
        $this->juil = $juil;
        return $this;
    }

    /**
     * Set the juin.
     *
     * @param bool|null $juin The juin.
     * @return Forfaits Returns this Forfaits.
     */
    public function setJuin(?bool $juin): Forfaits {
        $this->juin = $juin;
        return $this;
    }

    /**
     * Set the mai.
     *
     * @param bool|null $mai The mai.
     * @return Forfaits Returns this Forfaits.
     */
    public function setMai(?bool $mai): Forfaits {
        $this->mai = $mai;
        return $this;
    }

    /**
     * Set the mar.
     *
     * @param bool|null $mar The mar.
     * @return Forfaits Returns this Forfaits.
     */
    public function setMar(?bool $mar): Forfaits {
        $this->mar = $mar;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float|null $montant The montant.
     * @return Forfaits Returns this Forfaits.
     */
    public function setMontant(?float $montant): Forfaits {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the nov.
     *
     * @param bool|null $nov The nov.
     * @return Forfaits Returns this Forfaits.
     */
    public function setNov(?bool $nov): Forfaits {
        $this->nov = $nov;
        return $this;
    }

    /**
     * Set the num forfait.
     *
     * @param int|null $numForfait The num forfait.
     * @return Forfaits Returns this Forfaits.
     */
    public function setNumForfait(?int $numForfait): Forfaits {
        $this->numForfait = $numForfait;
        return $this;
    }

    /**
     * Set the oct.
     *
     * @param bool|null $oct The oct.
     * @return Forfaits Returns this Forfaits.
     */
    public function setOct(?bool $oct): Forfaits {
        $this->oct = $oct;
        return $this;
    }

    /**
     * Set the sep.
     *
     * @param bool|null $sep The sep.
     * @return Forfaits Returns this Forfaits.
     */
    public function setSep(?bool $sep): Forfaits {
        $this->sep = $sep;
        return $this;
    }

    /**
     * Set the type code prime.
     *
     * @param string|null $typeCodePrime The type code prime.
     * @return Forfaits Returns this Forfaits.
     */
    public function setTypeCodePrime(?string $typeCodePrime): Forfaits {
        $this->typeCodePrime = $typeCodePrime;
        return $this;
    }
}
