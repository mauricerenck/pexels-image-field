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
 * Const tab tva achat.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class ConstTabTvaAchat {

    /**
     * Code tva article.
     *
     * @var string|null
     */
    private $codeTvaArticle;

    /**
     * Code tva fourn.
     *
     * @var string|null
     */
    private $codeTvaFourn;

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
     * Get the code tva fourn.
     *
     * @return string|null Returns the code tva fourn.
     */
    public function getCodeTvaFourn(): ?string {
        return $this->codeTvaFourn;
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
     * @return ConstTabTvaAchat Returns this Const tab tva achat.
     */
    public function setCodeTvaArticle(?string $codeTvaArticle): ConstTabTvaAchat {
        $this->codeTvaArticle = $codeTvaArticle;
        return $this;
    }

    /**
     * Set the code tva fourn.
     *
     * @param string|null $codeTvaFourn The code tva fourn.
     * @return ConstTabTvaAchat Returns this Const tab tva achat.
     */
    public function setCodeTvaFourn(?string $codeTvaFourn): ConstTabTvaAchat {
        $this->codeTvaFourn = $codeTvaFourn;
        return $this;
    }

    /**
     * Set the compte tva.
     *
     * @param string|null $compteTva The compte tva.
     * @return ConstTabTvaAchat Returns this Const tab tva achat.
     */
    public function setCompteTva(?string $compteTva): ConstTabTvaAchat {
        $this->compteTva = $compteTva;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return ConstTabTvaAchat Returns this Const tab tva achat.
     */
    public function setLibelle(?string $libelle): ConstTabTvaAchat {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the taux tva.
     *
     * @param float|null $tauxTva The taux tva.
     * @return ConstTabTvaAchat Returns this Const tab tva achat.
     */
    public function setTauxTva(?float $tauxTva): ConstTabTvaAchat {
        $this->tauxTva = $tauxTva;
        return $this;
    }
}
