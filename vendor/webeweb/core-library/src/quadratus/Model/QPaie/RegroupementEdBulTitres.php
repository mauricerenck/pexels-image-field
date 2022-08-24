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
 * Regroupement ed bul titres.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class RegroupementEdBulTitres {

    /**
     * Afficher.
     *
     * @var bool|null
     */
    private $afficher;

    /**
     * Code titre.
     *
     * @var string|null
     */
    private $codeTitre;

    /**
     * Quadra.
     *
     * @var bool|null
     */
    private $quadra;

    /**
     * Titre.
     *
     * @var string|null
     */
    private $titre;

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
     * Get the code titre.
     *
     * @return string|null Returns the code titre.
     */
    public function getCodeTitre(): ?string {
        return $this->codeTitre;
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
     * Get the titre.
     *
     * @return string|null Returns the titre.
     */
    public function getTitre(): ?string {
        return $this->titre;
    }

    /**
     * Set the afficher.
     *
     * @param bool|null $afficher The afficher.
     * @return RegroupementEdBulTitres Returns this Regroupement ed bul titres.
     */
    public function setAfficher(?bool $afficher): RegroupementEdBulTitres {
        $this->afficher = $afficher;
        return $this;
    }

    /**
     * Set the code titre.
     *
     * @param string|null $codeTitre The code titre.
     * @return RegroupementEdBulTitres Returns this Regroupement ed bul titres.
     */
    public function setCodeTitre(?string $codeTitre): RegroupementEdBulTitres {
        $this->codeTitre = $codeTitre;
        return $this;
    }

    /**
     * Set the quadra.
     *
     * @param bool|null $quadra The quadra.
     * @return RegroupementEdBulTitres Returns this Regroupement ed bul titres.
     */
    public function setQuadra(?bool $quadra): RegroupementEdBulTitres {
        $this->quadra = $quadra;
        return $this;
    }

    /**
     * Set the titre.
     *
     * @param string|null $titre The titre.
     * @return RegroupementEdBulTitres Returns this Regroupement ed bul titres.
     */
    public function setTitre(?string $titre): RegroupementEdBulTitres {
        $this->titre = $titre;
        return $this;
    }
}
