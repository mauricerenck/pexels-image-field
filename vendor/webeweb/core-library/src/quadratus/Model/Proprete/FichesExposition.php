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
 * Fiches exposition.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class FichesExposition {

    /**
     * Code employe.
     *
     * @var string|null
     */
    private $codeEmploye;

    /**
     * Code prestation.
     *
     * @var string|null
     */
    private $codePrestation;

    /**
     * Code produit.
     *
     * @var string|null
     */
    private $codeProduit;

    /**
     * Date ctrl.
     *
     * @var DateTime|null
     */
    private $dateCtrl;

    /**
     * Date deb expo.
     *
     * @var DateTime|null
     */
    private $dateDebExpo;

    /**
     * Date fiche.
     *
     * @var DateTime|null
     */
    private $dateFiche;

    /**
     * Date fin expo.
     *
     * @var DateTime|null
     */
    private $dateFinExpo;

    /**
     * Lst code phase.
     *
     * @var string|null
     */
    private $lstCodePhase;

    /**
     * Lst code prev.
     *
     * @var string|null
     */
    private $lstCodePrev;

    /**
     * Resu ctrl.
     *
     * @var string|null
     */
    private $resuCtrl;

    /**
     * Temps exposition.
     *
     * @var float|null
     */
    private $tempsExposition;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
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
     * Get the code prestation.
     *
     * @return string|null Returns the code prestation.
     */
    public function getCodePrestation(): ?string {
        return $this->codePrestation;
    }

    /**
     * Get the code produit.
     *
     * @return string|null Returns the code produit.
     */
    public function getCodeProduit(): ?string {
        return $this->codeProduit;
    }

    /**
     * Get the date ctrl.
     *
     * @return DateTime|null Returns the date ctrl.
     */
    public function getDateCtrl(): ?DateTime {
        return $this->dateCtrl;
    }

    /**
     * Get the date deb expo.
     *
     * @return DateTime|null Returns the date deb expo.
     */
    public function getDateDebExpo(): ?DateTime {
        return $this->dateDebExpo;
    }

    /**
     * Get the date fiche.
     *
     * @return DateTime|null Returns the date fiche.
     */
    public function getDateFiche(): ?DateTime {
        return $this->dateFiche;
    }

    /**
     * Get the date fin expo.
     *
     * @return DateTime|null Returns the date fin expo.
     */
    public function getDateFinExpo(): ?DateTime {
        return $this->dateFinExpo;
    }

    /**
     * Get the lst code phase.
     *
     * @return string|null Returns the lst code phase.
     */
    public function getLstCodePhase(): ?string {
        return $this->lstCodePhase;
    }

    /**
     * Get the lst code prev.
     *
     * @return string|null Returns the lst code prev.
     */
    public function getLstCodePrev(): ?string {
        return $this->lstCodePrev;
    }

    /**
     * Get the resu ctrl.
     *
     * @return string|null Returns the resu ctrl.
     */
    public function getResuCtrl(): ?string {
        return $this->resuCtrl;
    }

    /**
     * Get the temps exposition.
     *
     * @return float|null Returns the temps exposition.
     */
    public function getTempsExposition(): ?float {
        return $this->tempsExposition;
    }

    /**
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return FichesExposition Returns this Fiches exposition.
     */
    public function setCodeEmploye(?string $codeEmploye): FichesExposition {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code prestation.
     *
     * @param string|null $codePrestation The code prestation.
     * @return FichesExposition Returns this Fiches exposition.
     */
    public function setCodePrestation(?string $codePrestation): FichesExposition {
        $this->codePrestation = $codePrestation;
        return $this;
    }

    /**
     * Set the code produit.
     *
     * @param string|null $codeProduit The code produit.
     * @return FichesExposition Returns this Fiches exposition.
     */
    public function setCodeProduit(?string $codeProduit): FichesExposition {
        $this->codeProduit = $codeProduit;
        return $this;
    }

    /**
     * Set the date ctrl.
     *
     * @param DateTime|null $dateCtrl The date ctrl.
     * @return FichesExposition Returns this Fiches exposition.
     */
    public function setDateCtrl(?DateTime $dateCtrl): FichesExposition {
        $this->dateCtrl = $dateCtrl;
        return $this;
    }

    /**
     * Set the date deb expo.
     *
     * @param DateTime|null $dateDebExpo The date deb expo.
     * @return FichesExposition Returns this Fiches exposition.
     */
    public function setDateDebExpo(?DateTime $dateDebExpo): FichesExposition {
        $this->dateDebExpo = $dateDebExpo;
        return $this;
    }

    /**
     * Set the date fiche.
     *
     * @param DateTime|null $dateFiche The date fiche.
     * @return FichesExposition Returns this Fiches exposition.
     */
    public function setDateFiche(?DateTime $dateFiche): FichesExposition {
        $this->dateFiche = $dateFiche;
        return $this;
    }

    /**
     * Set the date fin expo.
     *
     * @param DateTime|null $dateFinExpo The date fin expo.
     * @return FichesExposition Returns this Fiches exposition.
     */
    public function setDateFinExpo(?DateTime $dateFinExpo): FichesExposition {
        $this->dateFinExpo = $dateFinExpo;
        return $this;
    }

    /**
     * Set the lst code phase.
     *
     * @param string|null $lstCodePhase The lst code phase.
     * @return FichesExposition Returns this Fiches exposition.
     */
    public function setLstCodePhase(?string $lstCodePhase): FichesExposition {
        $this->lstCodePhase = $lstCodePhase;
        return $this;
    }

    /**
     * Set the lst code prev.
     *
     * @param string|null $lstCodePrev The lst code prev.
     * @return FichesExposition Returns this Fiches exposition.
     */
    public function setLstCodePrev(?string $lstCodePrev): FichesExposition {
        $this->lstCodePrev = $lstCodePrev;
        return $this;
    }

    /**
     * Set the resu ctrl.
     *
     * @param string|null $resuCtrl The resu ctrl.
     * @return FichesExposition Returns this Fiches exposition.
     */
    public function setResuCtrl(?string $resuCtrl): FichesExposition {
        $this->resuCtrl = $resuCtrl;
        return $this;
    }

    /**
     * Set the temps exposition.
     *
     * @param float|null $tempsExposition The temps exposition.
     * @return FichesExposition Returns this Fiches exposition.
     */
    public function setTempsExposition(?float $tempsExposition): FichesExposition {
        $this->tempsExposition = $tempsExposition;
        return $this;
    }
}
