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
 * Qualifiants.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class Qualifiants {

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Colonne.
     *
     * @var int|null
     */
    private $colonne;

    /**
     * Visu appels.
     *
     * @var bool|null
     */
    private $visuAppels;

    /**
     * Visu documents.
     *
     * @var bool|null
     */
    private $visuDocuments;

    /**
     * Visu evenements.
     *
     * @var bool|null
     */
    private $visuEvenements;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code.
     *
     * @return string|null Returns the code.
     */
    public function getCode(): ?string {
        return $this->code;
    }

    /**
     * Get the colonne.
     *
     * @return int|null Returns the colonne.
     */
    public function getColonne(): ?int {
        return $this->colonne;
    }

    /**
     * Get the visu appels.
     *
     * @return bool|null Returns the visu appels.
     */
    public function getVisuAppels(): ?bool {
        return $this->visuAppels;
    }

    /**
     * Get the visu documents.
     *
     * @return bool|null Returns the visu documents.
     */
    public function getVisuDocuments(): ?bool {
        return $this->visuDocuments;
    }

    /**
     * Get the visu evenements.
     *
     * @return bool|null Returns the visu evenements.
     */
    public function getVisuEvenements(): ?bool {
        return $this->visuEvenements;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return Qualifiants Returns this Qualifiants.
     */
    public function setCode(?string $code): Qualifiants {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the colonne.
     *
     * @param int|null $colonne The colonne.
     * @return Qualifiants Returns this Qualifiants.
     */
    public function setColonne(?int $colonne): Qualifiants {
        $this->colonne = $colonne;
        return $this;
    }

    /**
     * Set the visu appels.
     *
     * @param bool|null $visuAppels The visu appels.
     * @return Qualifiants Returns this Qualifiants.
     */
    public function setVisuAppels(?bool $visuAppels): Qualifiants {
        $this->visuAppels = $visuAppels;
        return $this;
    }

    /**
     * Set the visu documents.
     *
     * @param bool|null $visuDocuments The visu documents.
     * @return Qualifiants Returns this Qualifiants.
     */
    public function setVisuDocuments(?bool $visuDocuments): Qualifiants {
        $this->visuDocuments = $visuDocuments;
        return $this;
    }

    /**
     * Set the visu evenements.
     *
     * @param bool|null $visuEvenements The visu evenements.
     * @return Qualifiants Returns this Qualifiants.
     */
    public function setVisuEvenements(?bool $visuEvenements): Qualifiants {
        $this->visuEvenements = $visuEvenements;
        return $this;
    }
}
