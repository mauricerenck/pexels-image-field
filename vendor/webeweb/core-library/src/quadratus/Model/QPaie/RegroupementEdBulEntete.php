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
 * Regroupement ed bul entete.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class RegroupementEdBulEntete {

    /**
     * Afficher.
     *
     * @var bool|null
     */
    private $afficher;

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
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

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
     * Get the libelle.
     *
     * @return string|null Returns the libelle.
     */
    public function getLibelle(): ?string {
        return $this->libelle;
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
     * @return RegroupementEdBulEntete Returns this Regroupement ed bul entete.
     */
    public function setAfficher(?bool $afficher): RegroupementEdBulEntete {
        $this->afficher = $afficher;
        return $this;
    }

    /**
     * Set the code regroup ed bul.
     *
     * @param string|null $codeRegroupEdBul The code regroup ed bul.
     * @return RegroupementEdBulEntete Returns this Regroupement ed bul entete.
     */
    public function setCodeRegroupEdBul(?string $codeRegroupEdBul): RegroupementEdBulEntete {
        $this->codeRegroupEdBul = $codeRegroupEdBul;
        return $this;
    }

    /**
     * Set the code titre.
     *
     * @param string|null $codeTitre The code titre.
     * @return RegroupementEdBulEntete Returns this Regroupement ed bul entete.
     */
    public function setCodeTitre(?string $codeTitre): RegroupementEdBulEntete {
        $this->codeTitre = $codeTitre;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return RegroupementEdBulEntete Returns this Regroupement ed bul entete.
     */
    public function setLibelle(?string $libelle): RegroupementEdBulEntete {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the quadra.
     *
     * @param bool|null $quadra The quadra.
     * @return RegroupementEdBulEntete Returns this Regroupement ed bul entete.
     */
    public function setQuadra(?bool $quadra): RegroupementEdBulEntete {
        $this->quadra = $quadra;
        return $this;
    }
}
