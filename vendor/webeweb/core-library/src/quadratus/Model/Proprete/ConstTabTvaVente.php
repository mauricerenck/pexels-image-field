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
 * Const tab tva vente.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class ConstTabTvaVente {

    /**
     * Code tva article.
     *
     * @var string|null
     */
    private $codeTvaArticle;

    /**
     * Code tva client.
     *
     * @var string|null
     */
    private $codeTvaClient;

    /**
     * Compte tva.
     *
     * @var string|null
     */
    private $compteTva;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Taux tva.
     *
     * @var float|null
     */
    private $tauxTva;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code tva article.
     *
     * @return string|null Returns the code tva article.
     */
    public function getCodeTvaArticle(): ?string {
        return $this->codeTvaArticle;
    }

    /**
     * Get the code tva client.
     *
     * @return string|null Returns the code tva client.
     */
    public function getCodeTvaClient(): ?string {
        return $this->codeTvaClient;
    }

    /**
     * Get the compte tva.
     *
     * @return string|null Returns the compte tva.
     */
    public function getCompteTva(): ?string {
        return $this->compteTva;
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
     * Get the taux tva.
     *
     * @return float|null Returns the taux tva.
     */
    public function getTauxTva(): ?float {
        return $this->tauxTva;
    }

    /**
     * Set the code tva article.
     *
     * @param string|null $codeTvaArticle The code tva article.
     * @return ConstTabTvaVente Returns this Const tab tva vente.
     */
    public function setCodeTvaArticle(?string $codeTvaArticle): ConstTabTvaVente {
        $this->codeTvaArticle = $codeTvaArticle;
        return $this;
    }

    /**
     * Set the code tva client.
     *
     * @param string|null $codeTvaClient The code tva client.
     * @return ConstTabTvaVente Returns this Const tab tva vente.
     */
    public function setCodeTvaClient(?string $codeTvaClient): ConstTabTvaVente {
        $this->codeTvaClient = $codeTvaClient;
        return $this;
    }

    /**
     * Set the compte tva.
     *
     * @param string|null $compteTva The compte tva.
     * @return ConstTabTvaVente Returns this Const tab tva vente.
     */
    public function setCompteTva(?string $compteTva): ConstTabTvaVente {
        $this->compteTva = $compteTva;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return ConstTabTvaVente Returns this Const tab tva vente.
     */
    public function setLibelle(?string $libelle): ConstTabTvaVente {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the taux tva.
     *
     * @param float|null $tauxTva The taux tva.
     * @return ConstTabTvaVente Returns this Const tab tva vente.
     */
    public function setTauxTva(?float $tauxTva): ConstTabTvaVente {
        $this->tauxTva = $tauxTva;
        return $this;
    }
}
