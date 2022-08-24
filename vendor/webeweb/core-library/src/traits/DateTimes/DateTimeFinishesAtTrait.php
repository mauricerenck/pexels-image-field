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
 * Date/time finishes at trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\DateTimes
 */
trait DateTimeFinishesAtTrait {

    /**
     * Finishes at.
     *
     * @var DateTime|null
     */
    protected $finishesAt;

    /**
     * Get the finishes at.
     *
     * @return DateTime|null Returns the finishes at.
     */
    public function getFinishesAt(): ?DateTime {
        return $this->finishesAt;
    }

    /**
     * Set the finishes at.
     *
     * @param DateTime|null $finishesAt The finishes at.
     * @return self Returns this instance.
     */
    public function setFinishesAt(?DateTime $finishesAt): self {
        $this->finishesAt = $finishesAt;
        return $this;
    }
}
