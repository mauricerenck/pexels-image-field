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
 * Date/time birth date trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Traits\DateTimes
 */
trait DateTimeBirthDateTrait {

    /**
     * Birth date.
     *
     * @var DateTime|null
     */
    protected $birthDate;

    /**
     * Get the birth date.
     *
     * @return DateTime|null Returns the birth date.
     */
    public function getBirthDate(): ?DateTime {
        return $this->birthDate;
    }

    /**
     * Set the birth date.
     *
     * @param DateTime|null $birthDate The birth date.
     * @return self Returns this instance.
     */
    public function setBirthDate(?DateTime $birthDate): self {
        $this->birthDate = $birthDate;
        return $this;
    }
}
