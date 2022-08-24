<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\Proprete;

/**
 * Const tab ventil achat.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class ConstTabVentilAchat {

    /**
     * Code ventil article.
     *
     * @var string|null
     */
    private $codeVentilArticle;

    /**
     * Code ventil fourn.
     *
     * @var string|null
     */
    private $codeVentilFourn;

    /**
     * Compte ventil.
     *
     * @var string|null
     */
    private $compteVentil;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code ventil article.
     *
     * @return string|null Returns the code ventil article.
     */
    public function getCodeVentilArticle(): ?string {
        return $this->codeVentilArticle;
    }

    /**
     * Get the code ventil fourn.
     *
     * @return string|null Returns the code ventil fourn.
     */
    public function getCodeVentilFourn(): ?string {
        return $this->codeVentilFourn;
    }

    /**
     * Get the compte ventil.
     *
     * @return string|null Returns the compte ventil.
     */
    public function getCompteVentil(): ?string {
        return $this->compteVentil;
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
     * Set the code ventil article.
     *
     * @param string|null $codeVentilArticle The code ventil article.
     * @return ConstTabVentilAchat Returns this Const tab ventil achat.
     */
    public function setCodeVentilArticle(?string $codeVentilArticle): ConstTabVentilAchat {
        $this->codeVentilArticle = $codeVentilArticle;
        return $this;
    }

    /**
     * Set the code ventil fourn.
     *
     * @param string|null $codeVentilFourn The code ventil fourn.
     * @return ConstTabVentilAchat Returns this Const tab ventil achat.
     */
    public function setCodeVentilFourn(?string $codeVentilFourn): ConstTabVentilAchat {
        $this->codeVentilFourn = $codeVentilFourn;
        return $this;
    }

    /**
     * Set the compte ventil.
     *
     * @param string|null $compteVentil The compte ventil.
     * @return ConstTabVentilAchat Returns this Const tab ventil achat.
     */
    public function setCompteVentil(?string $compteVentil): ConstTabVentilAchat {
        $this->compteVentil = $compteVentil;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return ConstTabVentilAchat Returns this Const tab ventil achat.
     */
    public function setLibelle(?string $libelle): ConstTabVentilAchat {
        $this->libelle = $libelle;
        return $this;
    }
}
