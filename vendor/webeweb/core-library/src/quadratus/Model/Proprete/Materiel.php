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
 * Materiel.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class Materiel {

    /**
     * Code barre.
     *
     * @var string|null
     */
    private $codeBarre;

    /**
     * Code materiel.
     *
     * @var string|null
     */
    private $codeMateriel;

    /**
     * Date achat.
     *
     * @var DateTime|null
     */
    private $dateAchat;

    /**
     * Date debut amortissement.
     *
     * @var DateTime|null
     */
    private $dateDebutAmortissement;

    /**
     * Date fin amortissement.
     *
     * @var DateTime|null
     */
    private $dateFinAmortissement;

    /**
     * Date fin service.
     *
     * @var DateTime|null
     */
    private $dateFinService;

    /**
     * Date mise en service.
     *
     * @var DateTime|null
     */
    private $dateMiseEnService;

    /**
     * Designation1.
     *
     * @var string|null
     */
    private $designation1;

    /**
     * Designation2.
     *
     * @var string|null
     */
    private $designation2;

    /**
     * Designation3.
     *
     * @var string|null
     */
    private $designation3;

    /**
     * Designation4.
     *
     * @var string|null
     */
    private $designation4;

    /**
     * Designation5.
     *
     * @var string|null
     */
    private $designation5;

    /**
     * Montant amortissement.
     *
     * @var float|null
     */
    private $montantAmortissement;

    /**
     * Numero serie.
     *
     * @var string|null
     */
    private $numeroSerie;

    /**
     * Val achat euro.
     *
     * @var float|null
     */
    private $valAchatEuro;

    /**
     * Val achat frf.
     *
     * @var float|null
     */
    private $valAchatFrf;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code barre.
     *
     * @return string|null Returns the code barre.
     */
    public function getCodeBarre(): ?string {
        return $this->codeBarre;
    }

    /**
     * Get the code materiel.
     *
     * @return string|null Returns the code materiel.
     */
    public function getCodeMateriel(): ?string {
        return $this->codeMateriel;
    }

    /**
     * Get the date achat.
     *
     * @return DateTime|null Returns the date achat.
     */
    public function getDateAchat(): ?DateTime {
        return $this->dateAchat;
    }

    /**
     * Get the date debut amortissement.
     *
     * @return DateTime|null Returns the date debut amortissement.
     */
    public function getDateDebutAmortissement(): ?DateTime {
        return $this->dateDebutAmortissement;
    }

    /**
     * Get the date fin amortissement.
     *
     * @return DateTime|null Returns the date fin amortissement.
     */
    public function getDateFinAmortissement(): ?DateTime {
        return $this->dateFinAmortissement;
    }

    /**
     * Get the date fin service.
     *
     * @return DateTime|null Returns the date fin service.
     */
    public function getDateFinService(): ?DateTime {
        return $this->dateFinService;
    }

    /**
     * Get the date mise en service.
     *
     * @return DateTime|null Returns the date mise en service.
     */
    public function getDateMiseEnService(): ?DateTime {
        return $this->dateMiseEnService;
    }

    /**
     * Get the designation1.
     *
     * @return string|null Returns the designation1.
     */
    public function getDesignation1(): ?string {
        return $this->designation1;
    }

    /**
     * Get the designation2.
     *
     * @return string|null Returns the designation2.
     */
    public function getDesignation2(): ?string {
        return $this->designation2;
    }

    /**
     * Get the designation3.
     *
     * @return string|null Returns the designation3.
     */
    public function getDesignation3(): ?string {
        return $this->designation3;
    }

    /**
     * Get the designation4.
     *
     * @return string|null Returns the designation4.
     */
    public function getDesignation4(): ?string {
        return $this->designation4;
    }

    /**
     * Get the designation5.
     *
     * @return string|null Returns the designation5.
     */
    public function getDesignation5(): ?string {
        return $this->designation5;
    }

    /**
     * Get the montant amortissement.
     *
     * @return float|null Returns the montant amortissement.
     */
    public function getMontantAmortissement(): ?float {
        return $this->montantAmortissement;
    }

    /**
     * Get the numero serie.
     *
     * @return string|null Returns the numero serie.
     */
    public function getNumeroSerie(): ?string {
        return $this->numeroSerie;
    }

    /**
     * Get the val achat euro.
     *
     * @return float|null Returns the val achat euro.
     */
    public function getValAchatEuro(): ?float {
        return $this->valAchatEuro;
    }

    /**
     * Get the val achat frf.
     *
     * @return float|null Returns the val achat frf.
     */
    public function getValAchatFrf(): ?float {
        return $this->valAchatFrf;
    }

    /**
     * Set the code barre.
     *
     * @param string|null $codeBarre The code barre.
     * @return Materiel Returns this Materiel.
     */
    public function setCodeBarre(?string $codeBarre): Materiel {
        $this->codeBarre = $codeBarre;
        return $this;
    }

    /**
     * Set the code materiel.
     *
     * @param string|null $codeMateriel The code materiel.
     * @return Materiel Returns this Materiel.
     */
    public function setCodeMateriel(?string $codeMateriel): Materiel {
        $this->codeMateriel = $codeMateriel;
        return $this;
    }

    /**
     * Set the date achat.
     *
     * @param DateTime|null $dateAchat The date achat.
     * @return Materiel Returns this Materiel.
     */
    public function setDateAchat(?DateTime $dateAchat): Materiel {
        $this->dateAchat = $dateAchat;
        return $this;
    }

    /**
     * Set the date debut amortissement.
     *
     * @param DateTime|null $dateDebutAmortissement The date debut amortissement.
     * @return Materiel Returns this Materiel.
     */
    public function setDateDebutAmortissement(?DateTime $dateDebutAmortissement): Materiel {
        $this->dateDebutAmortissement = $dateDebutAmortissement;
        return $this;
    }

    /**
     * Set the date fin amortissement.
     *
     * @param DateTime|null $dateFinAmortissement The date fin amortissement.
     * @return Materiel Returns this Materiel.
     */
    public function setDateFinAmortissement(?DateTime $dateFinAmortissement): Materiel {
        $this->dateFinAmortissement = $dateFinAmortissement;
        return $this;
    }

    /**
     * Set the date fin service.
     *
     * @param DateTime|null $dateFinService The date fin service.
     * @return Materiel Returns this Materiel.
     */
    public function setDateFinService(?DateTime $dateFinService): Materiel {
        $this->dateFinService = $dateFinService;
        return $this;
    }

    /**
     * Set the date mise en service.
     *
     * @param DateTime|null $dateMiseEnService The date mise en service.
     * @return Materiel Returns this Materiel.
     */
    public function setDateMiseEnService(?DateTime $dateMiseEnService): Materiel {
        $this->dateMiseEnService = $dateMiseEnService;
        return $this;
    }

    /**
     * Set the designation1.
     *
     * @param string|null $designation1 The designation1.
     * @return Materiel Returns this Materiel.
     */
    public function setDesignation1(?string $designation1): Materiel {
        $this->designation1 = $designation1;
        return $this;
    }

    /**
     * Set the designation2.
     *
     * @param string|null $designation2 The designation2.
     * @return Materiel Returns this Materiel.
     */
    public function setDesignation2(?string $designation2): Materiel {
        $this->designation2 = $designation2;
        return $this;
    }

    /**
     * Set the designation3.
     *
     * @param string|null $designation3 The designation3.
     * @return Materiel Returns this Materiel.
     */
    public function setDesignation3(?string $designation3): Materiel {
        $this->designation3 = $designation3;
        return $this;
    }

    /**
     * Set the designation4.
     *
     * @param string|null $designation4 The designation4.
     * @return Materiel Returns this Materiel.
     */
    public function setDesignation4(?string $designation4): Materiel {
        $this->designation4 = $designation4;
        return $this;
    }

    /**
     * Set the designation5.
     *
     * @param string|null $designation5 The designation5.
     * @return Materiel Returns this Materiel.
     */
    public function setDesignation5(?string $designation5): Materiel {
        $this->designation5 = $designation5;
        return $this;
    }

    /**
     * Set the montant amortissement.
     *
     * @param float|null $montantAmortissement The montant amortissement.
     * @return Materiel Returns this Materiel.
     */
    public function setMontantAmortissement(?float $montantAmortissement): Materiel {
        $this->montantAmortissement = $montantAmortissement;
        return $this;
    }

    /**
     * Set the numero serie.
     *
     * @param string|null $numeroSerie The numero serie.
     * @return Materiel Returns this Materiel.
     */
    public function setNumeroSerie(?string $numeroSerie): Materiel {
        $this->numeroSerie = $numeroSerie;
        return $this;
    }

    /**
     * Set the val achat euro.
     *
     * @param float|null $valAchatEuro The val achat euro.
     * @return Materiel Returns this Materiel.
     */
    public function setValAchatEuro(?float $valAchatEuro): Materiel {
        $this->valAchatEuro = $valAchatEuro;
        return $this;
    }

    /**
     * Set the val achat frf.
     *
     * @param float|null $valAchatFrf The val achat frf.
     * @return Materiel Returns this Materiel.
     */
    public function setValAchatFrf(?float $valAchatFrf): Materiel {
        $this->valAchatFrf = $valAchatFrf;
        return $this;
    }
}
