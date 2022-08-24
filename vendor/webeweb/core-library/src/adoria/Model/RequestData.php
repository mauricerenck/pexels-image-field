<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Adoria\Model;

use DateTime;

/**
 * Request data.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Adoria\Model
 */
class RequestData {

    /**
     * Analytic code.
     *
     * @var string|null
     */
    private $analyticCode;

    /**
     * Buy date max.
     *
     * @var DateTime|null
     */
    private $buyDateMax;

    /**
     * Identification key.
     *
     * @var string|null
     */
    private $identificationKey;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the analytic code.
     *
     * @return string|null Returns the analytic code.
     */
    public function getAnalyticCode(): ?string {
        return $this->analyticCode;
    }

    /**
     * Get the buy date max.
     *
     * @return DateTime|null Returns the buy date max.
     */
    public function getBuyDateMax(): ?DateTime {
        return $this->buyDateMax;
    }

    /**
     * Get the identification key.
     *
     * @return string|null Returns the identification key.
     */
    public function getIdentificationKey(): ?string {
        return $this->identificationKey;
    }

    /**
     * Set the analytic code.
     *
     * @param string|null $analyticCode The analytic code.
     * @return RequestData Returns this request data.
     */
    public function setAnalyticCode(?string $analyticCode): RequestData {
        $this->analyticCode = $analyticCode;
        return $this;
    }

    /**
     * Set the buy date max.
     *
     * @param DateTime|null $buyDateMax The buy date max.
     * @return RequestData Returns this request data.
     */
    public function setBuyDateMax(?DateTime $buyDateMax): RequestData {
        $this->buyDateMax = $buyDateMax;
        return $this;
    }

    /**
     * Set the identification key.
     *
     * @param string|null $identificationKey The identification key.
     * @return RequestData Returns this request data.
     */
    public function setIdentificationKey(?string $identificationKey): RequestData {
        $this->identificationKey = $identificationKey;
        return $this;
    }
}
