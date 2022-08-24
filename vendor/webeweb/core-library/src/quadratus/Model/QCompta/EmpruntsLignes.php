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
 * Emprunts lignes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class EmpruntsLignes {

    /**
     * Date remboursement.
     *
     * @var DateTime|null
     */
    private $dateRemboursement;

    /**
     * Dont assurance.
     *
     * @var float|null
     */
    private $dontAssurance;

    /**
     * Dont capital.
     *
     * @var float|null
     */
    private $dontCapital;

    /**
     * Dont interet.
     *
     * @var float|null
     */
    private $dontInteret;

    /**
     * Montant rembour.
     *
     * @var float|null
     */
    private $montantRembour;

    /**
     * Num ligne.
     *
     * @var int|null
     */
    private $numLigne;

    /**
     * Numero.
     *
     * @var int|null
     */
    private $numero;

    /**
     * Restant du avant.
     *
     * @var float|null
     */
    private $restantDuAvant;

    /**
     * Taux ligne.
     *
     * @var float|null
     */
    private $tauxLigne;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the date remboursement.
     *
     * @return DateTime|null Returns the date remboursement.
     */
    public function getDateRemboursement(): ?DateTime {
        return $this->dateRemboursement;
    }

    /**
     * Get the dont assurance.
     *
     * @return float|null Returns the dont assurance.
     */
    public function getDontAssurance(): ?float {
        return $this->dontAssurance;
    }

    /**
     * Get the dont capital.
     *
     * @return float|null Returns the dont capital.
     */
    public function getDontCapital(): ?float {
        return $this->dontCapital;
    }

    /**
     * Get the dont interet.
     *
     * @return float|null Returns the dont interet.
     */
    public function getDontInteret(): ?float {
        return $this->dontInteret;
    }

    /**
     * Get the montant rembour.
     *
     * @return float|null Returns the montant rembour.
     */
    public function getMontantRembour(): ?float {
        return $this->montantRembour;
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
     * Get the numero.
     *
     * @return int|null Returns the numero.
     */
    public function getNumero(): ?int {
        return $this->numero;
    }

    /**
     * Get the restant du avant.
     *
     * @return float|null Returns the restant du avant.
     */
    public function getRestantDuAvant(): ?float {
        return $this->restantDuAvant;
    }

    /**
     * Get the taux ligne.
     *
     * @return float|null Returns the taux ligne.
     */
    public function getTauxLigne(): ?float {
        return $this->tauxLigne;
    }

    /**
     * Set the date remboursement.
     *
     * @param DateTime|null $dateRemboursement The date remboursement.
     * @return EmpruntsLignes Returns this Emprunts lignes.
     */
    public function setDateRemboursement(?DateTime $dateRemboursement): EmpruntsLignes {
        $this->dateRemboursement = $dateRemboursement;
        return $this;
    }

    /**
     * Set the dont assurance.
     *
     * @param float|null $dontAssurance The dont assurance.
     * @return EmpruntsLignes Returns this Emprunts lignes.
     */
    public function setDontAssurance(?float $dontAssurance): EmpruntsLignes {
        $this->dontAssurance = $dontAssurance;
        return $this;
    }

    /**
     * Set the dont capital.
     *
     * @param float|null $dontCapital The dont capital.
     * @return EmpruntsLignes Returns this Emprunts lignes.
     */
    public function setDontCapital(?float $dontCapital): EmpruntsLignes {
        $this->dontCapital = $dontCapital;
        return $this;
    }

    /**
     * Set the dont interet.
     *
     * @param float|null $dontInteret The dont interet.
     * @return EmpruntsLignes Returns this Emprunts lignes.
     */
    public function setDontInteret(?float $dontInteret): EmpruntsLignes {
        $this->dontInteret = $dontInteret;
        return $this;
    }

    /**
     * Set the montant rembour.
     *
     * @param float|null $montantRembour The montant rembour.
     * @return EmpruntsLignes Returns this Emprunts lignes.
     */
    public function setMontantRembour(?float $montantRembour): EmpruntsLignes {
        $this->montantRembour = $montantRembour;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int|null $numLigne The num ligne.
     * @return EmpruntsLignes Returns this Emprunts lignes.
     */
    public function setNumLigne(?int $numLigne): EmpruntsLignes {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param int|null $numero The numero.
     * @return EmpruntsLignes Returns this Emprunts lignes.
     */
    public function setNumero(?int $numero): EmpruntsLignes {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the restant du avant.
     *
     * @param float|null $restantDuAvant The restant du avant.
     * @return EmpruntsLignes Returns this Emprunts lignes.
     */
    public function setRestantDuAvant(?float $restantDuAvant): EmpruntsLignes {
        $this->restantDuAvant = $restantDuAvant;
        return $this;
    }

    /**
     * Set the taux ligne.
     *
     * @param float|null $tauxLigne The taux ligne.
     * @return EmpruntsLignes Returns this Emprunts lignes.
     */
    public function setTauxLigne(?float $tauxLigne): EmpruntsLignes {
        $this->tauxLigne = $tauxLigne;
        return $this;
    }
}
