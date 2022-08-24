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
 * Prog type entetes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class ProgTypeEntetes {

    /**
     * Designation.
     *
     * @var string|null
     */
    private $designation;

    /**
     * Num programme.
     *
     * @var int|null
     */
    private $numProgramme;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the designation.
     *
     * @return string|null Returns the designation.
     */
    public function getDesignation(): ?string {
        return $this->designation;
    }

    /**
     * Get the num programme.
     *
     * @return int|null Returns the num programme.
     */
    public function getNumProgramme(): ?int {
        return $this->numProgramme;
    }

    /**
     * Set the designation.
     *
     * @param string|null $designation The designation.
     * @return ProgTypeEntetes Returns this Prog type entetes.
     */
    public function setDesignation(?string $designation): ProgTypeEntetes {
        $this->designation = $designation;
        return $this;
    }

    /**
     * Set the num programme.
     *
     * @param int|null $numProgramme The num programme.
     * @return ProgTypeEntetes Returns this Prog type entetes.
     */
    public function setNumProgramme(?int $numProgramme): ProgTypeEntetes {
        $this->numProgramme = $numProgramme;
        return $this;
    }
}
