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
 * Emp dadsu prevoyance ayant droit.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class EmpDadsuPrevoyanceAyantDroit {

    /**
     * Code a charge.
     *
     * @var string|null
     */
    private $codeACharge;

    /**
     * Code affil secu.
     *
     * @var string|null
     */
    private $codeAffilSecu;

    /**
     * Code autre couverture.
     *
     * @var string|null
     */
    private $codeAutreCouverture;

    /**
     * Code extension secu.
     *
     * @var string|null
     */
    private $codeExtensionSecu;

    /**
     * Code scolarise.
     *
     * @var string|null
     */
    private $codeScolarise;

    /**
     * Code type.
     *
     * @var string|null
     */
    private $codeType;

    /**
     * Date naissance.
     *
     * @var DateTime|null
     */
    private $dateNaissance;

    /**
     * Nir.
     *
     * @var string|null
     */
    private $nir;

    /**
     * Nir rattachement.
     *
     * @var string|null
     */
    private $nirRattachement;

    /**
     * Nom.
     *
     * @var string|null
     */
    private $nom;

    /**
     * Numero ayant droit.
     *
     * @var int|null
     */
    private $numeroAyantDroit;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Prenom.
     *
     * @var string|null
     */
    private $prenom;

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
     * Get the code a charge.
     *
     * @return string|null Returns the code a charge.
     */
    public function getCodeACharge(): ?string {
        return $this->codeACharge;
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
     * Get the code autre couverture.
     *
     * @return string|null Returns the code autre couverture.
     */
    public function getCodeAutreCouverture(): ?string {
        return $this->codeAutreCouverture;
    }

    /**
     * Get the code extension secu.
     *
     * @return string|null Returns the code extension secu.
     */
    public function getCodeExtensionSecu(): ?string {
        return $this->codeExtensionSecu;
    }

    /**
     * Get the code scolarise.
     *
     * @return string|null Returns the code scolarise.
     */
    public function getCodeScolarise(): ?string {
        return $this->codeScolarise;
    }

    /**
     * Get the code type.
     *
     * @return string|null Returns the code type.
     */
    public function getCodeType(): ?string {
        return $this->codeType;
    }

    /**
     * Get the date naissance.
     *
     * @return DateTime|null Returns the date naissance.
     */
    public function getDateNaissance(): ?DateTime {
        return $this->dateNaissance;
    }

    /**
     * Get the nir.
     *
     * @return string|null Returns the nir.
     */
    public function getNir(): ?string {
        return $this->nir;
    }

    /**
     * Get the nir rattachement.
     *
     * @return string|null Returns the nir rattachement.
     */
    public function getNirRattachement(): ?string {
        return $this->nirRattachement;
    }

    /**
     * Get the nom.
     *
     * @return string|null Returns the nom.
     */
    public function getNom(): ?string {
        return $this->nom;
    }

    /**
     * Get the numero ayant droit.
     *
     * @return int|null Returns the numero ayant droit.
     */
    public function getNumeroAyantDroit(): ?int {
        return $this->numeroAyantDroit;
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
     * Get the prenom.
     *
     * @return string|null Returns the prenom.
     */
    public function getPrenom(): ?string {
        return $this->prenom;
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
     * Set the code a charge.
     *
     * @param string|null $codeACharge The code a charge.
     * @return EmpDadsuPrevoyanceAyantDroit Returns this Emp dadsu prevoyance ayant droit.
     */
    public function setCodeACharge(?string $codeACharge): EmpDadsuPrevoyanceAyantDroit {
        $this->codeACharge = $codeACharge;
        return $this;
    }

    /**
     * Set the code affil secu.
     *
     * @param string|null $codeAffilSecu The code affil secu.
     * @return EmpDadsuPrevoyanceAyantDroit Returns this Emp dadsu prevoyance ayant droit.
     */
    public function setCodeAffilSecu(?string $codeAffilSecu): EmpDadsuPrevoyanceAyantDroit {
        $this->codeAffilSecu = $codeAffilSecu;
        return $this;
    }

    /**
     * Set the code autre couverture.
     *
     * @param string|null $codeAutreCouverture The code autre couverture.
     * @return EmpDadsuPrevoyanceAyantDroit Returns this Emp dadsu prevoyance ayant droit.
     */
    public function setCodeAutreCouverture(?string $codeAutreCouverture): EmpDadsuPrevoyanceAyantDroit {
        $this->codeAutreCouverture = $codeAutreCouverture;
        return $this;
    }

    /**
     * Set the code extension secu.
     *
     * @param string|null $codeExtensionSecu The code extension secu.
     * @return EmpDadsuPrevoyanceAyantDroit Returns this Emp dadsu prevoyance ayant droit.
     */
    public function setCodeExtensionSecu(?string $codeExtensionSecu): EmpDadsuPrevoyanceAyantDroit {
        $this->codeExtensionSecu = $codeExtensionSecu;
        return $this;
    }

    /**
     * Set the code scolarise.
     *
     * @param string|null $codeScolarise The code scolarise.
     * @return EmpDadsuPrevoyanceAyantDroit Returns this Emp dadsu prevoyance ayant droit.
     */
    public function setCodeScolarise(?string $codeScolarise): EmpDadsuPrevoyanceAyantDroit {
        $this->codeScolarise = $codeScolarise;
        return $this;
    }

    /**
     * Set the code type.
     *
     * @param string|null $codeType The code type.
     * @return EmpDadsuPrevoyanceAyantDroit Returns this Emp dadsu prevoyance ayant droit.
     */
    public function setCodeType(?string $codeType): EmpDadsuPrevoyanceAyantDroit {
        $this->codeType = $codeType;
        return $this;
    }

    /**
     * Set the date naissance.
     *
     * @param DateTime|null $dateNaissance The date naissance.
     * @return EmpDadsuPrevoyanceAyantDroit Returns this Emp dadsu prevoyance ayant droit.
     */
    public function setDateNaissance(?DateTime $dateNaissance): EmpDadsuPrevoyanceAyantDroit {
        $this->dateNaissance = $dateNaissance;
        return $this;
    }

    /**
     * Set the nir.
     *
     * @param string|null $nir The nir.
     * @return EmpDadsuPrevoyanceAyantDroit Returns this Emp dadsu prevoyance ayant droit.
     */
    public function setNir(?string $nir): EmpDadsuPrevoyanceAyantDroit {
        $this->nir = $nir;
        return $this;
    }

    /**
     * Set the nir rattachement.
     *
     * @param string|null $nirRattachement The nir rattachement.
     * @return EmpDadsuPrevoyanceAyantDroit Returns this Emp dadsu prevoyance ayant droit.
     */
    public function setNirRattachement(?string $nirRattachement): EmpDadsuPrevoyanceAyantDroit {
        $this->nirRattachement = $nirRattachement;
        return $this;
    }

    /**
     * Set the nom.
     *
     * @param string|null $nom The nom.
     * @return EmpDadsuPrevoyanceAyantDroit Returns this Emp dadsu prevoyance ayant droit.
     */
    public function setNom(?string $nom): EmpDadsuPrevoyanceAyantDroit {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Set the numero ayant droit.
     *
     * @param int|null $numeroAyantDroit The numero ayant droit.
     * @return EmpDadsuPrevoyanceAyantDroit Returns this Emp dadsu prevoyance ayant droit.
     */
    public function setNumeroAyantDroit(?int $numeroAyantDroit): EmpDadsuPrevoyanceAyantDroit {
        $this->numeroAyantDroit = $numeroAyantDroit;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return EmpDadsuPrevoyanceAyantDroit Returns this Emp dadsu prevoyance ayant droit.
     */
    public function setNumeroEmploye(?string $numeroEmploye): EmpDadsuPrevoyanceAyantDroit {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the prenom.
     *
     * @param string|null $prenom The prenom.
     * @return EmpDadsuPrevoyanceAyantDroit Returns this Emp dadsu prevoyance ayant droit.
     */
    public function setPrenom(?string $prenom): EmpDadsuPrevoyanceAyantDroit {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Set the rang naissance.
     *
     * @param string|null $rangNaissance The rang naissance.
     * @return EmpDadsuPrevoyanceAyantDroit Returns this Emp dadsu prevoyance ayant droit.
     */
    public function setRangNaissance(?string $rangNaissance): EmpDadsuPrevoyanceAyantDroit {
        $this->rangNaissance = $rangNaissance;
        return $this;
    }
}
