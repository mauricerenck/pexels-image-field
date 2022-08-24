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
 * Affectation ana div.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class AffectationAnaDiv {

    /**
     * Code centre.
     *
     * @var string|null
     */
    private $codeCentre;

    /**
     * Code nature.
     *
     * @var string|null
     */
    private $codeNature;

    /**
     * Num compte.
     *
     * @var string|null
     */
    private $numCompte;

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
     * Numero deux.
     *
     * @var int|null
     */
    private $numeroDeux;

    /**
     * Pourcentage.
     *
     * @var float|null
     */
    private $pourcentage;

    /**
     * Type.
     *
     * @var string|null
     */
    private $type;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code centre.
     *
     * @return string|null Returns the code centre.
     */
    public function getCodeCentre(): ?string {
        return $this->codeCentre;
    }

    /**
     * Get the code nature.
     *
     * @return string|null Returns the code nature.
     */
    public function getCodeNature(): ?string {
        return $this->codeNature;
    }

    /**
     * Get the num compte.
     *
     * @return string|null Returns the num compte.
     */
    public function getNumCompte(): ?string {
        return $this->numCompte;
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
     * Get the numero deux.
     *
     * @return int|null Returns the numero deux.
     */
    public function getNumeroDeux(): ?int {
        return $this->numeroDeux;
    }

    /**
     * Get the pourcentage.
     *
     * @return float|null Returns the pourcentage.
     */
    public function getPourcentage(): ?float {
        return $this->pourcentage;
    }

    /**
     * Get the type.
     *
     * @return string|null Returns the type.
     */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Set the code centre.
     *
     * @param string|null $codeCentre The code centre.
     * @return AffectationAnaDiv Returns this Affectation ana div.
     */
    public function setCodeCentre(?string $codeCentre): AffectationAnaDiv {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the code nature.
     *
     * @param string|null $codeNature The code nature.
     * @return AffectationAnaDiv Returns this Affectation ana div.
     */
    public function setCodeNature(?string $codeNature): AffectationAnaDiv {
        $this->codeNature = $codeNature;
        return $this;
    }

    /**
     * Set the num compte.
     *
     * @param string|null $numCompte The num compte.
     * @return AffectationAnaDiv Returns this Affectation ana div.
     */
    public function setNumCompte(?string $numCompte): AffectationAnaDiv {
        $this->numCompte = $numCompte;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int|null $numLigne The num ligne.
     * @return AffectationAnaDiv Returns this Affectation ana div.
     */
    public function setNumLigne(?int $numLigne): AffectationAnaDiv {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param int|null $numero The numero.
     * @return AffectationAnaDiv Returns this Affectation ana div.
     */
    public function setNumero(?int $numero): AffectationAnaDiv {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero deux.
     *
     * @param int|null $numeroDeux The numero deux.
     * @return AffectationAnaDiv Returns this Affectation ana div.
     */
    public function setNumeroDeux(?int $numeroDeux): AffectationAnaDiv {
        $this->numeroDeux = $numeroDeux;
        return $this;
    }

    /**
     * Set the pourcentage.
     *
     * @param float|null $pourcentage The pourcentage.
     * @return AffectationAnaDiv Returns this Affectation ana div.
     */
    public function setPourcentage(?float $pourcentage): AffectationAnaDiv {
        $this->pourcentage = $pourcentage;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return AffectationAnaDiv Returns this Affectation ana div.
     */
    public function setType(?string $type): AffectationAnaDiv {
        $this->type = $type;
        return $this;
    }
}
