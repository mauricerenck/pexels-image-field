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

use WBW\Library\Common\Traits\Integers\IntegerIdTrait;

/**
 * Delivery days production.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Model
 */
class DeliveryDaysProduction {

    use IntegerIdTrait {
        setId as public;
    }

    /**
     * Days.
     *
     * @var mixed[]|null
     */
    protected $days;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the days.
     *
     * @return mixed[]|null Returns the days.
     */
    public function getDays(): ?array {
        return $this->days;
    }

    /**
     * Set the days.
     *
     * @param mixed[]|null $days The days.
     * @return DeliveryDaysProduction Returns this delivery days production.
     */
    public function setDays(?array $days): DeliveryDaysProduction {
        $this->days = $days;
        return $this;
    }
}
