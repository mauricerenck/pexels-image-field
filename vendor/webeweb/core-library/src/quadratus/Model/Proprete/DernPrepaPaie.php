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

use DateTime;

/**
 * Dern prepa paie.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class DernPrepaPaie {

    /**
     * Alerte rouge.
     *
     * @var bool|null
     */
    private $alerteRouge;

    /**
     * Code employe.
     *
     * @var string|null
     */
    private $codeEmploye;

    /**
     * Designation.
     *
     * @var string|null
     */
    private $designation;

    /**
     * Dt prepa.
     *
     * @var DateTime|null
     */
    private $dtPrepa;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the alerte rouge.
     *
     * @return bool|null Returns the alerte rouge.
     */
    public function getAlerteRouge(): ?bool {
        return $this->alerteRouge;
    }

    /**
     * Get the code employe.
     *
     * @return string|null Returns the code employe.
     */
    public function getCodeEmploye(): ?string {
        return $this->codeEmploye;
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
     * Get the dt prepa.
     *
     * @return DateTime|null Returns the dt prepa.
     */
    public function getDtPrepa(): ?DateTime {
        return $this->dtPrepa;
    }

    /**
     * Get the periode.
     *
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode(): ?DateTime {
        return $this->periode;
    }

    /**
     * Set the alerte rouge.
     *
     * @param bool|null $alerteRouge The alerte rouge.
     * @return DernPrepaPaie Returns this Dern prepa paie.
     */
    public function setAlerteRouge(?bool $alerteRouge): DernPrepaPaie {
        $this->alerteRouge = $alerteRouge;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string|null $codeEmploye The code employe.
     * @return DernPrepaPaie Returns this Dern prepa paie.
     */
    public function setCodeEmploye(?string $codeEmploye): DernPrepaPaie {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the designation.
     *
     * @param string|null $designation The designation.
     * @return DernPrepaPaie Returns this Dern prepa paie.
     */
    public function setDesignation(?string $designation): DernPrepaPaie {
        $this->designation = $designation;
        return $this;
    }

    /**
     * Set the dt prepa.
     *
     * @param DateTime|null $dtPrepa The dt prepa.
     * @return DernPrepaPaie Returns this Dern prepa paie.
     */
    public function setDtPrepa(?DateTime $dtPrepa): DernPrepaPaie {
        $this->dtPrepa = $dtPrepa;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     * @return DernPrepaPaie Returns this Dern prepa paie.
     */
    public function setPeriode(?DateTime $periode): DernPrepaPaie {
        $this->periode = $periode;
        return $this;
    }
}
