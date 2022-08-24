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
 * Conventions col libelles.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class ConventionsColLibelles {

    /**
     * Active.
     *
     * @var bool|null
     */
    private $active;

    /**
     * Categ salarie.
     *
     * @var int|null
     */
    private $categSalarie;

    /**
     * Code convention.
     *
     * @var string|null
     */
    private $codeConvention;

    /**
     * Code libelle.
     *
     * @var string|null
     */
    private $codeLibelle;

    /**
     * Frais sante am.
     *
     * @var bool|null
     */
    private $fraisSanteAm;

    /**
     * Indice categ.
     *
     * @var int|null
     */
    private $indiceCateg;

    /**
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

    /**
     * Position.
     *
     * @var int|null
     */
    private $position;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the active.
     *
     * @return bool|null Returns the active.
     */
    public function getActive(): ?bool {
        return $this->active;
    }

    /**
     * Get the categ salarie.
     *
     * @return int|null Returns the categ salarie.
     */
    public function getCategSalarie(): ?int {
        return $this->categSalarie;
    }

    /**
     * Get the code convention.
     *
     * @return string|null Returns the code convention.
     */
    public function getCodeConvention(): ?string {
        return $this->codeConvention;
    }

    /**
     * Get the code libelle.
     *
     * @return string|null Returns the code libelle.
     */
    public function getCodeLibelle(): ?string {
        return $this->codeLibelle;
    }

    /**
     * Get the frais sante am.
     *
     * @return bool|null Returns the frais sante am.
     */
    public function getFraisSanteAm(): ?bool {
        return $this->fraisSanteAm;
    }

    /**
     * Get the indice categ.
     *
     * @return int|null Returns the indice categ.
     */
    public function getIndiceCateg(): ?int {
        return $this->indiceCateg;
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
     * Get the position.
     *
     * @return int|null Returns the position.
     */
    public function getPosition(): ?int {
        return $this->position;
    }

    /**
     * Set the active.
     *
     * @param bool|null $active The active.
     * @return ConventionsColLibelles Returns this Conventions col libelles.
     */
    public function setActive(?bool $active): ConventionsColLibelles {
        $this->active = $active;
        return $this;
    }

    /**
     * Set the categ salarie.
     *
     * @param int|null $categSalarie The categ salarie.
     * @return ConventionsColLibelles Returns this Conventions col libelles.
     */
    public function setCategSalarie(?int $categSalarie): ConventionsColLibelles {
        $this->categSalarie = $categSalarie;
        return $this;
    }

    /**
     * Set the code convention.
     *
     * @param string|null $codeConvention The code convention.
     * @return ConventionsColLibelles Returns this Conventions col libelles.
     */
    public function setCodeConvention(?string $codeConvention): ConventionsColLibelles {
        $this->codeConvention = $codeConvention;
        return $this;
    }

    /**
     * Set the code libelle.
     *
     * @param string|null $codeLibelle The code libelle.
     * @return ConventionsColLibelles Returns this Conventions col libelles.
     */
    public function setCodeLibelle(?string $codeLibelle): ConventionsColLibelles {
        $this->codeLibelle = $codeLibelle;
        return $this;
    }

    /**
     * Set the frais sante am.
     *
     * @param bool|null $fraisSanteAm The frais sante am.
     * @return ConventionsColLibelles Returns this Conventions col libelles.
     */
    public function setFraisSanteAm(?bool $fraisSanteAm): ConventionsColLibelles {
        $this->fraisSanteAm = $fraisSanteAm;
        return $this;
    }

    /**
     * Set the indice categ.
     *
     * @param int|null $indiceCateg The indice categ.
     * @return ConventionsColLibelles Returns this Conventions col libelles.
     */
    public function setIndiceCateg(?int $indiceCateg): ConventionsColLibelles {
        $this->indiceCateg = $indiceCateg;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return ConventionsColLibelles Returns this Conventions col libelles.
     */
    public function setIntitule(?string $intitule): ConventionsColLibelles {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the position.
     *
     * @param int|null $position The position.
     * @return ConventionsColLibelles Returns this Conventions col libelles.
     */
    public function setPosition(?int $position): ConventionsColLibelles {
        $this->position = $position;
        return $this;
    }
}
