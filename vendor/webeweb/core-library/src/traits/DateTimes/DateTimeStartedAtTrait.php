<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\DateTimes;

use DateTime;

/**
 * Date/time started at trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\DateTimes
 */
trait DateTimeStartedAtTrait {

    /**
     * Started at.
     *
     * @var DateTime|null
     */
    protected $startedAt;

    /**
     * Get the started at.
     *
     * @return DateTime|null Returns the started at.
     */
    public function getStartedAt(): ?DateTime {
        return $this->startedAt;
    }

    /**
     * Set the started at.
     *
     * @param DateTime|null $startedAt The started at.
     * @return self Returns this instance.
     */
    public function setStartedAt(?DateTime $startedAt): self {
        $this->startedAt = $startedAt;
        return $this;
    }
}
