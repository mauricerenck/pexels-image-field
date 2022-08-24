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
 * Date/time ended on trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\DateTimes
 */
trait DateTimeEndedOnTrait {

    /**
     * Ended on.
     *
     * @var DateTime|null
     */
    protected $endedOn;

    /**
     * Get the ended on.
     *
     * @return DateTime|null Returns the ended on.
     */
    public function getEndedOn(): ?DateTime {
        return $this->endedOn;
    }

    /**
     * Set the ended on.
     *
     * @param DateTime|null $endedOn The ended on.
     * @return self Returns this instance.
     */
    public function setEndedOn(?DateTime $endedOn): self {
        $this->endedOn = $endedOn;
        return $this;
    }
}
