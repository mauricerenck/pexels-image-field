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
 * Automatic stock transfer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Model
 */
class AutomaticStockTransfer {

    /**
     * From consumption.
     *
     * @var bool|null
     */
    protected $fromConsumption;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the from consumption.
     *
     * @return bool|null Returns the from consumption.
     */
    public function getFromConsumption(): ?bool {
        return $this->fromConsumption;
    }

    /**
     * Set the from consumption.
     *
     * @param bool|null $fromConsumption The from consumption.
     * @return AutomaticStockTransfer Returns this automatic stock transfer.
     */
    public function setFromConsumption(?bool $fromConsumption): AutomaticStockTransfer {
        $this->fromConsumption = $fromConsumption;
        return $this;
    }
}
