<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QPaie;

/**
 * Dadsu etablissements.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class DadsuEtablissements {

    /**
     * Code etablissement.
     *
     * @var int|null
     */
    private $codeEtablissement;

    /**
     * Forma pro base.
     *
     * @var float|null
     */
    private $formaProBase;

    /**
     * Forma pro base cdd.
     *
     * @var float|null
     */
    private $formaProBaseCdd;

    /**
     * Forma pro code assuj.
     *
     * @var string|null
     */
    private $formaProCodeAssuj;

    /**
     * Prud type dadsu derogatoire.
     *
     * @var string|null
     */
    private $prudTypeDadsuDerogatoire;

    /**
     * Taxe apprentissage base.
     *
     * @var float|null
     */
    private $taxeApprentissageBase;

    /**
     * Taxe apprentissage code assuj.
     *
     * @var string|null
     */
    private $taxeApprentissageCodeAssuj;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code etablissement.
     *
     * @return int|null Returns the code etablissement.
     */
    public function getCodeEtablissement(): ?int {
        return $this->codeEtablissement;
    }

    /**
     * Get the forma pro base.
     *
     * @return float|null Returns the forma pro base.
     */
    public function getFormaProBase(): ?float {
        return $this->formaProBase;
    }

    /**
     * Get the forma pro base cdd.
     *
     * @return float|null Returns the forma pro base cdd.
     */
    public function getFormaProBaseCdd(): ?float {
        return $this->formaProBaseCdd;
    }

    /**
     * Get the forma pro code assuj.
     *
     * @return string|null Returns the forma pro code assuj.
     */
    public function getFormaProCodeAssuj(): ?string {
        return $this->formaProCodeAssuj;
    }

    /**
     * Get the prud type dadsu derogatoire.
     *
     * @return string|null Returns the prud type dadsu derogatoire.
     */
    public function getPrudTypeDadsuDerogatoire(): ?string {
        return $this->prudTypeDadsuDerogatoire;
    }

    /**
     * Get the taxe apprentissage base.
     *
     * @return float|null Returns the taxe apprentissage base.
     */
    public function getTaxeApprentissageBase(): ?float {
        return $this->taxeApprentissageBase;
    }

    /**
     * Get the taxe apprentissage code assuj.
     *
     * @return string|null Returns the taxe apprentissage code assuj.
     */
    public function getTaxeApprentissageCodeAssuj(): ?string {
        return $this->taxeApprentissageCodeAssuj;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return DadsuEtablissements Returns this Dadsu etablissements.
     */
    public function setCodeEtablissement(?int $codeEtablissement): DadsuEtablissements {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the forma pro base.
     *
     * @param float|null $formaProBase The forma pro base.
     * @return DadsuEtablissements Returns this Dadsu etablissements.
     */
    public function setFormaProBase(?float $formaProBase): DadsuEtablissements {
        $this->formaProBase = $formaProBase;
        return $this;
    }

    /**
     * Set the forma pro base cdd.
     *
     * @param float|null $formaProBaseCdd The forma pro base cdd.
     * @return DadsuEtablissements Returns this Dadsu etablissements.
     */
    public function setFormaProBaseCdd(?float $formaProBaseCdd): DadsuEtablissements {
        $this->formaProBaseCdd = $formaProBaseCdd;
        return $this;
    }

    /**
     * Set the forma pro code assuj.
     *
     * @param string|null $formaProCodeAssuj The forma pro code assuj.
     * @return DadsuEtablissements Returns this Dadsu etablissements.
     */
    public function setFormaProCodeAssuj(?string $formaProCodeAssuj): DadsuEtablissements {
        $this->formaProCodeAssuj = $formaProCodeAssuj;
        return $this;
    }

    /**
     * Set the prud type dadsu derogatoire.
     *
     * @param string|null $prudTypeDadsuDerogatoire The prud type dadsu derogatoire.
     * @return DadsuEtablissements Returns this Dadsu etablissements.
     */
    public function setPrudTypeDadsuDerogatoire(?string $prudTypeDadsuDerogatoire): DadsuEtablissements {
        $this->prudTypeDadsuDerogatoire = $prudTypeDadsuDerogatoire;
        return $this;
    }

    /**
     * Set the taxe apprentissage base.
     *
     * @param float|null $taxeApprentissageBase The taxe apprentissage base.
     * @return DadsuEtablissements Returns this Dadsu etablissements.
     */
    public function setTaxeApprentissageBase(?float $taxeApprentissageBase): DadsuEtablissements {
        $this->taxeApprentissageBase = $taxeApprentissageBase;
        return $this;
    }

    /**
     * Set the taxe apprentissage code assuj.
     *
     * @param string|null $taxeApprentissageCodeAssuj The taxe apprentissage code assuj.
     * @return DadsuEtablissements Returns this Dadsu etablissements.
     */
    public function setTaxeApprentissageCodeAssuj(?string $taxeApprentissageCodeAssuj): DadsuEtablissements {
        $this->taxeApprentissageCodeAssuj = $taxeApprentissageCodeAssuj;
        return $this;
    }
}
