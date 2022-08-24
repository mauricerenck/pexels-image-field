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
 * Date/time ended at trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\DateTimes
 */
trait DateTimeEndedAtTrait {

    /**
     * Ended at.
     *
     * @var DateTime|null
     */
    protected $endedAt;

    /**
     * Get the ended at.
     *
     * @return DateTime|null Returns the ended at.
     */
    public function getEndedAt(): ?DateTime {
        return $this->endedAt;
    }

    /**
     * Set the ended at.
     *
     * @param DateTime|null $endedAt The ended at.
     * @return self Returns this instance.
     */
    public function setEndedAt(?DateTime $endedAt): self {
        $this->endedAt = $endedAt;
        return $this;
    }
}
