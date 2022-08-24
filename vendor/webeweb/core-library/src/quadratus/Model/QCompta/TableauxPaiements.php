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
 * Tableaux paiements.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class TableauxPaiements {

    /**
     * Assurance.
     *
     * @var float|null
     */
    private $assurance;

    /**
     * Code tva.
     *
     * @var string|null
     */
    private $codeTva;

    /**
     * Date.
     *
     * @var DateTime|null
     */
    private $date;

    /**
     * Entretien.
     *
     * @var float|null
     */
    private $entretien;

    /**
     * Loyer ht.
     *
     * @var float|null
     */
    private $loyerHt;

    /**
     * Num ligne.
     *
     * @var int|null
     */
    private $numLigne;

    /**
     * Numero cb.
     *
     * @var int|null
     */
    private $numeroCb;

    /**
     * Numero compte.
     *
     * @var string|null
     */
    private $numeroCompte;

    /**
     * Numero deux cb.
     *
     * @var int|null
     */
    private $numeroDeuxCb;

    /**
     * Valeur rachat.
     *
     * @var float|null
     */
    private $valeurRachat;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the assurance.
     *
     * @return float|null Returns the assurance.
     */
    public function getAssurance(): ?float {
        return $this->assurance;
    }

    /**
     * Get the code tva.
     *
     * @return string|null Returns the code tva.
     */
    public function getCodeTva(): ?string {
        return $this->codeTva;
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
     * Get the entretien.
     *
     * @return float|null Returns the entretien.
     */
    public function getEntretien(): ?float {
        return $this->entretien;
    }

    /**
     * Get the loyer ht.
     *
     * @return float|null Returns the loyer ht.
     */
    public function getLoyerHt(): ?float {
        return $this->loyerHt;
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
     * Get the numero cb.
     *
     * @return int|null Returns the numero cb.
     */
    public function getNumeroCb(): ?int {
        return $this->numeroCb;
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
     * Get the numero deux cb.
     *
     * @return int|null Returns the numero deux cb.
     */
    public function getNumeroDeuxCb(): ?int {
        return $this->numeroDeuxCb;
    }

    /**
     * Get the valeur rachat.
     *
     * @return float|null Returns the valeur rachat.
     */
    public function getValeurRachat(): ?float {
        return $this->valeurRachat;
    }

    /**
     * Set the assurance.
     *
     * @param float|null $assurance The assurance.
     * @return TableauxPaiements Returns this Tableaux paiements.
     */
    public function setAssurance(?float $assurance): TableauxPaiements {
        $this->assurance = $assurance;
        return $this;
    }

    /**
     * Set the code tva.
     *
     * @param string|null $codeTva The code tva.
     * @return TableauxPaiements Returns this Tableaux paiements.
     */
    public function setCodeTva(?string $codeTva): TableauxPaiements {
        $this->codeTva = $codeTva;
        return $this;
    }

    /**
     * Set the date.
     *
     * @param DateTime|null $date The date.
     * @return TableauxPaiements Returns this Tableaux paiements.
     */
    public function setDate(?DateTime $date): TableauxPaiements {
        $this->date = $date;
        return $this;
    }

    /**
     * Set the entretien.
     *
     * @param float|null $entretien The entretien.
     * @return TableauxPaiements Returns this Tableaux paiements.
     */
    public function setEntretien(?float $entretien): TableauxPaiements {
        $this->entretien = $entretien;
        return $this;
    }

    /**
     * Set the loyer ht.
     *
     * @param float|null $loyerHt The loyer ht.
     * @return TableauxPaiements Returns this Tableaux paiements.
     */
    public function setLoyerHt(?float $loyerHt): TableauxPaiements {
        $this->loyerHt = $loyerHt;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int|null $numLigne The num ligne.
     * @return TableauxPaiements Returns this Tableaux paiements.
     */
    public function setNumLigne(?int $numLigne): TableauxPaiements {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the numero cb.
     *
     * @param int|null $numeroCb The numero cb.
     * @return TableauxPaiements Returns this Tableaux paiements.
     */
    public function setNumeroCb(?int $numeroCb): TableauxPaiements {
        $this->numeroCb = $numeroCb;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string|null $numeroCompte The numero compte.
     * @return TableauxPaiements Returns this Tableaux paiements.
     */
    public function setNumeroCompte(?string $numeroCompte): TableauxPaiements {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the numero deux cb.
     *
     * @param int|null $numeroDeuxCb The numero deux cb.
     * @return TableauxPaiements Returns this Tableaux paiements.
     */
    public function setNumeroDeuxCb(?int $numeroDeuxCb): TableauxPaiements {
        $this->numeroDeuxCb = $numeroDeuxCb;
        return $this;
    }

    /**
     * Set the valeur rachat.
     *
     * @param float|null $valeurRachat The valeur rachat.
     * @return TableauxPaiements Returns this Tableaux paiements.
     */
    public function setValeurRachat(?float $valeurRachat): TableauxPaiements {
        $this->valeurRachat = $valeurRachat;
        return $this;
    }
}
