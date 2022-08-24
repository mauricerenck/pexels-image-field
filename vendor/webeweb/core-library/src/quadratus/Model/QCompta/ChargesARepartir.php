<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QCompta;

use DateTime;

/**
 * Charges a repartir.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class ChargesARepartir {

    /**
     * Code centre.
     *
     * @var string|null
     */
    private $codeCentre;

    /**
     * Coeff degressif.
     *
     * @var float|null
     */
    private $coeffDegressif;

    /**
     * Date.
     *
     * @var DateTime|null
     */
    private $date;

    /**
     * Duree.
     *
     * @var float|null
     */
    private $duree;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Montant.
     *
     * @var float|null
     */
    private $montant;

    /**
     * Num contrat.
     *
     * @var string|null
     */
    private $numContrat;

    /**
     * Num cpt car.
     *
     * @var string|null
     */
    private $numCptCar;

    /**
     * Numero pj.
     *
     * @var int|null
     */
    private $numeroPj;

    /**
     * Taux lineaire.
     *
     * @var float|null
     */
    private $tauxLineaire;

    /**
     * Type amort.
     *
     * @var string|null
     */
    private $typeAmort;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code centre.
     *
     * @return string|null Returns the code centre.
     */
    public function getCodeCentre(): ?string {
        return $this->codeCentre;
    }

    /**
     * Get the coeff degressif.
     *
     * @return float|null Returns the coeff degressif.
     */
    public function getCoeffDegressif(): ?float {
        return $this->coeffDegressif;
    }

    /**
     * Get the date.
     *
     * @return DateTime|null Returns the date.
     */
    public function getDate(): ?DateTime {
        return $this->date;
    }

    /**
     * Get the duree.
     *
     * @return float|null Returns the duree.
     */
    public function getDuree(): ?float {
        return $this->duree;
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
     * Get the montant.
     *
     * @return float|null Returns the montant.
     */
    public function getMontant(): ?float {
        return $this->montant;
    }

    /**
     * Get the num contrat.
     *
     * @return string|null Returns the num contrat.
     */
    public function getNumContrat(): ?string {
        return $this->numContrat;
    }

    /**
     * Get the num cpt car.
     *
     * @return string|null Returns the num cpt car.
     */
    public function getNumCptCar(): ?string {
        return $this->numCptCar;
    }

    /**
     * Get the numero pj.
     *
     * @return int|null Returns the numero pj.
     */
    public function getNumeroPj(): ?int {
        return $this->numeroPj;
    }

    /**
     * Get the taux lineaire.
     *
     * @return float|null Returns the taux lineaire.
     */
    public function getTauxLineaire(): ?float {
        return $this->tauxLineaire;
    }

    /**
     * Get the type amort.
     *
     * @return string|null Returns the type amort.
     */
    public function getTypeAmort(): ?string {
        return $this->typeAmort;
    }

    /**
     * Set the code centre.
     *
     * @param string|null $codeCentre The code centre.
     * @return ChargesARepartir Returns this Charges a repartir.
     */
    public function setCodeCentre(?string $codeCentre): ChargesARepartir {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the coeff degressif.
     *
     * @param float|null $coeffDegressif The coeff degressif.
     * @return ChargesARepartir Returns this Charges a repartir.
     */
    public function setCoeffDegressif(?float $coeffDegressif): ChargesARepartir {
        $this->coeffDegressif = $coeffDegressif;
        return $this;
    }

    /**
     * Set the date.
     *
     * @param DateTime|null $date The date.
     * @return ChargesARepartir Returns this Charges a repartir.
     */
    public function setDate(?DateTime $date): ChargesARepartir {
        $this->date = $date;
        return $this;
    }

    /**
     * Set the duree.
     *
     * @param float|null $duree The duree.
     * @return ChargesARepartir Returns this Charges a repartir.
     */
    public function setDuree(?float $duree): ChargesARepartir {
        $this->duree = $duree;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return ChargesARepartir Returns this Charges a repartir.
     */
    public function setLibelle(?string $libelle): ChargesARepartir {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float|null $montant The montant.
     * @return ChargesARepartir Returns this Charges a repartir.
     */
    public function setMontant(?float $montant): ChargesARepartir {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the num contrat.
     *
     * @param string|null $numContrat The num contrat.
     * @return ChargesARepartir Returns this Charges a repartir.
     */
    public function setNumContrat(?string $numContrat): ChargesARepartir {
        $this->numContrat = $numContrat;
        return $this;
    }

    /**
     * Set the num cpt car.
     *
     * @param string|null $numCptCar The num cpt car.
     * @return ChargesARepartir Returns this Charges a repartir.
     */
    public function setNumCptCar(?string $numCptCar): ChargesARepartir {
        $this->numCptCar = $numCptCar;
        return $this;
    }

    /**
     * Set the numero pj.
     *
     * @param int|null $numeroPj The numero pj.
     * @return ChargesARepartir Returns this Charges a repartir.
     */
    public function setNumeroPj(?int $numeroPj): ChargesARepartir {
        $this->numeroPj = $numeroPj;
        return $this;
    }

    /**
     * Set the taux lineaire.
     *
     * @param float|null $tauxLineaire The taux lineaire.
     * @return ChargesARepartir Returns this Charges a repartir.
     */
    public function setTauxLineaire(?float $tauxLineaire): ChargesARepartir {
        $this->tauxLineaire = $tauxLineaire;
        return $this;
    }

    /**
     * Set the type amort.
     *
     * @param string|null $typeAmort The type amort.
     * @return ChargesARepartir Returns this Charges a repartir.
     */
    public function setTypeAmort(?string $typeAmort): ChargesARepartir {
        $this->typeAmort = $typeAmort;
        return $this;
    }
}
