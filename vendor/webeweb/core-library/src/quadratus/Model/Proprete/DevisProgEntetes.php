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
 * Devis prog entetes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class DevisProgEntetes {

    /**
     * Designation.
     *
     * @var string|null
     */
    private $designation;

    /**
     * Num devis.
     *
     * @var string|null
     */
    private $numDevis;

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
     * Get the num devis.
     *
     * @return string|null Returns the num devis.
     */
    public function getNumDevis(): ?string {
        return $this->numDevis;
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
     * @return DevisProgEntetes Returns this Devis prog entetes.
     */
    public function setDesignation(?string $designation): DevisProgEntetes {
        $this->designation = $designation;
        return $this;
    }

    /**
     * Set the num devis.
     *
     * @param string|null $numDevis The num devis.
     * @return DevisProgEntetes Returns this Devis prog entetes.
     */
    public function setNumDevis(?string $numDevis): DevisProgEntetes {
        $this->numDevis = $numDevis;
        return $this;
    }

    /**
     * Set the num programme.
     *
     * @param int|null $numProgramme The num programme.
     * @return DevisProgEntetes Returns this Devis prog entetes.
     */
    public function setNumProgramme(?int $numProgramme): DevisProgEntetes {
        $this->numProgramme = $numProgramme;
        return $this;
    }
}
