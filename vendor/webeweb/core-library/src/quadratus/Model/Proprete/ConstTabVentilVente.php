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
 * Const tab ventil vente.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class ConstTabVentilVente {

    /**
     * Code ventil article.
     *
     * @var string|null
     */
    private $codeVentilArticle;

    /**
     * Code ventil client.
     *
     * @var string|null
     */
    private $codeVentilClient;

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
     * Get the code ventil client.
     *
     * @return string|null Returns the code ventil client.
     */
    public function getCodeVentilClient(): ?string {
        return $this->codeVentilClient;
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
     * @return ConstTabVentilVente Returns this Const tab ventil vente.
     */
    public function setCodeVentilArticle(?string $codeVentilArticle): ConstTabVentilVente {
        $this->codeVentilArticle = $codeVentilArticle;
        return $this;
    }

    /**
     * Set the code ventil client.
     *
     * @param string|null $codeVentilClient The code ventil client.
     * @return ConstTabVentilVente Returns this Const tab ventil vente.
     */
    public function setCodeVentilClient(?string $codeVentilClient): ConstTabVentilVente {
        $this->codeVentilClient = $codeVentilClient;
        return $this;
    }

    /**
     * Set the compte ventil.
     *
     * @param string|null $compteVentil The compte ventil.
     * @return ConstTabVentilVente Returns this Const tab ventil vente.
     */
    public function setCompteVentil(?string $compteVentil): ConstTabVentilVente {
        $this->compteVentil = $compteVentil;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return ConstTabVentilVente Returns this Const tab ventil vente.
     */
    public function setLibelle(?string $libelle): ConstTabVentilVente {
        $this->libelle = $libelle;
        return $this;
    }
}
