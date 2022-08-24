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
 * Detail immos.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class DetailImmos {

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
     * @return DetailImmos Returns this Detail immos.
     */
    public function setIntitule(?string $intitule): DetailImmos {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int|null $numLigne The num ligne.
     * @return DetailImmos Returns this Detail immos.
     */
    public function setNumLigne(?int $numLigne): DetailImmos {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param int|null $numero The numero.
     * @return DetailImmos Returns this Detail immos.
     */
    public function setNumero(?int $numero): DetailImmos {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string|null $numeroCompte The numero compte.
     * @return DetailImmos Returns this Detail immos.
     */
    public function setNumeroCompte(?string $numeroCompte): DetailImmos {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the numero deux.
     *
     * @param int|null $numeroDeux The numero deux.
     * @return DetailImmos Returns this Detail immos.
     */
    public function setNumeroDeux(?int $numeroDeux): DetailImmos {
        $this->numeroDeux = $numeroDeux;
        return $this;
    }

    /**
     * Set the quantite.
     *
     * @param float|null $quantite The quantite.
     * @return DetailImmos Returns this Detail immos.
     */
    public function setQuantite(?float $quantite): DetailImmos {
        $this->quantite = $quantite;
        return $this;
    }

    /**
     * Set the valeur.
     *
     * @param float|null $valeur The valeur.
     * @return DetailImmos Returns this Detail immos.
     */
    public function setValeur(?float $valeur): DetailImmos {
        $this->valeur = $valeur;
        return $this;
    }
}
