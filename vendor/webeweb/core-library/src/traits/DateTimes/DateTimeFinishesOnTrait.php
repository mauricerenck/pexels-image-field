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
 * Date/time finishes on trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\DateTimes
 */
trait DateTimeFinishesOnTrait {

    /**
     * Finishes on.
     *
     * @var DateTime|null
     */
    protected $finishesOn;

    /**
     * Get the finishes on.
     *
     * @return DateTime|null Returns the finishes on.
     */
    public function getFinishesOn(): ?DateTime {
        return $this->finishesOn;
    }

    /**
     * Set the finishes on.
     *
     * @param DateTime|null $finishesOn The finishes on.
     * @return self Returns this instance.
     */
    public function setFinishesOn(?DateTime $finishesOn): self {
        $this->finishesOn = $finishesOn;
        return $this;
    }
}
