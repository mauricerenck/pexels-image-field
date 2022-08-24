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
 * Date/time started on trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\DateTimes
 */
trait DateTimeStartedOnTrait {

    /**
     * Started on.
     *
     * @var DateTime|null
     */
    protected $startedOn;

    /**
     * Get the started on.
     *
     * @return DateTime|null Returns the started on.
     */
    public function getStartedOn(): ?DateTime {
        return $this->startedOn;
    }

    /**
     * Set the started on.
     *
     * @param DateTime|null $startedOn The started on.
     * @return self Returns this instance.
     */
    public function setStartedOn(?DateTime $startedOn): self {
        $this->startedOn = $startedOn;
        return $this;
    }
}
