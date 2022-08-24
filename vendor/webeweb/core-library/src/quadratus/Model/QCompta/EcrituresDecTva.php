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
 * Ecritures dec tva.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class EcrituresDecTva {

    /**
     * Code tva.
     *
     * @var int|null
     */
    private $codeTva;

    /**
     * Date dec tva.
     *
     * @var DateTime|null
     */
    private $dateDecTva;

    /**
     * Jour ecriture.
     *
     * @var string|null
     */
    private $jourEcriture;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Montant ht.
     *
     * @var float|null
     */
    private $montantHt;

    /**
     * Num uniq.
     *
     * @var int|null
     */
    private $numUniq;

    /**
     * Numero compte.
     *
     * @var string|null
     */
    private $numeroCompte;

    /**
     * Periode ecriture.
     *
     * @var DateTime|null
     */
    private $periodeEcriture;

    /**
     * Type cdi.
     *
     * @var string|null
     */
    private $typeCdi;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code tva.
     *
     * @return int|null Returns the code tva.
     */
    public function getCodeTva(): ?int {
        return $this->codeTva;
    }

    /**
     * Get the date dec tva.
     *
     * @return DateTime|null Returns the date dec tva.
     */
    public function getDateDecTva(): ?DateTime {
        return $this->dateDecTva;
    }

    /**
     * Get the jour ecriture.
     *
     * @return string|null Returns the jour ecriture.
     */
    public function getJourEcriture(): ?string {
        return $this->jourEcriture;
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
     * Get the montant ht.
     *
     * @return float|null Returns the montant ht.
     */
    public function getMontantHt(): ?float {
        return $this->montantHt;
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
     * Get the numero compte.
     *
     * @return string|null Returns the numero compte.
     */
    public function getNumeroCompte(): ?string {
        return $this->numeroCompte;
    }

    /**
     * Get the periode ecriture.
     *
     * @return DateTime|null Returns the periode ecriture.
     */
    public function getPeriodeEcriture(): ?DateTime {
        return $this->periodeEcriture;
    }

    /**
     * Get the type cdi.
     *
     * @return string|null Returns the type cdi.
     */
    public function getTypeCdi(): ?string {
        return $this->typeCdi;
    }

    /**
     * Set the code tva.
     *
     * @param int|null $codeTva The code tva.
     * @return EcrituresDecTva Returns this Ecritures dec tva.
     */
    public function setCodeTva(?int $codeTva): EcrituresDecTva {
        $this->codeTva = $codeTva;
        return $this;
    }

    /**
     * Set the date dec tva.
     *
     * @param DateTime|null $dateDecTva The date dec tva.
     * @return EcrituresDecTva Returns this Ecritures dec tva.
     */
    public function setDateDecTva(?DateTime $dateDecTva): EcrituresDecTva {
        $this->dateDecTva = $dateDecTva;
        return $this;
    }

    /**
     * Set the jour ecriture.
     *
     * @param string|null $jourEcriture The jour ecriture.
     * @return EcrituresDecTva Returns this Ecritures dec tva.
     */
    public function setJourEcriture(?string $jourEcriture): EcrituresDecTva {
        $this->jourEcriture = $jourEcriture;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return EcrituresDecTva Returns this Ecritures dec tva.
     */
    public function setLibelle(?string $libelle): EcrituresDecTva {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the montant ht.
     *
     * @param float|null $montantHt The montant ht.
     * @return EcrituresDecTva Returns this Ecritures dec tva.
     */
    public function setMontantHt(?float $montantHt): EcrituresDecTva {
        $this->montantHt = $montantHt;
        return $this;
    }

    /**
     * Set the num uniq.
     *
     * @param int|null $numUniq The num uniq.
     * @return EcrituresDecTva Returns this Ecritures dec tva.
     */
    public function setNumUniq(?int $numUniq): EcrituresDecTva {
        $this->numUniq = $numUniq;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string|null $numeroCompte The numero compte.
     * @return EcrituresDecTva Returns this Ecritures dec tva.
     */
    public function setNumeroCompte(?string $numeroCompte): EcrituresDecTva {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the periode ecriture.
     *
     * @param DateTime|null $periodeEcriture The periode ecriture.
     * @return EcrituresDecTva Returns this Ecritures dec tva.
     */
    public function setPeriodeEcriture(?DateTime $periodeEcriture): EcrituresDecTva {
        $this->periodeEcriture = $periodeEcriture;
        return $this;
    }

    /**
     * Set the type cdi.
     *
     * @param string|null $typeCdi The type cdi.
     * @return EcrituresDecTva Returns this Ecritures dec tva.
     */
    public function setTypeCdi(?string $typeCdi): EcrituresDecTva {
        $this->typeCdi = $typeCdi;
        return $this;
    }
}
