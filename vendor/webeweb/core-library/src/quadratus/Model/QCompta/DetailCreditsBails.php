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
 * Detail credits bails.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class DetailCreditsBails {

    /**
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

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
     * Numero compte.
     *
     * @var string|null
     */
    private $numeroCompte;

    /**
     * Numero deux.
     *
     * @var int|null
     */
    private $numeroDeux;

    /**
     * Quantite.
     *
     * @var float|null
     */
    private $quantite;

    /**
     * Valeur.
     *
     * @var float|null
     */
    private $valeur;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the intitule.
     *
     * @return string|null Returns the intitule.
     */
    public function getIntitule(): ?string {
        return $this->intitule;
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
     * Get the numero compte.
     *
     * @return string|null Returns the numero compte.
     */
    public function getNumeroCompte(): ?string {
        return $this->numeroCompte;
    }

    /**
     * Get the numero deux.
     *
     * @return int|null Returns the numero deux.
     */
    public function getNumeroDeux(): ?int {
        return $this->numeroDeux;
    }

    /**
     * Get the quantite.
     *
     * @return float|null Returns the quantite.
     */
    public function getQuantite(): ?float {
        return $this->quantite;
    }

    /**
     * Get the valeur.
     *
     * @return float|null Returns the valeur.
     */
    public function getValeur(): ?float {
        return $this->valeur;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return DetailCreditsBails Returns this Detail credits bails.
     */
    public function setIntitule(?string $intitule): DetailCreditsBails {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int|null $numLigne The num ligne.
     * @return DetailCreditsBails Returns this Detail credits bails.
     */
    public function setNumLigne(?int $numLigne): DetailCreditsBails {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param int|null $numero The numero.
     * @return DetailCreditsBails Returns this Detail credits bails.
     */
    public function setNumero(?int $numero): DetailCreditsBails {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string|null $numeroCompte The numero compte.
     * @return DetailCreditsBails Returns this Detail credits bails.
     */
    public function setNumeroCompte(?string $numeroCompte): DetailCreditsBails {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the numero deux.
     *
     * @param int|null $numeroDeux The numero deux.
     * @return DetailCreditsBails Returns this Detail credits bails.
     */
    public function setNumeroDeux(?int $numeroDeux): DetailCreditsBails {
        $this->numeroDeux = $numeroDeux;
        return $this;
    }

    /**
     * Set the quantite.
     *
     * @param float|null $quantite The quantite.
     * @return DetailCreditsBails Returns this Detail credits bails.
     */
    public function setQuantite(?float $quantite): DetailCreditsBails {
        $this->quantite = $quantite;
        return $this;
    }

    /**
     * Set the valeur.
     *
     * @param float|null $valeur The valeur.
     * @return DetailCreditsBails Returns this Detail credits bails.
     */
    public function setValeur(?float $valeur): DetailCreditsBails {
        $this->valeur = $valeur;
        return $this;
    }
}
