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

/**
 * Charges a repartir lignes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class ChargesARepartirLignes {

    /**
     * Annee.
     *
     * @var string|null
     */
    private $annee;

    /**
     * Montant restant.
     *
     * @var float|null
     */
    private $montantRestant;

    /**
     * Montant vir.
     *
     * @var float|null
     */
    private $montantVir;

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
     * Num ligne.
     *
     * @var int|null
     */
    private $numLigne;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the annee.
     *
     * @return string|null Returns the annee.
     */
    public function getAnnee(): ?string {
        return $this->annee;
    }

    /**
     * Get the montant restant.
     *
     * @return float|null Returns the montant restant.
     */
    public function getMontantRestant(): ?float {
        return $this->montantRestant;
    }

    /**
     * Get the montant vir.
     *
     * @return float|null Returns the montant vir.
     */
    public function getMontantVir(): ?float {
        return $this->montantVir;
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
     * Get the num ligne.
     *
     * @return int|null Returns the num ligne.
     */
    public function getNumLigne(): ?int {
        return $this->numLigne;
    }

    /**
     * Set the annee.
     *
     * @param string|null $annee The annee.
     * @return ChargesARepartirLignes Returns this Charges a repartir lignes.
     */
    public function setAnnee(?string $annee): ChargesARepartirLignes {
        $this->annee = $annee;
        return $this;
    }

    /**
     * Set the montant restant.
     *
     * @param float|null $montantRestant The montant restant.
     * @return ChargesARepartirLignes Returns this Charges a repartir lignes.
     */
    public function setMontantRestant(?float $montantRestant): ChargesARepartirLignes {
        $this->montantRestant = $montantRestant;
        return $this;
    }

    /**
     * Set the montant vir.
     *
     * @param float|null $montantVir The montant vir.
     * @return ChargesARepartirLignes Returns this Charges a repartir lignes.
     */
    public function setMontantVir(?float $montantVir): ChargesARepartirLignes {
        $this->montantVir = $montantVir;
        return $this;
    }

    /**
     * Set the num contrat.
     *
     * @param string|null $numContrat The num contrat.
     * @return ChargesARepartirLignes Returns this Charges a repartir lignes.
     */
    public function setNumContrat(?string $numContrat): ChargesARepartirLignes {
        $this->numContrat = $numContrat;
        return $this;
    }

    /**
     * Set the num cpt car.
     *
     * @param string|null $numCptCar The num cpt car.
     * @return ChargesARepartirLignes Returns this Charges a repartir lignes.
     */
    public function setNumCptCar(?string $numCptCar): ChargesARepartirLignes {
        $this->numCptCar = $numCptCar;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int|null $numLigne The num ligne.
     * @return ChargesARepartirLignes Returns this Charges a repartir lignes.
     */
    public function setNumLigne(?int $numLigne): ChargesARepartirLignes {
        $this->numLigne = $numLigne;
        return $this;
    }
}
