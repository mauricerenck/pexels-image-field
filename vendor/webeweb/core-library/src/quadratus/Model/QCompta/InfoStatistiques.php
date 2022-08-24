<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QCompta;

/**
 * Info statistiques.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QCompta
 */
class InfoStatistiques {

    /**
     * A facturer hors ex.
     *
     * @var int|null
     */
    private $aFacturerHorsEx;

    /**
     * A facturer sur ex.
     *
     * @var int|null
     */
    private $aFacturerSurEx;

    /**
     * Code element.
     *
     * @var int|null
     */
    private $codeElement;

    /**
     * Compteur hors ex.
     *
     * @var int|null
     */
    private $compteurHorsEx;

    /**
     * Compteur sur ex.
     *
     * @var int|null
     */
    private $compteurSurEx;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the a facturer hors ex.
     *
     * @return int|null Returns the a facturer hors ex.
     */
    public function getAFacturerHorsEx(): ?int {
        return $this->aFacturerHorsEx;
    }

    /**
     * Get the a facturer sur ex.
     *
     * @return int|null Returns the a facturer sur ex.
     */
    public function getAFacturerSurEx(): ?int {
        return $this->aFacturerSurEx;
    }

    /**
     * Get the code element.
     *
     * @return int|null Returns the code element.
     */
    public function getCodeElement(): ?int {
        return $this->codeElement;
    }

    /**
     * Get the compteur hors ex.
     *
     * @return int|null Returns the compteur hors ex.
     */
    public function getCompteurHorsEx(): ?int {
        return $this->compteurHorsEx;
    }

    /**
     * Get the compteur sur ex.
     *
     * @return int|null Returns the compteur sur ex.
     */
    public function getCompteurSurEx(): ?int {
        return $this->compteurSurEx;
    }

    /**
     * Set the a facturer hors ex.
     *
     * @param int|null $aFacturerHorsEx The a facturer hors ex.
     * @return InfoStatistiques Returns this Info statistiques.
     */
    public function setAFacturerHorsEx(?int $aFacturerHorsEx): InfoStatistiques {
        $this->aFacturerHorsEx = $aFacturerHorsEx;
        return $this;
    }

    /**
     * Set the a facturer sur ex.
     *
     * @param int|null $aFacturerSurEx The a facturer sur ex.
     * @return InfoStatistiques Returns this Info statistiques.
     */
    public function setAFacturerSurEx(?int $aFacturerSurEx): InfoStatistiques {
        $this->aFacturerSurEx = $aFacturerSurEx;
        return $this;
    }

    /**
     * Set the code element.
     *
     * @param int|null $codeElement The code element.
     * @return InfoStatistiques Returns this Info statistiques.
     */
    public function setCodeElement(?int $codeElement): InfoStatistiques {
        $this->codeElement = $codeElement;
        return $this;
    }

    /**
     * Set the compteur hors ex.
     *
     * @param int|null $compteurHorsEx The compteur hors ex.
     * @return InfoStatistiques Returns this Info statistiques.
     */
    public function setCompteurHorsEx(?int $compteurHorsEx): InfoStatistiques {
        $this->compteurHorsEx = $compteurHorsEx;
        return $this;
    }

    /**
     * Set the compteur sur ex.
     *
     * @param int|null $compteurSurEx The compteur sur ex.
     * @return InfoStatistiques Returns this Info statistiques.
     */
    public function setCompteurSurEx(?int $compteurSurEx): InfoStatistiques {
        $this->compteurSurEx = $compteurSurEx;
        return $this;
    }
}
