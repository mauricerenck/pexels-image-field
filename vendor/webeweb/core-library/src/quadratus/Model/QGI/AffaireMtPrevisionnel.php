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

use DateTime;

/**
 * Affaire mt previsionnel.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class AffaireMtPrevisionnel {

    /**
     * Code affaire.
     *
     * @var string|null
     */
    private $codeAffaire;

    /**
     * Code avenant.
     *
     * @var string|null
     */
    private $codeAvenant;

    /**
     * Code phase.
     *
     * @var string|null
     */
    private $codePhase;

    /**
     * Date prev.
     *
     * @var DateTime|null
     */
    private $datePrev;

    /**
     * Mt phase.
     *
     * @var float|null
     */
    private $mtPhase;

    /**
     * Mt prev.
     *
     * @var float|null
     */
    private $mtPrev;

    /**
     * Prct phase.
     *
     * @var float|null
     */
    private $prctPhase;

    /**
     * Type.
     *
     * @var string|null
     */
    private $type;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code affaire.
     *
     * @return string|null Returns the code affaire.
     */
    public function getCodeAffaire(): ?string {
        return $this->codeAffaire;
    }

    /**
     * Get the code avenant.
     *
     * @return string|null Returns the code avenant.
     */
    public function getCodeAvenant(): ?string {
        return $this->codeAvenant;
    }

    /**
     * Get the code phase.
     *
     * @return string|null Returns the code phase.
     */
    public function getCodePhase(): ?string {
        return $this->codePhase;
    }

    /**
     * Get the date prev.
     *
     * @return DateTime|null Returns the date prev.
     */
    public function getDatePrev(): ?DateTime {
        return $this->datePrev;
    }

    /**
     * Get the mt phase.
     *
     * @return float|null Returns the mt phase.
     */
    public function getMtPhase(): ?float {
        return $this->mtPhase;
    }

    /**
     * Get the mt prev.
     *
     * @return float|null Returns the mt prev.
     */
    public function getMtPrev(): ?float {
        return $this->mtPrev;
    }

    /**
     * Get the prct phase.
     *
     * @return float|null Returns the prct phase.
     */
    public function getPrctPhase(): ?float {
        return $this->prctPhase;
    }

    /**
     * Get the type.
     *
     * @return string|null Returns the type.
     */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Set the code affaire.
     *
     * @param string|null $codeAffaire The code affaire.
     * @return AffaireMtPrevisionnel Returns this Affaire mt previsionnel.
     */
    public function setCodeAffaire(?string $codeAffaire): AffaireMtPrevisionnel {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code avenant.
     *
     * @param string|null $codeAvenant The code avenant.
     * @return AffaireMtPrevisionnel Returns this Affaire mt previsionnel.
     */
    public function setCodeAvenant(?string $codeAvenant): AffaireMtPrevisionnel {
        $this->codeAvenant = $codeAvenant;
        return $this;
    }

    /**
     * Set the code phase.
     *
     * @param string|null $codePhase The code phase.
     * @return AffaireMtPrevisionnel Returns this Affaire mt previsionnel.
     */
    public function setCodePhase(?string $codePhase): AffaireMtPrevisionnel {
        $this->codePhase = $codePhase;
        return $this;
    }

    /**
     * Set the date prev.
     *
     * @param DateTime|null $datePrev The date prev.
     * @return AffaireMtPrevisionnel Returns this Affaire mt previsionnel.
     */
    public function setDatePrev(?DateTime $datePrev): AffaireMtPrevisionnel {
        $this->datePrev = $datePrev;
        return $this;
    }

    /**
     * Set the mt phase.
     *
     * @param float|null $mtPhase The mt phase.
     * @return AffaireMtPrevisionnel Returns this Affaire mt previsionnel.
     */
    public function setMtPhase(?float $mtPhase): AffaireMtPrevisionnel {
        $this->mtPhase = $mtPhase;
        return $this;
    }

    /**
     * Set the mt prev.
     *
     * @param float|null $mtPrev The mt prev.
     * @return AffaireMtPrevisionnel Returns this Affaire mt previsionnel.
     */
    public function setMtPrev(?float $mtPrev): AffaireMtPrevisionnel {
        $this->mtPrev = $mtPrev;
        return $this;
    }

    /**
     * Set the prct phase.
     *
     * @param float|null $prctPhase The prct phase.
     * @return AffaireMtPrevisionnel Returns this Affaire mt previsionnel.
     */
    public function setPrctPhase(?float $prctPhase): AffaireMtPrevisionnel {
        $this->prctPhase = $prctPhase;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return AffaireMtPrevisionnel Returns this Affaire mt previsionnel.
     */
    public function setType(?string $type): AffaireMtPrevisionnel {
        $this->type = $type;
        return $this;
    }
}
