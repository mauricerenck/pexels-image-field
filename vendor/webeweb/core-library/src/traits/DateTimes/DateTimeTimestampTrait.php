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
 * Date/time timestamp trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\DateTimes
 */
trait DateTimeTimestampTrait {

    /**
     * Timestamp.
     *
     * @var DateTime|null
     */
    protected $timestamp;

    /**
     * Get the timestamp.
     *
     * @return DateTime|null Returns the timestamp.
     */
    public function getTimestamp(): ?DateTime {
        return $this->timestamp;
    }

    /**
     * Set the timestamp.
     *
     * @param DateTime|null $timestamp The timestamp.
     * @return self Returns this instance.
     */
    public function setTimestamp(?DateTime $timestamp): self {
        $this->timestamp = $timestamp;
        return $this;
    }
}
