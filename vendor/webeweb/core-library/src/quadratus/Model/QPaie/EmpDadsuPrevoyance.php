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
 * Emp dadsu prevoyance.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class EmpDadsuPrevoyance {

    /**
     * Code affil secu.
     *
     * @var string|null
     */
    private $codeAffilSecu;

    /**
     * Date ancien branche.
     *
     * @var DateTime|null
     */
    private $dateAncienBranche;

    /**
     * Date ancien college.
     *
     * @var DateTime|null
     */
    private $dateAncienCollege;

    /**
     * Date ancien poste.
     *
     * @var DateTime|null
     */
    private $dateAncienPoste;

    /**
     * Nb enfants.
     *
     * @var string|null
     */
    private $nbEnfants;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Prem date entree.
     *
     * @var DateTime|null
     */
    private $premDateEntree;

    /**
     * Rang naissance.
     *
     * @var string|null
     */
    private $rangNaissance;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code affil secu.
     *
     * @return string|null Returns the code affil secu.
     */
    public function getCodeAffilSecu(): ?string {
        return $this->codeAffilSecu;
    }

    /**
     * Get the date ancien branche.
     *
     * @return DateTime|null Returns the date ancien branche.
     */
    public function getDateAncienBranche(): ?DateTime {
        return $this->dateAncienBranche;
    }

    /**
     * Get the date ancien college.
     *
     * @return DateTime|null Returns the date ancien college.
     */
    public function getDateAncienCollege(): ?DateTime {
        return $this->dateAncienCollege;
    }

    /**
     * Get the date ancien poste.
     *
     * @return DateTime|null Returns the date ancien poste.
     */
    public function getDateAncienPoste(): ?DateTime {
        return $this->dateAncienPoste;
    }

    /**
     * Get the nb enfants.
     *
     * @return string|null Returns the nb enfants.
     */
    public function getNbEnfants(): ?string {
        return $this->nbEnfants;
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
     * Get the prem date entree.
     *
     * @return DateTime|null Returns the prem date entree.
     */
    public function getPremDateEntree(): ?DateTime {
        return $this->premDateEntree;
    }

    /**
     * Get the rang naissance.
     *
     * @return string|null Returns the rang naissance.
     */
    public function getRangNaissance(): ?string {
        return $this->rangNaissance;
    }

    /**
     * Set the code affil secu.
     *
     * @param string|null $codeAffilSecu The code affil secu.
     * @return EmpDadsuPrevoyance Returns this Emp dadsu prevoyance.
     */
    public function setCodeAffilSecu(?string $codeAffilSecu): EmpDadsuPrevoyance {
        $this->codeAffilSecu = $codeAffilSecu;
        return $this;
    }

    /**
     * Set the date ancien branche.
     *
     * @param DateTime|null $dateAncienBranche The date ancien branche.
     * @return EmpDadsuPrevoyance Returns this Emp dadsu prevoyance.
     */
    public function setDateAncienBranche(?DateTime $dateAncienBranche): EmpDadsuPrevoyance {
        $this->dateAncienBranche = $dateAncienBranche;
        return $this;
    }

    /**
     * Set the date ancien college.
     *
     * @param DateTime|null $dateAncienCollege The date ancien college.
     * @return EmpDadsuPrevoyance Returns this Emp dadsu prevoyance.
     */
    public function setDateAncienCollege(?DateTime $dateAncienCollege): EmpDadsuPrevoyance {
        $this->dateAncienCollege = $dateAncienCollege;
        return $this;
    }

    /**
     * Set the date ancien poste.
     *
     * @param DateTime|null $dateAncienPoste The date ancien poste.
     * @return EmpDadsuPrevoyance Returns this Emp dadsu prevoyance.
     */
    public function setDateAncienPoste(?DateTime $dateAncienPoste): EmpDadsuPrevoyance {
        $this->dateAncienPoste = $dateAncienPoste;
        return $this;
    }

    /**
     * Set the nb enfants.
     *
     * @param string|null $nbEnfants The nb enfants.
     * @return EmpDadsuPrevoyance Returns this Emp dadsu prevoyance.
     */
    public function setNbEnfants(?string $nbEnfants): EmpDadsuPrevoyance {
        $this->nbEnfants = $nbEnfants;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return EmpDadsuPrevoyance Returns this Emp dadsu prevoyance.
     */
    public function setNumeroEmploye(?string $numeroEmploye): EmpDadsuPrevoyance {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the prem date entree.
     *
     * @param DateTime|null $premDateEntree The prem date entree.
     * @return EmpDadsuPrevoyance Returns this Emp dadsu prevoyance.
     */
    public function setPremDateEntree(?DateTime $premDateEntree): EmpDadsuPrevoyance {
        $this->premDateEntree = $premDateEntree;
        return $this;
    }

    /**
     * Set the rang naissance.
     *
     * @param string|null $rangNaissance The rang naissance.
     * @return EmpDadsuPrevoyance Returns this Emp dadsu prevoyance.
     */
    public function setRangNaissance(?string $rangNaissance): EmpDadsuPrevoyance {
        $this->rangNaissance = $rangNaissance;
        return $this;
    }
}
