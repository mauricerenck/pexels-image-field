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
 * Subventions lignes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class SubventionsLignes {

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
     * Num cpt subvention.
     *
     * @var string|null
     */
    private $numCptSubvention;

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
     * Get the num cpt subvention.
     *
     * @return string|null Returns the num cpt subvention.
     */
    public function getNumCptSubvention(): ?string {
        return $this->numCptSubvention;
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
     * @return SubventionsLignes Returns this Subventions lignes.
     */
    public function setAnnee(?string $annee): SubventionsLignes {
        $this->annee = $annee;
        return $this;
    }

    /**
     * Set the montant restant.
     *
     * @param float|null $montantRestant The montant restant.
     * @return SubventionsLignes Returns this Subventions lignes.
     */
    public function setMontantRestant(?float $montantRestant): SubventionsLignes {
        $this->montantRestant = $montantRestant;
        return $this;
    }

    /**
     * Set the montant vir.
     *
     * @param float|null $montantVir The montant vir.
     * @return SubventionsLignes Returns this Subventions lignes.
     */
    public function setMontantVir(?float $montantVir): SubventionsLignes {
        $this->montantVir = $montantVir;
        return $this;
    }

    /**
     * Set the num contrat.
     *
     * @param string|null $numContrat The num contrat.
     * @return SubventionsLignes Returns this Subventions lignes.
     */
    public function setNumContrat(?string $numContrat): SubventionsLignes {
        $this->numContrat = $numContrat;
        return $this;
    }

    /**
     * Set the num cpt subvention.
     *
     * @param string|null $numCptSubvention The num cpt subvention.
     * @return SubventionsLignes Returns this Subventions lignes.
     */
    public function setNumCptSubvention(?string $numCptSubvention): SubventionsLignes {
        $this->numCptSubvention = $numCptSubvention;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int|null $numLigne The num ligne.
     * @return SubventionsLignes Returns this Subventions lignes.
     */
    public function setNumLigne(?int $numLigne): SubventionsLignes {
        $this->numLigne = $numLigne;
        return $this;
    }
}
