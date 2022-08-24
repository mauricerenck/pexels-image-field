<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QGI;

/**
 * Pointage reglements lignes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class PointageReglementsLignes {

    /**
     * Montant pointe.
     *
     * @var float|null
     */
    private $montantPointe;

    /**
     * Num cpt payeur.
     *
     * @var string|null
     */
    private $numCptPayeur;

    /**
     * Num doss.
     *
     * @var string|null
     */
    private $numDoss;

    /**
     * Num ligne.
     *
     * @var int|null
     */
    private $numLigne;

    /**
     * Num uniq ecr.
     *
     * @var int|null
     */
    private $numUniqEcr;

    /**
     * Numero compte.
     *
     * @var string|null
     */
    private $numeroCompte;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the montant pointe.
     *
     * @return float|null Returns the montant pointe.
     */
    public function getMontantPointe(): ?float {
        return $this->montantPointe;
    }

    /**
     * Get the num cpt payeur.
     *
     * @return string|null Returns the num cpt payeur.
     */
    public function getNumCptPayeur(): ?string {
        return $this->numCptPayeur;
    }

    /**
     * Get the num doss.
     *
     * @return string|null Returns the num doss.
     */
    public function getNumDoss(): ?string {
        return $this->numDoss;
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
     * Get the num uniq ecr.
     *
     * @return int|null Returns the num uniq ecr.
     */
    public function getNumUniqEcr(): ?int {
        return $this->numUniqEcr;
    }

    /**
     * Get the numero compte.
     *
     * @return string|null Returns the numero compte.
     */
    public function getNumeroCompte(): ?string {
        return $this->numeroCompte;
    }

    /**
     * Set the montant pointe.
     *
     * @param float|null $montantPointe The montant pointe.
     * @return PointageReglementsLignes Returns this Pointage reglements lignes.
     */
    public function setMontantPointe(?float $montantPointe): PointageReglementsLignes {
        $this->montantPointe = $montantPointe;
        return $this;
    }

    /**
     * Set the num cpt payeur.
     *
     * @param string|null $numCptPayeur The num cpt payeur.
     * @return PointageReglementsLignes Returns this Pointage reglements lignes.
     */
    public function setNumCptPayeur(?string $numCptPayeur): PointageReglementsLignes {
        $this->numCptPayeur = $numCptPayeur;
        return $this;
    }

    /**
     * Set the num doss.
     *
     * @param string|null $numDoss The num doss.
     * @return PointageReglementsLignes Returns this Pointage reglements lignes.
     */
    public function setNumDoss(?string $numDoss): PointageReglementsLignes {
        $this->numDoss = $numDoss;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int|null $numLigne The num ligne.
     * @return PointageReglementsLignes Returns this Pointage reglements lignes.
     */
    public function setNumLigne(?int $numLigne): PointageReglementsLignes {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the num uniq ecr.
     *
     * @param int|null $numUniqEcr The num uniq ecr.
     * @return PointageReglementsLignes Returns this Pointage reglements lignes.
     */
    public function setNumUniqEcr(?int $numUniqEcr): PointageReglementsLignes {
        $this->numUniqEcr = $numUniqEcr;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string|null $numeroCompte The numero compte.
     * @return PointageReglementsLignes Returns this Pointage reglements lignes.
     */
    public function setNumeroCompte(?string $numeroCompte): PointageReglementsLignes {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }
}
