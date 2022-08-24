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
 * Saisie arret.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class SaisieArret {

    /**
     * Dt courrier.
     *
     * @var DateTime|null
     */
    private $dtCourrier;

    /**
     * Dt debut saisie.
     *
     * @var DateTime|null
     */
    private $dtDebutSaisie;

    /**
     * Dt fin saisie.
     *
     * @var DateTime|null
     */
    private $dtFinSaisie;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Mt creance.
     *
     * @var float|null
     */
    private $mtCreance;

    /**
     * Mt deja paye.
     *
     * @var float|null
     */
    private $mtDejaPaye;

    /**
     * Nb a charge.
     *
     * @var string|null
     */
    private $nbACharge;

    /**
     * Nom tribunal.
     *
     * @var string|null
     */
    private $nomTribunal;

    /**
     * Numero employe.
     *
     * @var string|null
     */
    private $numeroEmploye;

    /**
     * Type saisie.
     *
     * @var string|null
     */
    private $typeSaisie;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the dt courrier.
     *
     * @return DateTime|null Returns the dt courrier.
     */
    public function getDtCourrier(): ?DateTime {
        return $this->dtCourrier;
    }

    /**
     * Get the dt debut saisie.
     *
     * @return DateTime|null Returns the dt debut saisie.
     */
    public function getDtDebutSaisie(): ?DateTime {
        return $this->dtDebutSaisie;
    }

    /**
     * Get the dt fin saisie.
     *
     * @return DateTime|null Returns the dt fin saisie.
     */
    public function getDtFinSaisie(): ?DateTime {
        return $this->dtFinSaisie;
    }

    /**
     * Get the libelle.
     *
     * @return string|null Returns the libelle.
     */
    public function getLibelle(): ?string {
        return $this->libelle;
    }

    /**
     * Get the mt creance.
     *
     * @return float|null Returns the mt creance.
     */
    public function getMtCreance(): ?float {
        return $this->mtCreance;
    }

    /**
     * Get the mt deja paye.
     *
     * @return float|null Returns the mt deja paye.
     */
    public function getMtDejaPaye(): ?float {
        return $this->mtDejaPaye;
    }

    /**
     * Get the nb a charge.
     *
     * @return string|null Returns the nb a charge.
     */
    public function getNbACharge(): ?string {
        return $this->nbACharge;
    }

    /**
     * Get the nom tribunal.
     *
     * @return string|null Returns the nom tribunal.
     */
    public function getNomTribunal(): ?string {
        return $this->nomTribunal;
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
     * Get the type saisie.
     *
     * @return string|null Returns the type saisie.
     */
    public function getTypeSaisie(): ?string {
        return $this->typeSaisie;
    }

    /**
     * Set the dt courrier.
     *
     * @param DateTime|null $dtCourrier The dt courrier.
     * @return SaisieArret Returns this Saisie arret.
     */
    public function setDtCourrier(?DateTime $dtCourrier): SaisieArret {
        $this->dtCourrier = $dtCourrier;
        return $this;
    }

    /**
     * Set the dt debut saisie.
     *
     * @param DateTime|null $dtDebutSaisie The dt debut saisie.
     * @return SaisieArret Returns this Saisie arret.
     */
    public function setDtDebutSaisie(?DateTime $dtDebutSaisie): SaisieArret {
        $this->dtDebutSaisie = $dtDebutSaisie;
        return $this;
    }

    /**
     * Set the dt fin saisie.
     *
     * @param DateTime|null $dtFinSaisie The dt fin saisie.
     * @return SaisieArret Returns this Saisie arret.
     */
    public function setDtFinSaisie(?DateTime $dtFinSaisie): SaisieArret {
        $this->dtFinSaisie = $dtFinSaisie;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return SaisieArret Returns this Saisie arret.
     */
    public function setLibelle(?string $libelle): SaisieArret {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the mt creance.
     *
     * @param float|null $mtCreance The mt creance.
     * @return SaisieArret Returns this Saisie arret.
     */
    public function setMtCreance(?float $mtCreance): SaisieArret {
        $this->mtCreance = $mtCreance;
        return $this;
    }

    /**
     * Set the mt deja paye.
     *
     * @param float|null $mtDejaPaye The mt deja paye.
     * @return SaisieArret Returns this Saisie arret.
     */
    public function setMtDejaPaye(?float $mtDejaPaye): SaisieArret {
        $this->mtDejaPaye = $mtDejaPaye;
        return $this;
    }

    /**
     * Set the nb a charge.
     *
     * @param string|null $nbACharge The nb a charge.
     * @return SaisieArret Returns this Saisie arret.
     */
    public function setNbACharge(?string $nbACharge): SaisieArret {
        $this->nbACharge = $nbACharge;
        return $this;
    }

    /**
     * Set the nom tribunal.
     *
     * @param string|null $nomTribunal The nom tribunal.
     * @return SaisieArret Returns this Saisie arret.
     */
    public function setNomTribunal(?string $nomTribunal): SaisieArret {
        $this->nomTribunal = $nomTribunal;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string|null $numeroEmploye The numero employe.
     * @return SaisieArret Returns this Saisie arret.
     */
    public function setNumeroEmploye(?string $numeroEmploye): SaisieArret {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the type saisie.
     *
     * @param string|null $typeSaisie The type saisie.
     * @return SaisieArret Returns this Saisie arret.
     */
    public function setTypeSaisie(?string $typeSaisie): SaisieArret {
        $this->typeSaisie = $typeSaisie;
        return $this;
    }
}
