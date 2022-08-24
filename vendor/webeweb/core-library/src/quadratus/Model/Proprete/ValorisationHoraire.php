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
 * Valorisation horaire.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\Proprete
 */
class ValorisationHoraire {

    /**
     * Cout horaire.
     *
     * @var float|null
     */
    private $coutHoraire;

    /**
     * Qualification.
     *
     * @var string|null
     */
    private $qualification;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the cout horaire.
     *
     * @return float|null Returns the cout horaire.
     */
    public function getCoutHoraire(): ?float {
        return $this->coutHoraire;
    }

    /**
     * Get the qualification.
     *
     * @return string|null Returns the qualification.
     */
    public function getQualification(): ?string {
        return $this->qualification;
    }

    /**
     * Set the cout horaire.
     *
     * @param float|null $coutHoraire The cout horaire.
     * @return ValorisationHoraire Returns this Valorisation horaire.
     */
    public function setCoutHoraire(?float $coutHoraire): ValorisationHoraire {
        $this->coutHoraire = $coutHoraire;
        return $this;
    }

    /**
     * Set the qualification.
     *
     * @param string|null $qualification The qualification.
     * @return ValorisationHoraire Returns this Valorisation horaire.
     */
    public function setQualification(?string $qualification): ValorisationHoraire {
        $this->qualification = $qualification;
        return $this;
    }
}
