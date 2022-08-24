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
 * Calcul is.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class CalculIs {

    /**
     * Correspondance.
     *
     * @var string|null
     */
    private $correspondance;

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
     * Montant n1.
     *
     * @var float|null
     */
    private $montantN1;

    /**
     * Num uniq.
     *
     * @var int|null
     */
    private $numUniq;

    /**
     * Type ligne.
     *
     * @var string|null
     */
    private $typeLigne;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the correspondance.
     *
     * @return string|null Returns the correspondance.
     */
    public function getCorrespondance(): ?string {
        return $this->correspondance;
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
     * Get the montant n1.
     *
     * @return float|null Returns the montant n1.
     */
    public function getMontantN1(): ?float {
        return $this->montantN1;
    }

    /**
     * Get the num uniq.
     *
     * @return int|null Returns the num uniq.
     */
    public function getNumUniq(): ?int {
        return $this->numUniq;
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
     * Set the correspondance.
     *
     * @param string|null $correspondance The correspondance.
     * @return CalculIs Returns this Calcul is.
     */
    public function setCorrespondance(?string $correspondance): CalculIs {
        $this->correspondance = $correspondance;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return CalculIs Returns this Calcul is.
     */
    public function setLibelle(?string $libelle): CalculIs {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the montant.
     *
     * @param float|null $montant The montant.
     * @return CalculIs Returns this Calcul is.
     */
    public function setMontant(?float $montant): CalculIs {
        $this->montant = $montant;
        return $this;
    }

    /**
     * Set the montant n1.
     *
     * @param float|null $montantN1 The montant n1.
     * @return CalculIs Returns this Calcul is.
     */
    public function setMontantN1(?float $montantN1): CalculIs {
        $this->montantN1 = $montantN1;
        return $this;
    }

    /**
     * Set the num uniq.
     *
     * @param int|null $numUniq The num uniq.
     * @return CalculIs Returns this Calcul is.
     */
    public function setNumUniq(?int $numUniq): CalculIs {
        $this->numUniq = $numUniq;
        return $this;
    }

    /**
     * Set the type ligne.
     *
     * @param string|null $typeLigne The type ligne.
     * @return CalculIs Returns this Calcul is.
     */
    public function setTypeLigne(?string $typeLigne): CalculIs {
        $this->typeLigne = $typeLigne;
        return $this;
    }
}
