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
 * Devis local lignes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class DevisLocalLignes {

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
     * Code programme.
     *
     * @var string|null
     */
    private $codeProgramme;

    /**
     * Dec.
     *
     * @var bool|null
     */
    private $dec;

    /**
     * Designation.
     *
     * @var string|null
     */
    private $designation;

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
     * Num ligne local.
     *
     * @var int|null
     */
    private $numLigneLocal;

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
     * Get the code programme.
     *
     * @return string|null Returns the code programme.
     */
    public function getCodeProgramme(): ?string {
        return $this->codeProgramme;
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
     * Get the designation.
     *
     * @return string|null Returns the designation.
     */
    public function getDesignation(): ?string {
        return $this->designation;
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
     * Get the num ligne local.
     *
     * @return int|null Returns the num ligne local.
     */
    public function getNumLigneLocal(): ?int {
        return $this->numLigneLocal;
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
     * Set the aou.
     *
     * @param bool|null $aou The aou.
     * @return DevisLocalLignes Returns this Devis local lignes.
     */
    public function setAou(?bool $aou): DevisLocalLignes {
        $this->aou = $aou;
        return $this;
    }

    /**
     * Set the avr.
     *
     * @param bool|null $avr The avr.
     * @return DevisLocalLignes Returns this Devis local lignes.
     */
    public function setAvr(?bool $avr): DevisLocalLignes {
        $this->avr = $avr;
        return $this;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return DevisLocalLignes Returns this Devis local lignes.
     */
    public function setCodeAffaire(?string $codeAffaire): DevisLocalLignes {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string|null $codeChantier The code chantier.
     * @return DevisLocalLignes Returns this Devis local lignes.
     */
    public function setCodeChantier(?string $codeChantier): DevisLocalLignes {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return DevisLocalLignes Returns this Devis local lignes.
     */
    public function setCodeClient(?string $codeClient): DevisLocalLignes {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code programme.
     *
     * @param string|null $codeProgramme The code programme.
     * @return DevisLocalLignes Returns this Devis local lignes.
     */
    public function setCodeProgramme(?string $codeProgramme): DevisLocalLignes {
        $this->codeProgramme = $codeProgramme;
        return $this;
    }

    /**
     * Set the dec.
     *
     * @param bool|null $dec The dec.
     * @return DevisLocalLignes Returns this Devis local lignes.
     */
    public function setDec(?bool $dec): DevisLocalLignes {
        $this->dec = $dec;
        return $this;
    }

    /**
     * Set the designation.
     *
     * @param string|null $designation The designation.
     * @return DevisLocalLignes Returns this Devis local lignes.
     */
    public function setDesignation(?string $designation): DevisLocalLignes {
        $this->designation = $designation;
        return $this;
    }

    /**
     * Set the dimanche.
     *
     * @param bool|null $dimanche The dimanche.
     * @return DevisLocalLignes Returns this Devis local lignes.
     */
    public function setDimanche(?bool $dimanche): DevisLocalLignes {
        $this->dimanche = $dimanche;
        return $this;
    }

    /**
     * Set the fev.
     *
     * @param bool|null $fev The fev.
     * @return DevisLocalLignes Returns this Devis local lignes.
     */
    public function setFev(?bool $fev): DevisLocalLignes {
        $this->fev = $fev;
        return $this;
    }

    /**
     * Set the jan.
     *
     * @param bool|null $jan The jan.
     * @return DevisLocalLignes Returns this Devis local lignes.
     */
    public function setJan(?bool $jan): DevisLocalLignes {
        $this->jan = $jan;
        return $this;
    }

    /**
     * Set the jeudi.
     *
     * @param bool|null $jeudi The jeudi.
     * @return DevisLocalLignes Returns this Devis local lignes.
     */
    public function setJeudi(?bool $jeudi): DevisLocalLignes {
        $this->jeudi = $jeudi;
        return $this;
    }

    /**
     * Set the juil.
     *
     * @param bool|null $juil The juil.
     * @return DevisLocalLignes Returns this Devis local lignes.
     */
    public function setJuil(?bool $juil): DevisLocalLignes {
        $this->juil = $juil;
        return $this;
    }

    /**
     * Set the juin.
     *
     * @param bool|null $juin The juin.
     * @return DevisLocalLignes Returns this Devis local lignes.
     */
    public function setJuin(?bool $juin): DevisLocalLignes {
        $this->juin = $juin;
        return $this;
    }

    /**
     * Set the lundi.
     *
     * @param bool|null $lundi The lundi.
     * @return DevisLocalLignes Returns this Devis local lignes.
     */
    public function setLundi(?bool $lundi): DevisLocalLignes {
        $this->lundi = $lundi;
        return $this;
    }

    /**
     * Set the mai.
     *
     * @param bool|null $mai The mai.
     * @return DevisLocalLignes Returns this Devis local lignes.
     */
    public function setMai(?bool $mai): DevisLocalLignes {
        $this->mai = $mai;
        return $this;
    }

    /**
     * Set the mar.
     *
     * @param bool|null $mar The mar.
     * @return DevisLocalLignes Returns this Devis local lignes.
     */
    public function setMar(?bool $mar): DevisLocalLignes {
        $this->mar = $mar;
        return $this;
    }

    /**
     * Set the mardi.
     *
     * @param bool|null $mardi The mardi.
     * @return DevisLocalLignes Returns this Devis local lignes.
     */
    public function setMardi(?bool $mardi): DevisLocalLignes {
        $this->mardi = $mardi;
        return $this;
    }

    /**
     * Set the mercredi.
     *
     * @param bool|null $mercredi The mercredi.
     * @return DevisLocalLignes Returns this Devis local lignes.
     */
    public function setMercredi(?bool $mercredi): DevisLocalLignes {
        $this->mercredi = $mercredi;
        return $this;
    }

    /**
     * Set the nov.
     *
     * @param bool|null $nov The nov.
     * @return DevisLocalLignes Returns this Devis local lignes.
     */
    public function setNov(?bool $nov): DevisLocalLignes {
        $this->nov = $nov;
        return $this;
    }

    /**
     * Set the num devis.
     *
     * @param string|null $numDevis The num devis.
     * @return DevisLocalLignes Returns this Devis local lignes.
     */
    public function setNumDevis(?string $numDevis): DevisLocalLignes {
        $this->numDevis = $numDevis;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int|null $numLigne The num ligne.
     * @return DevisLocalLignes Returns this Devis local lignes.
     */
    public function setNumLigne(?int $numLigne): DevisLocalLignes {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the num ligne local.
     *
     * @param int|null $numLigneLocal The num ligne local.
     * @return DevisLocalLignes Returns this Devis local lignes.
     */
    public function setNumLigneLocal(?int $numLigneLocal): DevisLocalLignes {
        $this->numLigneLocal = $numLigneLocal;
        return $this;
    }

    /**
     * Set the occurrence.
     *
     * @param string|null $occurrence The occurrence.
     * @return DevisLocalLignes Returns this Devis local lignes.
     */
    public function setOccurrence(?string $occurrence): DevisLocalLignes {
        $this->occurrence = $occurrence;
        return $this;
    }

    /**
     * Set the oct.
     *
     * @param bool|null $oct The oct.
     * @return DevisLocalLignes Returns this Devis local lignes.
     */
    public function setOct(?bool $oct): DevisLocalLignes {
        $this->oct = $oct;
        return $this;
    }

    /**
     * Set the periodicite.
     *
     * @param string|null $periodicite The periodicite.
     * @return DevisLocalLignes Returns this Devis local lignes.
     */
    public function setPeriodicite(?string $periodicite): DevisLocalLignes {
        $this->periodicite = $periodicite;
        return $this;
    }

    /**
     * Set the samedi.
     *
     * @param bool|null $samedi The samedi.
     * @return DevisLocalLignes Returns this Devis local lignes.
     */
    public function setSamedi(?bool $samedi): DevisLocalLignes {
        $this->samedi = $samedi;
        return $this;
    }

    /**
     * Set the sep.
     *
     * @param bool|null $sep The sep.
     * @return DevisLocalLignes Returns this Devis local lignes.
     */
    public function setSep(?bool $sep): DevisLocalLignes {
        $this->sep = $sep;
        return $this;
    }

    /**
     * Set the vendredi.
     *
     * @param bool|null $vendredi The vendredi.
     * @return DevisLocalLignes Returns this Devis local lignes.
     */
    public function setVendredi(?bool $vendredi): DevisLocalLignes {
        $this->vendredi = $vendredi;
        return $this;
    }
}
