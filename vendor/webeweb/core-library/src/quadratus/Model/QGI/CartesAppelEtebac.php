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
 * Cartes appel etebac.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class CartesAppelEtebac {

    /**
     * Carte appel.
     *
     * @var string|null
     */
    private $carteAppel;

    /**
     * Code banque.
     *
     * @var string|null
     */
    private $codeBanque;

    /**
     * Id carte.
     *
     * @var string|null
     */
    private $idCarte;

    /**
     * Lg carte appel.
     *
     * @var string|null
     */
    private $lgCarteAppel;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Type carte.
     *
     * @var string|null
     */
    private $typeCarte;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the carte appel.
     *
     * @return string|null Returns the carte appel.
     */
    public function getCarteAppel(): ?string {
        return $this->carteAppel;
    }

    /**
     * Get the code banque.
     *
     * @return string|null Returns the code banque.
     */
    public function getCodeBanque(): ?string {
        return $this->codeBanque;
    }

    /**
     * Get the id carte.
     *
     * @return string|null Returns the id carte.
     */
    public function getIdCarte(): ?string {
        return $this->idCarte;
    }

    /**
     * Get the lg carte appel.
     *
     * @return string|null Returns the lg carte appel.
     */
    public function getLgCarteAppel(): ?string {
        return $this->lgCarteAppel;
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
     * Get the type carte.
     *
     * @return string|null Returns the type carte.
     */
    public function getTypeCarte(): ?string {
        return $this->typeCarte;
    }

    /**
     * Set the carte appel.
     *
     * @param string|null $carteAppel The carte appel.
     * @return CartesAppelEtebac Returns this Cartes appel etebac.
     */
    public function setCarteAppel(?string $carteAppel): CartesAppelEtebac {
        $this->carteAppel = $carteAppel;
        return $this;
    }

    /**
     * Set the code banque.
     *
     * @param string|null $codeBanque The code banque.
     * @return CartesAppelEtebac Returns this Cartes appel etebac.
     */
    public function setCodeBanque(?string $codeBanque): CartesAppelEtebac {
        $this->codeBanque = $codeBanque;
        return $this;
    }

    /**
     * Set the id carte.
     *
     * @param string|null $idCarte The id carte.
     * @return CartesAppelEtebac Returns this Cartes appel etebac.
     */
    public function setIdCarte(?string $idCarte): CartesAppelEtebac {
        $this->idCarte = $idCarte;
        return $this;
    }

    /**
     * Set the lg carte appel.
     *
     * @param string|null $lgCarteAppel The lg carte appel.
     * @return CartesAppelEtebac Returns this Cartes appel etebac.
     */
    public function setLgCarteAppel(?string $lgCarteAppel): CartesAppelEtebac {
        $this->lgCarteAppel = $lgCarteAppel;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return CartesAppelEtebac Returns this Cartes appel etebac.
     */
    public function setLibelle(?string $libelle): CartesAppelEtebac {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the type carte.
     *
     * @param string|null $typeCarte The type carte.
     * @return CartesAppelEtebac Returns this Cartes appel etebac.
     */
    public function setTypeCarte(?string $typeCarte): CartesAppelEtebac {
        $this->typeCarte = $typeCarte;
        return $this;
    }
}
