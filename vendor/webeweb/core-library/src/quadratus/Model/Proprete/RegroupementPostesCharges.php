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
 * Regroupement postes charges.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class RegroupementPostesCharges {

    /**
     * Code charge.
     *
     * @var string|null
     */
    private $codeCharge;

    /**
     * Code reg charge.
     *
     * @var string|null
     */
    private $codeRegCharge;

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
     * Get the code reg charge.
     *
     * @return string|null Returns the code reg charge.
     */
    public function getCodeRegCharge(): ?string {
        return $this->codeRegCharge;
    }

    /**
     * Set the code charge.
     *
     * @param string|null $codeCharge The code charge.
     * @return RegroupementPostesCharges Returns this Regroupement postes charges.
     */
    public function setCodeCharge(?string $codeCharge): RegroupementPostesCharges {
        $this->codeCharge = $codeCharge;
        return $this;
    }

    /**
     * Set the code reg charge.
     *
     * @param string|null $codeRegCharge The code reg charge.
     * @return RegroupementPostesCharges Returns this Regroupement postes charges.
     */
    public function setCodeRegCharge(?string $codeRegCharge): RegroupementPostesCharges {
        $this->codeRegCharge = $codeRegCharge;
        return $this;
    }
}
