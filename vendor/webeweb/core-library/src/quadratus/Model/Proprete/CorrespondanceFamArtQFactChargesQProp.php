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
 * Correspondance fam art q fact charges q prop.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class CorrespondanceFamArtQFactChargesQProp {

    /**
     * Code charge.
     *
     * @var string|null
     */
    private $codeCharge;

    /**
     * Code fam art.
     *
     * @var string|null
     */
    private $codeFamArt;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code charge.
     *
     * @return string|null Returns the code charge.
     */
    public function getCodeCharge(): ?string {
        return $this->codeCharge;
    }

    /**
     * Get the code fam art.
     *
     * @return string|null Returns the code fam art.
     */
    public function getCodeFamArt(): ?string {
        return $this->codeFamArt;
    }

    /**
     * Set the code charge.
     *
     * @param string|null $codeCharge The code charge.
     * @return CorrespondanceFamArtQFactChargesQProp Returns this Correspondance fam art q fact charges q prop.
     */
    public function setCodeCharge(?string $codeCharge): CorrespondanceFamArtQFactChargesQProp {
        $this->codeCharge = $codeCharge;
        return $this;
    }

    /**
     * Set the code fam art.
     *
     * @param string|null $codeFamArt The code fam art.
     * @return CorrespondanceFamArtQFactChargesQProp Returns this Correspondance fam art q fact charges q prop.
     */
    public function setCodeFamArt(?string $codeFamArt): CorrespondanceFamArtQFactChargesQProp {
        $this->codeFamArt = $codeFamArt;
        return $this;
    }
}
