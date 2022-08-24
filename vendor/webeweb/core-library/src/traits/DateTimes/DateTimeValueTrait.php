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
 * Date/time value trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\DateTimes
 */
trait DateTimeValueTrait {

    /**
     * Value.
     *
     * @var DateTime|null
     */
    protected $value;

    /**
     * Get the value.
     *
     * @return DateTime|null Returns the value.
     */
    public function getValue(): ?DateTime {
        return $this->value;
    }

    /**
     * Set the value.
     *
     * @param DateTime|null $value The value.
     * @return self Returns this instance.
     */
    public function setValue(?DateTime $value): self {
        $this->value = $value;
        return $this;
    }
}
