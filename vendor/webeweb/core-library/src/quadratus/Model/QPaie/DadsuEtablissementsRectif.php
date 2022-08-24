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
 * Dadsu etablissements rectif.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class DadsuEtablissementsRectif {

    /**
     * Actif.
     *
     * @var bool|null
     */
    private $actif;

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
     * Indice rectif.
     *
     * @var int|null
     */
    private $indiceRectif;

    /**
     * Taxe apprentissage base.
     *
     * @var float|null
     */
    private $taxeApprentissageBase;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the actif.
     *
     * @return bool|null Returns the actif.
     */
    public function getActif(): ?bool {
        return $this->actif;
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
     * Get the indice rectif.
     *
     * @return int|null Returns the indice rectif.
     */
    public function getIndiceRectif(): ?int {
        return $this->indiceRectif;
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
     * Set the actif.
     *
     * @param bool|null $actif The actif.
     * @return DadsuEtablissementsRectif Returns this Dadsu etablissements rectif.
     */
    public function setActif(?bool $actif): DadsuEtablissementsRectif {
        $this->actif = $actif;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int|null $codeEtablissement The code etablissement.
     * @return DadsuEtablissementsRectif Returns this Dadsu etablissements rectif.
     */
    public function setCodeEtablissement(?int $codeEtablissement): DadsuEtablissementsRectif {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the forma pro base.
     *
     * @param float|null $formaProBase The forma pro base.
     * @return DadsuEtablissementsRectif Returns this Dadsu etablissements rectif.
     */
    public function setFormaProBase(?float $formaProBase): DadsuEtablissementsRectif {
        $this->formaProBase = $formaProBase;
        return $this;
    }

    /**
     * Set the forma pro base cdd.
     *
     * @param float|null $formaProBaseCdd The forma pro base cdd.
     * @return DadsuEtablissementsRectif Returns this Dadsu etablissements rectif.
     */
    public function setFormaProBaseCdd(?float $formaProBaseCdd): DadsuEtablissementsRectif {
        $this->formaProBaseCdd = $formaProBaseCdd;
        return $this;
    }

    /**
     * Set the indice rectif.
     *
     * @param int|null $indiceRectif The indice rectif.
     * @return DadsuEtablissementsRectif Returns this Dadsu etablissements rectif.
     */
    public function setIndiceRectif(?int $indiceRectif): DadsuEtablissementsRectif {
        $this->indiceRectif = $indiceRectif;
        return $this;
    }

    /**
     * Set the taxe apprentissage base.
     *
     * @param float|null $taxeApprentissageBase The taxe apprentissage base.
     * @return DadsuEtablissementsRectif Returns this Dadsu etablissements rectif.
     */
    public function setTaxeApprentissageBase(?float $taxeApprentissageBase): DadsuEtablissementsRectif {
        $this->taxeApprentissageBase = $taxeApprentissageBase;
        return $this;
    }
}
