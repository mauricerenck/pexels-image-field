<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QGI;

/**
 * Statistiques.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class Statistiques {

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Code rubrique.
     *
     * @var string|null
     */
    private $codeRubrique;

    /**
     * Info cellule.
     *
     * @var float|null
     */
    private $infoCellule;

    /**
     * Millesime.
     *
     * @var string|null
     */
    private $millesime;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code client.
     *
     * @return string|null Returns the code client.
     */
    public function getCodeClient(): ?string {
        return $this->codeClient;
    }

    /**
     * Get the code rubrique.
     *
     * @return string|null Returns the code rubrique.
     */
    public function getCodeRubrique(): ?string {
        return $this->codeRubrique;
    }

    /**
     * Get the info cellule.
     *
     * @return float|null Returns the info cellule.
     */
    public function getInfoCellule(): ?float {
        return $this->infoCellule;
    }

    /**
     * Get the millesime.
     *
     * @return string|null Returns the millesime.
     */
    public function getMillesime(): ?string {
        return $this->millesime;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return Statistiques Returns this Statistiques.
     */
    public function setCodeClient(?string $codeClient): Statistiques {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code rubrique.
     *
     * @param string|null $codeRubrique The code rubrique.
     * @return Statistiques Returns this Statistiques.
     */
    public function setCodeRubrique(?string $codeRubrique): Statistiques {
        $this->codeRubrique = $codeRubrique;
        return $this;
    }

    /**
     * Set the info cellule.
     *
     * @param float|null $infoCellule The info cellule.
     * @return Statistiques Returns this Statistiques.
     */
    public function setInfoCellule(?float $infoCellule): Statistiques {
        $this->infoCellule = $infoCellule;
        return $this;
    }

    /**
     * Set the millesime.
     *
     * @param string|null $millesime The millesime.
     * @return Statistiques Returns this Statistiques.
     */
    public function setMillesime(?string $millesime): Statistiques {
        $this->millesime = $millesime;
        return $this;
    }
}
