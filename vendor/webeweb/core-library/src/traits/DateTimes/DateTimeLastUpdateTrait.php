<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\DateTimes;

use DateTime;

/**
 * Date/time last update trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\DateTimes
 */
trait DateTimeLastUpdateTrait {

    /**
     * Last update.
     *
     * @var DateTime|null
     */
    protected $lastUpdate;

    /**
     * Get the last update.
     *
     * @return DateTime|null Returns the last update.
     */
    public function getLastUpdate(): ?DateTime {
        return $this->lastUpdate;
    }

    /**
     * Set the last update.
     *
     * @param DateTime|null $lastUpdate The last update.
     * @return self Returns this instance.
     */
    public function setLastUpdate(?DateTime $lastUpdate): self {
        $this->lastUpdate = $lastUpdate;
        return $this;
    }
}
