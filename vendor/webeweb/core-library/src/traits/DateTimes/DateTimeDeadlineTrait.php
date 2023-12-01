<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Traits\DateTimes;

use DateTime;

/**
 * Date/time deadline trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\DateTimes
 */
trait DateTimeDeadlineTrait {

    /**
     * Deadline.
     *
     * @var DateTime|null
     */
    protected $deadline;

    /**
     * Get the deadline.
     *
     * @return DateTime|null Returns the deadline.
     */
    public function getDeadline(): ?DateTime {
        return $this->deadline;
    }

    /**
     * Set the deadline.
     *
     * @param DateTime|null $deadline The deadline.
     * @return self Returns this instance.
     */
    public function setDeadline(?DateTime $deadline): self {
        $this->deadline = $deadline;
        return $this;
    }
}
