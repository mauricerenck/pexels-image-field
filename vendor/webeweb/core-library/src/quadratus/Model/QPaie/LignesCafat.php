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
 * Lignes cafat.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class LignesCafat {

    /**
     * Code commune.
     *
     * @var string|null
     */
    private $codeCommune;

    /**
     * Code etablissement.
     *
     * @var int|null
     */
    private $codeEtablissement;

    /**
     * Date debauchage.
     *
     * @var DateTime|null
     */
    private $dateDebauchage;

    /**
     * Date embauchage.
     *
     * @var DateTime|null
     */
    private $dateEmbauchage;

    /**
     * Nb h trav.
     *
     * @var float|null
     */
    private $nbHTrav;

    /**
     * No et.
     *
     * @var string|null
     */
    private $noEt;

    /**
     * Nom employe.
     *
     * @var string|null
     */
    private $nomEmploye;

    /**
     * Num ligne.
     *
     * @var int|null
     */
    private $numLigne;

    /**
     * Numero assure.
     *
     * @var string|null
     */
    private $numeroAssure;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Organisme.
     *
     * @var string|null
     */
    private $organisme;

    /**
     * Periode decla.
     *
     * @var DateTime|null
     */
    private $periodeDecla;

    /**
     * Salaire brut.
     *
     * @var float|null
     */
    private $salaireBrut;

    /**
     * Taux at.
     *
     * @var float|null
     */
    private $tauxAt;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code commune.
     *
     * @return string|null Returns the code commune.
     */
    public function getCodeCommune(): ?string {
        return $this->codeCommune;
    }

    /**
     * Get the code etablissement.
     *
     * @return int|null Returns the code etablissement.
     */
    public function getCodeEtablissement(): ?int {
        return $this->codeEtablissement;
    }

    /**
     * Get the date debauchage.
     *
     * @return DateTime|null Returns the date debauchage.
     */
    public function getDateDebauchage(): ?DateTime {
        return $this->dateDebauchage;
    }

    /**
     * Get the date embauchage.
     *
     * @return DateTime|null Returns the date embauchage.
     */
    public function getDateEmbauchage(): ?DateTime {
        return $this->dateEmbauchage;
    }

    /**
     * Get the nb h trav.
     *
     * @return float|null Returns the nb h trav.
     */
    public function getNbHTrav(): ?float {
        return $this->nbHTrav;
    }

    /**
     * Get the no et.
     *
     * @return string|null Returns the no et.
     */
    public function getNoEt(): ?string {
        return $this->noEt;
    }

    /**
     * Get the nom employe.
     *
     * @return string|null Returns the nom employe.
     */
    public function getNomEmploye(): ?string {
        return $this->nomEmploye;
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
     * Get the numero assure.
     *
     * @return string|null Returns the numero assure.
     */
    public function getNumeroAssure(): ?string {
        return $this->numeroAssure;
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
     * Get the organisme.
     *
     * @return string|null Returns the organisme.
     */
    public function getOrganisme(): ?string {
        return $this->organisme;
    }

    /**
     * Get the periode decla.
     *
     * @return DateTime|null Returns the periode decla.
     */
    public function getPeriodeDecla(): ?DateTime {
        return $this->periodeDecla;
    }

    /**
     * Get the salaire brut.
     *
     * @return float|null Returns the salaire brut.
     */
    public function getSalaireBrut(): ?float {
        return $this->salaireBrut;
    }

    /**
     * Get the taux at.
     *
     * @return float|null Returns the taux at.
     */
    public function getTauxAt(): ?float {
        return $this->tauxAt;
    }

    /**
     * Set the code commune.
     *
     * @param string|null $codeCommune The code commune.
     * @return LignesCafat Returns this Lignes cafat.
     */
    public function setCodeCommune(?string $codeCommune): LignesCafat {
        $this->codeCommune = $codeCommune;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return LignesCafat Returns this Lignes cafat.
     */
    public function setCodeEtablissement(?int $codeEtablissement): LignesCafat {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the date debauchage.
     *
     * @param DateTime|null $dateDebauchage The date debauchage.
     * @return LignesCafat Returns this Lignes cafat.
     */
    public function setDateDebauchage(?DateTime $dateDebauchage): LignesCafat {
        $this->dateDebauchage = $dateDebauchage;
        return $this;
    }

    /**
     * Set the date embauchage.
     *
     * @param DateTime|null $dateEmbauchage The date embauchage.
     * @return LignesCafat Returns this Lignes cafat.
     */
    public function setDateEmbauchage(?DateTime $dateEmbauchage): LignesCafat {
        $this->dateEmbauchage = $dateEmbauchage;
        return $this;
    }

    /**
     * Set the nb h trav.
     *
     * @param float|null $nbHTrav The nb h trav.
     * @return LignesCafat Returns this Lignes cafat.
     */
    public function setNbHTrav(?float $nbHTrav): LignesCafat {
        $this->nbHTrav = $nbHTrav;
        return $this;
    }

    /**
     * Set the no et.
     *
     * @param string|null $noEt The no et.
     * @return LignesCafat Returns this Lignes cafat.
     */
    public function setNoEt(?string $noEt): LignesCafat {
        $this->noEt = $noEt;
        return $this;
    }

    /**
     * Set the nom employe.
     *
     * @param string|null $nomEmploye The nom employe.
     * @return LignesCafat Returns this Lignes cafat.
     */
    public function setNomEmploye(?string $nomEmploye): LignesCafat {
        $this->nomEmploye = $nomEmploye;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int|null $numLigne The num ligne.
     * @return LignesCafat Returns this Lignes cafat.
     */
    public function setNumLigne(?int $numLigne): LignesCafat {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the numero assure.
     *
     * @param string|null $numeroAssure The numero assure.
     * @return LignesCafat Returns this Lignes cafat.
     */
    public function setNumeroAssure(?string $numeroAssure): LignesCafat {
        $this->numeroAssure = $numeroAssure;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return LignesCafat Returns this Lignes cafat.
     */
    public function setNumeroEmploye(?string $numeroEmploye): LignesCafat {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the organisme.
     *
     * @param string|null $organisme The organisme.
     * @return LignesCafat Returns this Lignes cafat.
     */
    public function setOrganisme(?string $organisme): LignesCafat {
        $this->organisme = $organisme;
        return $this;
    }

    /**
     * Set the periode decla.
     *
     * @param DateTime|null $periodeDecla The periode decla.
     * @return LignesCafat Returns this Lignes cafat.
     */
    public function setPeriodeDecla(?DateTime $periodeDecla): LignesCafat {
        $this->periodeDecla = $periodeDecla;
        return $this;
    }

    /**
     * Set the salaire brut.
     *
     * @param float|null $salaireBrut The salaire brut.
     * @return LignesCafat Returns this Lignes cafat.
     */
    public function setSalaireBrut(?float $salaireBrut): LignesCafat {
        $this->salaireBrut = $salaireBrut;
        return $this;
    }

    /**
     * Set the taux at.
     *
     * @param float|null $tauxAt The taux at.
     * @return LignesCafat Returns this Lignes cafat.
     */
    public function setTauxAt(?float $tauxAt): LignesCafat {
        $this->tauxAt = $tauxAt;
        return $this;
    }
}
