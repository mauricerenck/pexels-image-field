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
 * Obligations pointees.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class ObligationsPointees {

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Code obligation.
     *
     * @var string|null
     */
    private $codeObligation;

    /**
     * Date effet.
     *
     * @var DateTime|null
     */
    private $dateEffet;

    /**
     * Le.
     *
     * @var DateTime|null
     */
    private $le;

    /**
     * Par.
     *
     * @var string|null
     */
    private $par;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code client.
     *
     * @return string|null Returns the code client.
     */
    public function getCodeClient(): ?string {
        return $this->codeClient;
    }

    /**
     * Get the code obligation.
     *
     * @return string|null Returns the code obligation.
     */
    public function getCodeObligation(): ?string {
        return $this->codeObligation;
    }

    /**
     * Get the date effet.
     *
     * @return DateTime|null Returns the date effet.
     */
    public function getDateEffet(): ?DateTime {
        return $this->dateEffet;
    }

    /**
     * Get the le.
     *
     * @return DateTime|null Returns the le.
     */
    public function getLe(): ?DateTime {
        return $this->le;
    }

    /**
     * Get the par.
     *
     * @return string|null Returns the par.
     */
    public function getPar(): ?string {
        return $this->par;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return ObligationsPointees Returns this Obligations pointees.
     */
    public function setCodeClient(?string $codeClient): ObligationsPointees {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code obligation.
     *
     * @param string|null $codeObligation The code obligation.
     * @return ObligationsPointees Returns this Obligations pointees.
     */
    public function setCodeObligation(?string $codeObligation): ObligationsPointees {
        $this->codeObligation = $codeObligation;
        return $this;
    }

    /**
     * Set the date effet.
     *
     * @param DateTime|null $dateEffet The date effet.
     * @return ObligationsPointees Returns this Obligations pointees.
     */
    public function setDateEffet(?DateTime $dateEffet): ObligationsPointees {
        $this->dateEffet = $dateEffet;
        return $this;
    }

    /**
     * Set the le.
     *
     * @param DateTime|null $le The le.
     * @return ObligationsPointees Returns this Obligations pointees.
     */
    public function setLe(?DateTime $le): ObligationsPointees {
        $this->le = $le;
        return $this;
    }

    /**
     * Set the par.
     *
     * @param string|null $par The par.
     * @return ObligationsPointees Returns this Obligations pointees.
     */
    public function setPar(?string $par): ObligationsPointees {
        $this->par = $par;
        return $this;
    }
}
