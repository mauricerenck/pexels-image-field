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
 * Groupe lignes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class GroupeLignes {

    /**
     * Code element.
     *
     * @var string|null
     */
    private $codeElement;

    /**
     * Groupe.
     *
     * @var string|null
     */
    private $groupe;

    /**
     * Ordre.
     *
     * @var int|null
     */
    private $ordre;

    /**
     * Type element.
     *
     * @var string|null
     */
    private $typeElement;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code element.
     *
     * @return string|null Returns the code element.
     */
    public function getCodeElement(): ?string {
        return $this->codeElement;
    }

    /**
     * Get the groupe.
     *
     * @return string|null Returns the groupe.
     */
    public function getGroupe(): ?string {
        return $this->groupe;
    }

    /**
     * Get the ordre.
     *
     * @return int|null Returns the ordre.
     */
    public function getOrdre(): ?int {
        return $this->ordre;
    }

    /**
     * Get the type element.
     *
     * @return string|null Returns the type element.
     */
    public function getTypeElement(): ?string {
        return $this->typeElement;
    }

    /**
     * Set the code element.
     *
     * @param string|null $codeElement The code element.
     * @return GroupeLignes Returns this Groupe lignes.
     */
    public function setCodeElement(?string $codeElement): GroupeLignes {
        $this->codeElement = $codeElement;
        return $this;
    }

    /**
     * Set the groupe.
     *
     * @param string|null $groupe The groupe.
     * @return GroupeLignes Returns this Groupe lignes.
     */
    public function setGroupe(?string $groupe): GroupeLignes {
        $this->groupe = $groupe;
        return $this;
    }

    /**
     * Set the ordre.
     *
     * @param int|null $ordre The ordre.
     * @return GroupeLignes Returns this Groupe lignes.
     */
    public function setOrdre(?int $ordre): GroupeLignes {
        $this->ordre = $ordre;
        return $this;
    }

    /**
     * Set the type element.
     *
     * @param string|null $typeElement The type element.
     * @return GroupeLignes Returns this Groupe lignes.
     */
    public function setTypeElement(?string $typeElement): GroupeLignes {
        $this->typeElement = $typeElement;
        return $this;
    }
}
