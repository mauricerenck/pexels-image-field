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
 * Libellesi paie.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QPaie
 */
class LibellesiPaie {

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Intitule.
     *
     * @var string|null
     */
    private $intitule;

    /**
     * Intitule specifi paie.
     *
     * @var bool|null
     */
    private $intituleSpecifiPaie;

    /**
     * Num ligne.
     *
     * @var int|null
     */
    private $numLigne;

    /**
     * Visiblei paie.
     *
     * @var string|null
     */
    private $visibleiPaie;

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
     * Get the intitule.
     *
     * @return string|null Returns the intitule.
     */
    public function getIntitule(): ?string {
        return $this->intitule;
    }

    /**
     * Get the intitule specifi paie.
     *
     * @return bool|null Returns the intitule specifi paie.
     */
    public function getIntituleSpecifiPaie(): ?bool {
        return $this->intituleSpecifiPaie;
    }

    /**
     * Get the num ligne.
     *
     * @return int|null Returns the num ligne.
     */
    public function getNumLigne(): ?int {
        return $this->numLigne;
    }

    /**
     * Get the visiblei paie.
     *
     * @return string|null Returns the visiblei paie.
     */
    public function getVisibleiPaie(): ?string {
        return $this->visibleiPaie;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return LibellesiPaie Returns this Libellesi paie.
     */
    public function setCode(?string $code): LibellesiPaie {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string|null $intitule The intitule.
     * @return LibellesiPaie Returns this Libellesi paie.
     */
    public function setIntitule(?string $intitule): LibellesiPaie {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the intitule specifi paie.
     *
     * @param bool|null $intituleSpecifiPaie The intitule specifi paie.
     * @return LibellesiPaie Returns this Libellesi paie.
     */
    public function setIntituleSpecifiPaie(?bool $intituleSpecifiPaie): LibellesiPaie {
        $this->intituleSpecifiPaie = $intituleSpecifiPaie;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int|null $numLigne The num ligne.
     * @return LibellesiPaie Returns this Libellesi paie.
     */
    public function setNumLigne(?int $numLigne): LibellesiPaie {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the visiblei paie.
     *
     * @param string|null $visibleiPaie The visiblei paie.
     * @return LibellesiPaie Returns this Libellesi paie.
     */
    public function setVisibleiPaie(?string $visibleiPaie): LibellesiPaie {
        $this->visibleiPaie = $visibleiPaie;
        return $this;
    }
}
