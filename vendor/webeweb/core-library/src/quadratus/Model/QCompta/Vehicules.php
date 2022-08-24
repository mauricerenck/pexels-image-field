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
 * Vehicules.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class Vehicules {

    /**
     * Categorie.
     *
     * @var string|null
     */
    private $categorie;

    /**
     * Date cession.
     *
     * @var DateTime|null
     */
    private $dateCession;

    /**
     * Date immat.
     *
     * @var DateTime|null
     */
    private $dateImmat;

    /**
     * Date pmec.
     *
     * @var DateTime|null
     */
    private $datePmec;

    /**
     * Guid.
     *
     * @var string|null
     */
    private $guid;

    /**
     * Hybride.
     *
     * @var bool|null
     */
    private $hybride;

    /**
     * Immatriculation.
     *
     * @var string|null
     */
    private $immatriculation;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Lien compta.
     *
     * @var bool|null
     */
    private $lienCompta;

    /**
     * Non polluant.
     *
     * @var bool|null
     */
    private $nonPolluant;

    /**
     * Puissance cv.
     *
     * @var int|null
     */
    private $puissanceCv;

    /**
     * Super carbu.
     *
     * @var bool|null
     */
    private $superCarbu;

    /**
     * Taux emission co2.
     *
     * @var float|null
     */
    private $tauxEmissionCo2;

    /**
     * Usage agricole.
     *
     * @var bool|null
     */
    private $usageAgricole;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the categorie.
     *
     * @return string|null Returns the categorie.
     */
    public function getCategorie(): ?string {
        return $this->categorie;
    }

    /**
     * Get the date cession.
     *
     * @return DateTime|null Returns the date cession.
     */
    public function getDateCession(): ?DateTime {
        return $this->dateCession;
    }

    /**
     * Get the date immat.
     *
     * @return DateTime|null Returns the date immat.
     */
    public function getDateImmat(): ?DateTime {
        return $this->dateImmat;
    }

    /**
     * Get the date pmec.
     *
     * @return DateTime|null Returns the date pmec.
     */
    public function getDatePmec(): ?DateTime {
        return $this->datePmec;
    }

    /**
     * Get the guid.
     *
     * @return string|null Returns the guid.
     */
    public function getGuid(): ?string {
        return $this->guid;
    }

    /**
     * Get the hybride.
     *
     * @return bool|null Returns the hybride.
     */
    public function getHybride(): ?bool {
        return $this->hybride;
    }

    /**
     * Get the immatriculation.
     *
     * @return string|null Returns the immatriculation.
     */
    public function getImmatriculation(): ?string {
        return $this->immatriculation;
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
     * Get the lien compta.
     *
     * @return bool|null Returns the lien compta.
     */
    public function getLienCompta(): ?bool {
        return $this->lienCompta;
    }

    /**
     * Get the non polluant.
     *
     * @return bool|null Returns the non polluant.
     */
    public function getNonPolluant(): ?bool {
        return $this->nonPolluant;
    }

    /**
     * Get the puissance cv.
     *
     * @return int|null Returns the puissance cv.
     */
    public function getPuissanceCv(): ?int {
        return $this->puissanceCv;
    }

    /**
     * Get the super carbu.
     *
     * @return bool|null Returns the super carbu.
     */
    public function getSuperCarbu(): ?bool {
        return $this->superCarbu;
    }

    /**
     * Get the taux emission co2.
     *
     * @return float|null Returns the taux emission co2.
     */
    public function getTauxEmissionCo2(): ?float {
        return $this->tauxEmissionCo2;
    }

    /**
     * Get the usage agricole.
     *
     * @return bool|null Returns the usage agricole.
     */
    public function getUsageAgricole(): ?bool {
        return $this->usageAgricole;
    }

    /**
     * Set the categorie.
     *
     * @param string|null $categorie The categorie.
     * @return Vehicules Returns this Vehicules.
     */
    public function setCategorie(?string $categorie): Vehicules {
        $this->categorie = $categorie;
        return $this;
    }

    /**
     * Set the date cession.
     *
     * @param DateTime|null $dateCession The date cession.
     * @return Vehicules Returns this Vehicules.
     */
    public function setDateCession(?DateTime $dateCession): Vehicules {
        $this->dateCession = $dateCession;
        return $this;
    }

    /**
     * Set the date immat.
     *
     * @param DateTime|null $dateImmat The date immat.
     * @return Vehicules Returns this Vehicules.
     */
    public function setDateImmat(?DateTime $dateImmat): Vehicules {
        $this->dateImmat = $dateImmat;
        return $this;
    }

    /**
     * Set the date pmec.
     *
     * @param DateTime|null $datePmec The date pmec.
     * @return Vehicules Returns this Vehicules.
     */
    public function setDatePmec(?DateTime $datePmec): Vehicules {
        $this->datePmec = $datePmec;
        return $this;
    }

    /**
     * Set the guid.
     *
     * @param string|null $guid The guid.
     * @return Vehicules Returns this Vehicules.
     */
    public function setGuid(?string $guid): Vehicules {
        $this->guid = $guid;
        return $this;
    }

    /**
     * Set the hybride.
     *
     * @param bool|null $hybride The hybride.
     * @return Vehicules Returns this Vehicules.
     */
    public function setHybride(?bool $hybride): Vehicules {
        $this->hybride = $hybride;
        return $this;
    }

    /**
     * Set the immatriculation.
     *
     * @param string|null $immatriculation The immatriculation.
     * @return Vehicules Returns this Vehicules.
     */
    public function setImmatriculation(?string $immatriculation): Vehicules {
        $this->immatriculation = $immatriculation;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return Vehicules Returns this Vehicules.
     */
    public function setLibelle(?string $libelle): Vehicules {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the lien compta.
     *
     * @param bool|null $lienCompta The lien compta.
     * @return Vehicules Returns this Vehicules.
     */
    public function setLienCompta(?bool $lienCompta): Vehicules {
        $this->lienCompta = $lienCompta;
        return $this;
    }

    /**
     * Set the non polluant.
     *
     * @param bool|null $nonPolluant The non polluant.
     * @return Vehicules Returns this Vehicules.
     */
    public function setNonPolluant(?bool $nonPolluant): Vehicules {
        $this->nonPolluant = $nonPolluant;
        return $this;
    }

    /**
     * Set the puissance cv.
     *
     * @param int|null $puissanceCv The puissance cv.
     * @return Vehicules Returns this Vehicules.
     */
    public function setPuissanceCv(?int $puissanceCv): Vehicules {
        $this->puissanceCv = $puissanceCv;
        return $this;
    }

    /**
     * Set the super carbu.
     *
     * @param bool|null $superCarbu The super carbu.
     * @return Vehicules Returns this Vehicules.
     */
    public function setSuperCarbu(?bool $superCarbu): Vehicules {
        $this->superCarbu = $superCarbu;
        return $this;
    }

    /**
     * Set the taux emission co2.
     *
     * @param float|null $tauxEmissionCo2 The taux emission co2.
     * @return Vehicules Returns this Vehicules.
     */
    public function setTauxEmissionCo2(?float $tauxEmissionCo2): Vehicules {
        $this->tauxEmissionCo2 = $tauxEmissionCo2;
        return $this;
    }

    /**
     * Set the usage agricole.
     *
     * @param bool|null $usageAgricole The usage agricole.
     * @return Vehicules Returns this Vehicules.
     */
    public function setUsageAgricole(?bool $usageAgricole): Vehicules {
        $this->usageAgricole = $usageAgricole;
        return $this;
    }
}
