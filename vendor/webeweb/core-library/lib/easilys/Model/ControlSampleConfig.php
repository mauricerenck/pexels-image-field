<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Easilys\Model;

/**
 * Control sample config.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Model
 */
class ControlSampleConfig {

    /**
     * Amount for consumption site.
     *
     * @var string|null
     */
    protected $amountForConsumptionSite;

    /**
     * Amount for production site.
     *
     * @var string|null
     */
    protected $amountForProductionSite;

    /**
     * Is control sample active.
     *
     * @var bool|null
     */
    protected $isControlSampleActive;

    /**
     * Is control sample billable.
     *
     * @var bool|null
     */
    protected $isControlSampleBillable;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the amount for consumption site.
     *
     * @return string|null Returns the amount for consumption site.
     */
    public function getAmountForConsumptionSite(): ?string {
        return $this->amountForConsumptionSite;
    }

    /**
     * Get the amount for production site.
     *
     * @return string|null Returns the amount for production site.
     */
    public function getAmountForProductionSite(): ?string {
        return $this->amountForProductionSite;
    }

    /**
     * Get the is control sample active.
     *
     * @return bool|null Returns the is control sample active.
     */
    public function getIsControlSampleActive(): ?bool {
        return $this->isControlSampleActive;
    }

    /**
     * Get the is control sample billable.
     *
     * @return bool|null Returns the is control sample billable.
     */
    public function getIsControlSampleBillable(): ?bool {
        return $this->isControlSampleBillable;
    }

    /**
     * Set the amount for consumption site.
     *
     * @param string|null $amountForConsumptionSite The amount for consumption site.
     * @return ControlSampleConfig Returns this control sample config.
     */
    public function setAmountForConsumptionSite(?string $amountForConsumptionSite): ControlSampleConfig {
        $this->amountForConsumptionSite = $amountForConsumptionSite;
        return $this;
    }

    /**
     * Set the amount for production site.
     *
     * @param string|null $amountForProductionSite The amount for production site.
     * @return ControlSampleConfig Returns this control sample config.
     */
    public function setAmountForProductionSite(?string $amountForProductionSite): ControlSampleConfig {
        $this->amountForProductionSite = $amountForProductionSite;
        return $this;
    }

    /**
     * Set the cis control sample active.
     *
     * @param bool|null $isControlSampleActive The is control sample active.
     * @return ControlSampleConfig
     */
    public function setIsControlSampleActive(?bool $isControlSampleActive): ControlSampleConfig {
        $this->isControlSampleActive = $isControlSampleActive;
        return $this;
    }

    /**
     * Set the is control sample billable.
     *
     * @param bool|null $isControlSampleBillable The is control sample billable.
     * @return ControlSampleConfig Returns this control sample config.
     */
    public function setIsControlSampleBillable(?bool $isControlSampleBillable): ControlSampleConfig {
        $this->isControlSampleBillable = $isControlSampleBillable;
        return $this;
    }
}
