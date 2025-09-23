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
 * Delivery weekday.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Model
 */
class DeliveryWeekday {

    /**
     * Weekday.
     *
     * @var string|null
     */
    protected $weekday;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the weekday.
     *
     * @return string|null Returns the weekday.
     */
    public function getWeekday(): ?string {
        return $this->weekday;
    }

    /**
     * Set the weekday.
     *
     * @param string|null $weekday The weekday.
     * @return DeliveryWeekday Returns this delivery weekday.
     */
    public function setWeekday(?string $weekday): DeliveryWeekday {
        $this->weekday = $weekday;
        return $this;
    }
}
