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
 * Date/time date trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\DateTimes
 */
trait DateTimeDateTrait {

    /**
     * Date.
     *
     * @var DateTime|null
     */
    protected $date;

    /**
     * Get the date.
     *
     * @return DateTime|null Returns the date.
     */
    public function getDate(): ?DateTime {
        return $this->date;
    }

    /**
     * Set the date.
     *
     * @param DateTime|null $date The date.
     * @return self Returns this instance.
     */
    public function setDate(?DateTime $date): self {
        $this->date = $date;
        return $this;
    }
}
