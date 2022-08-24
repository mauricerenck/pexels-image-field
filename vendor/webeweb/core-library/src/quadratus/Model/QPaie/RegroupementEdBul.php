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
 * Regroupement ed bul.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class RegroupementEdBul {

    /**
     * Afficher.
     *
     * @var bool|null
     */
    private $afficher;

    /**
     * Code libelle.
     *
     * @var string|null
     */
    private $codeLibelle;

    /**
     * Code regroup ed bul.
     *
     * @var string|null
     */
    private $codeRegroupEdBul;

    /**
     * Code titre.
     *
     * @var string|null
     */
    private $codeTitre;

    /**
     * Exo.
     *
     * @var bool|null
     */
    private $exo;

    /**
     * Quadra.
     *
     * @var bool|null
     */
    private $quadra;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the afficher.
     *
     * @return bool|null Returns the afficher.
     */
    public function getAfficher(): ?bool {
        return $this->afficher;
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
     * Get the code regroup ed bul.
     *
     * @return string|null Returns the code regroup ed bul.
     */
    public function getCodeRegroupEdBul(): ?string {
        return $this->codeRegroupEdBul;
    }

    /**
     * Get the code titre.
     *
     * @return string|null Returns the code titre.
     */
    public function getCodeTitre(): ?string {
        return $this->codeTitre;
    }

    /**
     * Get the exo.
     *
     * @return bool|null Returns the exo.
     */
    public function getExo(): ?bool {
        return $this->exo;
    }

    /**
     * Get the quadra.
     *
     * @return bool|null Returns the quadra.
     */
    public function getQuadra(): ?bool {
        return $this->quadra;
    }

    /**
     * Set the afficher.
     *
     * @param bool|null $afficher The afficher.
     * @return RegroupementEdBul Returns this Regroupement ed bul.
     */
    public function setAfficher(?bool $afficher): RegroupementEdBul {
        $this->afficher = $afficher;
        return $this;
    }

    /**
     * Set the code libelle.
     *
     * @param string|null $codeLibelle The code libelle.
     * @return RegroupementEdBul Returns this Regroupement ed bul.
     */
    public function setCodeLibelle(?string $codeLibelle): RegroupementEdBul {
        $this->codeLibelle = $codeLibelle;
        return $this;
    }

    /**
     * Set the code regroup ed bul.
     *
     * @param string|null $codeRegroupEdBul The code regroup ed bul.
     * @return RegroupementEdBul Returns this Regroupement ed bul.
     */
    public function setCodeRegroupEdBul(?string $codeRegroupEdBul): RegroupementEdBul {
        $this->codeRegroupEdBul = $codeRegroupEdBul;
        return $this;
    }

    /**
     * Set the code titre.
     *
     * @param string|null $codeTitre The code titre.
     * @return RegroupementEdBul Returns this Regroupement ed bul.
     */
    public function setCodeTitre(?string $codeTitre): RegroupementEdBul {
        $this->codeTitre = $codeTitre;
        return $this;
    }

    /**
     * Set the exo.
     *
     * @param bool|null $exo The exo.
     * @return RegroupementEdBul Returns this Regroupement ed bul.
     */
    public function setExo(?bool $exo): RegroupementEdBul {
        $this->exo = $exo;
        return $this;
    }

    /**
     * Set the quadra.
     *
     * @param bool|null $quadra The quadra.
     * @return RegroupementEdBul Returns this Regroupement ed bul.
     */
    public function setQuadra(?bool $quadra): RegroupementEdBul {
        $this->quadra = $quadra;
        return $this;
    }
}
