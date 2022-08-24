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
 * tbl saisie paie histo.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class tblSaisiePaieHisto {

    /**
     * Code libelle.
     *
     * @var string|null
     */
    private $codeLibelle;

    /**
     * Code user.
     *
     * @var string|null
     */
    private $codeUser;

    /**
     * Date added.
     *
     * @var DateTime|null
     */
    private $dateAdded;

    /**
     * Flag.
     *
     * @var int|null
     */
    private $flag;

    /**
     * Id.
     *
     * @var int|null
     */
    private $id;

    /**
     * Indice periode.
     *
     * @var int|null
     */
    private $indicePeriode;

    /**
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

    /**
     * Intitule2.
     *
     * @var string|null
     */
    private $intitule2;

    /**
     * Mois deb fixe.
     *
     * @var string|null
     */
    private $moisDebFixe;

    /**
     * Mois fin fixe.
     *
     * @var string|null
     */
    private $moisFinFixe;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Periode rappel.
     *
     * @var DateTime|null
     */
    private $periodeRappel;

    /**
     * Posit.
     *
     * @var int|null
     */
    private $posit;

    /**
     * Type ligne.
     *
     * @var string|null
     */
    private $typeLigne;

    /**
     * Valeur1.
     *
     * @var float|null
     */
    private $valeur1;

    /**
     * Valeur2.
     *
     * @var float|null
     */
    private $valeur2;

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
     * Get the code user.
     *
     * @return string|null Returns the code user.
     */
    public function getCodeUser(): ?string {
        return $this->codeUser;
    }

    /**
     * Get the date added.
     *
     * @return DateTime|null Returns the date added.
     */
    public function getDateAdded(): ?DateTime {
        return $this->dateAdded;
    }

    /**
     * Get the flag.
     *
     * @return int|null Returns the flag.
     */
    public function getFlag(): ?int {
        return $this->flag;
    }

    /**
     * Get the id.
     *
     * @return int|null Returns the id.
     */
    public function getId(): ?int {
        return $this->id;
    }

    /**
     * Get the indice periode.
     *
     * @return int|null Returns the indice periode.
     */
    public function getIndicePeriode(): ?int {
        return $this->indicePeriode;
    }

    /**
     * Get the intitule.
     *
     * @return string|null Returns the intitule.
     */
    public function getIntitule(): ?string {
        return $this->intitule;
    }

    /**
     * Get the intitule2.
     *
     * @return string|null Returns the intitule2.
     */
    public function getIntitule2(): ?string {
        return $this->intitule2;
    }

    /**
     * Get the mois deb fixe.
     *
     * @return string|null Returns the mois deb fixe.
     */
    public function getMoisDebFixe(): ?string {
        return $this->moisDebFixe;
    }

    /**
     * Get the mois fin fixe.
     *
     * @return string|null Returns the mois fin fixe.
     */
    public function getMoisFinFixe(): ?string {
        return $this->moisFinFixe;
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
     * Get the periode.
     *
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode(): ?DateTime {
        return $this->periode;
    }

    /**
     * Get the periode rappel.
     *
     * @return DateTime|null Returns the periode rappel.
     */
    public function getPeriodeRappel(): ?DateTime {
        return $this->periodeRappel;
    }

    /**
     * Get the posit.
     *
     * @return int|null Returns the posit.
     */
    public function getPosit(): ?int {
        return $this->posit;
    }

    /**
     * Get the type ligne.
     *
     * @return string|null Returns the type ligne.
     */
    public function getTypeLigne(): ?string {
        return $this->typeLigne;
    }

    /**
     * Get the valeur1.
     *
     * @return float|null Returns the valeur1.
     */
    public function getValeur1(): ?float {
        return $this->valeur1;
    }

    /**
     * Get the valeur2.
     *
     * @return float|null Returns the valeur2.
     */
    public function getValeur2(): ?float {
        return $this->valeur2;
    }

    /**
     * Set the code libelle.
     *
     * @param string|null $codeLibelle The code libelle.
     * @return tblSaisiePaieHisto Returns this tbl saisie paie histo.
     */
    public function setCodeLibelle(?string $codeLibelle): tblSaisiePaieHisto {
        $this->codeLibelle = $codeLibelle;
        return $this;
    }

    /**
     * Set the code user.
     *
     * @param string|null $codeUser The code user.
     * @return tblSaisiePaieHisto Returns this tbl saisie paie histo.
     */
    public function setCodeUser(?string $codeUser): tblSaisiePaieHisto {
        $this->codeUser = $codeUser;
        return $this;
    }

    /**
     * Set the date added.
     *
     * @param DateTime|null $dateAdded The date added.
     * @return tblSaisiePaieHisto Returns this tbl saisie paie histo.
     */
    public function setDateAdded(?DateTime $dateAdded): tblSaisiePaieHisto {
        $this->dateAdded = $dateAdded;
        return $this;
    }

    /**
     * Set the flag.
     *
     * @param int|null $flag The flag.
     * @return tblSaisiePaieHisto Returns this tbl saisie paie histo.
     */
    public function setFlag(?int $flag): tblSaisiePaieHisto {
        $this->flag = $flag;
        return $this;
    }

    /**
     * Set the id.
     *
     * @param int|null $id The id.
     * @return tblSaisiePaieHisto Returns this tbl saisie paie histo.
     */
    public function setId(?int $id): tblSaisiePaieHisto {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the indice periode.
     *
     * @param int|null $indicePeriode The indice periode.
     * @return tblSaisiePaieHisto Returns this tbl saisie paie histo.
     */
    public function setIndicePeriode(?int $indicePeriode): tblSaisiePaieHisto {
        $this->indicePeriode = $indicePeriode;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return tblSaisiePaieHisto Returns this tbl saisie paie histo.
     */
    public function setIntitule(?string $intitule): tblSaisiePaieHisto {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the intitule2.
     *
     * @param string|null $intitule2 The intitule2.
     * @return tblSaisiePaieHisto Returns this tbl saisie paie histo.
     */
    public function setIntitule2(?string $intitule2): tblSaisiePaieHisto {
        $this->intitule2 = $intitule2;
        return $this;
    }

    /**
     * Set the mois deb fixe.
     *
     * @param string|null $moisDebFixe The mois deb fixe.
     * @return tblSaisiePaieHisto Returns this tbl saisie paie histo.
     */
    public function setMoisDebFixe(?string $moisDebFixe): tblSaisiePaieHisto {
        $this->moisDebFixe = $moisDebFixe;
        return $this;
    }

    /**
     * Set the mois fin fixe.
     *
     * @param string|null $moisFinFixe The mois fin fixe.
     * @return tblSaisiePaieHisto Returns this tbl saisie paie histo.
     */
    public function setMoisFinFixe(?string $moisFinFixe): tblSaisiePaieHisto {
        $this->moisFinFixe = $moisFinFixe;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return tblSaisiePaieHisto Returns this tbl saisie paie histo.
     */
    public function setNumeroEmploye(?string $numeroEmploye): tblSaisiePaieHisto {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return tblSaisiePaieHisto Returns this tbl saisie paie histo.
     */
    public function setPeriode(?DateTime $periode): tblSaisiePaieHisto {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the periode rappel.
     *
     * @param DateTime|null $periodeRappel The periode rappel.
     * @return tblSaisiePaieHisto Returns this tbl saisie paie histo.
     */
    public function setPeriodeRappel(?DateTime $periodeRappel): tblSaisiePaieHisto {
        $this->periodeRappel = $periodeRappel;
        return $this;
    }

    /**
     * Set the posit.
     *
     * @param int|null $posit The posit.
     * @return tblSaisiePaieHisto Returns this tbl saisie paie histo.
     */
    public function setPosit(?int $posit): tblSaisiePaieHisto {
        $this->posit = $posit;
        return $this;
    }

    /**
     * Set the type ligne.
     *
     * @param string|null $typeLigne The type ligne.
     * @return tblSaisiePaieHisto Returns this tbl saisie paie histo.
     */
    public function setTypeLigne(?string $typeLigne): tblSaisiePaieHisto {
        $this->typeLigne = $typeLigne;
        return $this;
    }

    /**
     * Set the valeur1.
     *
     * @param float|null $valeur1 The valeur1.
     * @return tblSaisiePaieHisto Returns this tbl saisie paie histo.
     */
    public function setValeur1(?float $valeur1): tblSaisiePaieHisto {
        $this->valeur1 = $valeur1;
        return $this;
    }

    /**
     * Set the valeur2.
     *
     * @param float|null $valeur2 The valeur2.
     * @return tblSaisiePaieHisto Returns this tbl saisie paie histo.
     */
    public function setValeur2(?float $valeur2): tblSaisiePaieHisto {
        $this->valeur2 = $valeur2;
        return $this;
    }
}
