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

/**
 * Devis prog lignes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class DevisProgLignes {

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
     * Code echelle.
     *
     * @var string|null
     */
    private $codeEchelle;

    /**
     * Code operation.
     *
     * @var string|null
     */
    private $codeOperation;

    /**
     * Coefficient.
     *
     * @var float|null
     */
    private $coefficient;

    /**
     * Dec.
     *
     * @var bool|null
     */
    private $dec;

    /**
     * Dimanche.
     *
     * @var bool|null
     */
    private $dimanche;

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
     * Jeudi.
     *
     * @var bool|null
     */
    private $jeudi;

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
     * Lundi.
     *
     * @var bool|null
     */
    private $lundi;

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
     * Mardi.
     *
     * @var bool|null
     */
    private $mardi;

    /**
     * Mercredi.
     *
     * @var bool|null
     */
    private $mercredi;

    /**
     * Note resultat.
     *
     * @var float|null
     */
    private $noteResultat;

    /**
     * Nov.
     *
     * @var bool|null
     */
    private $nov;

    /**
     * Num devis.
     *
     * @var string|null
     */
    private $numDevis;

    /**
     * Num ligne.
     *
     * @var int|null
     */
    private $numLigne;

    /**
     * Num programme.
     *
     * @var int|null
     */
    private $numProgramme;

    /**
     * Occurrence.
     *
     * @var string|null
     */
    private $occurrence;

    /**
     * Oct.
     *
     * @var bool|null
     */
    private $oct;

    /**
     * Periodicite.
     *
     * @var string|null
     */
    private $periodicite;

    /**
     * Samedi.
     *
     * @var bool|null
     */
    private $samedi;

    /**
     * Sep.
     *
     * @var bool|null
     */
    private $sep;

    /**
     * Vendredi.
     *
     * @var bool|null
     */
    private $vendredi;

    /**
     * Vitesse reelle.
     *
     * @var float|null
     */
    private $vitesseReelle;

    /**
     * Vitesse theorique.
     *
     * @var float|null
     */
    private $vitesseTheorique;

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
     * Get the code echelle.
     *
     * @return string|null Returns the code echelle.
     */
    public function getCodeEchelle(): ?string {
        return $this->codeEchelle;
    }

    /**
     * Get the code operation.
     *
     * @return string|null Returns the code operation.
     */
    public function getCodeOperation(): ?string {
        return $this->codeOperation;
    }

    /**
     * Get the coefficient.
     *
     * @return float|null Returns the coefficient.
     */
    public function getCoefficient(): ?float {
        return $this->coefficient;
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
     * Get the dimanche.
     *
     * @return bool|null Returns the dimanche.
     */
    public function getDimanche(): ?bool {
        return $this->dimanche;
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
     * Get the jeudi.
     *
     * @return bool|null Returns the jeudi.
     */
    public function getJeudi(): ?bool {
        return $this->jeudi;
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
     * Get the lundi.
     *
     * @return bool|null Returns the lundi.
     */
    public function getLundi(): ?bool {
        return $this->lundi;
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
     * Get the mardi.
     *
     * @return bool|null Returns the mardi.
     */
    public function getMardi(): ?bool {
        return $this->mardi;
    }

    /**
     * Get the mercredi.
     *
     * @return bool|null Returns the mercredi.
     */
    public function getMercredi(): ?bool {
        return $this->mercredi;
    }

    /**
     * Get the note resultat.
     *
     * @return float|null Returns the note resultat.
     */
    public function getNoteResultat(): ?float {
        return $this->noteResultat;
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
     * Get the num devis.
     *
     * @return string|null Returns the num devis.
     */
    public function getNumDevis(): ?string {
        return $this->numDevis;
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
     * Get the num programme.
     *
     * @return int|null Returns the num programme.
     */
    public function getNumProgramme(): ?int {
        return $this->numProgramme;
    }

    /**
     * Get the occurrence.
     *
     * @return string|null Returns the occurrence.
     */
    public function getOccurrence(): ?string {
        return $this->occurrence;
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
     * Get the periodicite.
     *
     * @return string|null Returns the periodicite.
     */
    public function getPeriodicite(): ?string {
        return $this->periodicite;
    }

    /**
     * Get the samedi.
     *
     * @return bool|null Returns the samedi.
     */
    public function getSamedi(): ?bool {
        return $this->samedi;
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
     * Get the vendredi.
     *
     * @return bool|null Returns the vendredi.
     */
    public function getVendredi(): ?bool {
        return $this->vendredi;
    }

    /**
     * Get the vitesse reelle.
     *
     * @return float|null Returns the vitesse reelle.
     */
    public function getVitesseReelle(): ?float {
        return $this->vitesseReelle;
    }

    /**
     * Get the vitesse theorique.
     *
     * @return float|null Returns the vitesse theorique.
     */
    public function getVitesseTheorique(): ?float {
        return $this->vitesseTheorique;
    }

    /**
     * Set the aou.
     *
     * @param bool|null $aou The aou.
     * @return DevisProgLignes Returns this Devis prog lignes.
     */
    public function setAou(?bool $aou): DevisProgLignes {
        $this->aou = $aou;
        return $this;
    }

    /**
     * Set the avr.
     *
     * @param bool|null $avr The avr.
     * @return DevisProgLignes Returns this Devis prog lignes.
     */
    public function setAvr(?bool $avr): DevisProgLignes {
        $this->avr = $avr;
        return $this;
    }

    /**
     * Set the code echelle.
     *
     * @param string|null $codeEchelle The code echelle.
     * @return DevisProgLignes Returns this Devis prog lignes.
     */
    public function setCodeEchelle(?string $codeEchelle): DevisProgLignes {
        $this->codeEchelle = $codeEchelle;
        return $this;
    }

    /**
     * Set the code operation.
     *
     * @param string|null $codeOperation The code operation.
     * @return DevisProgLignes Returns this Devis prog lignes.
     */
    public function setCodeOperation(?string $codeOperation): DevisProgLignes {
        $this->codeOperation = $codeOperation;
        return $this;
    }

    /**
     * Set the coefficient.
     *
     * @param float|null $coefficient The coefficient.
     * @return DevisProgLignes Returns this Devis prog lignes.
     */
    public function setCoefficient(?float $coefficient): DevisProgLignes {
        $this->coefficient = $coefficient;
        return $this;
    }

    /**
     * Set the dec.
     *
     * @param bool|null $dec The dec.
     * @return DevisProgLignes Returns this Devis prog lignes.
     */
    public function setDec(?bool $dec): DevisProgLignes {
        $this->dec = $dec;
        return $this;
    }

    /**
     * Set the dimanche.
     *
     * @param bool|null $dimanche The dimanche.
     * @return DevisProgLignes Returns this Devis prog lignes.
     */
    public function setDimanche(?bool $dimanche): DevisProgLignes {
        $this->dimanche = $dimanche;
        return $this;
    }

    /**
     * Set the fev.
     *
     * @param bool|null $fev The fev.
     * @return DevisProgLignes Returns this Devis prog lignes.
     */
    public function setFev(?bool $fev): DevisProgLignes {
        $this->fev = $fev;
        return $this;
    }

    /**
     * Set the jan.
     *
     * @param bool|null $jan The jan.
     * @return DevisProgLignes Returns this Devis prog lignes.
     */
    public function setJan(?bool $jan): DevisProgLignes {
        $this->jan = $jan;
        return $this;
    }

    /**
     * Set the jeudi.
     *
     * @param bool|null $jeudi The jeudi.
     * @return DevisProgLignes Returns this Devis prog lignes.
     */
    public function setJeudi(?bool $jeudi): DevisProgLignes {
        $this->jeudi = $jeudi;
        return $this;
    }

    /**
     * Set the juil.
     *
     * @param bool|null $juil The juil.
     * @return DevisProgLignes Returns this Devis prog lignes.
     */
    public function setJuil(?bool $juil): DevisProgLignes {
        $this->juil = $juil;
        return $this;
    }

    /**
     * Set the juin.
     *
     * @param bool|null $juin The juin.
     * @return DevisProgLignes Returns this Devis prog lignes.
     */
    public function setJuin(?bool $juin): DevisProgLignes {
        $this->juin = $juin;
        return $this;
    }

    /**
     * Set the lundi.
     *
     * @param bool|null $lundi The lundi.
     * @return DevisProgLignes Returns this Devis prog lignes.
     */
    public function setLundi(?bool $lundi): DevisProgLignes {
        $this->lundi = $lundi;
        return $this;
    }

    /**
     * Set the mai.
     *
     * @param bool|null $mai The mai.
     * @return DevisProgLignes Returns this Devis prog lignes.
     */
    public function setMai(?bool $mai): DevisProgLignes {
        $this->mai = $mai;
        return $this;
    }

    /**
     * Set the mar.
     *
     * @param bool|null $mar The mar.
     * @return DevisProgLignes Returns this Devis prog lignes.
     */
    public function setMar(?bool $mar): DevisProgLignes {
        $this->mar = $mar;
        return $this;
    }

    /**
     * Set the mardi.
     *
     * @param bool|null $mardi The mardi.
     * @return DevisProgLignes Returns this Devis prog lignes.
     */
    public function setMardi(?bool $mardi): DevisProgLignes {
        $this->mardi = $mardi;
        return $this;
    }

    /**
     * Set the mercredi.
     *
     * @param bool|null $mercredi The mercredi.
     * @return DevisProgLignes Returns this Devis prog lignes.
     */
    public function setMercredi(?bool $mercredi): DevisProgLignes {
        $this->mercredi = $mercredi;
        return $this;
    }

    /**
     * Set the note resultat.
     *
     * @param float|null $noteResultat The note resultat.
     * @return DevisProgLignes Returns this Devis prog lignes.
     */
    public function setNoteResultat(?float $noteResultat): DevisProgLignes {
        $this->noteResultat = $noteResultat;
        return $this;
    }

    /**
     * Set the nov.
     *
     * @param bool|null $nov The nov.
     * @return DevisProgLignes Returns this Devis prog lignes.
     */
    public function setNov(?bool $nov): DevisProgLignes {
        $this->nov = $nov;
        return $this;
    }

    /**
     * Set the num devis.
     *
     * @param string|null $numDevis The num devis.
     * @return DevisProgLignes Returns this Devis prog lignes.
     */
    public function setNumDevis(?string $numDevis): DevisProgLignes {
        $this->numDevis = $numDevis;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int|null $numLigne The num ligne.
     * @return DevisProgLignes Returns this Devis prog lignes.
     */
    public function setNumLigne(?int $numLigne): DevisProgLignes {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the num programme.
     *
     * @param int|null $numProgramme The num programme.
     * @return DevisProgLignes Returns this Devis prog lignes.
     */
    public function setNumProgramme(?int $numProgramme): DevisProgLignes {
        $this->numProgramme = $numProgramme;
        return $this;
    }

    /**
     * Set the occurrence.
     *
     * @param string|null $occurrence The occurrence.
     * @return DevisProgLignes Returns this Devis prog lignes.
     */
    public function setOccurrence(?string $occurrence): DevisProgLignes {
        $this->occurrence = $occurrence;
        return $this;
    }

    /**
     * Set the oct.
     *
     * @param bool|null $oct The oct.
     * @return DevisProgLignes Returns this Devis prog lignes.
     */
    public function setOct(?bool $oct): DevisProgLignes {
        $this->oct = $oct;
        return $this;
    }

    /**
     * Set the periodicite.
     *
     * @param string|null $periodicite The periodicite.
     * @return DevisProgLignes Returns this Devis prog lignes.
     */
    public function setPeriodicite(?string $periodicite): DevisProgLignes {
        $this->periodicite = $periodicite;
        return $this;
    }

    /**
     * Set the samedi.
     *
     * @param bool|null $samedi The samedi.
     * @return DevisProgLignes Returns this Devis prog lignes.
     */
    public function setSamedi(?bool $samedi): DevisProgLignes {
        $this->samedi = $samedi;
        return $this;
    }

    /**
     * Set the sep.
     *
     * @param bool|null $sep The sep.
     * @return DevisProgLignes Returns this Devis prog lignes.
     */
    public function setSep(?bool $sep): DevisProgLignes {
        $this->sep = $sep;
        return $this;
    }

    /**
     * Set the vendredi.
     *
     * @param bool|null $vendredi The vendredi.
     * @return DevisProgLignes Returns this Devis prog lignes.
     */
    public function setVendredi(?bool $vendredi): DevisProgLignes {
        $this->vendredi = $vendredi;
        return $this;
    }

    /**
     * Set the vitesse reelle.
     *
     * @param float|null $vitesseReelle The vitesse reelle.
     * @return DevisProgLignes Returns this Devis prog lignes.
     */
    public function setVitesseReelle(?float $vitesseReelle): DevisProgLignes {
        $this->vitesseReelle = $vitesseReelle;
        return $this;
    }

    /**
     * Set the vitesse theorique.
     *
     * @param float|null $vitesseTheorique The vitesse theorique.
     * @return DevisProgLignes Returns this Devis prog lignes.
     */
    public function setVitesseTheorique(?float $vitesseTheorique): DevisProgLignes {
        $this->vitesseTheorique = $vitesseTheorique;
        return $this;
    }
}
